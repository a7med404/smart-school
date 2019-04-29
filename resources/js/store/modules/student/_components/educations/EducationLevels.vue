<template>
  <div>
    <section class="content-header">
      <h1> Blank page <small> it all starts here </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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

              <a type="button" data-toggle="modal" data-target="#popup-add-level" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> اضافة مرحلة تعليمية
              </a>
            </div>
          </div>
          <div class="box-body">
              Start creating your amazing application!
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
              Footer
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
    
		<!-- Main Content -->

		<div class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid">
				<!-- Friends -->
				<div class="row">
          <div class="col col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
              <!-- Birthday Item -->
              <div class="birthday-item inline-items">
                
                  <a href="#" class="back-btn">5</a>
                <div class="birthday-author-name">
                  <a href="#" class="h6 author-name">مرحلة رياض الاطفال</a>
                  <div class="birthday-date">احمد ابراهيم</div>
                </div>
                <a href="#" class="btn btn-border-think c-grey btn-transparent custom-color"> <i class="fa fa-check"></i> </a> 
                <a href="#" class="btn btn-border-think c-grey btn-transparent custom-color m-l-10"> <i class="fa fa-times"></i> </a>
              </div>
              <!-- ... end Birthday Item -->
            </div>
          </div>
				</div>
				<!-- ... end Friends -->
			</div>
		</div>

		<!-- ... end Main Content -->

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-level">
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
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم المرحلة التعليمية </label>
                    <input class="form-control" placeholder="" type="text" name="name_ar">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم المرحلة التعليمية بالانجليزي </label>
                    <input class="form-control" placeholder="" type="text" name="name_en">
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
                    <label class="control-label"> مدير المدرسة </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> ناظر المدرسة </label>
                    <input class="form-control" placeholder="" type="text" name="name">
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