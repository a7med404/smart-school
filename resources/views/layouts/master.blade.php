<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="layout/images/visa.png" type="image/ico" />

    <title>Men Albayt!| </title>
    @include('partials.styles')

  </head>
  <body class="nav-md">
    <div class="container body" id="app">
      <div class="main_container">
        <sidebar></sidebar>
        {{-- <navigation></navigation> --}}
        {{-- @include('partials.sidebar-menu')
        @include('partials.navigation') --}}
        {{-- @include('partials.page-content') --}}
        {{-- <footer></footer> --}}
          {{-- @yield('partials.page-content') --}}
        {{-- @include('partials.footer') --}}
      </div>
    </div>
    @include('partials.scripts')
  </body>
</html>
