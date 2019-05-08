<template>
  <div>
  <section class="content-header">
    <h1> المحطات <small>  </small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
      <li><a href="#"> المحطات الحافلة</a></li>
      <li class="active">المحطات</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">المحطات</h3>
        <div class="box-tools pull-right">
          <a type="button" data-toggle="modal" data-target="#popup-add-station" class="btn btn-info">
            <i class="fa fa-plus"></i>  اضافة محطة جديد
          </a>
        </div>
      </div>
    </div>
    <!-- /.box -->
    <div class="row">
      <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <table class="table table-striped table-bordered table-hover full-width" id="table_id">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>اسم المحطة</th>
                    <th>اسم الخط</th>
                    <th>القيم</th>
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
                      <router-link :to="{name: 'view-station', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-station"><i class="fa fa-pencil"></i></a>
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
                      <router-link :to="{name: 'view-station', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-station"><i class="fa fa-pencil"></i></a>
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
  <div class="modal fade" id="popup-add-station">
    <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-station" aria-hidden="true">
      <div class="modal-content modal-content-box">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="title">بيانات المحطة</h4>
        </div>
        <div class="modal-body">
          <!-- Personal Information Form  -->
          <form role="form" @submit.prevent = "edit ? updateStation(station.id) : createStation()">

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم الخط</label>
                  <select class="form-control select2" v-model="station.route_id">
                    <option value="CA">الخرطوم</option>
                    <option value="TE">المسيحية</option>
                    <option value="TE">اخرى</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> اسم المحطة </label>
                  <input class="form-control" placeholder="" type="text" v-model="station.name">
                </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> القيمة </label>
                  <input class="form-control" placeholder="" type="text" v-model="station.cost">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">اضافة</button>
                <button href="#" class="btn btn-primary" v-click="onSubmit">اضافة</button>
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
            edit: false,
            station: {
              name                   : '',  
              route_id               : '',  
              cost                 : '',  
              study_lang             : '',  
              is_partner_son         : '',  

            },

          }
        },
        methods() {
          function onSubmit() {
            alert("fghjkl");
            let self = this;
            let params = Object.assign({}, self.station);
          }
        }
    }
</script>

