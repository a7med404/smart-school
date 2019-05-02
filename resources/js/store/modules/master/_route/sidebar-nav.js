const Vue = require('vue');

var dashboardUrl = 'http://127.0.0.1:8000/';
import Dashboard from '../../dashboard/_components/Dashboard';



import AddStudent from '../../student/_components/AddStudent';
import AddParent from '../../student/_components/AddParent';
import addToClass from '../../student/_components/addToClass';
import Attendance from '../../student/_components/attendance/Attendance';
import AttendanceForClass from '../../student/_components/attendance/AttendanceForClass';

import Permissiontodepart from '../../student/_components/off_prints/Permissiontodepart';


import EducationLevels from '../../student/_components/educations/EducationLevels';
import Classrooms from '../../student/_components/educations/Classrooms';
import PartRooms from '../../student/_components/educations/PartRooms';
import DistStudents from '../../student/_components/educations/DistStudents';

import Receipts from '../../student/_components/receipt/Receipts';
import AddReceipt from '../../student/_components/receipt/AddReceipt';

import Login from '../../employee/_components/Login';
import Logout from '../../employee/_components/Login';
import Profile from '../../employee/_components/Profile';

const routes = [
  {
    path: `/dashboard`,
    props: true,
    name: 'dashboard',
    component:  Dashboard
  },
  {
    path: `/students/add`,
    props: true,
    name: 'add-student',
    component:  AddStudent
  },
  {
    path: `/students/add-to-class`,
    props: true,
    name: 'add-to-class',
    component:  addToClass
  },
  {
    path: `/parents/add`,
    props: true,
    name: 'add-parent',
    component:  AddParent
  },
  {
    path: `/attendance`,
    props: true,
    name: 'attendance',
    component:  Attendance
  },
  {
    path: `/Attendancec-for-class`,
    props: true,
    name: 'Attendancec-for-class',
    component:  AttendanceForClass
  },
  {
    path: `/permissiontodepart`,
    props: true,
    name: 'permissiontodepart',
    component:  Permissiontodepart
  },
  {
    path: `/education-levels`,
    props: true,
    name: 'education-levels',
    component:  EducationLevels
  },
  {
    path: `/classrooms`,
    props: true,
    name: 'classrooms',
    component:  Classrooms
  },
  {
    path: `/part-rooms`,
    props: true,
    name: 'part-rooms',
    component:  PartRooms
  },
  {
    path: `/dist-students`,
    props: true,
    name: 'dist-students',
    component:  DistStudents
  },
  {
    path: `/receipts`,
    props: true,
    name: 'receipts',
    component:  Receipts
  },
  {
    path: `/add-receipt`,
    props: true,
    name: 'add-receipt',
    component:  AddReceipt
  },
  {
    path: `/login`,
    props: true,
    name: 'login',
    component:  Login
  },
  {
    path: `/logout`,
    props: true,
    name: 'logout',
    component:  Logout
  },
  {
    path: `/profile`,
    props: true,
    name: 'profile',
    component:  Profile
  },
]

export default routes;