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
                            SIPINA 
							<small>Sistem Informasi Penomoran Surat Internal Kanwil</small>
							</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li class="active"><span class="hidden-xs"><?php echo $_SESSION['nama'];?></span>&nbsp;</a>
						<i class="fa fa-angle-right"></i>
						
						<li>&nbsp;<a href="<?php echo base_url()?>masuk/logout" > Log Out </a></li>
                        
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                <div class="col-md-12">
                                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                    </div>
                                </div>
                            </div>
							
							 <div class="col-lg-12">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                           Import Nomor Surat SK</div>
                                    </div>
                                    <div class="portlet-body">
											 <div class="form-body pal">
                                                <div>
                                                    <a href="<?php echo base_url();?>import/download_template"> <code>Download Template Nomor SK </code></a>
                                                    <br><br>
                                                </div>

												<form action="<?php echo base_url();?>import/importFile" method="post" enctype="multipart/form-data">
                                                    Upload excel file : 
                                                    <input type="file" name="uploadFile"  value="" /><br><br>
                                                    <input type="submit" name="submit" class="btn btn-green" value="Upload" />
                                                </form>



											 </div>
                                               <div class="col-md-offset-11">
                                                <a href="<?php echo base_url()?>sisipan"> <button type="button" class="btn btn-yellow " data-dismiss="modal">
                                                    Selesai
                                                </button></a>
                                            </div>
									</div>

								</div>
							</div>
												
                </div>
                
            </div>
           
        </div>
		 <center> <a href="">Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa timur</a> </center>
    </div>
    <script src="<?php echo base_url();?>assets/script/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/script/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/script/responsive-tabs.js"></script>

</body>
</html>
