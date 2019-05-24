import axios from "axios";

export default {
  async addStudent({ commit }, student) {
    // axios post request
    const response = await axios.post('url', student);
    // context.commit('ADD_STUDENT', response);
  },

  // try {
  // } catch (error) {
  //   commit('setRecipes', []);
  //   console.error(error);
  // }

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
    try {
      const response = await axios.post('/api/student/levels',payload);
      commit('ADD_LEVEL', response.data.data);
    } catch (error) {
      commit('ADD_LEVEL', []);
      console.error(error);
    }
  },

  async deleteLevel({ commit }, id){
    try {
      await axios.delete(`/api/student/levels/${id}`);
      commit('DELETE_LEVEL', id);
    } catch (error) {
      commit('DELETE_LEVEL', null);
      console.error(error);
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

  async updateLevel({ commit }, upLevel, level) {
    console.log(upLevel);
    try {
      const response = await axios.put(`/api/student/levels/${upLevel}`);
      commit('UPDATE_LEVELS', upLevel);
    } catch (error) {
      console.error(error);
    }
  }
}
