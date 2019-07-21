<template>
  <div>
    <section class="content-header">
      <h1> Blank page <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
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
            <form role="form">
              <div class="row">
                <div class="col col-lg-3 col-md-4 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label">اسم الطالب</label>
                    <select class="form-control select2" name="mr-d">
                      <option value="1">ahmed ibrahim</option>
                      <option value="0">د /</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> الاسم </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
                <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> صلة القرابة </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> رقم اثبات السخصية </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
                <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> رقم الهاتف </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">ملاحظة</label>
                    <textarea class="form-control" placeholder="" name="note"></textarea>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">حـــفظ</button>
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