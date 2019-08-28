<template>
  <div>
    <section class="content-header">
      <h1>طلب اخلاء طرف <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">طلب اخلاء طرف</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">طلب اخلاء طرف</h3>
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
              <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <label class="control-label"> اسم الموظف </label>
                  <select class="form-control select2" name="level_id" v-model="emp_pull.employee_id">
                      <option value="1">محمد ابراهيم ابراهيم السيد</option>
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
                <button href="#" class="btn btn-primary">بحث</button>
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
        },
      data(){ 
          return {
            edit: false,
            emp_pull: {
              id                             : '',
              employee_id                    : ''
            }

          }
        }
    }
</script>