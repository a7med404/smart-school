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

  async fetchStudents({ commit }, payload){
    try {
      const response = await axios.post('/api/student/all',payload);
      commit('ALL_STUDENTS', response.data.data);
    } catch (error) {
      commit('ALL_STUDENTS', []);
      console.error(error);
    }
  },

  async addStudentAddress({ commit }, payload){

    await axios.post('/api/addresses/addresses',payload)
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
    await axios.post('/api/addresses/contacts',payload)
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
    await axios.post('/api/addresses/identifcations',payload)
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
    await axios.post('/api/student/healthes',payload)
    .then((response) => {
      commit('STUDENT_ID', response.data.student_id);
      // commit('ADD_STUDENT_ADDRESS', response.data.data);
    })
    .catch((error) => {
      console.log(error)
      // commit('ADD_STUDENT_ADDRESS', []);
    })
  },

  
  async deleteStudent({ commit }, id){
    let check = confirm('Are You Sure Do You Want Delete This ?');
    if(check){
      try {
        await axios.delete(`/api/student/students/${id}`);
        commit('DELETE_STUDENT', id);
      } catch (error) {
        commit('DELETE_STUDENT', null);
        console.error(error);
      }
    }
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

  async addPart({ commit }, payload){
    try {
      const response = await axios.post('/api/student/parts',payload);
      commit('ADD_PART', response.data.data);
    } catch (error) {
      commit('ADD_PART', []);
      console.error(error);
    }
  },

  async updatePart({ commit }, upPart) {
    try {
      const response = await axios.put(`/api/student/parts/${upPart.id}`, upPart);
      commit('UPDATE_PART', upPart);
    } catch (error) {
      console.error(error);
    }
  },

  async deletePart({ commit }, id){
    let check = confirm('Are You Sure Do You Want Delete This ?');
    if(check){
      try {
        await axios.delete(`/api/student/parts/${id}`);
        commit('DELETE_PART', id);
      } catch (error) {
        commit('DELETE_PART', null);
        console.error(error);
      }
    }
  },


    // Records *******************************************************************************/
    async fetchRecords({ commit }){
      try {
        const response = await axios.get('/api/student/records');
        commit('ALL_RECORDS', response.data.data);
      } catch (error) {
        commit('ALL_RECORDS', []);
        console.error(error);
      }
    },
  
    async addRecord({ commit }, payload){
      await axios.post('/api/student/records',payload)
      .then((response) => {
        commit('ADD_RECORD', response.data.data);
      })
      .catch((error) => {
        console.log(error)
        commit('ADD_RECORD', []);
        // commit('SET_ERRORS', error);
      })
  
    },
  
}
