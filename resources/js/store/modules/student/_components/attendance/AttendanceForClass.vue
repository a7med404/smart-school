<template>
  <div>
    <section class="content-header">
      <h1> تسجيل الاجازات و الغياب لفصل <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">تسجيل الاجازات و الغياب لفصل</li>
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
                <button type="button" class="btn btn-default float-left m-t-25">بحث</button>
              </div>
            </div>
          </form>


        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>





    <!-- <div class="container">
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
    </div> -->


  </div>
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>