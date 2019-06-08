<template>
  <div>
  <section class="content-header">
    <h1> الخط سيريين <small>  </small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
      <li><a href="#">شوؤن الخط سيريين</a></li>
      <li class="active">الخط سيريين</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">خطوط السير</h3>
        <div class="box-tools pull-right">
          <a type="button" data-toggle="modal" data-target="#popup-add-vehicle" class="btn btn-info">
            <i class="fa fa-plus"></i>  اضافة خط سير جديد
          </a>
        </div>
      </div>
    </div>
    <!-- /.box -->
    <div class="row">
      <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>اسم خط السير</th>
                    <th>من </th>
                    <th> الي</th>
                    <th>options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>1</td>
                  <td>Description</td>
                  <td>Description</td>
                  <td>Description</td>
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
                  <td>Description</td>
                  <td>Description</td>
                  <td>Description</td>
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
  </section>


  <!-- Popup  -->
  <div class="modal fade" id="popup-add-vehicle">
    <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-vehicle" aria-hidden="true">
      <div class="modal-content modal-content-box">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="title">بيانات الخط سير</h4>
        </div>
        <div class="modal-body">
          <!-- Personal Information Form  -->
          <form role="form">

            <div class="row">
              <div class="col col-lg-6 col-md-5 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> اسم الخط السير</label>
                  <input class="form-control" placeholder="" type="text" v-model="student.name">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> من </label>
                  <input class="form-control" placeholder="" type="text" v-model="student.name">
                </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> الي </label>
                  <input class="form-control" placeholder="" type="text" v-model="student.name">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">حـــفظ</button>
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
            student: {
              name                   : '',  
              religion               : '',  
              gender                 : '',  
              study_lang             : '',  
              is_partner_son         : '',  
              is_staff_son           : '',  
              identifcation_number   : '',  
              identifcation_expire   : '',  
              birthday               : '',  
              start_data             : '', 
              education_year             : '', 
              note                   : '',
              student_parent_id      : '',
              study_language_id      : '',
              address_id             : '',
              contact_id             : '',
              level_id               : '',
              classroom_id           : '',
              part_id                : ''
            },

            address: {
              street_1 : '',
              street_2 : '',
              city : '',
              local : ''
            },

            contact: {
              number_1: '',
              number_2: '',
              email: ''
            },

            health: {
              doctor_name: '',
              doctor_number: '',
              blood_type: '',
              insurance_number: '',
              health_status: ''
            },
            
          }
        },
    }
</script>

