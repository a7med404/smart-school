import axios from "axios";
import state from "./state";



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

  

  // Levels *******************************************************************************/
  async fetchLevels({ commit }){
    try {
      const response = await axios.get('/api/student/levels');
      commit('ALL_LEVELS', response.data.data);
    } catch (error) {
      commit('ALL_LEVELS', []);
      console.error(error);
    }
  },

  async addLevel({ commit }, payload){
    await axios.post('/api/student/levels',payload)
    .then((response) => {
      commit('ADD_LEVEL', response.data.data);
    })
    .catch((error) => {
      console.log(error)
      commit('ADD_LEVEL', []);
      // commit('SET_ERRORS', error);
    })

    // try {
    //   const response = await axios.post('/api/student/levels',payload);
    //   console.error(response);
    //   commit('ADD_LEVEL', response.data.data);
    // } catch (error) {
    //   commit('ADD_LEVEL', []);
    //   console.error(error);
    // }
  },



  async updateLevel({ commit }, upLevel) {
    try {
      const response = await axios.put(`/api/student/levels/${upLevel.id}`, upLevel);
      commit('UPDATE_LEVEL', upLevel);
    } catch (error) {
      console.error(error);
    }
  },

  async deleteLevel({ commit }, id){
    let check = confirm('Are You Sure Do You Want Delete This ?');
    if(check){
      try {
        await axios.delete(`/api/student/levels/${id}`);
        commit('DELETE_LEVEL', id);
      } catch (error) {
        commit('DELETE_LEVEL', null);
        console.error(error);
      }
    }
  },

  async filterLevels({ commit }, e){
    const limit = parseInt(e.target.options[e.target.options.selectedIndex].innerText);
    try {
      const response = await axios.get(`/api/student/levels?_limit=${limit}`);
      commit('ALL_LEVELS', response.data);
    } catch (error) {
      console.error(error);
    }
  },

  async fetchClassroomsByLevelID({ commit }){
    try {
      const response = await axios.get('/api/student/classrooms');
      commit('ALL_CLASSROOMS', response.data.data);
    } catch (error) {
      commit('ALL_CLASSROOMS', []);
      console.error(error);
    }
  },




  // Classrooms *******************************************************************************/

  async fetchClassrooms({ commit }){
    try {
      const response = await axios.get('/api/student/classrooms');
      commit('ALL_CLASSROOMS', response.data.data);
    } catch (error) {
      commit('ALL_CLASSROOMS', []);
      console.error(error);
    }
  },

  async addClassroom({ commit }, payload){
    try {
      const response = await axios.post('/api/student/classrooms',payload);
      commit('ADD_CLASSROOM', response.data.data);
    } catch (error) {
      commit('ADD_CLASSROOM', []);
      console.error(error);
    }
  },

  async updateClassroom({ commit }, upClassroom) {
    try {
      const response = await axios.put(`/api/student/classrooms/${upClassroom.id}`, upClassroom);
      commit('UPDATE_CLASSROOM', upClassroom);
    } catch (error) {
      console.error(error);
    }
  },

  async deleteClassroom({ commit }, id){
    let check = confirm('Are You Sure Do You Want Delete This ?');
    if(check){
      try {
        await axios.delete(`/api/student/classrooms/${id}`);
        commit('DELETE_CLASSROOM', id);
      } catch (error) {
        commit('DELETE_CLASSROOM', null);
        console.error(error);
      }
    }
  },

  // Parts *******************************************************************************/
  async fetchParts({ commit }){
    try {
      const response = await axios.get('/api/student/parts/');
      commit('ALL_PARTS', response.data.data);
    } catch (error) {
      commit('ALL_PARTS', []);
      console.error(error);
    }
  },

}
