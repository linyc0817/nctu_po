import Vue from 'vue';
import VueRouter from 'vue-router'
import App from './App.vue'
import SinglePage from './SinglePage.vue'

const routes = [
  {
    path: '/',
    component: SinglePage,
    props: {
      single: false,
    }
  },
  {
    path: '/:pageid',
    component: SinglePage,
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
