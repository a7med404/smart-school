<template>
<div>
        <div class="col-lg-12 float-right">
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="\">الرئيسية</a></li>
            <li><i class="fa fa-laptop"></i>اضافة طالب</li>
          </ol>
        </div>

        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="ui-block">
            <div class="ui-block-title">
              <h6 class="title">عرض مستلمي الطلاب</h6>
            </div>
            <div class="row">
              <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block-content">
                  <form role="form">
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">اختيار طالب</label>
                          <select class="form-control select2" name="religion">
                            <option value="CA">احمد</option>
                            <option value="TE">المسيحية</option>
                            <option value="TE">اخرى</option>
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


				<div class="col col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="ui-block">
						<div class="friend-item">
							<div class="friend-header-thumb">
								<img src="modules/master/images/friend9.jpg" alt="friend">
							</div>
						
							<div class="friend-item-content">
								<div class="friend-avatar">
									<div class="author-thumb">
										<img src="modules/master/images/avatar16.jpg" alt="author">
									</div>
									<div class="author-content">
										<a href="#" class="h5 author-name">James Summers</a>
										<div class="country">سائق</div>
									</div>
								</div>

                <ul class="widget w-personal-info item-block">
                  <li>
                    <span class="title">صلة القرابة:</span>
                    <span class="text">سائق</span>
                  </li>
                  <li>
                    <span class="title">اسم الطالب:</span>
                    <span class="text">احمد ابراهيم</span>
                  </li>
                  <li>
                    <span class="title">اسم المسلتم:</span>
                    <span class="text">احمد ابراهيم</span>
                  </li>
                  <li>
                    <span class="title">ملاحظة:</span>
                    <span class="text">We are Rock Band from Los Angeles, now based in San Francisco, come and listen to us play!</span>
                  </li>
                </ul>
							</div>
						</div>
          </div>
				</div>
        
                </div>
              </div>
            </div>

          </div>
        </div>

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