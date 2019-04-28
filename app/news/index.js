import Vue from 'vue';
import VueRouter from 'vue-router'
import App from './App.vue'
import NewsList from './News.vue'

const routes = [
  {
    path: '/',
    component: NewsList,
    props: {
      single: false,
    }
  },
  {
    path: '/post/:id',
    component: NewsList,
    props: {
      single: true,
    }
  }
]
Vue.use(VueRouter)

const router = new VueRouter({
  routes
});

const vm = new Vue({
  el: '#app-root',
  router,
  data: {
    foo: 'Hello',
  },
  // import Vue的語法預設是載入runtime only的build
  // 所以不能用template這個option
  render(h) {
    return h(App, null, []);
  }
});
