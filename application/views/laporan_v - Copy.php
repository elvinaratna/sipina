<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forms | Forms</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/popupbox.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
    <div>
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--END TOPBAR-->
        <div id="wrapper">
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            SIPAS </div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li class="active"><span class="hidden-xs"><?php echo $_SESSION['nama'];?></span>&nbsp;</a>
						<i class="fa fa-angle-right"></i>
						
						<li>&nbsp;<a href="<?php echo base_url()?>masuk/logout" > Log Out </a></li>
                        
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
							  
							  <div class="form-actions">
									<div class="form-group">
                                   
									</div>
									
									
                               </div>
							  
							<div class="col-lg-12">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                           Riwayat Nomor Surat</div>
                                    </div>
									<div class="portlet-body">
											<form action="<?php echo base_url()?>beranda/view_laporanbulanan" id="formulir" method="post" class="form-horizontal">
                                                <div class="form-body pal">
													
													<div class="form-group">
                                                        <label for="tglsurat" class="col-md-3 control-label">
                                                            Pilih Bulan</label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-calendar"></i>
                                                                <input name="tglsurat" id="tglsurat" type="text" placeholder="" class="date-own form-control" />
															</div>
                                                        </div>
														<div class="col-md-offset-7">
                                                            <button type="submit" id="insert" class="btn btn-primary" >
                                                                Filter
															</button>
															<a href="<?php echo base_url()?>exportexcel/createExcel"><button type="button" class="btn btn-green" > <i class="fa fa-download"></i>&nbsp;
                                                                Unduh Laporan
															</button></a>
															<a href="<?php echo base_url()?>beranda/index"><button type="button" class="btn btn-yellow" data-dismiss="modal">
																Selesai
															</button></a>
                                                        </div>
                                                    </div>
													
                                                </div>
                                             </form>
											<div class="panel panel-green">
                            <div class="panel-heading"><?php //echo $_POST['tglsurat']; ?> </div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Jenis Surat</th>
                                        <th>Jumlah</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php 
											if (isset($laporan) && !empty($laporan)) {
												$i=1;
												foreach ($laporan as $key => $row) {
													 echo '<tr>
															<td>'.$i.'</td>
															<td>'.$row->nama.'</td>
															<td>'.$row->jumlah.'</td>
														</tr>';
													$i++;
												}
											}else{
									?>
												<tr>
													<td class="alert alert-danger">No Records Found</td>
												</tr>
									<?php
											}
									
									?>
									
												<tr>
													<th></th>
													<th>Total Surat Bulan xx :</th>
													<th>x</th>
												</tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>	
									</div>
									
                                </div>
                            </div>

                    </div>
					<center> <a href="">2019 © TUKepegawaian</a> </center>
                </div>
                <!--END CONTENT-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
	
		
		<script type="text/javascript">
			  $('.date-own').datepicker({
				  autoclose: true,
					minViewMode: 1,
					format: 'yyyy MM'
			   });
		  </script>
    <script src="<?php echo base_url();?>assets/script/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/script/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/script/responsive-tabs.js"></script>

</body>
</html>
