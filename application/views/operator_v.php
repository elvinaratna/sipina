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
          <h3 class="box-title">Tambah Data Operator</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
		<?php echo $this->session->flashdata('notif') ?>
		<form action="<?php echo base_url(); ?>sUp3r4DM1N/simpan" method="post">
        <div class="box-body">
          <div class="row">
			
            <div class="col-md-6">
				<div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP">
                </div>
				<div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai">
                </div>
				<div class="form-group">
                <label>Bagian</label>
                <select class="form-control select2" id="id_divisi" name="id_divisi" style="width: 100%;">
					<?php foreach($bag as $key => $value){ ?>
						<option value="<?php echo $value->id_divisi;?>"><?php echo $value->nama;?>
						</option> 
					<?php 
						} 
					?>
                </select>
              </div>
				
            </div>
			<div class="col-md-6">
              
             <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                </div>
			<div class="form-group">
                <label>User Level</label>
                <select class="form-control select2" id="user_level" name="user_level" style="width: 100%;">
                  <option selected="selected" value="2">2</option>
                  <option>1</option>
                </select>
              </div>
				<button type="submit" class="btn btn-md btn-success">Submit</button>
				<button type="reset" class="btn btn-md btn-warning">Cancel</button>
            </div>
			
          </div>
		  
          <!-- /.row -->
        </div>
		</form>
      </div>
      <!-- /.box -->
	   <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Table OPERATOR</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Bagian</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php 
							if (isset($op) && !empty($op)) {
								$i=1;
								foreach ($op as $key => $row) {
									 echo '<tr>
											<td>'.$i.'</td>
											<td>'.$row->nip.'</td>
											<td>'.$row->nama.'</td>
											<td>'.$row->id_divisi.'</td>
											<td>
											
											<a href="sUp3r4DM1N/hapus/'.$row->nip.'" class="btn btn-danger btn-xs">Delete</a>
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
            <!-- /.box-body <a href="sUp3r4DM1N/edit/'.$row->nip.'" class="btn btn-primary btn-xs">Edit</a>
											-->
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
<?PHP
	$this->load->view('footer_admin_v');
?>


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
			  

