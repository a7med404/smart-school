<template>
  <div>
    <section class="content-header">
      <h1>تقرير غياب الموظفين <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">تقرير غياب الموظفين</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">تقرير غياب الموظفين</h3>
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
                  <label class="control-label">الادارة التعليمية</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                      <option value="CA">التعلبم</option>
                      <option value="TE">الحسابات</option>
                      <option value="TE">شؤون الموظفين</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم القسم</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="CA">مدرس</option>
                    <option value="TE">موظف</option>
                    <option value="TE">عامل</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم الموظف</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="1">احمد محمد احمد علي</option>
                    <option value="0">عباس الخير عبد الرحمن محمد</option>
                    <option value="1">الفاضل محمد عثمان بلال</option>
                    <option value="0">معتز احمد محمد حنفي</option>
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
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>

  </div>
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>