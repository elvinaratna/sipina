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
		
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Kode Klasifikasi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
		<?php echo $this->session->flashdata('notif') ?>
          <div class="row">
		  
		  <form method="post" role="form" id="form_klasifikasi" enctype="multipart/form-data">
            <div class="col-md-6">
              <div class="form-group">
					<input type="hidden" name="id_jenisarsip_tmp" id="id_jenisarsip_tmp">
					<label for="nama">ID Jenis Arsip</label>
                  <input type="text" class="form-control" id="id_jenisarsip" name="id_jenisarsip" placeholder="ID Jenis Arsip" required>
				  <input type="hidden" name="kode_klasifikasi_tmp" id="kode_klasifikasi_tmp">
					<label for="nama">Kode Klasifikasi</label>
                  <input type="text" class="form-control" id="kode_klasifikasi" name="kode_klasifikasi" placeholder="Kode Klasifikasi" required>
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Jenis Surat" required>
              </div>
			  <div class="muted pull-right">
				<button type="submit" class="btn btn-success" id="insert" form="form_klasifikasi">Simpan</button>
				<button type="submit" class="btn btn-primary" id="update" form="form_klasifikasi">Perbaharui</button>
				<button type="reset" class="btn btn-danger batal" data-dismiss="modal">Batal</button>
              </div>
            </div>
		 </form>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
		
		          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Data Table KLASIFIKASI</h3>
            </div>
            <div class="box-body">
              <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Jenis Arsip</th>
				  <th>Klasifikasi</th>
				  <th>Nama</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
					
					
					<?PHP
						$i=1;
						foreach($klasifikasi->result() as $row) : 
					?>
										
					
					<tr> 
						<td><?php echo $i++ ?></td>
							
						<td>
							<?PHP echo $row->id_jenisarsip; ?>
							<input type="hidden" id="id_jenisarsip_<?PHP echo $row->id_jenisarsip; ?>_<?PHP echo $row->kode_klasifikasi; ?>" value="<?PHP echo $row->id_jenisarsip; ?>">
						</td>
						<td>
							<?PHP echo $row->kode_klasifikasi; ?>
							<input type="hidden" id="kode_klasifikasi_<?PHP echo $row->id_jenisarsip; ?>_<?PHP echo $row->kode_klasifikasi; ?>" value="<?PHP echo $row->kode_klasifikasi; ?>">
						</td>
						<td>
							<?PHP echo $row->nama; ?>
							<input type="hidden" id="nama_<?PHP echo $row->id_jenisarsip; ?>_<?PHP echo $row->kode_klasifikasi; ?>" value="<?PHP echo $row->nama; ?>">
						</td>
						<td>
							<button class="btn btn-primary btn-xs update" title="Ubah" id="edit_<?PHP echo $row->id_jenisarsip; ?>_<?PHP echo $row->kode_klasifikasi; ?>">
								Edit
							</button>
							<a href="klasifikasi/delete/<?php echo $row->id_jenisarsip;?>/<?PHP echo $row->kode_klasifikasi; ?>" class="btn btn-danger btn-xs">Delete</a>
						</td>
						
						
					</tr>
					
					<?PHP
						endforeach;
					?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </section>
	<div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Menghapus Data?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-outline" id="delete">Okay!</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
  <!-- /.content-wrapper -->
<?PHP
	$this->load->view('footer_admin_v');
?>

<script type="text/javascript">
	$(document).ready(function() 
	{		
			$('#insert').show();
			$('#update').hide();
										
			$('#id_jenisarsip').val('');
			$('#kode_klasifikasi').val('');
			$('#nama').val('');
			
			$('#form_klasifikasi').attr('action','<?php echo base_url(); ?>klasifikasi/insert');
		
		$(".batal").click(function() {			
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			
			var id = this.id.substr(7);
			
			$('#id_jenissurat').val(id);
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo base_url(); ?>/klasifikasi/delete/' + $('#id_jenissurat').val();
		});
		
		
		$('.update').click(function() {			
			var id = this.id.substr(11);
			var id_arsip = this.id.substr(5,5);
			$('#id_jenisarsip').val(id_arsip);
			$('#kode_klasifikasi').val(id);
			$('#id_jenisarsip_tmp').val(id_arsip);
			$('#kode_klasifikasi_tmp').val(id);
			
			
			$('#nama').val($('#nama_' + id).val());
			
			
			$('#id_jenisarsip').attr('disabled', true);
			$('#kode_klasifikasi').attr('disabled', true);
			
			$('#kode_klasifikasi').show();
			$('#id_jenisarsip').show();
			$('#insert').hide();
			$('#update').show();
			
			$('#form_klasifikasi').attr('action', '<?PHP echo base_url(); ?>klasifikasi/update');
		});

	});
</script>

<!-- Page script -->
<script>
  $(function () {
    $('#example1').DataTable()
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
</body>
</html>

<?PHP
	}
?>
			  

