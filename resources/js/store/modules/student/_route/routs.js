const Vue = require('vue');

// const settingUrl = '/user/profile/setting';
const routes =  [
  {
    path: '/students/add',
    props: true,
    name: 'student-add',
    component:  require('../_components/Dashboard.vue')
  },
]
