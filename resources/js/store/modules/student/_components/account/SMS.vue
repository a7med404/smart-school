<template>
  <div>
    <section class="content-header">
      <h1>ارسال رسائل SMS  <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">ارسال رسائل SMS </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">ارسال رسائل SMS </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form role="form">
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">  العام الدراسي </label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="0">2010-2011</option>
                    <option value="0">2011-2012</option>
                    <option value="0">2012-2013</option>
                    <option value="0">2013-2014</option>
                    <option value="0">2014-2015</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم المرحلة التعليمية</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="1">رياض اطفال</option>
                    <option value="0">أساس</option>
                    <option value="0">ثانوي</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم الصف</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="1">حضانة</option>
                    <option value="0">الاول</option>
                    <option value="1">الثاني</option>
                    <option value="0">الاول</option>
                    <option value="1">الثاني</option>
                    <option value="0">الثالث</option>
                    <option value="1">الرابع</option>
                    <option value="0">الخامس</option>
                    <option value="0">السادس</option>
                    <option value="1">السابع</option>
                    <option value="0">الثامن</option>
                    <option value="0">الاول</option>
                    <option value="1">الثاني</option>
                    <option value="0">الثالث</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">الفصول</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="1">ابوبكر</option>
                    <option value="0">عمر</option>
                    <option value="1">علي</option>
                    <option value="0">عثمان</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">عرض</button>
              </div>
            </div>

          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <a type="button" data-toggle="modal" data-target="#popup-add-formal" href="#" class="btn btn-sm btn-info">
            <i class="fa fa-plus"></i> ارسال رسائل
          </a>
          <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
              <thead>
                  <tr>
                      <th>#ID</th>
                      <th>اسم الطالب</th>
                      <th>المرحلة التعليمية</th>
                      <th>الصف</th>
                      <th>الفصل</th>
                      <th>الاجمالي</th>
                      <th>مدفوع</th>
                      <th>خصم</th>
                      <th>الباقى</th>
                      <th>options</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>محمد عبد الرحمن علي</td>
                      <td>اساس</td>
                      <td>الثامن</td>
                      <td>10000</td>
                      <td>6000</td>
                      <td>2000</td>
                      <td>2000</td>
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
                      <td>2</td>
                      <td>علي عبد الرحمن علي</td>
                      <td>اساس</td>
                      <td>السابع</td>
                      <td>10000</td>
                      <td>6000</td>
                      <td>2000</td>
                      <td>2000</td>
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
    <div class="modal fade" id="popup-add-formal">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form" class="m-t-20">
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label m-l-10">
                      <input type="checkbox" class="minimal">
                      الي الطالب  
                    </label>
                    <label class="control-label m-l-10">
                      <input type="checkbox" class="minimal">
                      الي ولي الامر 
                    </label>
                    <label class="control-label m-l-10">
                      <input type="checkbox" class="minimal">
                      الي الام 
                    </label>
                    <label class="control-label m-l-10">
                      <input type="checkbox" class="minimal">
                      الي رقم الطوارئ 
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> نص الرسالة</label>
                    <textarea class="form-control" placeholder="" name="note"></textarea>
                  </div>
                  <p class="help-block">حد الرسالة 70 حرف</p>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">ارسال</button>
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