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
                        <li class="active"><span class="hidden-xs"><?php echo $this->session->userdata("nama");?></span>&nbsp;</a>
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
                                           Informasi Nomor Surat</div>
                                    </div>
									<div class="portlet-body">
											<form action="<?php echo base_url(); ?>lihatdata/searchData" id="formulir" method="post" class="form-horizontal">
                                                <div class="form-body pal">
													
													<div class="form-group">
                                                        <label for="tglsurat" class="col-md-2 control-label">
                                                            Cari Surat</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <input name="isi" id="isi" type="text" placeholder="Perihal Surat" class="form-control" />
															</div>
                                                        </div>
													</div>
													<div class="form-actions pal">
                                                    <div class="form-group">
                                                        <div class="col-md-offset-8">
                                                           <button type="submit" class="btn btn-green" >
                                                                Cari
															</button>&nbsp;&nbsp;
															<a href="<?php echo base_url()?>lihatdata"> <button type="button" class="btn btn-blue " data-dismiss="modal">
																Clear
															</button></a>&nbsp;&nbsp;
															<a href="<?php echo base_url()?>beranda/index"> <button type="button" class="btn btn-yellow " data-dismiss="modal">
																Selesai
															</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                             </form>
											<div class="panel panel-green">
                            <div class="panel-heading">Data Nomor Surat</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Nomor Surat</th>
										<th>Isi Ringkas</th>
										<th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php 
												foreach ($vdata as $key => $row) {
													 echo '<tr>
															<td>'.$row->id_agenda.'</td>
															<td>'.$row->tgl_agenda.'</td>
															<td>'.$row->no_surat.$row->no_urut.'</td>
															<td>'.$row->isi_ringkas.'</td>
															<td> <a href=""> Detail <a></td>
														</tr>';
												}
									
									?>
									
                                    </tbody>
                                </table>
								<?php
									if(isset($links)){
									echo $links;
									} 
								?>
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


    <script src="<?php echo base_url();?>assets/script/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/script/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/script/responsive-tabs.js"></script>

</body>
</html>
