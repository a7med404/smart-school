const Vue = require('vue');

var dashboardUrl = 'http://127.0.0.1:8000/';

// import Dashboard from '../../dashboard/_components/Dashboard';
const Dashboard = resolve => {
  require.ensure(['../../dashboard/_components/Dashboard'], () => {
    resolve(require('../../dashboard/_components/Dashboard'))
  });
};

const Soon = resolve => {
  require.ensure(['../../controle/_components/Soon'], () => {
    resolve(require('../../controle/_components/Soon'))
  });
};

const Agreements = resolve => {
  require.ensure(['../../employee/_components/Agreements'], () => {
    resolve(require('../../employee/_components/Agreements'))
  });
};

const SMS = resolve => {
  require.ensure(['../../student/_components/account/SMS'], () => {
    resolve(require('../../student/_components/account/SMS'))
  });
};

const Discount = resolve => {
  require.ensure(['../../student/_components/account/Discount'], () => {
    resolve(require('../../student/_components/account/Discount'))
  });
};


const DiscountSetting = resolve => {
  require.ensure(['../../student/_components/account/DiscountSetting'], () => {
    resolve(require('../../student/_components/account/DiscountSetting'))
  });
};



const Pay = resolve => {
  require.ensure(['../../student/_components/account/fees/Pay'], () => {
    resolve(require('../../student/_components/account/fees/Pay'))
  });
};
const PayClasses = resolve => {
  require.ensure(['../../student/_components/account/fees/PayClasses'], () => {
    resolve(require('../../student/_components/account/fees/PayClasses'))
  });
};
const Settings = resolve => {
  require.ensure(['../../student/_components/account/fees/Settings'], () => {
    resolve(require('../../student/_components/account/fees/Settings'))
  });
};
const Registration = resolve => {
  require.ensure(['../../student/_components/account/fees/Registration'], () => {
    resolve(require('../../student/_components/account/fees/Registration'))
  });
};
const ReciptSettings = resolve => {
  require.ensure(['../../student/_components/account/fees/ReciptSettings'], () => {
    resolve(require('../../student/_components/account/fees/ReciptSettings'))
  });
};

const AllStudents = resolve => {
  require.ensure(['../../student/_components/student/AllStudents'], () => {
    resolve(require('../../student/_components/student/AllStudents'))
  });
};

const EditStudent = resolve => {
  require.ensure(['../../student/_components/student/EditStudent'], () => {
    resolve(require('../../student/_components/student/EditStudent'))
  });
};

const ToClinic = resolve => {
  require.ensure(['../../student/_components/off_prints/ToClinic'], () => {
    resolve(require('../../student/_components/off_prints/ToClinic'))
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
import EmpPull from '../../employee/_components/EmpPull';

import PayRuls from '../../student/_components/account/PayRuls';
// import Classes from '../../student/_components/account/Classes';
// import Pay from '../../student/_components/account/Pay';
// import Settings from '../../student/_components/account/Settings';
// import Registration from '../../student/_components/account/Registration';
// import ReciptSettings from '../../student/_components/account/ReciptSettings';
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


const routes = [

  {
    path: '/view/agreements',
    props: true,
    name: 'agreements',
    component:  Agreements
  },   
  {
    path: '/view/sms',
    props: true,
    name: 'sms',
    component:  SMS
  }, 
  {
    path: '/view/discount-setting',
    props: true,
    name: 'discount-setting',
    component:  DiscountSetting
  }, 
  {
    path: '/view/discount',
    props: true,
    name: 'discount',
    component:  Discount
  }, 
  {
    path: '/view/report-data-classrooms',
    props: true,
    name: 'report-data-classrooms',
    component:  ReportDataClassrooms
  }, 
  {
    path: '/view/report-count-parts',
    props: true,
    name: 'report-count-parts',
    component:  ReportCountParts
  }, 
  {
    path: '/view/report-without-part',
    props: true,
    name: 'report-without-part',
    component:  ReportWithoutPart
  }, 
  {
    path: '/view/report-parts',
    props: true,
    name: 'report-parts',
    component:  ReportParts
  },
  {
    path: '/view/report-student-absece',
    props: true,
    name: 'report-student-absece',
    component:  ReportStudentAbsece
  },
  {
    path: '/view/report-not-complate-data',
    props: true,
    name: 'report-not-complate-data',
    component:  ReportNotComplateData
  }, 
  {
    path: '/view/report-sudent-statement',
    props: true,
    name: 'report-sudent-statement',
    component:  ReportSudentStatement
  }, 
  {
    path: '/view/report-student-permission',
    props: true,
    name: 'report-student-permission',
    component:  ReportStudentPermission
  }, 
  {
    path: '/view/report-kindness',
    props: true,
    name: 'report-kindness',
    component:  ReportKindness
  }, 
  {
    path: '/view/report-fee-completion',
    props: true,
    name: 'report-fee-completion',
    component:  ReportFeeCompletion
  }, 
  {
    path: '/view/report-school-register',
    props: true,
    name: 'report-school-register',
    component:  ReportSchoolRegister
  }, 


  
  {
    path: '/view/report-permission',
    props: true,
    name: 'report-permission',
    component:  ReportPermission
  }, 
  {
    path: '/view/report-rewards-punition',
    props: true,
    name: 'report-rewards-punition',
    component:  ReportRewardsPunition
  }, 
  {
    path: '/view/report-search',
    props: true,
    name: 'report-search',
    component:  ReportSearch
  }, 
  {
    path: '/view/report-salary',
    props: true,
    name: 'report-salary',
    component:  ReportSalary
  }, 
  {
    path: '/view/report-progenitor',
    props: true,
    name: 'report-progenitor',
    component:  ReportProgenitor
  }, 
  {
    path: '/view/report-absence',
    props: true,
    name: 'report-absence',
    component:  ReportAbsence
  }, 
  {
    path: '/view/report-evaluation',
    props: true,
    name: 'report-evaluation',
    component:  ReportEvaluation
  }, 

  {
    path: '/view/report-quality',
    props: true,
    name: 'report-quality',
    component:  ReportQuality
  }, 
  {
    path: '/view/report-levels',
    props: true,
    name: 'report-levels',
    component:  ReportLevels
  }, 
  {
    path: '/view/report-classrooms',
    props: true,
    name: 'report-classrooms',
    component:  ReportClassrooms
  }, 
  {
    path: '/view/report-emp-student',
    props: true,
    name: 'report-emp-student',
    component:  ReportEmpStudent
  }, 
  {
    path: '/view/report-separate',
    props: true,
    name: 'report-separate',
    component:  ReportSeparate
  }, 
  {
    path: '/view/report-warning',
    props: true,
    name: 'report-warning',
    component:  ReportWarning
  }, 
  {
    path: '/view/report-auth',
    props: true,
    name: 'report-auth',
    component:  ReportAuth
  }, 




  {
    path: '/view/vehicle-routes',
    props: true,
    name: 'vehicle-routes',
    component:  VehicleRoutes
  }, 
  {
    path: '/view/drivers',
    props: true,
    name: 'drivers',
    component:  Drivers,
  }, 
  {
    path: '/view/vehicle-reports',
    props: true,
    name: 'vehicle-reports',
    component:  Reports
  }, 
  {
    path: '/view/stations',
    props: true,
    name: 'stations',
    component:  Stations
  }, 
  {
    path: '/view/subscriptions',
    props: true,
    name: 'subscriptions',
    component:  Subscriptions
  }, 
  {
    path: '/view/vehicles',
    props: true,
    name: 'vehicles',
    component:  Vehicle
  }, 
  {
    path: '/view/evaluation-item',
    props: true,
    name: 'evaluation-item',
    component:  EvaluationItem
  }, 
  {
    path: '/view/evaluation-emp',
    props: true,
    name: 'evaluation-emp',
    component:  EvaluationEmp
  }, 
  {
    path: '/view/attendees',
    props: true,
    name: 'attendees',
    component:  Attendees
  },
  {
    path: '/view/emp-holiday',
    props: true,
    name: 'emp-holiday',
    component:  EmpHoliday
  }, 
  {
    path: '/view/formal-holiday',
    props: true,
    name: 'formal-holiday',
    component:  FormalHoliday
  }, 
  {
    path: '/view/add-holiday',
    props: true,
    name: 'add-holiday',
    component:  AddHoliday
  }, 
  {
    path: '/view/salary-details',
    props: true,
    name: 'salary-details',
    component:  SalaryDetails
  }, 
    
  {
    path: '/view/rewards-punition',
    props: true,
    name: 'rewards-punition',
    component:  RewardsPunition
  }, 
  {
    path: '/view/realliance-salary',
    props: true,
    name: 'realliance-salary',
    component:  ReallianceSalary
  }, 
  {
    path: '/view/progenitor',
    props: true,
    name: 'progenitor',
    component:  Progenitor
  }, 
  {
    path: '/view/salary-statement',
    props: true,
    name: 'salary-statement',
    component:  SalaryStatement
  }, 
  {
    path: '/view/overpayment',
    props: true,
    name: 'overpayment',
    component:  Overpayment
  }, 
  {
    path: '/view/overpayment-division',
    props: true,
    name: 'overpayment-division',
    component:  OverpaymentDivision
  }, 
  
  {
    path: '/view/emp-perissions',
    props: true,
    name: 'emp-perissions',
    component:  EmpPerissions
  }, 
  {
    path: '/view/emp-holiday-list',
    props: true,
    name: 'emp-holiday-list',
    component:  EmpHolidayList
  }, 
  {
    path: '/view/emp-setting-perissions',
    props: true,
    name: 'emp-setting-perissions',
    component:  EmpSettingPerissions
  }, 
  {
    path: '/view/calends',
    props: true,
    name: 'calends',
    component:  Calends
  }, 
  {
    path: '/view/add-calend',
    props: true,
    name: 'add-calend',
    component:  AddCalend
  }, 
  {
    path: '/view/bear-in-mind',
    props: true,
    name: 'bear-in-mind',
    component:  BearInMind
  }, 
  {
    path: '/view/emp-absence',
    props: true,
    name: 'emp-absence',
    component:  EmpAbsence
  }, 
  {
    path: '/view/cut-allowance',
    props: true,
    name: 'cut-allowance',
    component:  CutAllowance
  }, 
  {
    path: '/view/emp-pull',
    props: true,
    name: 'emp-pull',
    component:  EmpPull
  }, 

  {
    path: '/view/managaments',
    props: true,
    name: 'managaments',
    component:  Managaments
  },
  

  {
    path: '/view/student-pull',
    props: true,
    name: 'student-pull',
    component:  StudentPull
  },  
  {
    path: '/view/crideit',
    props: true,
    name: 'crideit',
    component:  Crideit
  },  
  {
    path: '/view/pay-ruls',
    props: true,
    name: 'pay-ruls',
    component:  PayRuls
  },
  {
    path: '/view/pay-classes',
    props: true,
    name: 'pay-classes',
    component:  PayClasses
  }, 
  {
    path: '/view/pay',
    props: true,
    name: 'pay',
    component:  Pay
  }, 
  {
    path: '/view/settings',
    props: true,
    name: 'settings',
    component:  Settings
  }, 
  {
    path: '/view/registration',
    props: true,
    name: 'registration',
    component:  Registration
  },  
  {
    path: '/view/recipt-settings',
    props: true,
    name: 'recipt-settings',
    component:  ReciptSettings
  },
  {
    path: '/view/dashboard',
    props: true,
    name: 'dashboard',
    component:  Dashboard
  },
  {
    path: '/view/students/add',
    props: true,
    name: 'add-student',
    component:  AddStudent,
  },
  {
    path: '/view/all-students',
    props: true,
    name: 'all-students',
    component:  AllStudents,
  },
  {
    path: '/view/edit-student/:id',
    props: true,
    name: 'edit-student',
    component:  EditStudent,
  },
  {
    path: '/view/students/add-to-class',
    props: true,
    name: 'add-to-class',
    component:  AddToClass
  },
  {
    path: '/view/parents/add',
    props: true,
    name: 'add-parent',
    component:  AddParent
  },
  {
    path: '/view/attendance',
    props: true,
    name: 'attendance',
    component:  Attendance
  },
  {
    path: '/view/Attendancec-for-class',
    props: true,
    name: 'Attendancec-for-class',
    component:  AttendanceForClass
  },
  {
    path: '/view/add-student-manual',
    props: true,
    name: 'add-student-manual',
    component:  AddStudentManual
  },
  {
    path: '/view/permissiontodepart',
    props: true,
    name: 'permissiontodepart',
    component: Permissiontodepart
  },
  {
    path: '/view/kindness',
    props: true,
    name: 'kindness',
    component:  Kindness
  }, 
  {
    path: '/view/student-transfer',
    props: true,
    name: 'student-transfer',
    component:  StudentTransfer
  },
  {
    path: '/view/empty-palce',
    props: true,
    name: 'empty-palce',
    component:  EmptyPalce
  }, 
  {
    path: '/view/record',
    props: true,
    name: 'record',
    component:  Record
  }, 
  {
    path: '/view/to-clinic',
    props: true,
    name: 'to-clinic',
    component:  ToClinic
  }, 
  {
    path: '/view/completion',
    props: true,
    name: 'completion',
    component:  Completion
  },   
  {
    path: '/view/education',
    props: true,
    name: 'education',
    component:  Education,
    // clildren: [
      
    // ]
  },
  
  {
    path: '/view/education-levels', 
    props: true,
    name: 'education-levels',
    component:  EducationLevels
  },
  {
    path: '/view/classrooms',
    props: true,
    name: 'classrooms',
    component:  Classrooms
  },
  {
    path: '/view/part-rooms',
    props: true,
    name: 'part-rooms',
    component:  PartRooms
  },
  {
    path: '/view/test',
    props: true,
    name: 'test',
    component:  Test
  },
  {
    path: '/view/dist-students',
    props: true,
    name: 'dist-students',
    component:  DistStudents
  },
  {
    path: '/view/receipts',
    props: true,
    name: 'receipts',
    component:  Receipts
  },
  {
    path: '/view/add-receipt',
    props: true,
    name: 'add-receipt',
    component:  AddReceipt
  },
  {
    path: '/view/login',
    props: true,
    name: 'login',
    component:  Login
  },
  {
    path: '/view/logout',
    props: true,
    name: 'logout',
    component:  Logout
  },
  {
    path: '/view/profile',
    props: true,
    name: 'profile',
    component:  Profile
  },
  {
    path: '/view/employees',
    props: true,
    name: 'employees',
    component:  Employees
  },
  {
    path: '/view/employees/add',
    props: true,
    name: 'add-employee',
    component:  AddEmployee
  },
  {
    path: '/view/employees/view/:id',
    props: true,
    name: 'view-employee',
    component:  viewEmployee
  },
  {
    path: '/view/soon',
    props: true,
    name: 'soon',
    component:  Soon
  },
  {
    path: '/view/redirect-me',
    redirect: '/dashbord',
  },
  // {
  //   path: '/view/*',
  //   redirect: '/view/Dashboard',
  // },
]

export default routes;


// clildren: [{
//   path: 'add',
//   props: true,
//   name: 'add-employee',
//   component:  AddEmployee,
// }]
