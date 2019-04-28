<template>
  <div>
    <div class="col-lg-12 float-right">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="\">HOME</a></li>
        <li><i class="fa fa-laptop"></i>DASHBOARD</li>
      </ol>
    </div>


    <div class="container">
      <div class="">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="ui-block responsive-flex">
            <div class="ui-block-title">
              <div class="h6 title">المراحل التعليمية (1)</div>
              <a type="button" data-toggle="modal" data-target="#popup-add-level" href="#" class="btn btn-sm btn-breez pull-left">
                <i class="fa fa-plus"></i>
               اضافة مرحلة تعليمية
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

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

    <!-- Popup Write Rewiev -->
    <div class="modal fade" id="popup-add-level">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
          </a>

          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            <h6 class="title">بيانات </h6>
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
    <!-- ... end Popup Write Rewiev -->


  </div>
</template>

<script>
// require(['../../../../../../public/modules/master/js/bootstrap-select.js']);
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>