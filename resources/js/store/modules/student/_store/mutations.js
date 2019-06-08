
export default {
  ADD_STUDENT:   (state, student) => state.students.unshift(student),
  STUDENT_ID:   (state, id) => (state.student_id = id),
  ALL_STUDENTS:    (state, students) => (state.students = students),
  DELETE_STUDENT:  (state, id) => state.students = state.students.filter(student => student.id !== id),

  // SET_ERRORS:   (state, errors) => (state.errors = errors),

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
      console.log(upClassroom);
      state.classrooms.splice(index, 1, upClassroom);
    }
  },
  
  
  // For Parts State
  ALL_PARTS:    (state, parts) => (state.parts = parts),
  ADD_PART:     (state, part) => state.parts.unshift(part),
  DELETE_PART:  (state, id) => state.parts = state.parts.filter(part => part.id !== id),
  UPDATE_PART: (state, upPart) => {
    const index = state.parts.findIndex(part => part.id === upPart.id);
    if(index !== -1) {
      console.log(upPart);
      state.parts.splice(index, 1, upPart);
    }
  },

  // For RECORDS State
  ALL_RECORDS:    (state, records) => (state.records = records),
  ADD_RECORDS:     (state, record) => state.records.unshift(record),
}
  