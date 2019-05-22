import Axios from "axios";

export default {
  async addStudent(context, student) {
    // axios post request
    const response = await Axios.post('url', student);
    // context.commit('ADD_STUDENT', response);
  }
}
