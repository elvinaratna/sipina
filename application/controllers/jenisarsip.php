<?php
	class Jenisarsip extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			$this->load->model('jenisarsip_m');
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
					$data ['jarsip'] = $this->jenisarsip_m->view();
					$data ['jsurat'] = $this->jenisarsip_m->view_jsurat();
					$this->load->view('jenisarsip_v',$data);
			  }else{
				  echo "Access Denied";
			  }
		 }
		 
		 
	public function insert(){
			$id_jenissurat	= $this->input->post('id_jenissurat');
			$id_jenisarsip	= $this->input->post('id_jenisarsip');
			$nama			= $this->input->post('nama');
			
			$this->jenisarsip_m->setIdJenisSurat($id_jenissurat);
			$this->jenisarsip_m->setIdJenisArsip($id_jenisarsip);
			$this->jenisarsip_m->setNama($nama);
					
			$this->jenisarsip_m->insert();
			
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data baru berhasil disimpan!
              </div>');
		
			redirect("jenisarsip");
		}
		

	public function delete($id_jenisarsip)
    {
        $id['id_jenisarsip'] = $this->uri->segment(3);

        $this->jenisarsip_m->delete($id_jenisarsip);

        //redirect
        redirect('jenisarsip');

    }
	public function update() {
				
			$id_jenisarsip	= $this->input->post('id_jenisarsip_tmp');
			$nama			= $this->input->post('nama');
		
			$this->jenisarsip_m->setIdJenisArsip($id_jenisarsip);
			$this->jenisarsip_m->setNama($nama);
			
			$this->jenisarsip_m->update($id_jenisarsip);
			
			 $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Data berhasil diperbarui!
              </div>');
			  
			redirect("jenisarsip");
		}

	
	}
	
		
?>
