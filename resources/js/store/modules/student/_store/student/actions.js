import axios from "axios";
import Vuex from 'vuex'
import Vue from 'vue'
Vue.use(Vuex)

export default {

  async addStudent({ commit }, payload){
    await axios.post('/api/student/students',payload)
    .then((response) => {
      commit('STUDENT_ID', response.data.student_id);
      commit('ADD_STUDENT', response.data.data);
    })
    .catch((error) => {
      console.log(error)
      commit('ADD_STUDENT', []);
    })
  },
  
  async addStudentAddress({ commit }, payload){
    await axios.post('/api/student/students',payload)
    .then((response) => {
      commit('STUDENT_ID', response.data.student_id);
      // commit('ADD_STUDENT_ADDRESS', response.data.data);
    })
    .catch((error) => {
      console.log(error)
      // commit('ADD_STUDENT_ADDRESS', []);
    })
  },

  async addStudentContact({ commit }, payload){
    await axios.post('/api/student/students',payload)
    .then((response) => {
      commit('STUDENT_ID', response.data.student_id);
      // commit('ADD_STUDENT_ADDRESS', response.data.data);
    })
    .catch((error) => {
      console.log(error)
      // commit('ADD_STUDENT_ADDRESS', []);
    })
  },
  
  async addStudentIdentifcation({ commit }, payload){
    await axios.post('/api/student/students',payload)
    .then((response) => {
      commit('STUDENT_ID', response.data.student_id);
      // commit('ADD_STUDENT_ADDRESS', response.data.data);
    })
    .catch((error) => {
      console.log(error)
      // commit('ADD_STUDENT_ADDRESS', []);
    })
  },

  async addStudentHealth({ commit }, payload){
    await axios.post('/api/student/students',payload)
    .then((response) => {
      commit('STUDENT_ID', response.data.student_id);
      // commit('ADD_STUDENT_ADDRESS', response.data.data);
    })
    .catch((error) => {
      console.log(error)
      // commit('ADD_STUDENT_ADDRESS', []);
    })
  },

  async updateDistStudent({ commit }, payload, id){
    console.log(payload);
    await axios.patch(`/api/student/students/dist`,payload)
    .then((response) => {
      // commit('DIST_STUDENT', response.data.data);
    })
    .catch((error) => {
      console.log(error)
      // commit('DIST_STUDENT', []);
    })
  },

}