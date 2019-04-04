import Vue from 'vue';
import App from './App.vue'

const vm = new Vue({
  el: '#app-root',
  data: {
    foo: 'Hello',
  },
  // import Vue的語法預設是載入runtime only的build
  // 所以不能用template這個option
  render(h) {
    return h(App, null, []);
  }
});
