<?php
	class Jenissurat extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			$this->load->model('jenissurat_m');
			 // Cek apakah terdapat session dengan nama authenticated
			if($this->session->userdata('logged_in') !== TRUE){ // Jika tidak ada
			  redirect('masuk'); // Redirect ke halaman login
			}
			}
	
	function index()
		 {
			 //Allowing akses to admin only
			  if($this->session->userdata('user_level')=='1'){
					$data				 = array(); 
					$data ['jsurat'] = $this->jenissurat_m->view();
					$this->load->view('jenissurat_v',$data);
			  }else{
				  echo "Access Denied";
			  }
		 }
		 
		 
	public function insert(){
			$id_jenissurat	= $this->input->post('id_jenissurat');
			$nama			= $this->input->post('nama');
			
			$this->jenissurat_m->setIdJenisSurat($id_jenissurat);
			$this->jenissurat_m->setNama($nama);
					
			$this->jenissurat_m->insert();
			
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data baru berhasil disimpan!
              </div>');
		
			redirect("jenissurat");
		}
		

	public function delete($id_jenissurat)
    {
        $id['id_jenissurat'] = $this->uri->segment(3);

        $this->jenissurat_m->delete($id_jenissurat);

        //redirect
        redirect('jenissurat');

    }
	public function update() {
				
			$id_jenissurat	= $this->input->post('id_jenissurat_tmp');
			$nama			= $this->input->post('nama');
		
			$this->jenissurat_m->setIdJenisSurat($id_jenissurat);
			$this->jenissurat_m->setNama($nama);
			
			$this->jenissurat_m->update($id_jenissurat);
			
			 $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data berhasil diperbarui!
              </div>');
			  
			redirect("jenissurat");
		}

	
	}
	
		
?>
