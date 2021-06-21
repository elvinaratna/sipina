<?php
	class Divisi extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			$this->load->model('divisi_m');
			 // Cek apakah terdapat session dengan nama authenticated
			if($this->session->userdata('logged_in') !== TRUE){ // Jika tidak ada
			  redirect('masuk'); // Redirect ke halaman login
			}
			}
	
	function index()
		 {
			 //Allowing akses to admin only
			  if($this->session->userdata('user_level')=='1'){
					$data			= array(); 
					$data ['bag'] = $this->divisi_m->view_div();
					$this->load->view('divisi_v',$data);
			  }else{
				  echo "Access Denied";
			  }
		 }
		 
	public function insert(){
			$nama			= $this->input->post('nama');
			
			$this->divisi_m->setNama($nama);
					
			$this->divisi_m->insert();
			
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data baru berhasil disimpan!
              </div>');
		
			redirect("divisi");
		}
		
	public function delete(){
			$id_divisi = $this->uri->segment(3);
			$this->divisi_m->delete($id_divisi);
			
			redirect("divisi");
		}
	public function update() {
				
			$id_divisi	= $this->input->post('id_divisi_tmp');
			$nama		= $this->input->post('nama');
		
			$this->divisi_m->setIdDivisi($id_divisi);
			$this->divisi_m->setNama($nama);
			
			$this->divisi_m->update($id_divisi);
			
			 $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data berhasil diperbarui!
              </div>');
			  
			redirect("divisi");
		}

	
	}
	
		
?>
