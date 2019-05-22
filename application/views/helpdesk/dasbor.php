<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HelpDesk System | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/bootstrap/css/bootstrap.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/AdminLTE.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/AdminLTE.css') ?>">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/skins/_all-skins.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/iCheck/flat/blue.css') ?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/morris/morris.css') ?>">
    <!-- jvectormap -->
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
    <?php if (isset($css_files)) { ?>
    <?php
    foreach($css_files as $file): ?>
      <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
      <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <?php } ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">

      
    <?= $this->load->view('layout/dasbor/header'); ?>


      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left info">
              <p></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
         
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          
          
            <?php 
            $url1 = $this->uri->segment(2);
            if($url1=="TIK"){
              $this->load->view('helpdesk/menu/TIK', '', false); 
            }else if($url1=="BMN"){
              $this->load->view('helpdesk/menu/BMN', '', false); 
            }else if($url1=="RT"){
              $this->load->view('helpdesk/menu/RT', '', false); 
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          HelpDeskSystem
            <small>Version 1.0.0</small>
          </h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div>
            <?php echo $output; ?>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
          </div>
          <strong>Copyright &copy; 2019 <a href="#">kementriankeuangan</a>.</strong> All rights reserved.
      </footer>


      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <script>
      $.widget.bridge('uibutton', $.ui.button);
     
    </script>
    <?php if (!isset($js_files)) { ?>
    <!-- jQuery 2.1.4 -->
    <script src="<?= base_url('assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>
    <?php } ?>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?= base_url('assets/adminlte/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?= base_url('assets/adminlte/plugins/morris/morris.min.js') ?>"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('assets/adminlte/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
    <!-- jvectormap -->
    <script src="<?= base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url('assets/adminlte/plugins/knob/jquery.knob.js') ?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
    <!-- Slimscroll -->
    <script src="<?= base_url('assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/adminlte/plugins/fastclick/fastclick.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/adminlte/dist/js/app.min.js') ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="<?=base_url('assets/adminlte/plugins/pace/pace.min.js')?>"></script>
        
    
   <?= $this->load->view('layout/dasbor/modal'); ?>
  
  </body>
</html>
