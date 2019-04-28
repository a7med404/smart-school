import Vuex from 'vuex';
import Vue from 'vue';
Vue.use(Vuex)

import Sidebar from './modules/dashboard/_store/index';
// import Followers from './modules/dashboard/_store/index';
import AddStudent from './modules/student/_store/index';

export default new Vuex.Store ({
  modules: {
    Sidebar,
    AddStudent, 
    // Followers
  }
});
