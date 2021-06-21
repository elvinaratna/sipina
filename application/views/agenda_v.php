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
      <!-- /.box -->
	   <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Table AGENDA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
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

                      $no = 1;
                      foreach($agenda as $u){
                      ?>
                      <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $u->no_surat.'';
                      
                                if ($u->no_sisipan > 0){
                                  echo '-'.$u->no_sisipan;
                                } else {
                                  echo '';
                                }

                                if ((($u->id_jenisarsip == 'KP.03') and ($u->kode_klasifikasi == '01'))or
                                  (($u->id_jenisarsip == 'KP.03') and ($u->kode_klasifikasi == '02'))){
                                          echo '';
                                        } else{
                                          if ($u->no_sisipan > 0){
                                          echo $u->no_urut.'-'.$u->no_sisipan;
                                          } else {
                                            echo $u->no_urut;
                                          }
                                        }


                                echo '</td>'

                            ?>
                          </td>
                          <td><?php echo $u->tgl_agenda ?></td>
                          <td><?php echo $u->tgl_surat ?></td>
                          <td><?php echo $u->hal ?></td>
                          <td><?php echo $u->isi_ringkas ?></td>
                          <td><?php echo $u->dari ?></td>
                          <td><?php echo $u->tujuan ?></td>
                          <td><?php echo $u->nip ?></td>

                          <td>
                          <a href="<?php echo base_url().'agenda/edit/'.$u->id_agenda; ?>" class="btn btn-primary btn-xs">Edit</a>
                           <a href="<?php echo base_url().'agenda/hapus/'.$u->id_agenda; ?>" class="btn btn-danger btn-xs">Delete</a>
                          </td>
                      </tr>

                      <?php } ?>
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
			  

