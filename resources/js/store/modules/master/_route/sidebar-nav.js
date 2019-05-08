const Vue = require('vue');

var dashboardUrl = 'http://127.0.0.1:8000/';
import Dashboard from '../../dashboard/_components/Dashboard';

import AddStudent from '../../student/_components/student/AddStudent';
import AddParent from '../../student/_components/student/AddParent';
import addToClass from '../../student/_components/student/addToClass';
import Attendance from '../../student/_components/attendance/Attendance';
import AttendanceForClass from '../../student/_components/attendance/AttendanceForClass';
import StudentPull from '../../student/_components/student/StudentPull';
import AddStudentManual from '../../student/_components/student/AddStudentManual';
// import AddStudentManual from '../../student/_components/student/AddStudent';

import Permissiontodepart from '../../student/_components/off_prints/Permissiontodepart';
import Kindness from '../../student/_components/off_prints/Kindness';
import StudentTransfer from '../../student/_components/off_prints/StudentTransfer';
import Completion from '../../student/_components/off_prints/Completion';
import Record from '../../student/_components/off_prints/Record';
import EmptyPalce from '../../student/_components/off_prints/EmptyPalce';

import Education from '../../student/_components/educations/Education';
import Test from '../../student/_components/educations/Test';
import EducationLevels from '../../student/_components/educations/EducationLevels';
import Classrooms from '../../student/_components/educations/Classrooms';
import PartRooms from '../../student/_components/educations/PartRooms';
import DistStudents from '../../student/_components/educations/DistStudents';

import Receipts from '../../student/_components/receipt/Receipts';
import AddReceipt from '../../student/_components/receipt/AddReceipt';

import Login from '../../employee/_components/Login';
import Logout from '../../employee/_components/Login';
import Profile from '../../employee/_components/Profile';
import Employees from '../../employee/_components/employees/Employees';
import AddEmployee from '../../employee/_components/employees/AddEmployee';

import Mnagaments from '../../employee/_components/mnagaments/Mnagaments';
import Admins from '../../employee/_components/mnagaments/Admins';
import Department from '../../employee/_components/mnagaments/Department';


import viewEmployee from '../../employee/_components/employees/viewEmployee';
import Calends from '../../employee/_components/Calends';
import AddCalend from '../../employee/_components/AddCalend';
import BearInMind from '../../employee/_components/BearInMind';
import EmpAbsence from '../../employee/_components/EmpAbsence';
import CutAllowance from '../../employee/_components/CutAllowance';
import EmpPool from '../../employee/_components/EmpPool';

import PayRuls from '../../student/_components/account/PayRuls';
import Classes from '../../student/_components/account/Classes';
import Pay from '../../student/_components/account/Pay';
import Settings from '../../student/_components/account/Settings';
import Registration from '../../student/_components/account/Registration';
import ReciptSettings from '../../student/_components/account/ReciptSettings';
import Crideit from '../../student/_components/account/Crideit';



import VehicleRoutes from '../../vehicle/_components/VehicleRoutes';
import Drivers from '../../vehicle/_components/Drivers';
import Reports from '../../vehicle/_components/Reports';
import Stations from '../../vehicle/_components/Stations';
import Subscriptions from '../../vehicle/_components/Subscriptions';
import Vehicle from '../../vehicle/_components/Vehicle';
import Attendees from '../../vehicle/_components/Attendees';


const routes = [
  {
    path: '/vehicle-routes',
    props: true,
    name: 'vehicle-routes',
    component:  VehicleRoutes
  }, 
  {
    path: '/drivers',
    props: true,
    name: 'drivers',
    component:  Drivers
  }, 
  {
    path: '/vehicle-reports',
    props: true,
    name: 'vehicle-reports',
    component:  Reports
  }, 
  {
    path: '/stations',
    props: true,
    name: 'stations',
    component:  Stations
  }, 
  {
    path: '/subscriptions',
    props: true,
    name: 'subscriptions',
    component:  Subscriptions
  }, 
  {
    path: '/vehicles',
    props: true,
    name: 'vehicles',
    component:  Vehicle
  }, 
  {
    path: '/attendees',
    props: true,
    name: 'attendees',
    component:  Attendees
  },
  
  
  {
    path: '/calends',
    props: true,
    name: 'calends',
    component:  Calends
  }, 
  {
    path: '/add-calend',
    props: true,
    name: 'add-calend',
    component:  AddCalend
  }, 
  {
    path: '/bear-in-mind',
    props: true,
    name: 'bear-in-mind',
    component:  BearInMind
  }, 
  {
    path: '/emp-absence',
    props: true,
    name: 'emp-absence',
    component:  EmpAbsence
  }, 
  {
    path: '/cut-allowance',
    props: true,
    name: 'cut-allowance',
    component:  CutAllowance
  }, 
  {
    path: '/emp-pool',
    props: true,
    name: 'emp-pool',
    component:  EmpPool
  }, 

  {
    path: '/managaments',
    props: true,
    name: 'managaments',
    component:  Mnagaments
  },
  

  {
    path: '/student-pull',
    props: true,
    name: 'student-pull',
    component:  StudentPull
  },  
  {
    path: '/crideit',
    props: true,
    name: 'crideit',
    component:  Crideit
  },  
  {
    path: '/pay-ruls',
    props: true,
    name: 'pay-ruls',
    component:  PayRuls
  },
  {
    path: '/pay-classes',
    props: true,
    name: 'pay-classes',
    component:  Classes
  }, 
  {
    path: '/pay',
    props: true,
    name: 'pay',
    component:  Pay
  }, 
  {
    path: '/settings',
    props: true,
    name: 'settings',
    component:  Settings
  }, 
  {
    path: '/registration',
    props: true,
    name: 'registration',
    component:  Registration
  },  
  {
    path: '/recipt-settings',
    props: true,
    name: 'recipt-settings',
    component:  ReciptSettings
  },
  {
    path: '/dashboard',
    props: true,
    name: 'dashboard',
    component:  Dashboard
  },
  {
    path: '/students/add',
    props: true,
    name: 'add-student',
    component:  AddStudent,
  },
  {
    path: '/students/add-to-class',
    props: true,
    name: 'add-to-class',
    component:  addToClass
  },
  {
    path: '/parents/add',
    props: true,
    name: 'add-parent',
    component:  AddParent
  },
  {
    path: '/attendance',
    props: true,
    name: 'attendance',
    component:  Attendance
  },
  {
    path: '/Attendancec-for-class',
    props: true,
    name: 'Attendancec-for-class',
    component:  AttendanceForClass
  },
  {
    path: '/add-student-manual',
    props: true,
    name: 'add-student-manual',
    component:  AddStudentManual
  },
  {
    path: '/permissiontodepart',
    props: true,
    name: 'permissiontodepart',
    component: Permissiontodepart
  },
  {
    path: '/kindness',
    props: true,
    name: 'kindness',
    component:  Kindness
  }, 
  {
    path: '/student-transfer',
    props: true,
    name: 'student-transfer',
    component:  StudentTransfer
  },
  {
    path: '/empty-palce',
    props: true,
    name: 'empty-palce',
    component:  EmptyPalce
  }, 
  {
    path: '/record',
    props: true,
    name: 'record',
    component:  Record
  }, 
  {
    path: '/completion',
    props: true,
    name: 'completion',
    component:  Completion
  },   
  {
    path: '/education',
    props: true,
    name: 'education',
    component:  Education,
    // clildren: [
      
    // ]
  },
  
  {
    path: 'education-levels', 
    props: true,
    name: 'education-levels',
    component:  EducationLevels
  },
  {
    path: 'classrooms',
    props: true,
    name: 'classrooms',
    component:  Classrooms
  },
  {
    path: 'part-rooms',
    props: true,
    name: 'part-rooms',
    component:  PartRooms
  },
  {
    path: 'test',
    props: true,
    name: 'test',
    component:  Test
  },
  {
    path: '/dist-students',
    props: true,
    name: 'dist-students',
    component:  DistStudents
  },
  {
    path: '/receipts',
    props: true,
    name: 'receipts',
    component:  Receipts
  },
  {
    path: '/add-receipt',
    props: true,
    name: 'add-receipt',
    component:  AddReceipt
  },
  {
    path: '/login',
    props: true,
    name: 'login',
    component:  Login
  },
  {
    path: '/logout',
    props: true,
    name: 'logout',
    component:  Logout
  },
  {
    path: '/profile',
    props: true,
    name: 'profile',
    component:  Profile
  },
  {
    path: '/employees',
    props: true,
    name: 'employees',
    component:  Employees
  },
  {
    path: '/employees/add',
    props: true,
    name: 'add-employee',
    component:  AddEmployee
  },
  {
    path: '/employees/view/:id',
    props: true,
    name: 'view-employee',
    component:  viewEmployee
  },
]

export default routes;


// clildren: [{
//   path: 'add',
//   props: true,
//   name: 'add-employee',
//   component:  AddEmployee,
// }]
