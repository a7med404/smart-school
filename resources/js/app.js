
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
// require('bootstrap-select');

window.Vue = require('vue');
Vue.config.productionTip = false
const compiler = require('vue-template-compiler')

let echarts = require('echarts');
let axios = require('axios');
Vue.use(require('vue-moment'));
axios.default.URL = "http://127.0.0.1:8000/";

// Vue.loadScript("../modules/master/js/echart/echarts.min.js");

import Vuex from "vuex";
import VueReouter from "vue-router";
import routes from "./store/modules/master/_route/sidebar-nav";

import store from "./store/index";
// import * from "./store/App.vue";
// window.location.reload(true);
Vue.use(Vuex);
Vue.use(VueReouter);

const router = new VueReouter({
  base: '/',
  mode: "history",  
  routes: routes,
});


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 // Vue.component('app', require('./components/profile/settings/SideMenu.vue'));
 
import sidebar from './store/modules/master/_components/Sidebar'
import navigation from './store/modules/master/_components/Navigation'
import control_sidebar from './store/modules/master/_components/ControlSidebar'
import footer_component from './store/modules/master/_components/FooterComponent'
import content_page from './store/modules/master/_components/ContentPage'
import forms from './store/modules/master/_components/Form'
// import add_student from './store/modules/student/_components/AddStudent'
import loading from './store/modules/master/_components/Loading'
// Vue.component('loading', require('./store/modules/master/_components/Loading.vue'));

const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
      sidebar,
      navigation,
      footer_component,
      control_sidebar,
      content_page,
      forms,
      // add_student,
      loading
    },
})
