<template>
  <div>
    <section class="content-header">
      <h1>اعدادات الخصومات <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">اعدادات الخصومات</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">اعدادات الخصومات</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#siblings" data-toggle="tab">خصم للاخوة</a></li>
                  <li><a href="#parents" data-toggle="tab">خصم ابناء عامليين</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="siblings">
                    <p>بيانات خصم للاخوة:</p>
                    <a type="button" data-toggle="modal" data-target="#popup-add-siblings" href="#" class="btn btn-info">اضافة</a>
                    <div class="row">
                      <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>القيمة</th>
                                    <th>النوع</th>
                                    <th>الترتيب</th>
                                    <th>options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>50</td>
                                    <td>%</td>
                                    <td>الثاني</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                            <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>30</td>
                                    <td>%</td>
                                    <td>الاول</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                            <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parents">
                    <p>بيانات خصم ابناء عامليين:</p>
                    <a type="button" data-toggle="modal" data-target="#popup-add-parents" href="#" class="btn btn-info">اضافة</a>
                    <div class="row">
                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>عدد سنوات الخبره</th>
                                    <th>القيمة</th>
                                    <th>نسبه</th>
                                    <th>options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>5</td>
                                    <td>500</td>
                                    <td>...</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                            <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>...</td>
                                    <td>30%</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                            <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        </div>
                      </div>
                    </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-parents">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> القيمة </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="discount_setting_parent.value">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> عدد سنوات الخبره </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="discount_setting_parent.experience_years">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">
                      <input type="checkbox" class="minimal" v-model="discount_setting_parent.type">
                      نسبة
                    </label>
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
        </div>
      </div>
    </div>
    <!-- ... end Popup  -->


    <!-- Popup  -->
    <div class="modal fade" id="popup-add-siblings">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الترتيب</label>
                    <select class="form-control select2" name="addToClass.level_id" v-model="discount_setting_sibling.ranking">
                      <option selected="selected" value="1">الاول</option>
                      <option value="2">الثاني</option>
                      <option value="3">الثالث</option>
                      <option value="4">الرابع</option>
                      <option value="5">الخامس</option>
                      <option value="6">السادس</option>
                      <option value="7">السابع</option>
                      <option value="8">الثامن</option>
                      <option value="9">التاسع</option>
                      <option value="10">العاشر</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> القيمة </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="discount_setting_sibling.value">
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label m-l-10">
                        <input type="checkbox" class="minimal" v-model="discount_setting_sibling.type">
                        نسبة
                      </label>
                    </div>
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
        </div>
      </div>
    </div>
    <!-- ... end Popup  -->

  </div>
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){ 
            return {
              discount_setting_sibling: {
                ranking         : '',
                value           : '',
                type            : ''
               },
              discount_setting_parent: {
                value                  : '',
                experience_years       : '',
                type                   : ''
              }
            }
        }
    }
</script>