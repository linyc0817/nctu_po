<template>
  <TabView v-bind:tab-list="tabList" v-bind:page-name="pageName">
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
      }
    },
    components: {
      TabView
    },
    mounted() {
      axios.get('/wp-json/wp/v2/pages', {
        params: {
          orderby: 'slug',
          slug: 'intro',
        }
      }).then((response) => {
        this.tabList=[{id:1,name:'Hi'}]
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
