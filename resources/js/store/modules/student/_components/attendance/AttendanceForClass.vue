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
          </div>
        </div>
        <div class="box-body">
          <form role="form">
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-6 col-12">
                <fieldset class="form-group">
                  <label class="control-label">اختيار المرحلة التعليمية </label>
                  <select class="form-control select2" name="level_id">
                    <option value="DA">اختيار المرحلة التعليمية</option>
                    <option value="NU">Number of Likes</option>
                    <option value="NU">Number of Shared</option>
                  </select>
                </fieldset>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-6 col-12">
                <fieldset class="form-group">
                  <label class="control-label">اختيار الصف </label>
                  <select class="form-control select2" name="class_id">
                    <option value="DA">اختيار الصف </option>
                    <option value="NU">Number of Likes</option>
                    <option value="NU">Number of Shared</option>
                  </select>
                </fieldset>
              </div>
              <div class="col col-lg-2 col-md-2 col-sm-6 col-12">
                <fieldset class="form-group">
                  <label class="control-label">اختيار الفصل </label>
                  <select class="form-control select2" name="part_id">
                    <option value="DA">اختيار الفصل</option>
                    <option value="NU">Number of Likes</option>
                    <option value="NU">Number of Shared</option>
                  </select>
                </fieldset>
              </div>
              <div class="col col-lg-2 col-md-2 col-sm-6 col-12">
                <div class="form-group">
                  <label class="control-label">التاريخ </label>
                  <input name="absence_date" type="text" class="form-control" id="datepicker" />
                  </span>
                </div>
              </div>
              <div class="col col-lg-2 col-md-2 col-sm-12 col-12">
                <button type="button" class="btn btn-default float-left">بحث</button>
              </div>
            </div>
          </form>


        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>





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
            </div>
          </div>
        </div>
      </div>
    </div>


		<!-- Main Content -->

		<div class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid">
				<!-- Friends -->
				<div class="row list-follow">

					<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="ui-block">

							<!-- Friend Item -->
							<div class="friend-item">
								<div class="friend-header-thumb">
									<img src="modules/master/images/friend1.jpg" alt="friend">
								</div>
								<div class="friend-item-content">
									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a type="button" data-toggle="modal" data-target="#popup-add-absence" href="#">الغياب</a>
											</li>
											<li>
												<a type="button" data-toggle="modal" data-target="#popup-add-offday" href="#">الاجازات</a>
											</li>
										</ul>
									</div>
									<div class="friend-avatar">
										<div class="author-thumb">
											<img src="modules/master/images/avatar1.jpg" alt="author">
										</div>
										<div class="author-content">
											<a href="#" class="h5 author-name">a7med Ibrahim</a>
										</div>
										<span class="d-block"> مرحلة الاساس </span>
										<span>KG1</span> - <span>KG1_1</span>
									</div>
									<a href="#" class="btn btn-sm btn-breez">
										<i class="fa fa-check"></i>
										Unfollowing
									</a>
								</div>
							</div>
							<!-- ... end Friend Item -->
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
        <div class="modal fade" id="popup-add-absence">
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
                        <label class="control-label">تاريخ الغياب</label>
                        <input name="absence_date" type="text" class="form-control" id="datepicker" />
                        
                          
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">السبب</label>
                        <textarea class="form-control" placeholder="" name="reason"></textarea>
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


        <!-- Popup Write Rewiev -->
        <div class="modal fade" id="popup-add-offday">
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
                        <label class="control-label">تاريخ الاجازة</label>
                        <input name="absence_date" type="text" class="form-control" id="datepicker" />
                        
                          
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">السبب</label>
                        <textarea class="form-control" placeholder="" name="reason"></textarea>
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