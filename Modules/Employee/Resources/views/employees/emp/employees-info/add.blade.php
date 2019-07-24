
          <!-- Popup  -->
          <div class="modal fade" id="popup-add-employee">
                <div class="modal-dialog modal-lg"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-employee" aria-hidden="true">
                  <div class="modal-content modal-content-box">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="title">بيانات الموظف</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs pull-right">
                            <li class="active"><a href="#info" data-toggle="tab">بيانات عامة</a></li>
                            <li><a href="#salary" data-toggle="tab"> اعدادات  الراتب</a></li>
                            <li><a href="#address" data-toggle="tab">عنوان الموظف</a></li>
                            <li><a href="#contact" data-toggle="tab">بيانات الاتصال</a></li>
                            <li><a href="#certificats" data-toggle="tab"> الشهادات التعليميه</a></li>
                            <li><a href="#auth" data-toggle="tab"> بيانات الدخول</a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="info">
                              <p>بيانات عامة:</p>
                                <!-- Personal Information Form  -->
                                <form role="form">
                                  <div class="row">
                                    <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label"> اسم الموظف كامل </label>
                                        <input class="form-control" placeholder="" type="text" >
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">النوع</label>
                                        <select class="form-control select2" >
                                          <option value="1">ذكر</option>
                                          <option value="0">انثي</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">الديانة</label>
                                        <select class="form-control select2">
                                          <option value="CA">الاسلام</option>
                                          <option value="TE">المسيحية</option>
                                          <option value="TE">اخرى</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">تاريخ الميلاد</label>
                                        <input type="text" class="form-control" id="birthday"/>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">اسم الادارة</label>
                                        <select class="form-control select2" >
                                          <option value="CA">التعلبم</option>
                                          <option value="TE">الحسابات</option>
                                          <option value="TE">شؤون الموظفين</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">التخصص</label>
                                        <select class="form-control select2">
                                          <option value="CA">مدرس</option>
                                          <option value="TE">موظف</option>
                                          <option value="TE">عامل</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">تاريخ التعيين</label>
                                        <input type="text" class="form-control" id="birthday" />
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                            <label class="control-label"> المسمي الوظيفي </label>
                                            <input class="form-control" placeholder="" type="text">
                                      </div>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label"> الحالة الاجنماعية </label>
                                        <select class="form-control select2" name="martial">
                                            <option value="CA">عازب</option>
                                            <option value="TE">متزوج</option>
                                            <option value="TE">مطلق</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">تاريخ استلام العمل</label>
                                        <input type="text" class="form-control" id="birthday"/>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">سنة </label>
                                        <select class="form-control select2">
                                          <option value="CA">2013/2014</option>
                                          <option value="TE">2014/2015</option>
                                          <option value="TE">2015/2016</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="form-group">
                                            <div class="btn btn-default btn-file">
                                                <label class="control-label"><i class="fa fa-paperclip"></i> الصىورة الشخصية </label>
                                                <input class="form-control" placeholder="" type="file">
                                            </div>
                                            <p class="help-block">Max. 4MB</p>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">ملاحظة</label>
                                        <textarea class="form-control" placeholder=""></textarea>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                      <button class="btn btn-primary btn-md">حفــظ</button>
                                    </div>
                                  </div>
                                </form>
                                <!-- ... end Personal Information Form  -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="address">
                              <form role="form">
                                <p class="title"> عنوان الموظف</p>
                                <div class="row">
                                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label">الشارع 1 </label>
                                      <input class="form-control" placeholder="" type="text">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label">الشارع 2 </label>
                                      <input class="form-control" placeholder="" type="text">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label">المدينة</label>
                                      <select class="form-control select2">
                                        <option value="1">الخرطوم</option>
                                        <option value="0">بحري</option>
                                        <option value="0">امدرمان</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label">المحلية</label>
                                      <select class="form-control select2">
                                        <option value="1">الخرطوم</option>
                                        <option value="0">جبل اولياء</option>
                                        <option value="1">شرق النيل</option>
                                        <option value="0">امدرمان</option>
                                        <option value="0">كرري</option>
                                        <option value="0">الثورة</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label">رقم المنزل </label>
                                      <input class="form-control" placeholder="" type="text"  name="home_number">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary btn-md">حفــظ</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="contact">
                              <form role="form">
                                <p class="title"> بيانات الاتصال</p>
                                <div class="row">
                                  <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label">تلفون الموظف </label>
                                      <input class="form-control" placeholder="" type="text">
                                    </div>
                                  </div>
                                  <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label">تلفون الطواري </label>
                                      <input class="form-control" placeholder="" type="text">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label"> البريد الالكتروني </label>
                                      <input class="form-control" placeholder="" type="text">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary btn-md">حفــظ</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="certificats">
                              <form role="form">
                                <p class="title"> الشهادات التعليميه</p>
                                <div class="row">
                                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label"> اسم المؤهل </label>
                                      <input class="form-control" placeholder="" type="text">
                                    </div>
                                  </div>
                                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label"> جهة الحصول علي المؤهل  </label>
                                      <input class="form-control" placeholder="" type="text" >
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label"> النوع </label>
                                      <select class="form-control select2" >
                                        <option value="1">بكالوريوس</option>
                                        <option value="0">دبلوم</option>
                                        <option value="1">بكالوريوس شرف</option>
                                        <option value="0"> دبلوم عالي</option>
                                        <option value="1"> ماجستير</option>
                                        <option value="0"> دكتوراة </option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label">التحصص</label>
                                      <input class="form-control" placeholder="" type="text" name="insurance_number">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label"> التقدير </label>
                                      <select class="form-control select2">
                                        <option value="1">امتياز</option>
                                        <option value="0">جيد جدا</option>
                                        <option value="1">جيد</option>
                                        <option value="0">مقبول </option>
                                      </select>
                                    </div>
                                  </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="form-group">
                                        <label class="control-label">تاريخ الحصول المؤهل</label>
                                        <input type="text" class="form-control" id="birthday"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group">
                                      <label class="control-label"> عدد سنوات الخبرة </label>
                                      <select class="form-control select2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="1">3</option>
                                        <option value="2">اكثر</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>


                                <div class="row">
                                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary btn-md">حفــظ</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="salary">
                              <form role="form">
                                <p class="title"> اعدادات  الراتب</p>
                                  <div class="row">
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label">  الراتب الاساسي  </label>
                                        <input class="form-control" placeholder="" type="text">
                                      </div>
                                    </div>
                                  </div>
                                <div class="row">
                                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary btn-md">حفــظ</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="auth">
                              <form role="form">
                                <p class="title"> بيانات الدخول</p>
                                  <div class="row">
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label"> اسم المستخدم  </label>
                                        <input class="form-control" placeholder="" type="text">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label"> كلمة المرور</label>
                                        <input class="form-control" placeholder="" type="password" >
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label class="control-label"> تاكيد كلمة المرور</label>
                                        <input class="form-control" placeholder="" type="password">
                                      </div>
                                    </div>
                                  </div>
                                <div class="row">
                                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary btn-md">حفــظ</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- /.tab-pane -->
                          </div>
                          <!-- /.tab-content -->
                        </div>
                        <!-- nav-tabs-custom -->


                    </div>
                  </div>
                </div>
              </div>

  <!-- Popup  -->
  <div class="modal fade" id="popup-add-employee">
        <div class="modal-dialog modal-lg"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-employee" aria-hidden="true">
          <div class="modal-content modal-content-box">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="title">بيانات الموظف</h4>
            </div>
            <div class="modal-body">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#info" data-toggle="tab">بيانات عامة</a></li>
                    <li><a href="#salary" data-toggle="tab"> اعدادات  الراتب</a></li>
                    <li><a href="#address" data-toggle="tab">عنوان الموظف</a></li>
                    <li><a href="#contact" data-toggle="tab">بيانات الاتصال</a></li>
                    <li><a href="#certificats" data-toggle="tab"> الشهادات التعليميه</a></li>
                    <li><a href="#auth" data-toggle="tab"> بيانات الدخول</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="info">
                      <p>بيانات عامة:</p>
                        <!-- Personal Information Form  -->
                        <form role="form">
                          <div class="row">
                            <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label"> اسم الموظف كامل </label>
                                <input class="form-control" placeholder="" type="text" >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">النوع</label>
                                <select class="form-control select2" >
                                  <option value="1">ذكر</option>
                                  <option value="0">انثي</option>
                                </select>
                              </div>
                            </div>
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">الديانة</label>
                                <select class="form-control select2">
                                  <option value="CA">الاسلام</option>
                                  <option value="TE">المسيحية</option>
                                  <option value="TE">اخرى</option>
                                </select>
                              </div>
                            </div>
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">تاريخ الميلاد</label>
                                <input type="text" class="form-control" id="birthday"/>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">اسم الادارة</label>
                                <select class="form-control select2" >
                                  <option value="CA">التعلبم</option>
                                  <option value="TE">الحسابات</option>
                                  <option value="TE">شؤون الموظفين</option>
                                </select>
                              </div>
                            </div>
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">التخصص</label>
                                <select class="form-control select2">
                                  <option value="CA">مدرس</option>
                                  <option value="TE">موظف</option>
                                  <option value="TE">عامل</option>
                                </select>
                              </div>
                            </div>
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">تاريخ التعيين</label>
                                <input type="text" class="form-control" id="birthday" />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                    <label class="control-label"> المسمي الوظيفي </label>
                                    <input class="form-control" placeholder="" type="text">
                              </div>
                            </div>
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label"> الحالة الاجنماعية </label>
                                <select class="form-control select2" name="martial">
                                    <option value="CA">عازب</option>
                                    <option value="TE">متزوج</option>
                                    <option value="TE">مطلق</option>
                                </select>
                              </div>
                            </div>
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">تاريخ استلام العمل</label>
                                <input type="text" class="form-control" id="birthday"/>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">سنة </label>
                                <select class="form-control select2">
                                  <option value="CA">2013/2014</option>
                                  <option value="TE">2014/2015</option>
                                  <option value="TE">2015/2016</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <div class="btn btn-default btn-file">
                                        <label class="control-label"><i class="fa fa-paperclip"></i> الصىورة الشخصية </label>
                                        <input class="form-control" placeholder="" type="file">
                                    </div>
                                    <p class="help-block">Max. 4MB</p>
                                </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">ملاحظة</label>
                                <textarea class="form-control" placeholder=""></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                              <button class="btn btn-primary btn-md">حفــظ</button>
                            </div>
                          </div>
                        </form>
                        <!-- ... end Personal Information Form  -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="address">
                      <form role="form">
                        <p class="title"> عنوان الموظف</p>
                        <div class="row">
                          <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label">الشارع 1 </label>
                              <input class="form-control" placeholder="" type="text">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label">الشارع 2 </label>
                              <input class="form-control" placeholder="" type="text">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label">المدينة</label>
                              <select class="form-control select2">
                                <option value="1">الخرطوم</option>
                                <option value="0">بحري</option>
                                <option value="0">امدرمان</option>
                              </select>
                            </div>
                          </div>
                          <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label">المحلية</label>
                              <select class="form-control select2">
                                <option value="1">الخرطوم</option>
                                <option value="0">جبل اولياء</option>
                                <option value="1">شرق النيل</option>
                                <option value="0">امدرمان</option>
                                <option value="0">كرري</option>
                                <option value="0">الثورة</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label">رقم المنزل </label>
                              <input class="form-control" placeholder="" type="text"  name="home_number">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-primary btn-md">حفــظ</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="contact">
                      <form role="form">
                        <p class="title"> بيانات الاتصال</p>
                        <div class="row">
                          <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label">تلفون الموظف </label>
                              <input class="form-control" placeholder="" type="text">
                            </div>
                          </div>
                          <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label">تلفون الطواري </label>
                              <input class="form-control" placeholder="" type="text">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label"> البريد الالكتروني </label>
                              <input class="form-control" placeholder="" type="text">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-primary btn-md">حفــظ</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="certificats">
                      <form role="form">
                        <p class="title"> الشهادات التعليميه</p>
                        <div class="row">
                          <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label"> اسم المؤهل </label>
                              <input class="form-control" placeholder="" type="text">
                            </div>
                          </div>
                          <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label"> جهة الحصول علي المؤهل  </label>
                              <input class="form-control" placeholder="" type="text" >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label"> النوع </label>
                              <select class="form-control select2" >
                                <option value="1">بكالوريوس</option>
                                <option value="0">دبلوم</option>
                                <option value="1">بكالوريوس شرف</option>
                                <option value="0"> دبلوم عالي</option>
                                <option value="1"> ماجستير</option>
                                <option value="0"> دكتوراة </option>
                              </select>
                            </div>
                          </div>
                          <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label">التحصص</label>
                              <input class="form-control" placeholder="" type="text" name="insurance_number">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label"> التقدير </label>
                              <select class="form-control select2">
                                <option value="1">امتياز</option>
                                <option value="0">جيد جدا</option>
                                <option value="1">جيد</option>
                                <option value="0">مقبول </option>
                              </select>
                            </div>
                          </div>
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group">
                                <label class="control-label">تاريخ الحصول المؤهل</label>
                                <input type="text" class="form-control" id="birthday"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                              <label class="control-label"> عدد سنوات الخبرة </label>
                              <select class="form-control select2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="1">3</option>
                                <option value="2">اكثر</option>
                              </select>
                            </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-primary btn-md">حفــظ</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="salary">
                      <form role="form">
                        <p class="title"> اعدادات  الراتب</p>
                          <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">  الراتب الاساسي  </label>
                                <input class="form-control" placeholder="" type="text">
                              </div>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-primary btn-md">حفــظ</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="auth">
                      <form role="form">
                        <p class="title"> بيانات الدخول</p>
                          <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label"> اسم المستخدم  </label>
                                <input class="form-control" placeholder="" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label"> كلمة المرور</label>
                                <input class="form-control" placeholder="" type="password" >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label"> تاكيد كلمة المرور</label>
                                <input class="form-control" placeholder="" type="password">
                              </div>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-primary btn-md">حفــظ</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div></div></div></div>
