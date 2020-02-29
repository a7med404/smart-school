

<header class="main-header">

    <!-- Logo -->
    <a href="{{route('cpanelAdmin')}}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>S</b>MS</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Smart</b> School</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <!-- Control Sidebar Toggle Button -->
      
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="modules/master/images/user.png" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ (Auth::guard('employee')->user()->username) ? Auth::guard('employee')->user()->username : '' }}</span>
            </a>
            <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                <img src="modules/master/images/user.png" class="img-circle" alt="User Image">
                <p>
                    {{ (Auth::guard('employee')->user()->full_name) ? Auth::guard('employee')->user()->full_name : ''  }} - مدير
                    <small>عضو منذ. {{ (Auth::guard('employee')->user()->created_at->diffForHumans()) ? Auth::guard('employee')->user()->created_at->diffForHumans() : '' }}</small>
                </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
                <div class="row">
                <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                </div>
                </div>
                <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
                    <a href="{{route('logout')}}" class="btn btn-default btn-flat"> الصفحة الشخصية </a>
                </div>
                <div class="pull-right">
                    <a href="{{route('logout')}}" class="btn btn-default btn-flat"> تسجيل خروج </a>
                </div>
            </li>
            </ul>
        </li>

        <!-- Notifications: style can be found in dropdown.less -->

        <!-- Tasks: style can be found in dropdown.less -->


        </ul>
    </div>

    </nav>
</header>
