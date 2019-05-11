const Vue = require('vue');

var dashboardUrl = 'http://127.0.0.1:8000/';

// import Dashboard from '../../dashboard/_components/Dashboard';
const Dashboard = resolve => {
  require.ensure(['../../dashboard/_components/Dashboard'], () => {
    resolve(require('../../dashboard/_components/Dashboard'))
  });
};

import AddStudent from '../../student/_components/student/AddStudent';
import AddParent from '../../student/_components/student/AddParent';
import AddToClass from '../../student/_components/student/AddToClass';
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


import ReportPermission from '../../employee/_components/reports/ReportPermission';
import ReportRewardsPunition from '../../employee/_components/reports/ReportRewardsPunition';
import ReportSearch from '../../employee/_components/reports/ReportSearch';
import ReportSalary from '../../employee/_components/reports/ReportSalary';
import ReportProgenitor from '../../employee/_components/reports/ReportProgenitor';
import ReportAbsence from '../../employee/_components/reports/ReportAbsence';
import ReportEvaluation from '../../employee/_components/reports/ReportEvaluation';



import Managaments from '../../employee/_components/managaments/Managaments';
import Admins from '../../employee/_components/managaments/Admins';

import Department from '../../employee/_components/managaments/Department';


import EmpHoliday from '../../employee/_components/holiday/EmpHoliday';
import FormalHoliday from '../../employee/_components/holiday/FormalHoliday';
import AddHoliday from '../../employee/_components/holiday/AddHoliday';
import EmpHolidayList from '../../employee/_components/holiday/EmpHolidayList';


import RewardsPunition from '../../employee/_components/salary/RewardsPunition';
import ReallianceSalary from '../../employee/_components/salary/ReallianceSalary';
import Progenitor from '../../employee/_components/salary/Progenitor';
import SalaryStatement from '../../employee/_components/salary/SalaryStatement';
import Overpayment from '../../employee/_components/salary/Overpayment';
import OverpaymentDivision from '../../employee/_components/salary/OverpaymentDivision';
import SalaryDetails from '../../employee/_components/salary/SalaryDetails';



import EvaluationItem from '../../employee/_components/evaluation/EvaluationItem';
import EvaluationEmp from '../../employee/_components/evaluation/EvaluationEmp';

import EmpSettingPerissions from '../../employee/_components/perissions/EmpSettingPerissions';
import EmpPerissions from '../../employee/_components/perissions/EmpPerissions';



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

import ReportQuality from '../../student/_components/reports/ReportQuality';
import ReportLevels from '../../student/_components/reports/ReportLevels';
import ReportClassrooms from '../../student/_components/reports/ReportClassrooms';
import ReportEmpStudent from '../../student/_components/reports/ReportEmpStudent';
import ReportSeparate from '../../student/_components/reports/ReportSeparate';
import ReportWarning from '../../student/_components/reports/ReportWarning';
import ReportAuth from '../../student/_components/reports/ReportAuth';


import ReportSchoolRegister from '../../student/_components/reports/student/ReportSchoolRegister';
import ReportFeeCompletion from '../../student/_components/reports/student/ReportFeeCompletion';
import ReportKindness from '../../student/_components/reports/student/ReportKindness';
import ReportStudentPermission from '../../student/_components/reports/student/ReportStudentPermission';
import ReportSudentStatement from '../../student/_components/reports/student/ReportSudentStatement';
import ReportNotComplateData from '../../student/_components/reports/student/ReportNotComplateData';
import ReportStudentAbsece from '../../student/_components/reports/student/ReportStudentAbsece';

import ReportParts from '../../student/_components/reports/parts/ReportParts';
import ReportWithoutPart from '../../student/_components/reports/parts/ReportWithoutPart';
import ReportCountParts from '../../student/_components/reports/parts/ReportCountParts';

import ReportDataClassrooms from '../../student/_components/reports/classrooms/ReportDataClassrooms';

 

import VehicleRoutes from '../../vehicle/_components/VehicleRoutes';
import Drivers from '../../vehicle/_components/Drivers';
import Reports from '../../vehicle/_components/Reports';
import Stations from '../../vehicle/_components/Stations';
import Subscriptions from '../../vehicle/_components/Subscriptions';
import Vehicle from '../../vehicle/_components/Vehicle';
import Attendees from '../../vehicle/_components/Attendees';
import { resolve } from 'q';


const routes = [

  {
    path: '/report-data-classrooms',
    props: true,
    name: 'report-data-classrooms',
    component:  ReportDataClassrooms
  }, 
  {
    path: '/report-count-parts',
    props: true,
    name: 'report-count-parts',
    component:  ReportCountParts
  }, 
  {
    path: '/report-without-part',
    props: true,
    name: 'report-without-part',
    component:  ReportWithoutPart
  }, 
  {
    path: '/report-parts',
    props: true,
    name: 'report-parts',
    component:  ReportParts
  },
  {
    path: '/report-student-absece',
    props: true,
    name: 'report-student-absece',
    component:  ReportStudentAbsece
  },
  {
    path: '/report-not-complate-data',
    props: true,
    name: 'report-not-complate-data',
    component:  ReportNotComplateData
  }, 
  {
    path: '/report-sudent-statement',
    props: true,
    name: 'report-sudent-statement',
    component:  ReportSudentStatement
  }, 
  {
    path: '/report-student-permission',
    props: true,
    name: 'report-student-permission',
    component:  ReportStudentPermission
  }, 
  {
    path: '/report-kindness',
    props: true,
    name: 'report-kindness',
    component:  ReportKindness
  }, 
  {
    path: '/report-fee-completion',
    props: true,
    name: 'report-fee-completion',
    component:  ReportFeeCompletion
  }, 
  {
    path: '/report-school-register',
    props: true,
    name: 'report-school-register',
    component:  ReportSchoolRegister
  }, 


  
  {
    path: '/report-permission',
    props: true,
    name: 'report-permission',
    component:  ReportPermission
  }, 
  {
    path: '/report-rewards-punition',
    props: true,
    name: 'report-rewards-punition',
    component:  ReportRewardsPunition
  }, 
  {
    path: '/report-search',
    props: true,
    name: 'report-search',
    component:  ReportSearch
  }, 
  {
    path: '/report-salary',
    props: true,
    name: 'report-salary',
    component:  ReportSalary
  }, 
  {
    path: '/report-progenitor',
    props: true,
    name: 'report-progenitor',
    component:  ReportProgenitor
  }, 
  {
    path: '/report-absence',
    props: true,
    name: 'report-absence',
    component:  ReportAbsence
  }, 
  {
    path: '/report-evaluation',
    props: true,
    name: 'report-evaluation',
    component:  ReportEvaluation
  }, 

  {
    path: '/report-quality',
    props: true,
    name: 'report-quality',
    component:  ReportQuality
  }, 
  {
    path: '/report-levels',
    props: true,
    name: 'report-levels',
    component:  ReportLevels
  }, 
  {
    path: '/report-classrooms',
    props: true,
    name: 'report-classrooms',
    component:  ReportClassrooms
  }, 
  {
    path: '/report-emp-student',
    props: true,
    name: 'report-emp-student',
    component:  ReportEmpStudent
  }, 
  {
    path: '/report-separate',
    props: true,
    name: 'report-separate',
    component:  ReportSeparate
  }, 
  {
    path: '/report-warning',
    props: true,
    name: 'report-warning',
    component:  ReportWarning
  }, 
  {
    path: '/report-auth',
    props: true,
    name: 'report-auth',
    component:  ReportAuth
  }, 




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
    path: '/evaluation-item',
    props: true,
    name: 'evaluation-item',
    component:  EvaluationItem
  }, 
  {
    path: '/evaluation-emp',
    props: true,
    name: 'evaluation-emp',
    component:  EvaluationEmp
  }, 
  {
    path: '/attendees',
    props: true,
    name: 'attendees',
    component:  Attendees
  },
  {
    path: '/emp-holiday',
    props: true,
    name: 'emp-holiday',
    component:  EmpHoliday
  }, 
  {
    path: '/formal-holiday',
    props: true,
    name: 'formal-holiday',
    component:  FormalHoliday
  }, 
  {
    path: '/add-holiday',
    props: true,
    name: 'add-holiday',
    component:  AddHoliday
  }, 
  {
    path: '/salary-details',
    props: true,
    name: 'salary-details',
    component:  SalaryDetails
  }, 
    
  {
    path: '/rewards-punition',
    props: true,
    name: 'rewards-punition',
    component:  RewardsPunition
  }, 
  {
    path: '/realliance-salary',
    props: true,
    name: 'realliance-salary',
    component:  ReallianceSalary
  }, 
  {
    path: '/progenitor',
    props: true,
    name: 'progenitor',
    component:  Progenitor
  }, 
  {
    path: '/salary-statement',
    props: true,
    name: 'salary-statement',
    component:  SalaryStatement
  }, 
  {
    path: '/overpayment',
    props: true,
    name: 'overpayment',
    component:  Overpayment
  }, 
  {
    path: '/overpayment-division',
    props: true,
    name: 'overpayment-division',
    component:  OverpaymentDivision
  }, 
  
  {
    path: '/emp-perissions',
    props: true,
    name: 'emp-perissions',
    component:  EmpPerissions
  }, 
  {
    path: '/emp-holiday-list',
    props: true,
    name: 'emp-holiday-list',
    component:  EmpHolidayList
  }, 
  {
    path: '/emp-setting-perissions',
    props: true,
    name: 'emp-setting-perissions',
    component:  EmpSettingPerissions
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
    component:  Managaments
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
    component:  AddToClass
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
  {
    path: '/redirect-me',
    redirect: '/dashbord',
  },
  {
    path: '*',
    redirect: '/dashbord',
  },
]

export default routes;


// clildren: [{
//   path: 'add',
//   props: true,
//   name: 'add-employee',
//   component:  AddEmployee,
// }]
