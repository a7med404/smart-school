// 'use strict';
// import axios from "axios";

// export default function initialize(){
//   axios.defaults.headers.common["Authorization"] = `Bearer `;
// }

// let gendars = ['انثي', 'ذكر'];
// let cities = [];
import Vue from "vue";
export const globalStore = {

  genders : {
      0 : 'انثي',
      1 : 'ذكر',
  },
//   genders: [
//     { value: 'انثي', index: '0' },
//     { value: 'ذكر', index: '1' },
//   ],

  valueOrPersentages : {
      0 : 'القيمة',
      1 : 'نسبه',
  },

  offPrints : {
      1 : 'شهادة قيد طالب',
      2 : 'شهادة حسن سير وسلوك',
      3 : 'مخالصة بمصروفات طالب',
  },

  is_mandataries : {
      0 : 'غير إجباري',
      1 : 'إجباري',
  },
  
  religions: {
      1 : 'الاسلام',
      2 : 'المسيحية',
      3 : 'اخري',
  },

  payment_statuses : {
      1 : 'لم يدفع بعد',
      2 : 'جزئي',
      3 : 'كامل',
  },

  identifcation_types : {
      1 : 'جواز سفر',
      2 : 'رقم وطني',
      3 : 'بطاقة قومية',
  },

  blood_types: {
      1 : 'O+',
      2 : 'O-',
      3 : 'A+',
      4 : 'A-',
      5 : 'B+',
      6 : 'B-',
      7 : 'AB+',
      8 : 'AB-',
  },

  
  mr_ds : {
      1 : 'السيد',
      2 : 'السيدة',
      3 : '\د',
      4 : '\أ',
      5 : '\بروف',
   },

  relations : {
      1 : 'أب',
      2 : 'ام',
      3 : 'خال',
      4 : 'عم',
      5 : 'خالة',
      6 : 'عمة',
      7 : 'احرى',
   },

  nationalities : {
      1 : 'السودان',
      2 : 'جنوب السودان',
      3 : 'مصر',
      4 : 'اثيوبيا',
      5 : 'اريتريا',
      6 : 'سوريا',
      7 : 'احرى',
   },

  martials : {
      1 : 'متزوج',
      2 : ' عازب',
      3 : 'مطلق',
      4 : 'ارمل',
   },

  is_dies : {
      0 : 'حي',
      1 : 'ميت',
   },

  agreementTypes : {
      1 : 'مؤقت',
      2 : ' دائم',
      3 : ' تعاقد',
  },

  job_titles : {
      1 : 'موظف',
      2 : ' معلم',
      3 : ' عامل',
  },


  safes : {
      1 : 'بنك الخرطوم',
      2 : ' بنك فيصل الاسلامي ',
      3 : 'بنك الخليج',
      4 : ' بنك الثروة الحيوانية',
      5 : ' بنك العمال ',
  },

  RewardsPunitions : {
      0 : 'مكافأة ',
      1 : 'خصم',
  },

  calendTypes : {
      1 : 'مخالفات متعلقة بنظام العمل ',
      2 : 'مخالفات متعلقة بسلوك العمل',
      3 : 'مخالفات متعلقة بمواعيد العمل',
  },
  attendanceStatuses : {
      1 : 'حاضر',
      2 : 'غائب',
      3 : 'اخرى',
  },

  is_partner_sons : {
      0 : 'لا',
      1 : 'نعم',

  },

  is_staff_sons : {
      0 : 'لا',
      1 : 'نعم',
  },

  certificateDegrees : {
      1 : 'إمتياز',
      2 : 'جيد جدا',
      3 : 'جيد',
      4 : 'مقبول',
      5 : 'ضعيف',
  },

  certificateTypes : {

      1 : 'دبلوم',
      2 : 'بكلاريوس ',
      3 : 'دبلوم عالي',
      4 : 'ماجستير',
      5 : 'دكتوراة',
      5 : 'الاستاذية',
      5 : 'اخرى',
  },

  experience_years : {
       1 : '1',
       2 : '2 ',
       3 : '3',
       4 : '4',
       5 : '5',
       5 : '6',
       5 : 'اخرى',
   },

  cities: {
      1 : 'الفاشر',
      2 : 'القضارف',
      3 : 'عطبرة',
      4 : 'بابنوسة',
  },

  locals: {
      1 : {1 : 'الفاشر', 2 : 'الطينة', 3 : 'كرنوي',},
      2 : 'القضارف',
      3 : 'عطبرة',
      4 : 'بابنوسة',
  },


}