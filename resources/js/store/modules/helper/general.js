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
  
  religions: {
      1 : 'الاسلام',
      2 : 'المسيحية',
      3 : 'اخري',
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