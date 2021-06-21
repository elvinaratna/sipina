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
                                           Registrasi Nomor Surat Berhasil!</div>
                                    </div>
                                    <div class="portlet-body">
											 <div class="form-body pal">
												Berikut Nomor Surat Anda :
												<?php 
														$row1 = $agenda->row();
                                                        if((($row1->id_jenisarsip == "KP.03") and ($row1->kode_klasifikasi == "01"))or (($row1->id_jenisarsip == "KP.03") and ($row1->kode_klasifikasi == "02"))){
                                                            echo $row1->no_surat;
                                                        }else{
                                                            echo $row1->no_surat."<b><big>".$row1->no_urut."</big></b>";
                                                        }
														
												?>
												</div>
											<div class="form-actions pal">
                                                    <div class="form-group">
                                                        <div class="col-md-offset-8 col-md-9">
														
															<a href="<?php echo base_url()?>generate/cetak/<?php echo $row1->id_agenda?>" ><button class="btn btn-green"><i class="fa fa-download"></i>&nbsp;
																Cetak PDF
															</button></a>
                                                             <a href="<?php echo base_url()?>beranda/index"> <button class="btn btn-primary" >
                                                               Selesai
															</button> </a>
															
															
                                                        </div>
                                                    </div>
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
