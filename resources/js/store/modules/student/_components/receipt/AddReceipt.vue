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
        <h6 class="title">Account Settings</h6>
      </div>
      <div class="row">
        <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
          <div class="ui-block-content">
            <form role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
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
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> الاسم </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> صلة القرابة </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> رقم اثبات السخصية </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> رقم الهاتف </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">ملاحظة</label>
                    <textarea class="form-control" placeholder="" name="note"></textarea>
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