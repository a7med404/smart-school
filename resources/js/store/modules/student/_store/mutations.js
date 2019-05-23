
export default {
  ADD_STUDENT:   (state, student) => state.students.push(student),
  ALL_LEVELS:    (state, levels) => (state.levels = levels),
  ADD_LEVEL:     (state, level) => state.levels.unshift(level),
  DELETE_LEVEL:  (state, id) => state.levels = state.levels.filter(level => level.id !== id),
  UPDATE_LEVELS: (state, upLevel) => {
    const index = state.levels.findIndex(level => level.id === upLevel.id);
    if(index !== -1) {
      state.levels.splice(index, 1, upLevel);
    }
  }
}
  