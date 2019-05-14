'use strict';
import axios from "axios";

export default function initialize(){
  axios.defaults.headers.common["Authorization"] = `Bearer `;
}

let gendars = ['انثي', 'ذكر'];
let cities = [];