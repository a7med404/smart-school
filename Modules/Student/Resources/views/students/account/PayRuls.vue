<template>
  <div>
    <section class="content-header">
      <h1>بنود رسوم الطلاب <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">بنود رسوم الطلاب</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">بنود رسوم الطلاب</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>

            <a type="button" data-toggle="modal" data-target="#popup-add-pay_rule" href="#" class="btn btn-sm btn-info pull-left">
              <i class="fa fa-plus"></i> اضافة
            </a>
          </div>
        </div>
        <div class="box-body">
                  
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم البند </th>
                            <th>الحالة</th>
                            <th>ملاحظات</th>
                            <th>options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="pay_rule in allPayRules" :key="pay_rule.id">
                            <td v-text="pay_rule.id"></td>
                            <td v-text="pay_rule.name"></td>
                            <td v-text="pay_rule.is_mandatary"></td>
                            <td v-text="pay_rule.note"></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                    <a class="btn btn-info" @click.prevent="editPayRule(pay_rule)" type="button" data-toggle="modal" data-target="#popup-add-pay_rule"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#" @click.prevent="deletePayRule(pay_rule.id)"> <i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                          <td v-if="allPayRules.length < 1" colspan="6">
                            <div  class="text-center">
                              <p>لا توجد بيانات في هذا الجدول</p>
                            </div>
                          </td>
                        </tr>
                    </tbody>
                </table>
                  <div v-if="loading" style="color: #64d6e2" class="la-line-scale">
                    <div></div><div></div><div></div><div></div><div></div>
                  </div>
              </div>
          </div>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-pay_rule">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form @submit.prevent = "edit ? toUpdatePayRule(pay_rule) : createPayRule()" role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> الاسم </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="pay_rule.name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">
                      <input type="checkbox" class="minimal" v-model="pay_rule.is_mandatary">
                      اجباري
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">ملاحظة</label>
                    <textarea class="form-control" placeholder="" name="note" v-model="pay_rule.note"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">حـــفظ</button>
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

    import axios from "axios";
    import { mapGetters, mapActions } from 'vuex';

    export default {
      mounted() {
      },
      computed: {
        ...mapGetters(['allPayRules'])
      },
      created() {
        let self = this;
        // self.allErrors();
        self.fetchPayRules().then(function(){self.loading = false;});
      },
      data(){
        return {
          pay_rule: {
            name                : '',
            is_mandatary        : false,
            note                : ''
          },
          edit: false,
          loading: true,
        }
      },
      methods:{
        ...mapActions(['fetchPayRules', 'addPayRule', 'deletePayRule', 'filterPayRules', 'updatePayRule']),
        createPayRule: function() {
          let self = this;
          let params = Object.assign({}, this.pay_rule);
          this.addPayRule(params).then(function(){
            self.pay_rule.name = '',
            self.pay_rule.is_mandatary = '',
            self.pay_rule.note = ''        
          });
        },
        editPayRule: function(pay_rule) {
          let self = this;
          self.edit = true;
          self.pay_rule.id = pay_rule.id;
          self.pay_rule.name = pay_rule.name;
          self.pay_rule.is_mandatary = pay_rule.is_mandatary;
          self.pay_rule.note = pay_rule.note;
        },

        toUpdatePayRule: function(pay_rule) {
          let self = this;
          let params = Object.assign({}, self.pay_rule);
          self.updatePayRule(params, pay_rule).then(function(){
          
            self.edit = false;
            self.pay_rule.name = '',
            self.pay_rule.is_mandatary = '',
            self.pay_rule.note = ''  
          });
        },
      }
    }
</script>