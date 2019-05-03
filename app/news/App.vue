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
        pageName: 'news',
        pageContent: '',
      }
    },
    components: {
      TabView
    },
    mounted() {
      axios.get('/wp-json/wp/v2/pages', {
        params: {
          slug: 'news',
        }
      }).then((response) => {
        this.pageContent = response.data[0].content.rendered
      }).catch((error) => {
        console.log('Failed to fetch page content')
        console.log(error)
      })
      axios.get('/wp-json/wp/v2/categories', {
        params: {
          orderby: 'slug'
        }
      }).then((response) => {
        this.tabList = response.data.filter((cat) => 
          cat.slug !== 'uncategorized'
        ).map(cat => ({
          id: cat.id,
          name: cat.name
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
