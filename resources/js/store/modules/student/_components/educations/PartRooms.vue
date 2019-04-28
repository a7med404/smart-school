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
              <div class="h6 title">الفصول التعليمية (1)</div>
              <a type="button" data-toggle="modal" data-target="#popup-add-classroom" href="#" class="btn btn-sm btn-breez pull-left">
                <i class="fa fa-plus"></i>
               اضافة فصل 
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
          <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
              <table class="table table-striped table-bordered table-hover" id="table_id">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>اسم المرحلة التعليمية</th>
                        <th>اسم الصف</th>
                        <th>اسم الفصل</th>
                        <th>القسم</th>
                        <th>عدد الطلاب</th>
                        <th>الترتيب</th>
                        <th>نهاية المرحلة</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td><a href="#" class="">Description</a></td>
                        <td>
                            <!-- <div class="btn-group">
                                <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                            </div> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td><a href="#" class="">Description</a></td>
                        <td>
                            <!-- <div class="btn-group">
                                <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                            </div> -->
                        </td>
                    </tr>
                </tbody>
            </table>

          </div>
				</div>
				<!-- ... end Friends -->
			</div>
		</div>

		<!-- ... end Main Content -->

    <!-- Popup Write Rewiev -->
    <div class="modal fade" id="popup-add-classroom">
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
                    <select class="form-control select2" name="level_id">
                      <option value="CA">اختيار</option>
                      <option value="TE">المسيحية</option>
                      <option value="TE">اخرى</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الصف </label>
                    <select class="form-control select2" name="classroom_id">
                      <option value="CA">اختيار</option>
                      <option value="TE">المسيحية</option>
                      <option value="TE">اخرى</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الفصل </label>
                    <input class="form-control" placeholder="" type="text" name="name_ar">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الفصل بالانجليزي </label>
                    <input class="form-control" placeholder="" type="text" name="name_en">
                  </div>
                </div>
              </div>                 
              <div class="row">  
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> عدد الطلاب </label>
                    <input class="form-control" placeholder="" type="text" name="max_student_number">
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
    <div class="modal fade" id="popup-add-123">
      <div class="modal-dialog modal-lg" role="document">
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
                  <a type="button" data-toggle="modal" data-target="#popup-add-123" href="#" class="btn btn-md-2 btn-blue">
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