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
    <div class="row">
      <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
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
                <div class="col col-lg-3 col-md-3 col-sm-3 col-3">
                  <div class="form-group">
                    <label class="control-label">التمييز</label>
                    <select class="form-control select2" name="mr_d" v-model="studentparent.mr_d">
                      <option value="1">السيد /</option>
                      <option value="0">د /</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-9 col-md-9 col-sm-9 col-9">
                  <div class="form-group">
                    <label class="control-label"> الاسم </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="studentparent.name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الديانة</label>
                    <select class="form-control select2" name="religion" v-model="studentparent.religion">
                      <option value="CA">الاسلام</option>
                      <option value="TE">المسيحية</option>
                      <option value="TE">اخرى</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">صلة القرابة</label>
                    <select class="form-control select2" name="relation" v-model="studentparent.relation">
                      <option value="1">اب</option>
                      <option value="0">عم</option>
                      <option value="0">خال</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الجنسية</label>
                    <select class="form-control select2" name="nationality" v-model="studentparent.nationality">
                      <option value="CA">السودان</option>
                      <option value="TE">مصر</option>
                      <option value="TE">جنوب السودان</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-xl-12 col-lg-12 col-md-12">
                  <div class="form-group">
                    <label class="control-label">الرقم الوطني ل ولي الامر</label>
                    <input class="form-control" placeholder="" type="text" name="identifcation_id" v-model="studentparent.identifcation_id">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">موهل الوالد </label>
                    <input class="form-control" placeholder="" type="text" name="qualification" v-model="studentparent.qualification">
                  </div>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">الوظيفة</label>
                    <input class="form-control" placeholder="" type="text" name="job" v-model="studentparent.job">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">مكان العمل </label>
                    <input class="form-control" placeholder="" type="text" name="work_place" v-model="studentparent.work_place">
                  </div>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label"> الحالة الاجنماعية </label>
                    <select class="form-control select2" name="martial" v-model="studentparent.martial">
                      <option value="CA">عازب</option>
                      <option value="TE">متزوج</option>
                      <option value="TE">مطلق</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">رقم الهاتف</label>
                    <input class="form-control" placeholder="" type="text" name="phone_number" v-model="studentparent.phone_number">
                  </div>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">العنوان</label>
                    <input class="form-control" placeholder="" type="text" name="address_id" v-model="studentparent.address_id">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="control-label">البريد الالكتروني</label>
                    <input class="form-control" placeholder="" type="email" name="email" v-model="studentparent.email">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">
                      <input type="checkbox" class="minimal" name="is_die" v-model="studentparent.is_die">
                      متوفي 
                    </label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">ملاحظة</label>
                    <textarea class="form-control" placeholder="" name="note" v-model="studentparent.note"></textarea>
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
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return {
            studentparent : {
              mr_d                    : '',
              name                    : '',
              religion                : '',     
              relation                : '',     
              nationality             : '',
              identifcation_id        : '',
              qualification           : '', 
              job                     : '',    
              work_place              : '',  
              martial                 : '',
              phone_number            : '',
              address_id              : '',
              email                   : '',
              is_die                  : '',
              note                    : ''
            }
            
          }
        }
          }
</script>