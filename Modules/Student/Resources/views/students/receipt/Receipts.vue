<template>
  <div>
    <section class="content-header">
      <h1> Blank page <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">عرض مستلمي الطلاب</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">عرض مستلمي الطلاب</h3>
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

            <div class="row">
              <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block-content">

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