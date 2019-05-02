import Vuex from 'vuex'
import Vue from 'vue'
Vue.use(Vuex)

Vue.component('followers-component',     require('./../_components/Dashboard.vue'));


import state     from     "./state.js";
import getters   from   "./getters.js";
import mutations from "./mutations.js";
import actions   from   "./actions.js";

export default{
  state,
  getters,
  mutations,
  actions
}
