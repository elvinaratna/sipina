<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Nomor Surat</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/datatables/css/dataTables.bootstrap.min.css">
	
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/popupbox.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" />
	
	


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head> 
<body>

	
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
											
											<div class="panel panel-green">
												<div class="panel-heading">Data Nomor Surat</div>
												<div class="panel-body table-responsive">
													 <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">

														<thead>
														<tr>
															<th>No</th>
																<th>Tanggal</th>
																<th>No.Surat</th>
																<th>Hal</th>
																<th>Dari</th>
																<th>Tujuan</th>
														</tr>
														</thead>
														<tbody>
														<?php 
																if (isset($caridata) && !empty($caridata)) {
																	$i=1;
																	foreach ($caridata as $key => $row) {
																		 echo '<tr>
																				<td>'.$i.'</td>
																				<td>'.$row->tgl_agenda.'</td>
																				<td>'.$row->no_surat.'';
																				if ((($row->id_jenisarsip == 'KP.03') and ($row->kode_klasifikasi == '01'))or(($row->id_jenisarsip == 'KP.03') and ($row->kode_klasifikasi == '02'))){
																					echo '';
																				} else{
																					if ($row->no_sisipan > 0){
																					echo $row->no_urut.'-'.$row->no_sisipan;
																					} else {
																						echo $row->no_urut;
																					}
																				}
																				
																		 echo	'</td>
																				<td>'.$row->hal.'</td>
																				<td>'.$row->dari.'</td>
																				<td>'.$row->tujuan.'</td>
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
														
														<tfoot>
															<tr>
																<th>No</th>
																<th>Tanggal</th>
																<th>No.Surat</th>
																<th>Hal</th>
																<th>Dari</th>
																<th>Tujuan</th>
															</tr>
														</tfoot>
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

                    </div>
					<center> <a href="">Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa timur</a> </center>
                </div>
                <!--END CONTENT-->
            </div>
            <!--END PAGE WRAPPER-->
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
<script src="<?php echo base_url()?>assets/script/jquery-3.3.1.js"></script>
<script src="<?php echo base_url()?>assets/script/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/datatables/js/buttons.html5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>



</body>
</html>