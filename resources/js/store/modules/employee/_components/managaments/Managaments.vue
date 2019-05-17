<template>
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        الهيكل الاداري 
        <!-- <small>13 new messages</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"> الهيكل الاداري </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
          <div class="box-body">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#admins" data-toggle="tab">الادارة</a></li>
                <li><a href="#department" data-toggle="tab">الاقسام</a></li>
                <li><a href="#specialty" data-toggle="tab">التخصصات</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="admins" role="tabpanel" aria-expanded="true">

                  <div class="box-tools">
                    <a type="button" data-toggle="modal" data-target="#popup-add-admins" class="btn btn-info m-t-20 m-b-10">
                      <i class="fa fa-plus"></i>  اضافة جديد
                    </a>
                  </div>
                  <!-- /.box -->
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th>اسم الادارة </th>
                                  <th>options</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>1</td>
                                <td>ادارة الحسابات</td>
                                <td>
                                  <div class="btn-group">
                                    <router-link :to="{name: 'view-vehicle', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                                    <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>الادارة التعليمية</td>
                                <td>
                                  <div class="btn-group">
                                    <router-link :to="{name: 'view-vehicle', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                                    <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                  </div>
                                </td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                  </div>

                </div>
                <div class="tab-pane" id="department" role="tabpanel" aria-expanded="true">

                  <div class="box-tools">
                    <a type="button" data-toggle="modal" data-target="#popup-add-department" class="btn btn-info m--20 m-t-20 m-b-10">
                      <i class="fa fa-plus"></i>  اضافة جديد
                    </a>
                  </div>
                  <!-- /.box -->
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th>اسم الادارة </th>
                                  <th>اسم القسم </th>
                                  <th>options</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>1</td>
                                <td>الادارة التعليمية</td>
                                <td>المعلمين</td>
                                <td>
                                  <div class="btn-group">
                                    <router-link :to="{name: 'view-vehicle', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                                    <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>ادارة الحسابات</td>
                                <td>قسم الحسابات العامة</td>
                                <td>
                                  <div class="btn-group">
                                    <router-link :to="{name: 'view-vehicle', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                                    <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                  </div>
                                </td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="specialty" role="tabpanel" aria-expanded="true">
                  <div class="box-tools">
                    <a type="button" data-toggle="modal" data-target="#popup-add-specialty" class="btn btn-info m-t-20 m-b-10">
                      <i class="fa fa-plus"></i>  اضافة جديد
                    </a>
                  </div>
                  <!-- /.box -->
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th>اسم التخصص </th>
                                  <th>options</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>1</td>
                                <td>مدرس انجليزى</td>
                                <td>
                                  <div class="btn-group">
                                    <router-link :to="{name: 'view-vehicle', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                                    <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>وكيل مالى وإدارى</td>
                                <td>
                                  <div class="btn-group">
                                    <router-link :to="{name: 'view-vehicle', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                                    <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>وكيل شئون مالية وحسابات</td>
                                <td>
                                  <div class="btn-group">
                                    <router-link :to="{name: 'view-vehicle', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                                    <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>مشرف رياض أطفال</td>
                                <td>
                                  <div class="btn-group">
                                    <router-link :to="{name: 'view-vehicle', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                                    <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                  </div>
                                </td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- /.box -->
    </section>

  <!-- Popup  -->
  <div class="modal fade" id="popup-add-admins">
    <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-admins" aria-hidden="true">
      <div class="modal-content modal-content-box">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="title"> الادارة</h4>
        </div>
        <div class="modal-body">
          <!-- Personal Information Form  -->
          <form role="form">

            <div class="row">
              <div class="col col-lg-6 col-md-5 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> اسم الادارة</label>
                  <input class="form-control" placeholder="" type="text" v-model="managament.name">
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
          <!-- ... end Personal Information Form  -->

        </div>
      </div>
    </div>
  </div>
  <!-- ... end Popup  -->

  <!-- Popup  -->
  <div class="modal fade" id="popup-add-department">
    <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-department" aria-hidden="true">
      <div class="modal-content modal-content-box">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="title">بيانات القسم</h4>
        </div>
        <div class="modal-body">
          <!-- Personal Information Form  -->
          <form role="form">

            <div class="row">
              <div class="col col-lg-6 col-md-5 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم الادارة</label>
                  <select class="form-control select2" v-model="department.managament_id">
                    <option value="CA">الاسلام</option>
                    <option value="TE">المسيحية</option>
                    <option value="TE">اخرى</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> اسم القسم </label>
                  <input class="form-control" placeholder="" type="text" v-model="department.name">
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
          <!-- ... end Personal Information Form  -->

        </div>
      </div>
    </div>
  </div>
  <!-- ... end Popup  -->

  <!-- Popup  -->
  <div class="modal fade" id="popup-add-specialty">
    <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-specialty" aria-hidden="true">
      <div class="modal-content modal-content-box">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="title"> التخصص</h4>
        </div>
        <div class="modal-body">
          <!-- Personal Information Form  -->
          <form role="form">

            <div class="row">
              <div class="col col-lg-6 col-md-5 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> اسم التخصص</label>
                  <input class="form-control" placeholder="" type="text" v-model="specialty.name">
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
          <!-- ... end Personal Information Form  -->

        </div>
      </div>
    </div>
  </div>
  <!-- ... end Popup  -->


   </div>
</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }
        data(){ 
          return {
            managament:{
              name                   : ''
            },
            department:{
              managament_id              : '',
              name                   : ''
            },
            specialty:{
              name                   : ''
            },
            
          }
        },
    }
</script>

