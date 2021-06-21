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
		
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href=""><i class="fa fa-circle-o"></i> Operator</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Jenis Surat</a></li>
			<li><a href=""><i class="fa fa-circle-o"></i> Jenis Arsip</a></li>
			<li><a href=""><i class="fa fa-circle-o"></i> Klasifikasi Arsip</a></li>
			<li><a href=""><i class="fa fa-circle-o"></i> Instansi Asal</a></li>
			<li><a href=""><i class="fa fa-circle-o"></i> Instansi Tujuan</a></li>
			<li><a href=""><i class="fa fa-circle-o"></i> Divisi - Bagian</a></li>
          </ul>
        </li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SIPINA
        <small>Sistem Informasi Penomoran Surat Internal Kanwil</small>
      </h1>
    </section>
		
    <!-- Main content -->
    <section class="content">
		<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
		<?php echo $this->session->flashdata('notif') ?>
		<form action="<?php echo base_url(); ?>sUp3r4DM1N/update" method="post">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
				<div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $operator->nip ?>" placeholder="NIP" disabled>
				  <input type="hidden" value="<?php echo $operator->nip ?>" name="nip">
                </div>
				<div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $operator->nama ?>" placeholder="Nama Pegawai">
                </div>
             
				
            </div>
			<div class="col-md-6">
              <div class="form-group">
                <label>Bagian</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Kepegawaian, TU dan RT</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
             <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="password" placeholder="Password">
                </div>
				<button type="submit" class="btn btn-md btn-success">Update</button>
				<button type="button" class="btn btn-md btn-warning">Batal</button>
            </div>
			
          </div>
          <!-- /.row -->
        </div>
		</form>

      </div>
      <!-- /.box -->
	  
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <center> <a href="">2019 © TUKepegawaian</a> </center>
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
 
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/admin/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/dataTables.bootstrap.min.js"></script>


</body>
</html>
