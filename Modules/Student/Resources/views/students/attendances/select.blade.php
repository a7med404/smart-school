@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_attendances') }}
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
<!-- dataTable -->
{!! Html::style(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.css')) !!}
{!! Html::style(asset('modules/master/plugins/datatables/jquery.dataTables.min.css')) !!}
@endsection
@section('content')

<!-- Main content -->
<section class="content">

                    {!! Form::open(['route' => ['attendances.store'], 'method' => "POST", 'class' => 'form']) !!}
                        <div class="row">
                            <div class="col col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    {!! Form::label('level_id', 'اسم المرحلة التعليمية', ['class' => 'control-label']) !!}
                                    {!! Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  {{ $errors->has('level_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('level_id') }}", 'required']) !!}
                                </div>
                            </div>
                            <div class="col col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    {!! Form::label('classroom_id', 'اسم الصف', ['class' => 'control-label']) !!}
                                    {!! Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control  {{ $errors->has('classroom_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('classroom_id') }}", 'required']) !!}
                                </div>
                            </div>
                            <div class="col col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    {!! Form::label('part_id', 'اسم الفصل', ['class' => 'control-label']) !!}
                                    {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}", 'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                <button href="#" class="btn btn-primary">عــرض</button>
                            </div>
                        </div>
                    {!! Form::close() !!}

    
</section>
<!-- /.content -->

@stop
@section('footer')
<!-- icheck -->
{!! Html::script(asset('modules/master/plugins/icheck.min.js')) !!}
<!-- dataTable -->
{!! Html::script(asset('modules/master/plugins/datatables/jquery.dataTables.min.js')) !!}
{!! Html::script(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.js')) !!}
<script>

    $(document).ready(function () {
        /*
            For iCheck =====================================>
        */
        $("input").iCheck({
            checkboxClass: "icheckbox_square-yellow",
            radioClass: "iradio_square-yellow",
            increaseArea: "20%" // optional
        });
    });

</script>
@endsection



