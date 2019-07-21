<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="icon" href="{{ asset('admin/images/visa.png') }}" type="image/ico" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'Laravel') }} || @yield('title') </title>
    @include('cpanel.partials.styles')
    @yield('header')
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="app">
      @include('cpanel.partials.header')
      @include('cpanel.partials.sidebar-menu')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- /.content-wrapper -->
      @include('cpanel.partials.footer')
      @include('cpanel.partials.control-sidebar')
    </div>
    <!-- ./wrapper -->

    @include('cpanel.partials.scripts')
    @yield('footer') 
      <script>
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
      </script>
    @include('cpanel.partials.toastr')
    @include('cpanel.partials.errors')
  </body>
</html>

