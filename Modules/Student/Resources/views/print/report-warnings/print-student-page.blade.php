@extends('student::layouts.print')

@section('content')
<div class="pad margin no-print">
    {{-- <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> تنبيه:</h4>
        تم تطوير هذه الصفحة للطباعة. انقر فوق زر الطباعة في الجزء السفلي  للاختبار.
    </div> --}}
  </div>
    <!-- title row -->
    <div class="invoice-padding">

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
                                <img src="{{asset(getSchoolLogo(getSetting('logo')))}}"src="" class="img-responsive m-r-10" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6 text-center invoice-col">
                            <p class="m-b-10 name-of-allah"> بسم الله الرحمن الرحيم</p>
                            <strong>وزاة التربية و التعليم</strong><br>
                            <strong>{{getSetting('school_name')}}</strong><br>
                            <div class="m-t-30">
                            <strong class="report-title"> انذار فصل   </strong>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 invoice-col">
                        <div class="pull-left">
                            <img src="{{asset(getSchoolLogo(getSetting('logo')))}}"src="" class="img-responsive m-l-10" alt="">
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
                <div>
                    <h3 class="text-center"><strong> انذار فصل   </strong></h3>
                    <p class="m-b-20">السيد الاستاذ / ولي امر الطالب {{ $reportWarningInfo->student->name }}</p>
                    <h3 class="m-b-20 text-center"><strong class="m-b-20"> تحية طيبة و بعد....  </strong></h3>
                    <p class="bold">قرر المدرسة فصل نجلكم........ ابتدا من اليوم  <span class="float-left"> {{ $reportWarningInfo->from }} حتي {{ $reportWarningInfo->to }}<span></p>
                    <p>و العودة الا بولي الامر </p>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="pull-left m-t-30"><strong class="m-t-20"> و تفضلوا سيادتكم بقبول الاحترام....</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="pull-left"><strong> مدير المدرسة / </strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

@stop
