<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin SIPINA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css">
  	<!-- Ionicons -->
	 <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ionicons.min.css">
  <!-- Font Awesome -->
   <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css">
  <!-- Theme style -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/AdminLTE.min.css">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/skin-blue.min.css">
    <!-- DataTables -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/dataTables.bootstrap.min.css">
  
	<!-- Google Font -->
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">SIPINA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata("nama");?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>beranda" class="btn btn-default btn-flat">Beranda</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()?>masuk/logout" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

   
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>jenissurat"><i class="fa fa-circle-o"></i> Jenis Surat</a></li>
			<li><a href="<?php echo base_url(); ?>jenisarsip"><i class="fa fa-circle-o"></i> Jenis Arsip</a></li>
			<li><a href="<?php echo base_url(); ?>klasifikasi"><i class="fa fa-circle-o"></i> Klasifikasi Arsip</a></li>
			<li><a href="<?php echo base_url(); ?>divisi"><i class="fa fa-circle-o"></i> Divisi - Bagian</a></li>
      <li><a href="<?php echo base_url(); ?>sUp3r4DM1N"><i class="fa fa-circle-o"></i> Operator</a></li>
          </ul>
        </li>
		  <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Data Nomor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			 
       <li><a href="<?php echo base_url(); ?>sisipan/last_year"><i class="fa fa-circle-o"></i> Data Tahun Lalu</a></li>
			<li><a href="<?php echo base_url(); ?>sisipan"><i class="fa fa-circle-o"></i> Data Nomor</a></li>
      <li><a href="<?php echo base_url(); ?>beranda/import"><i class="fa fa-circle-o"></i> Import Nomor SK</a></li>
      <li><a href="<?php echo base_url(); ?>sisip"><i class="fa fa-circle-o"></i> Sisipan New</a></li>
          </ul>
        </li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
