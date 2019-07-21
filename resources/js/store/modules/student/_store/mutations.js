
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



  ALL_PAY_RULES:    (state, pay_rules) => (state.pay_rules = pay_rules),
  ADD_PAY_RULE:     (state, pay_rule) => state.pay_rules.unshift(pay_rule),
  DELETE_PAY_RULE:  (state, id) => state.pay_rules = state.pay_rules.filter(pay_rule => pay_rule.id !== id),
  UPDATE_PAY_RULE: (state, upPayRule) => {
    const index = state.pay_rules.findIndex(pay_rule => pay_rule.id === upPayRule.id);
    if(index !== -1) {
      state.pay_rules.splice(index, 1, upPayRule);
    }
  },

  ALL_CALENDS:    (state, calends) => (state.calends = calends),
  ADD_CALEND:     (state, calend) => state.calends.unshift(calend),
  DELETE_CALEND:  (state, id) => state.calends = state.calends.filter(calend => calend.id !== id),
  UPDATE_CALEND: (state, upCalend) => {
    const index = state.calends.findIndex(calend => calend.id === upCalend.id);
    if(index !== -1) {
      state.calends.splice(index, 1, upCalend);
    }
  },




  ALL_OFF_PRINTS:    (state, offprints) => (state.offprints = offprints),
  ADD_OFF_PRINT:     (state, offprint) => state.offprints.unshift(offprint),
  DELETE_OFF_PRINT:  (state, id) => state.offprints = state.offprints.filter(offprint => offprint.id !== id),
  UPDATE_OFF_PRINT: (state, upOffPrint) => {
    const index = state.offprints.findIndex(offprint => offprint.id === upOffPrint.id);
    if(index !== -1) {
      state.offprints.splice(index, 1, upOffPrint);
    }
  },


}