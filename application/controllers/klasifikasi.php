<?php
	class Klasifikasi extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			$this->load->model('klasifikasi_m');
			 // Cek apakah terdapat session dengan nama authenticated
			if($this->session->userdata('logged_in') !== TRUE){ // Jika tidak ada
			  redirect('masuk'); // Redirect ke halaman login
			}
			}
	
	function index()
		 {
			 //Allowing akses to admin only
			  if($this->session->userdata('user_level')=='1'){
					$data				  = array(); 
					$data ['klasifikasi'] = $this->klasifikasi_m->view();
					$this->load->view('klasifikasi_v',$data);
			  }else{
				  echo "Access Denied";
			  }
		 }
		 
		 
	public function insert(){
			$id_jenisarsip		= $this->input->post('id_jenisarsip');
			$kode_klasifikasi	= $this->input->post('kode_klasifikasi');
			$nama				= $this->input->post('nama');
			
			$this->klasifikasi_m->setIdJenisArsip($id_jenisarsip);
			$this->klasifikasi_m->setKodeKlasifikasi($kode_klasifikasi);
			$this->klasifikasi_m->setNama($nama);
					
			$this->klasifikasi_m->insert();
			
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data baru berhasil disimpan!
              </div>');
		
			redirect("klasifikasi");
		}
		

	public function delete($id_jenisarsip,$kode_klasifikasi)
    {
        $id_arsip['id_jenisarsip'] = $this->uri->segment(3);
		$id['kode_klasifikasi'] = $this->uri->segment(4);
        $this->klasifikasi_m->delete($id_jenisarsip,$kode_klasifikasi);

        //redirect
        redirect('klasifikasi');

    }
	public function update() {
			$id_jenisarsip		= $this->input->post('id_jenisarsip_tmp');	
			$kode_klasifikasi	= $this->input->post('kode_klasifikasi_tmp');
			$nama				= $this->input->post('nama');
		
			$this->klasifikasi_m->setIdJenisArsip($id_jenisarsip);
			$this->klasifikasi_m->setKodeKlasifikasi($kode_klasifikasi);
			$this->klasifikasi_m->setNama($nama);
			
			$this->klasifikasi_m->update($kode_klasifikasi, $id_jenisarsip);
			
			 $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data berhasil diperbarui!
              </div>');
			  
			redirect("klasifikasi");
		}

	
	}
	
		
?>
