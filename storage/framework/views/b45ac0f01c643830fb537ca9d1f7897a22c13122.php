      <!-- Bootstrap -->
      <link href="<?php echo e(asset('modules/master/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('modules/master/css/AdminLTE.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('modules/master/css/AdminLTE-RTL.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('modules/master/css/fontawesome.min.css')); ?>" rel="stylesheet">
      
      <!-- AdminLTE Skins. Choose a skin from the css/skins
      folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="<?php echo e(asset('modules/master/css/skins/_all-skins.min.css')); ?>">
      <!-- iCheck -->
      <link rel="stylesheet" href="<?php echo e(asset('modules/master/plugins/iCheck/flat/blue.css')); ?>">
      <!-- Morris chart -->
      <link rel="stylesheet" href="<?php echo e(asset('modules/master/plugins/morris/morris.css')); ?>">
      <!-- jvectormap -->
      <link rel="stylesheet" href="<?php echo e(asset('modules/master/plugins/jvectormap/jquery-jvectormap-1.2.2.css')); ?>">
      <!-- Date Picker -->
      <link rel="stylesheet" href="<?php echo e(asset('modules/master/plugins/datepicker/datepicker3.css')); ?>">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="<?php echo e(asset('modules/master/plugins/daterangepicker/daterangepicker.css')); ?>">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="<?php echo e(asset('modules/master/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
      
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- CSRF Token -->
      <meta name="_token" content="<?php echo e(csrf_token()); ?>"/>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

      <!-- Main Font -->
      <script src="<?php echo e(asset('modules/master/js/webfontloader.min.js')); ?>"></script>
      <script>
      	WebFont.load({
      		google: {
      			families: ['Roboto:300,400,500,700:latin']
      		}
      	});
      </script>
