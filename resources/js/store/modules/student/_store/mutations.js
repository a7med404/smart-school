
export default {
  ADD_STUDENT:   (state, student) => state.students.push(student),
  
  ALL_LEVELS:    (state, levels) => (state.levels = levels),
  ADD_LEVEL:     (state, level) => state.levels.unshift(level),
  DELETE_LEVEL:  (state, id) => state.levels = state.levels.filter(level => level.id !== id),
  UPDATE_LEVEL: (state, upLevel) => {
    const index = state.levels.findIndex(level => level.id === upLevel.id);
    if(index !== -1) {
      state.levels.splice(index, 1, upLevel);
    }
  },


  // For CLASSROOMS State
  ALL_CLASSROOMS:    (state, classrooms) => (state.classrooms = classrooms),
  ADD_CLASSROOM:     (state, classroom) => state.classrooms.unshift(classroom),
  DELETE_CLASSROOM:  (state, id) => state.classrooms = state.classrooms.filter(classroom => classroom.id !== id),
  UPDATE_CLASSROOM: (state, upClassroom) => {
    const index = state.classrooms.findIndex(classroom => classroom.id === upClassroom.id);
    if(index !== -1) {
      state.classrooms.splice(index, 1, upClassroom);
    }
  },


  // For Parts State
  ALL_PARTS:    (state, parts) => (state.parts = parts),
}
  