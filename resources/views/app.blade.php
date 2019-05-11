<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="layout/images/visa.png" type="image/ico" />
    <title>School !| </title>
    @include('partials.styles')

  </head>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
        
    <div class="wrapper" id="app">
      <div id="newsfeed-items-grid">
        <div class="ajax-content"></div>
        <navigation></navigation>
        <sidebar></sidebar>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <transition name="slide" mode="out-in">
            <router-view :key="$route.fullPath"></router-view>
          </transition>
        </div>
        <!-- /.content-wrapper -->
        <footer_component></footer_component>
        <control_sidebar></control_sidebar>
      </div>
    </div>
    <!-- ./wrapper -->

    @include('partials.scripts')
  </body>
</html>
