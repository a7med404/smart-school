@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.settings') }}
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
@endsection
@section('content')
<section class="content-header">
    <h1>{{ __('home/sidebar.settings') }} <small>it all starts here</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanel') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li class="active"> {{ __('home/sidebar.settings') }} </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            {{-- <h3 class="box-title">Title</h3> --}}
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
          {!! Form::open(['route' => ['site-setting-update'], 'method' => "POST", 'files' => true]) !!}
          @foreach($stieSetting as $setting)
            <div class="form-group">
              <div class="row">
                <label for="{{ $setting->name_setting }}" class="col-sm-12 col-form-label text-md-right">{{ $setting->slug }}</label>
                <div class="col-md-6 col-sm-12">
                  @if($setting->type == 1)
                    {!! Form::text($setting->name_setting, $setting->value, ['id' => '{{ $setting->name_setting }}', 'class' => "form-control {{ $errors->has($setting->name_setting) ? ' is-invalid' : '' }}", 'value' => "{{ old($setting->name_setting) }}", 'autofocus']) !!}
                  @elseif($setting->type == 0)
                    {!! Form::textarea($setting->name_setting, $setting->value, ['id' => '{{ $setting->name_setting }}', 'class' => "form-control {{ $errors->has($setting->name_setting) ? ' is-invalid' : '' }}", 'value' => "{{ old($setting->name_setting) }}", 'autofocus']) !!}
                  @elseif($setting->type == 4)
                    {!! Form::select($setting->name_setting, getSelect('role'), null, ['placeholder' => $setting->slug, 'class' => "form-control {{ $errors->has($setting->name_setting) ? ' is-invalid' : '' }}", 'value' => "{{ old($setting->name_setting) }}", 'required']) !!}
                  @else
                    {!! Form::file($setting->name_setting, ['id' => '{{ $setting->name_setting }}', 'class' => "form-control {{ $errors->has($setting->name_setting) ? ' is-invalid' : '' }}", 'value' => "{{ old($setting->name_setting) }}", 'autofocus']) !!}
                  @endif
                  @if ($errors->has($setting->name_setting))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first($setting->name_setting) }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button name="submit" type="submit" class="btn btn-primary">
                حفظ الاعدادات
              </button>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->

@stop
@section('footer')
<!-- icheck -->
{!! Html::script(asset('modules/master/plugins/icheck.min.js')) !!}
<script>
    $(document).ready(function () {
        $("input").iCheck({
            checkboxClass: "icheckbox_square-red",
            radioClass: "iradio_square-yellow",
            increaseArea: "20%" // optional
        });
    });

</script>
@endsection

