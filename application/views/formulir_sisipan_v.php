<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi Nomor Surat</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/popupbox.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/combobox.css">
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	

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
                        <li class="active"><span class="hidden-xs"><?php echo $this->session->userdata("nama");?></span>&nbsp;</a>
						<li>&nbsp; | &nbsp; <a href="" data-toggle="modal" data-target="#modal_edit"> Change Password </a></li>&nbsp;
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
                                           Formulir Sisipan Nomor Surat</div>
                                    </div>
									<div class="portlet-body">
											<form action="<?php echo base_url(); ?>beranda/insert_sisipan" id="formulir" method="post" class="form-horizontal">
                                                <div class="form-body pal">
													<div class="form-group">
													   <h5 for="tgl_agenda" class="col-md-3 control-label">
                                                            Tanggal Agenda :</h5>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-calendar"></i>
                                                                <input id="tgl_agenda" placeholder="" class="form-control" value="<?php echo date("d/m/Y h:i:sa");?>" disabled>
																</input></div>
                                                        </div>
                                                    </div>
									
													<div class="form-group">
                                                        <h5 for="surat" class="col-md-3 control-label">
                                                            Pilih Jenis Surat :</h5>
                                                        <div class="col-md-9">
                                                            <select name="surat" id="surat" class="form-control" required>
																	<option value="">---SELECT---</option>
																	<?php
																		foreach ($surat as $key => $value) {
																			echo "<option value='".$value->id_jenissurat."'>".$value->id_jenissurat." - ".$value->nama."</option>";
																		}
																	?>
															</select>
                                                        </div>
                                                    </div>
													<div class="form-group">
														<label for="arsip" class="col-md-3 control-label">
                                                            </label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
															<select name="arsip" id="arsip" class="form-control">
															</select>
															</div>
                                                        </div>
                                                    </div>
													<div class="form-group">
														<label for="klasifikasi" class="col-md-3 control-label">
                                                            </label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
															<select name="klasifikasi" id="klasifikasi" class="form-control">
															</select>
															</div>
                                                        </div>
                                                    </div>
													<div class="form-group">
														<h5 for="dari" class="col-md-3 control-label">
															Dari :
                                                            </h5>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
															
															<div class="combobox">
																<input type="text" name="dari" id="cb_identifier" class="form-control" style="text-transform:uppercase" required>

																<span></span>
																<div class="dropdownlist">
																	<?php
																		foreach ($dari as $key => $value) {
																			echo "<a>".$value->nama."</a>";
																		}
																	?>
																</div>
															</div>
															</div>
                                                        </div>
                                                    </div>
													
													<div class="form-group">
														<h5 for="tujuan" class="col-md-3 control-label">
															Tujuan :
                                                         </h5>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
															
															<div class="combobox">
																<input type="text" name="tujuan" id="cb_identifier2" class="form-control" style="text-transform:uppercase" required>

																<span></span>
																<div class="dropdownlist">
																	<?php
																		foreach ($tujuan as $key => $value) {
																			echo "<a>".$value->nama."</a>";
																		}
																	?>
																</div>
															</div>
															</div>
                                                        </div>
                                                    </div>
													
													<div class="form-group">
                                                        <h5 for="tglsurat" class="col-md-3 control-label">
                                                            Tanggal Surat :</h5>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-calendar"></i>
                                                                <input name="tglsurat" id="tglsurat" type="text" data-provide="datepicker" placeholder="" class="form-control" required />
																</div>
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <h5 for="hal" class="col-md-3 control-label">
                                                            Hal :</h5>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                               <input type="text" name="hal" id="hal" class="form-control" required>
															</div>
														</div>
                                                    </div>
													<div class="form-group">
                                                        <h5 for="isi" class="col-md-3 control-label">
                                                            Isi Ringkas :</h5>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                               <textarea name="isi" id="isi" rows="5" class="form-control" required></textarea></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions pal">
                                                    <div class="form-group">
                                                        <div class="col-md-offset-10">
                                                            <button type="submit" id="insert" class="btn btn-primary" >
                                                                Simpan
															</button>
															<a href = "<?php echo base_url()?>sUp3r4DM1N"><button type="button" class="btn btn-danger">
																Batal
															</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
												
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
	
	 <div class="modal fade" id="modal_edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title">Change Password</h5>
              </div>
              <div class="modal-body">
					<?php echo $this->session->flashdata("k_passwd");?>

					<form action="<?php echo base_URL()?>masuk/passwd" method="post" accept-charset="utf-8" enctype="multipart/form-data">	

								<div class="form-group">
								  <label for="nama">Nama Pengguna</label>
								  <input type="text" name="username" class="form-control" readonly value="<?php echo $this->session->userdata('nama')?>">
								 
								</div>
								<div class="form-group">
								  <label for="nama">Old Password</label>
								   <input type="password" name="n1" class="form-control" autofocus required>
								</div>
								<div class="form-group">
								  <label for="nama">New Password</label>
								 <input type="password" name="n2" class="form-control" required>
								</div>
								<div class="form-group">
								  <label for="nama">New Password Confirmation</label>
								 <input type="password" class="form-control" name="n3" required>
								</div>
				 </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					  </div>
				  </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

	<!-- JavaScript code -->
	<script language="javascript">
		$(document).ready(function () {
			var date = new Date();
			var currentMonth = date.getMonth();
			var currentDate = date.getDate();
			var currentYear = date.getFullYear();

			$('#tglsurat').datepicker({
				dateFormat: 'yy-mm-dd'
			});
		});
	</script>
	<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>assets/script/combobox.js"></script>
	<script type="text/javascript" charset="utf-8">
	var no = new ComboBox('cb_identifier');
	</script>
	<script type="text/javascript" charset="utf-8">
	var no = new ComboBox('cb_identifier2');
	</script>
	<script>
			$(document).ready(function(){
			 $('#surat').change(function(){
			  var id_jenissurat = $('#surat').val();
			  if(id_jenissurat != '')
			  {
			   $.ajax({
				url:"<?php echo base_url(); ?>beranda/jenisarsip",
				method:"POST",
				data:{id_jenissurat:id_jenissurat},
				success:function(data)
				{
				 $('#arsip').html(data);
				 $('#klasifikasi').html('<option value="">---SELECT---</option>');
				}
			   });
			  }
			  else
			  {
			   $('#arsip').html('<option value="">---SELECT---</option>');
			   $('#klasifikasi').html('<option value="">---SELECT---</option>');
			  }
			 });

			 $('#arsip').change(function(){
			  var id_jenisarsip = $('#arsip').val();
			  if(id_jenisarsip != '')
			  {
			   $.ajax({
				url:"<?php echo base_url(); ?>beranda/klasifikasi",
				method:"POST",
				data:{id_jenisarsip:id_jenisarsip},
				success:function(data)
				{
				 $('#klasifikasi').html(data);
				}
			   });
			  }
			  else
			  {
			   $('#klasifikasi').html('<option value="">---SELECT---</option>');
			  }
			 });
			 
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
