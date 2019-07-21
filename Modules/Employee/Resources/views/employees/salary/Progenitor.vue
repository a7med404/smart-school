<template>
  <div>
    <section class="content-header">
      <h1>سٌلف الموظفين <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">سٌلف الموظفين</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">سٌلف الموظفين</h3>
          <div class="box-tools pull-right">
            <a type="button" data-toggle="modal" data-target="#popup-add-progenitor" href="#" class="btn btn-sm btn-info pull-left">
              <i class="fa fa-plus"></i>  اضافة سٌلفة
            </a>
          </div>
        </div>
      </div>
      <!-- /.box -->
      <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
            <thead>
              <tr>
                  <th>#ID</th>
                  <th>اسم الموظف</th>
                  <th>التاريخ</th>
                  <th>المبلغ</th>
                  <th>options</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>محمد عبد القادر علي</td>
                    <td>20-12-2018</td>
                    <td>500</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                            <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>علي عبد القادر علي</td>
                    <td>20-12-2018</td>
                    <td>1500</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                            <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-progenitor">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الموظف </label>
                    <select class="form-control select2" name="employee_id" v-model="progenitor.employee_id">
                      <option value="1">احمد محمد احمد علي</option>
                      <option value="0">عباس الخير عبد الرحمن محمد</option>
                      <option value="1">الفاضل محمد عثمان بلال</option>
                      <option value="0">معتز احمد محمد حنفي</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> المبلغ </label>
                    <input class="form-control" placeholder="" type="text" name="amount" v-model="progenitor.amount">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> السنة المالية </label>
                    <select class="form-control select2" name="financial_year" v-model="progenitor.financial_year">
                      <option value="CA">2010</option>
                      <option value="TE">2011</option>
                      <option value="TE">2012</option>
                      <option value="CA">2013</option>
                      <option value="TE">2014</option>
                      <option value="TE">2015</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الخزنة </label>
                    <select class="form-control select2" name="safe_id" v-model="progenitor.safe_id">
                      <option 
                      v-for="(value, index) in safes" 
                      :key="index" :value="index" 
                      v-text="value" 
                      :selected="progenitor.safe_id == index"> 
                   </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> التاريخ </label>
                    <input class="form-control" placeholder="" type="text" name="date" v-model="progenitor.date">
                  </div>
                </div> 
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> عدد الشهور </label>
                    <input class="form-control" placeholder="" type="text" name="months_number" v-model="progenitor.months_number">
                  </div>
                </div>  
              </div>   
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">ملاحظات</label>
                    <textarea class="form-control" name="note" placeholder="" v-model="progenitor.note"></textarea>
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
    import { globalStore } from '../../../helper/general.js';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
         data(){ 
          return {
            safes                : globalStore.safes,

            edit: false,
           progenitor:{
              id                        : '',
              employee_id               : '',
              amount                    : '',
              financial_year            : '',
              safe_id                   : '',
              date                      : '',
              months_number             : '',
              note                      : ''
            }    

          }
        },
    }
</script>