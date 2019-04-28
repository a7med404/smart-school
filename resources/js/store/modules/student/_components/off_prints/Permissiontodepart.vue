<template>
  <div>
    <div class="col-lg-12 float-right">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="\">الرئيسية</a></li>
        <li><i class="fa fa-laptop"></i>اضافة طالب</li>
      </ol>
    </div>


    <div class="container">
      <div class="">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="ui-block responsive-flex">
            <div class="ui-block-title">
              <div class="h6 title">a7med’s Following (86)</div>
                  
                <form class="w-search">
                  <div class="form-group with-button is-empty">
                    <input class="form-control" type="text" placeholder="Search Friends...">
                    <button>
                      <svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                    </button>
                  <span class="material-input"></span></div>
                </form>
                <a type="button" data-toggle="modal" data-target="#popup-add-permission" href="#" class="btn btn-sm btn-breez pull-left">
                  <i class="fa fa-check"></i>
                  اعطاء اذن
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
                <div class="author-thumb">
                  <img src="modules/master/images/avatar34-sm.jpg" alt="author">
                </div>
                <div class="birthday-author-name">
                  <a href="#" class="h6 author-name">a7med Ibrahim</a>
                  <div class="birthday-date">10/24/1984</div>
                </div>
                <a href="#" class="btn btn-sm btn-breez">تم الاعتماد</a>
              </div>
              <!-- ... end Birthday Item -->
            </div>
          </div>
				</div>
				<!-- ... end Friends -->
			</div>
			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
				<svg class="olymp-three-dots-icon">
					<use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
				</svg>
			</a>
		</div>

		<!-- ... end Main Content -->


        <!-- Popup Write Rewiev -->
        <div class="modal fade" id="popup-add-permission">
          <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-content-box">
              

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h6 class="title">بيانات </h6>
              </div>

              <div class="modal-body">
                <form role="form">
                  <div class="row">
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">التاريخ </label>
                        <input name="date" type="text" class="form-control" id="datepicker" />
                        
                          
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">ملاحظات</label>
                        <textarea class="form-control" placeholder="" name="note"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                      <button href="#" class="btn btn-primary">اضافة</button>
                      <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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