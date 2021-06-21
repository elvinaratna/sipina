<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laporan Bulan <?php if($this->input->post('tglsurat')){
								echo $_POST['tglsurat'];
							} ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap-datetimepicker.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/popupbox.css">


	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" />
	
	


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
							<div class="col-lg-12">
								<div class="portlet box">
									<div class="portlet-header">
                                        <div class="caption">
                                           Custom Filter : </div>
                                    </div>
									<div class="portlet-body">
										<form action="<?php echo base_url()?>beranda/view_laporanbulanan"  method="post" id="form-filter" class="form-horizontal">
											
												
												<div class="form-group">
													<label for="	" class="col-md-2 control-label">Date Picking</label>
													<div class="input-group date form_date col-md-5" data-date="" data-date-format="MM yyyy" data-link-field="tglsurat" data-link-format="yyyy-mm">
														<input name="tglsurat" id="tglsurat" class="form-control" size="16" type="text" value="" readonly>
														<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
														<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>	
											<div class="form-group">
												<label for="LastName" class="col-sm-2 control-label"></label>
												<div class="col-md-offset-2">
													<button type="submit" id="btn-filter" class="btn btn-green">Filter</button>
													<a href="<?php echo base_url()?>beranda/view_laporan">
													<button type="button" id="btn-reset" class="btn btn-primary">Reset</button>
													</a>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
							  
							<div class="col-lg-12">
                                <div class="portlet box">
									<div class="portlet-body">
										<div class="panel panel-green">
												<div class="panel-heading">Data Nomor Surat 
												<?php if($this->input->post('tglsurat')){
													echo $_POST['tglsurat'];
												} ?></div>
												<div class="panel-body table-responsive">
													 <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
														
														<thead>
														<tr>
															<th>No</th>
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
														</tbody>
                             
													</table>
												</div>
											</div>	
											<div class="col-md-offset-11">
												<a href="<?php echo base_url()?>beranda/index"> <button type="button" class="btn btn-yellow " data-dismiss="modal">
													Selesai
												</button></a>
                                            </div>
								
									</div>
									
                                </div>
                            </div>

					<center> <a href="">Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa timur</a> </center>
                </div>
                <!--END CONTENT-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
</div>

		<script>
			$(document).ready(function() {
				$('#table').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						'excel', 'pdf', 'print'
					]
				} );
			} );
		</script>
		

	<script type="text/javascript" src="<?php echo base_url()?>assets/script/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-ui.js"></script>
	
    <script src="<?php echo base_url();?>assets/script/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/script/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	
    <script src="<?php echo base_url();?>assets/script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/script/responsive-tabs.js"></script>

	
	

	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
	
			<script type="text/javascript">

			$('.form_date').datetimepicker({
				language:  'en',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 3,
				minView: 3,
				forceParse: 0
			});
			
		</script>
		


</body>
</html>
