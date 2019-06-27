@extends('student::layouts.print')

@section('content')
<div class="pad margin no-print">
    <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> تنبيه:</h4>
        تم تطوير هذه الصفحة للطباعة. انقر فوق زر الطباعة في الجزء السفلي  للاختبار.
    </div>
  </div>
    <!-- title row -->
      <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    {{-- <i class="fa fa-globe"></i> Smart School, Inc. --}}
                {{-- <small class="">{{ now() }}</small> --}}
                    <!-- info row -->
                    <div class="row invoice-info">
                        <!-- /.col -->
                        <div class="col-sm-3 invoice-col">
                            <div class="pull-right">
                                <img src="{{asset('modules/master/images/school-logo.png')}}"src="" class="img-responsive m-r-10" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6 text-center invoice-col">
                            <p class="m-b-10 name-of-allah"> بسم الله الرحمن الرحيم</p>
                            <strong>وزاة التربية و التعليم</strong><br>
                            <strong>مدرسة العميد</strong><br>
                            <div class="m-t-30">
                            <strong class="report-title"> تقرير الفصول   </strong>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 invoice-col">
                        <div class="pull-left">
                            <img src="{{asset('modules/master/images/school-logo.png')}}"src="" class="img-responsive m-l-10" alt="">
                        </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        
        <!-- Table row -->
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <table class="table table-striped table-bordered table-hover full-width m-t-20 m-20" id="table_id">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>اسم المرحلة التعليمية</th>
                        <th>اسم الصف</th>
                        <th>اقصى عدد طلاب</th>
                        <th>عدد الطلاب</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $object)
                    <tr>
                        <td>{{ $object->id }}</td>
                        <td>{{ $object->classroom->level->name }}</td>
                        <td>{{ $object->name }}</td>
                        <td>{{ $object->max_student_number }}</td>
                        <td>{{ $object->students->count() }}</td>
                    </tr>
                    @endforeach
                    @if($data->count() == 0)
                    <tr>
                      <td colspan="4"> لا توجد بيانات في هذا الجدول</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.row -->
    
@stop