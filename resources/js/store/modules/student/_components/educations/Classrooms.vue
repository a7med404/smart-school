<template>
  <div>
    <section class="content-header">
      <h1>الصفوف التعلمية <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active"> الصفوف التعلمية</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">الصفوف التعلمية</h3>
          <div class="box-tools pull-right">
            <a type="button" data-toggle="modal" data-target="#popup-add-classroom" href="#" class="btn btn-sm btn-info pull-left">
              <i class="fa fa-plus"></i>  اضافة صف 
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
                      <th>اسم المرحلة التعليمية</th>
                      <th>اسم الصف</th>
                      <th>الترتيب</th>
                      <th>نهاية المرحلة</th>
                      <th>options</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Description</td>
                      <td>Description</td>
                      <td>Description</td>
                      <td>Description</td>
                      <td><a href="#" class="">Description</a></td>
                      <td>
                          <div class="btn-group">
                              <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                              <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <td>Description</td>
                      <td>Description</td>
                      <td>Description</td>
                      <td>Description</td>
                      <td><a href="#" class="">Description</a></td>
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
    </section>

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-classroom">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم المرحلة التعليمية </label>
                    <select class="form-control select2" name="level_id">
                      <option value="CA">اختيار</option>
                      <option value="TE">المسيحية</option>
                      <option value="TE">اخرى</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> الترتيب </label>
                    <input class="form-control" placeholder="" type="text" name="sort">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الصف </label>
                    <input class="form-control" placeholder="" type="text" name="name_ar">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label">
                      <input type="checkbox" class="minimal" name="is_end">
                      نهاية مرحلة
                    </label>
                  </div>
                </div> 
              </div>

              <div class="row m-t-30">
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label"> الشعبة </label>
                    <select class="form-control select2" name="division_id">
                      <option value="CA">اختيار</option>
                      <option value="TE">المسيحية</option>
                      <option value="TE">اخرى</option>
                    </select>
                  </div>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <a type="button" data-toggle="modal" data-target="#popup-add-division" href="#" class="btn btn-default">
                    <i class="fa fa-plus"></i> اضافة صف 
                  </a>

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
    <!-- ... end Popup  -->

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-division">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم المرحلة التعليمية </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> الترتيب </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الصف </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الصف بالانجليزي </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
              </div>                    
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="form-group">
                      <label class="control-label">
                        <input type="checkbox" name="is_die">
                        نهاية مرحلة
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label"> الشعبة </label>
                    <select class="form-control select2" name="martial">
                      <option value="CA">اختيار</option>
                      <option value="TE">المسيحية</option>
                      <option value="TE">اخرى</option>
                    </select>
                  </div>
                </div>

                <div class="col col-xl-6 col-lg-6 col-md-6 m-t-30">
                  <a type="button" data-toggle="modal" data-target="#popup-add-division" href="#" class="btn  btn-info">
                    <i class="fa fa-plus"></i> اضافة صف 
                  </a>
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
    <!-- ... end Popup  -->
  </div>
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>