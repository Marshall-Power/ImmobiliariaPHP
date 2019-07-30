// window.Vue = require("vue");
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );
// const app = new Vue({
//     el: "#app"
// });
import $ from 'jquery'
import './jquery-ui'
import './filters'
require('./bootstrap')

window.$ = window.jQuery = $

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
})
