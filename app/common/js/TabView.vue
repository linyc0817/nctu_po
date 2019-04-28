<template>
  <div class="container">
    <div class="sidebar-wrapper">
      <div class="sidebar">
        <div v-if="pageContent.length !== 0" class="page-content" v-html="pageContent">
        </div>
        <div v-else class="page-content">No content</div>
        <ul>
          <template v-for="cat in tabList">
            <li v-bind:class="{'current-item': cat.id == currentTab}">
              {{ cat.name }}
            </li>
          </template>
        </ul>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="content">
        <slot></slot>
      </div>
    </div>
  </div>
</template>

<script>
  import axios from 'axios'
  export default {
    props: ['tab-list', 'page-name'],
    data() {
      return {
        pageContent: '',
        currentTab: 0,
      }
    },
    mounted() {
      axios.get('/wp-json/wp/v2/pages', {
          params: {
            slug: this.pageName
          }
        }
      ).then((response) => {
        if(response.data.length > 0)
          this.pageContent = response.data[0].content.rendered
      }).catch((error) => {
        console.log('Fetch page content failed')
        console.log(error)
      })
    },
  }
</script>

<style lang="scss" scoped>
@import "../../../css/_variables.scss";
.container {
  height: 100%;
  display: flex;
}
.sidebar-wrapper {
  height: 100%;
  flex: 0 0 24rem;
  background-color: rgba($page-sidebar-background-color, 0.7);
  transform-origin: 0 0;
  transform: skewX(-15deg);
}
.sidebar {
  height: 100%;
  padding-left: 2rem;
  transform-origin: 0 0;
  transform: skewX(15deg);
  display: flex;
  flex-direction: column;
  .page-content {
    flex: 1 0 auto;
  }
  ul {
    font-size: 1.2rem;
    flex: 0 0 auto;
    margin: 0;
    padding-bottom: 3rem;
    padding-top: 1rem;
    padding-left: 0;
    li {
      letter-spacing: 0.2rem;
      margin-top: 0.7rem;
      &.current-item {
        color: $main-font-color;
      }
    }
  }
  .page-content {
    font-size: 1rem;
    letter-spacing: 0.2rem;
    width: 14rem;
  }
}
.content-wrapper {
  height: 100%;
  // 這個寬度超出範圍的部分是被main-container的overflow-x屬性藏起來的
  flex: 1 0 100vw;
  position: relative;
  left: 2rem;
  background-color: $page-content-background-color;
  transform-origin: 0 0;
  transform: skewX(-15deg);
  .content {
    transform-origin: 0 0;
    transform: skewX(15deg);
  }
}
</style>
