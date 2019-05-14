(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[6],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  mounted: function mounted() {
    console.log('Component mounted.');
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=template&id=6d84a7b2&":
/*!***************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=template&id=6d84a7b2& ***!
  \***************************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("section", { staticClass: "content-header" }, [
        _c("h1", [_vm._v("دفع رسوم التسجيل  "), _c("small")]),
        _vm._v(" "),
        _c("ol", { staticClass: "breadcrumb" }, [
          _c("li", [
            _c("a", { attrs: { href: "#" } }, [_vm._v("شوؤن تعليمية")])
          ]),
          _vm._v(" "),
          _c("li", { staticClass: "active" }, [_vm._v("دفع رسوم التسجيل ")])
        ])
      ]),
      _vm._v(" "),
      _c("section", { staticClass: "content" }, [
        _c("div", { staticClass: "box box-info" }, [
          _c("div", { staticClass: "box-header with-border" }, [
            _c("h3", { staticClass: "box-title" }, [
              _vm._v("دفع رسوم التسجيل ")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "box-tools pull-right" }, [
              _c(
                "button",
                {
                  staticClass: "btn btn-box-tool",
                  attrs: {
                    type: "button",
                    "data-widget": "collapse",
                    "data-toggle": "tooltip",
                    title: "Collapse"
                  }
                },
                [_c("i", { staticClass: "fa fa-minus" })]
              ),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "btn btn-box-tool",
                  attrs: {
                    type: "button",
                    "data-widget": "remove",
                    "data-toggle": "tooltip",
                    title: "Remove"
                  }
                },
                [_c("i", { staticClass: "fa fa-times" })]
              )
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "box-body" }, [
            _c("form", { attrs: { role: "form" } }, [
              _c("div", { staticClass: "row" }, [
                _c(
                  "div",
                  { staticClass: "col col-lg-3 col-md-3 col-sm-12 col-12" },
                  [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", { staticClass: "control-label" }, [
                        _vm._v("  العام الدراسي ")
                      ]),
                      _vm._v(" "),
                      _c("select", { staticClass: "form-control select2" }, [
                        _c("option", { attrs: { value: "1" } }, [
                          _vm._v("الكل")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "0" } }, [
                          _vm._v("انثي")
                        ])
                      ])
                    ])
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col col-lg-3 col-md-3 col-sm-12 col-12" },
                  [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", { staticClass: "control-label" }, [
                        _vm._v("اسم المرحلة التعليمية")
                      ]),
                      _vm._v(" "),
                      _c("select", { staticClass: "form-control select2" }, [
                        _c("option", { attrs: { value: "1" } }, [
                          _vm._v("الكل")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "0" } }, [
                          _vm._v("انثي")
                        ])
                      ])
                    ])
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col col-lg-3 col-md-3 col-sm-12 col-12" },
                  [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", { staticClass: "control-label" }, [
                        _vm._v("اسم الصف")
                      ]),
                      _vm._v(" "),
                      _c("select", { staticClass: "form-control select2" }, [
                        _c("option", { attrs: { value: "1" } }, [
                          _vm._v("الكل")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "0" } }, [
                          _vm._v("انثي")
                        ])
                      ])
                    ])
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col col-lg-3 col-md-3 col-sm-12 col-12" },
                  [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", { staticClass: "control-label" }, [
                        _vm._v("نوع الرسوم")
                      ]),
                      _vm._v(" "),
                      _c("select", { staticClass: "form-control select2" }, [
                        _c("option", { attrs: { value: "1" } }, [
                          _vm._v("الكل")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "0" } }, [
                          _vm._v("انثي")
                        ])
                      ])
                    ])
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col col-lg-3 col-md-3 col-sm-12 col-12" },
                  [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", { staticClass: "control-label" }, [
                        _vm._v(" القيمة ")
                      ]),
                      _vm._v(" "),
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { placeholder: "", type: "text", name: "name" }
                      })
                    ])
                  ]
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "row" }, [
                _c(
                  "div",
                  { staticClass: "col col-lg-6 col-md-6 col-sm-6 col-12" },
                  [
                    _c(
                      "button",
                      { staticClass: "btn btn-primary", attrs: { href: "#" } },
                      [_vm._v("عرض")]
                    )
                  ]
                )
              ])
            ])
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/store/modules/student/_components/account/fees/Registration.vue":
/*!**************************************************************************************!*\
  !*** ./resources/js/store/modules/student/_components/account/fees/Registration.vue ***!
  \**************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Registration_vue_vue_type_template_id_6d84a7b2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Registration.vue?vue&type=template&id=6d84a7b2& */ "./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=template&id=6d84a7b2&");
/* harmony import */ var _Registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Registration.vue?vue&type=script&lang=js& */ "./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Registration_vue_vue_type_template_id_6d84a7b2___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Registration_vue_vue_type_template_id_6d84a7b2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/store/modules/student/_components/account/fees/Registration.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************!*\
  !*** ./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./Registration.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=template&id=6d84a7b2&":
/*!*********************************************************************************************************************!*\
  !*** ./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=template&id=6d84a7b2& ***!
  \*********************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Registration_vue_vue_type_template_id_6d84a7b2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./Registration.vue?vue&type=template&id=6d84a7b2& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/store/modules/student/_components/account/fees/Registration.vue?vue&type=template&id=6d84a7b2&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Registration_vue_vue_type_template_id_6d84a7b2___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Registration_vue_vue_type_template_id_6d84a7b2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);