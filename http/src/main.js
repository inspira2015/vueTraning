import Vue from 'vue'
import App from './App.vue'
// Added http client $http
import VueResource from 'vue-resource';

Vue.use(VueResource);

Vue.http.options.root = 'https://vuejs-app-ed382.firebaseio.com/data.json';

new Vue({
  el: '#app',
  render: h => h(App)
})
