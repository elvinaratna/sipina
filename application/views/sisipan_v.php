<?PHP
if($this->session->userdata('logged_in') == TRUE)
		{
	$this->load->view('header_admin_v');
?>
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
          <h3 class="box-title">Form</h3>
			
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
		  
        </div>
		<div class="box-body">
		 <a class="btn btn-success insert" >
				<span class="icon-plus icon-white"></span>Tambah Data
			</a>
		</div>
        <!-- /.box-header -->
		<?php echo $this->session->flashdata('notif') ?>
		<form method="post" role="form" id="form_agenda" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
			
            <div class="col-md-6">
				<input type="hidden" name="id_agenda_tmp" id="id_agenda_tmp">
				<div class="form-group">
                  <label for="nama">Tanggal Agenda</label>
					<input id="tgl_agenda" placeholder="<?php echo date("d/m/Y h:i:sa");?>" class="form-control" value="<?php echo date("d/m/Y h:i:sa");?>" disabled>
					</input>
                </div>
				<div class="form-group">
                  <label for="id_jenissurat">ID Jenis Surat</label>
                  <input type="text" class="form-control" id="id_jenissurat" name="id_jenissurat" placeholder="ID Jenis Surat">
                </div><div class="form-group">
                  <label for="id_jenisarsip">ID Jenis Arsip</label>
                  <input type="text" class="form-control" id="id_jenisarsip" name="id_jenisarsip" placeholder="ID Jenis Arsip">
                </div>
				<div class="form-group">
                  <label for="kode_klasifikasi">Kode Klasifikasi</label>
                  <input type="text" class="form-control" id="kode_klasifikasi" name="kode_klasifikasi" placeholder="Kode Klasifikasi">
                </div>
				<div class="form-group">
                  <label for="no_surat">Nomor Surat</label>
                  <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="Nomor Surat">
                </div>
				<div class="form-group">
                  <label for="no_urut">Nomor Urut</label>
                  <input type="text" class="form-control" id="no_urut" name="no_urut" placeholder="Nomor Urut">
                </div>
				<div class="form-group">
                  <label for="no_sisipan">Nomor Sisipan</label>
                  <input type="text" class="form-control" id="no_sisipan" name="no_sisipan" placeholder="Nomor Sisipan">
                </div>
				  
            </div>
			
			<div class="col-md-6">
			<div class="form-group">
                  <label for="tgl_surat">Tanggal Surat</label>
                  <input type="date" class="form-control" id="tgl_surat" name="tgl_surat" placeholder="Tanggal Surat">
				</div>
			 <div class="form-group">
                  <label for="hal">Hal</label>
                  <input type="text" class="form-control" id="hal" name="hal" placeholder="Hal">
             </div>
			 <div class="form-group">
                  <label for="isi_ringkas">Isi Ringkas</label>
				<textarea name="isi_ringkas" id="isi_ringkas" rows="4" class="form-control" required></textarea>
             </div>
			 <div class="form-group">
                  <label for="dari">Dari</label>
                  <input type="text" class="form-control" id="dari" name="dari" placeholder="Dari">
             </div>
			 <div class="form-group">
                  <label for="tujuan">Tujuan</label>
                  <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan">
             </div>
			 <div class="muted pull-right">
				<button type="submit" class="btn btn-md btn-success" id="insert" form="form_agenda">Simpan</button>
				<button type="submit" class="btn btn-md btn-success" id="update" form="form_agenda">Perbaharui</button>
				<button type="reset" class="btn btn-md btn-warning" data-dismiss="modal">Batal</button>
			</div>
			
            </div>
			
          </div>
		  
          <!-- /.row -->
        </div>
		</form>
      </div>
      <!-- /.box -->
	   <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data NOMOR SURAT</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="tabel" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Surat</th>
                  <th>Tanggal Agenda</th>
                  <th>Tanggal Surat</th>
				  <th>Hal</th>
				  <th>Isi Ringkas</th>
				  <th>Dari</th>
				  <th>Tujuan</th>
				  <th>NIP</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php 
					if (isset($sisipan) && !empty($sisipan)) {
						$i=1;
						foreach ($sisipan as $key => $row) {
							 echo '<tr>
									<td>'.$i.'</td>
									<td>'.$row->no_surat.$row->no_urut.'';
									if ($row->no_sisipan > 0){
										echo '-'.$row->no_sisipan;
									} else {
										echo '';
									}
							 echo	'</td>
									<td>'.$row->tgl_agenda.'</td>
									<td>'.$row->tgl_surat.'</td>
									<td>'.$row->hal.'</td>
									<td>'.$row->isi_ringkas.'</td>
									<td>'.$row->dari.'</td>
									<td>'.$row->tujuan.'</td>
									<td>'.$row->nip.'</td>
									<td>
									<button id="edit_'.$row->id_agenda.'" class="btn btn-primary btn-xs">Edit</button>
									</td>
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
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
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
			   <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Danger Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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


<!-- Page script -->
<script>
  $(function () {
    $('#tabel').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
	$(document).ready(function() 
	{
			$("#form_agenda").hide();
		
			$('.insert').click(function() {
				
			$("#form_agenda").show();
				
			$('#id_agenda').val('');
			$('#id_jenissurat').val('');
			$('#id_jenisarsip').val('');
			$('#kode_klasifikasi').val('');
			$('#tgl_agenda').val('');
			$('#no_surat').val('');
			$('#no_urut').val('');
			$('#tgl_surat').val('');
			$('#hal').val('');
			$('#isi_ringkas').val('');
			$('#dari').val('');
			$('#tujuan').val('');
			$('#nip').val('');
				
			
			$('#id_agenda').attr('disabled', true);
			
			$('#id_agenda').hide();
			$('#insert').show();
			$('#update').hide();
			
			$('#form_agenda').attr('action','<?php echo base_url(); ?>sisipan/insert');
		});

		$(".batal").click(function() {
			$("#tabel").show();
			$("#form_agenda").hide();			
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#id_agenda').val(id);
		});
		$('#delete').click(function() {
			window.location = '<?PHP echo base_url(); ?>/agenda_admin/delete/' + $('#id_agenda').val();
		});

		
		$('.update').click(function() {
			$("#tabel").hide();
			$("#form_agenda").show();
			
			var id = this.id.substr(5);
			$('#id_agenda').val(id);
			$('#id_agenda_tmp').val(id);
			
			$('#judul_agenda').val($('#judul_agenda_' + id).val());
			$('#isi').val($('#isi_' + id).val());
			$('#tgl_mulai').val($('#tgl_mulai_' + id).val());
			$('#tgl_akhir').val($('#tgl_akhir_' + id).val());
			$('#jam').val($('#jam_' + id).val());
			$('#tempat').val($('#tempat_' + id).val());
			
			
			$('#id_agenda').attr('disabled', true);
			
			$('#id_agenda').hide();
			$('#insert').hide();
			$('#update').show();
			
			$('#form_agenda').attr('action', '<?PHP echo base_url(); ?>agenda_admin/update');
		});
	
	});
</script>
</body>
</html>

<?PHP
	}
?>
			  

