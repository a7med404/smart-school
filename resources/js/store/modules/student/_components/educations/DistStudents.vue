<template>
  <div>
    <div class="col-lg-12 float-right">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="\">HOME</a></li>
        <li><i class="fa fa-laptop"></i>DASHBOARD</li>
      </ol>
    </div>


    <div class="container">
      <div class="">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="ui-block responsive-flex">
            <div class="ui-block-title">
              <div class="h6 title">الصفوف التعليمية (1)</div>
            </div>
          </div>
        </div>
      </div>
    </div>


        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="ui-block">
            <div class="ui-block-content">
              <form role="form">

                <div class="row">
                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">القسم</label>
                      <select class="form-control select2">
                        <option value="1">الخرطوم</option>
                        <option value="0">انثي</option>
                      </select>
                    </div>
                  </div>
                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">المرحلة التعليمية</label>
                      <select class="form-control select2">
                        <option value="1">الخرطوم</option>
                        <option value="0">انثي</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">اسم الصف</label>
                      <select class="form-control select2">
                        <option value="1">الخرطوم</option>
                        <option value="0">انثي</option>
                      </select>
                    </div>
                  </div>
                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">الترتيب حسب السن</label>
                      <select class="form-control select2">
                        <option value="1">الخرطوم</option>
                        <option value="0">انثي</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                    <button href="#" class="btn btn-primary">اضافة</button>
                  </div>
                </div>

              </form>

              <!-- News Feed Form  -->
              <div class="news-feed-form m-t-30">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active inline-items" data-toggle="tab" href="#manual" role="tab" aria-expanded="true">
                      <svg class="olymp-status-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-status-icon"></use></svg>
                      <span> توزيع يدوي </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link inline-items" data-toggle="tab" href="#random" role="tab" aria-expanded="false">
                      <svg class="olymp-multimedia-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-multimedia-icon"></use></svg>
                      <span>توزيع عشوائي </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link inline-items" data-toggle="tab" href="#alphabetic" role="tab" aria-expanded="false">
                      <svg class="olymp-blog-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-blog-icon"></use></svg>
                      <span> توزيع ابجدي </span>
                    </a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="manual" role="tabpanel" aria-expanded="true">
                    <div class="">
                      <div class="ui-block-content">
                        <!-- Personal Information Form  -->
                        <a type="button" data-toggle="modal" data-target="#popup-add-manual" href="#" class="btn btn-blue btn-md-2">توزيع</a>
                        <!-- ... end Personal Information Form  -->
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="random" role="tabpanel" aria-expanded="true">
                    <div class="">
                      <div class="ui-block-content">
                        <!-- Personal Information Form  -->
                        <a type="button" data-toggle="modal" data-target="#popup-add-random" href="#" class="btn btn-blue btn-md-2">توزيع</a>
                        <!-- ... end Personal Information Form  -->
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="alphabetic" role="tabpanel" aria-expanded="true">
                    <div class="">
                      <div class="ui-block-content">
                        <!-- Personal Information Form  -->
                        <a type="button" data-toggle="modal" data-target="#popup-add-alphabetic" href="#" class="btn btn-blue btn-md-2">توزيع</a>
                        <!-- ... end Personal Information Form  -->
                      </div>
                    </div>
                  </div>

                </div>


                <!-- Popup Write Rewiev -->
                <div class="modal fade" id="popup-add-manual">
                  <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content modal-content-box">
                      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                      </a>
                      <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                        <h6 class="title">بيانات </h6>
                      </div>
                      <div class="modal-body">
                        <form role="form">
                          <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label"> اسم الصف </label>
                                <select class="form-control select2" name="martial">
                                  <option value="CA">اختيار</option>
                                  <option value="TE">المسيحية</option>
                                  <option value="TE">اخرى</option>
                                </select>
                              </div>
                            </div>
                          </div>           
                          <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                              <button href="#" class="btn btn-primary">اضافة</button>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ... end Popup Write Rewiev -->

                <!-- Popup Write Rewiev -->
                <div class="modal fade" id="popup-add-random">
                  <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content modal-content-box">
                      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                      </a>
                      <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                        <h6 class="title">بيانات </h6>
                      </div>
                      <div class="modal-body">
                        <form role="form">
                          <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label"> اسم الصف </label>
                                <select class="form-control select2" name="martial">
                                  <option value="CA">اختيار</option>
                                  <option value="TE">المسيحية</option>
                                  <option value="TE">اخرى</option>
                                </select>
                              </div>
                            </div>
                          </div>           
                          <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                              <button href="#" class="btn btn-primary">اضافة</button>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ... end Popup Write Rewiev -->

                <!-- Popup Write Rewiev -->
                <div class="modal fade" id="popup-add-alphabetic">
                  <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content modal-content-box">
                      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                      </a>
                      <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                        <h6 class="title">بيانات </h6>
                      </div>
                      <div class="modal-body">
                        <form role="form">
                          <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label"> اسم الصف </label>
                                <select class="form-control select2" name="martial">
                                  <option value="CA">اختيار</option>
                                  <option value="TE">المسيحية</option>
                                  <option value="TE">اخرى</option>
                                </select>
                              </div>
                            </div>
                          </div>           
                          <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                              <button href="#" class="btn btn-primary">اضافة</button>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ... end Popup Write Rewiev -->

              </div>
            </div>
          </div>
        </div>
		<!-- Main Content -->


  </div>
</template>

<script>
// require(['../../../../../../public/modules/master/js/bootstrap-select.js']);
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>