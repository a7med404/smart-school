<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Student</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/student.css') }}"> --}}

       @include('partials.styles')
    </head>
    
    <body onload="window.print();">
      <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
          @yield('content')
          {{-- <footer class="main-footer">
              <strong>&copy; <a href="http://a7med404.com">School System</a></strong>
          </footer> --}}
        </section>
            <!-- /.content -->
      <div class="clearfix"></div>
      </div>
      <!-- ./wrapper -->
    </body>
</html>
