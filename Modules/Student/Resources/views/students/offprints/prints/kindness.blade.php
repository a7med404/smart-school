
@extends('student::layouts.print')

@section('content')
    <div class="pad margin no-print col-xs-10 text-center">
        <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> تنبيه:</h4>
            تم تطوير هذه الصفحة للطباعة. انقر فوق زر الطباعة في الجزء السفلي  للاختبار.
        </div>
    </div>
    <!-- title row -->
    <div class="row">
        <div class="col-xs-10">
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
                        <strong>جمهورية السودان</strong><br>
                        {{-- <strong>ولاية الخرطوم</strong><br> --}}
                        <strong>وزاة التربية و التعليم</strong><br>
                        <strong>{{getSetting('school_name')}}</strong><br>
                        <div class="m-t-30 m-b-30">
                        <strong class="report-title">  شهادة حسن سير و سلوك  </strong>
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
        <div class="col col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7 ">
            شهادة حسن سير و سلوك  شهادة حسن سير و سلوك  شهادة حسن سير و سلوك  شهادة حسن سير و سلوك   طالب شهادة حسن سير و سلوك  شهادة حسن سير و سلوك   طالب شهادة حسن سير و سلوك  شهادة حسن سير و سلوك  شهادة حسن سير و سلوك  شهادة حسن سير و سلوك  شهادة حسن سير و سلوك  شهادة حسن سير و سلوك
        </div>
    </div>
    <!-- /.row -->

@stop
