<template>
  <TabView v-bind:tab-list="tabList" v-bind:page-name="pageName" v-bind:page-content="pageContent">
    <router-view></router-view>
  </TabView>
</template>

<script>
  import axios from 'axios'
  import TabView from '../common/js/TabView.vue'
  export default {
    data() {
      return {
        tabList: [],
        pageName: 'intro',
        pageContent: '',
      }
    },
    components: {
      TabView
    },
    mounted() {
      axios.get('/wp-json/wp/v2/pages', {
        params: {
          slug: 'intro',
        }
      }).then((response) => {
        this.pageContent = response.data[0].content.rendered
        return axios.get('/wp-json/wp/v2/pages', {
          params: {
            parent: response.data[0].id,
            orderby: 'slug',
            order: 'asc'
          }
        })
      }).then((response) => {
        console.log(response.data);
        this.tabList = response.data.map((page) => ({
          id: page.id,
          name: page.title.rendered,
        }))
        if(this.tabList.length > 0)
          this.currentTab = this.tabList[0].id
        console.log(this.tabList)
      }).catch((error) => {
        console.log('Fetch tab list failed')
        console.log(error)
      })

    }
  }
</script>

<style lang="scss" scoped>
</style>
