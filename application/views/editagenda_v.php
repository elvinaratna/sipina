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
    <?php foreach($agenda as $u){ ?>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data</h3>

            <form method="post" role="form" id="form_agenda" action="<?php echo base_url(). 'agenda/update'; ?>" enctype="multipart/form-data">
          <div class="box-body">
            <div class="row">
             <input type="hidden" name="id_agenda" value="<?php echo $u->id_agenda ?>">
                  
                  <div class="form-group">
                    <label for="id_jenissurat">Nomor Surat</label>
                    <input type="text" class="form-control" id="id_jenissurat" name="id_jenissurat" value="<?php echo $u->no_surat.$u->no_urut ?>" disabled>
                  </div>

                <div class="form-group">
                    <label for="hal">Hal</label>
                    <input type="text" class="form-control" name="hal" value="<?php echo $u->hal ?>">
                </div>


                <div class="form-group">
                    <label for="isi_ringkas">Isi Ringkas</label>
                    <input name="isi_ringkas" id="isi_ringkas" rows="4" class="form-control" value="<?php echo $u->isi_ringkas ?>">
               </div>

                <div class="form-group">
                    <label for="dari">Dari</label>
                    <input type="text" class="form-control" id="dari" name="dari" value="<?php echo $u->dari ?>">
                </div>


                <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?php echo $u->tujuan ?>">
               </div>

         <div class="muted pull-right">
          <button type="submit" class="btn btn-md btn-success" id="insert" form="form_agenda">Simpan</button>
          <a href="<?php echo base_url()?>agenda"><button class="btn btn-md btn-warning" >Batal</button></a>
        </div>
        
              </div>
        
            </div>
        
            <!-- /.row -->
          </div>
    </form>

        </div>
        <!-- /.box-header -->
     </div>
      

      <?php } ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?PHP
	$this->load->view('footer_admin_v');
?>

</body>
</html>

<?PHP
	}
?>
			  

