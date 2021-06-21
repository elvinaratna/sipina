<?php
	class Sisip extends CI_Controller{
		
	public function __construct() {
			parent::__construct();
			$this->load->model('formulir_m');
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
					$data['surat']	= $this->formulir_m->jenissurat();
					$data['dari']	= $this->formulir_m->dari();
					$data['tujuan']	= $this->formulir_m->tujuan();
					$this->load->view('formulir_sisipan_v',$data);
			  }else{
				  echo "Access Denied";
			  }
		 }
		 
		
		public function insert(){
			
			$id_jenissurat		= $this->input->post('id_jenissurat');
			$id_jenisarsip		= $this->input->post('id_jenisarsip');
			$kode_klasifikasi  	= $this->input->post('kode_klasifikasi');
			$tgl_agenda 		= date("y/m/d h:i:sa");
			$no_surat  			= $this->input->post('no_surat');
			$no_urut  			= $this->input->post('no_urut');
			$no_sisipan			= $this->input->post('no_sisipan');
			$tgl_surat  		= $this->input->post('tgl_surat');
			$hal  				= $this->input->post('hal');
			$isi_ringkas		= $this->input->post('isi_ringkas');
			$dari				= $this->input->post('dari');
			$tujuan				= $this->input->post('tujuan');
			$nip				= $this->session->nip;
					
			$this->sisipan_m->setIdJenisSurat($id_jenissurat);
			$this->sisipan_m->setIdJenisArsip($id_jenisarsip);
			$this->sisipan_m->setKodeKlasifikasi($kode_klasifikasi);
			$this->sisipan_m->setTglAgenda($tgl_agenda);
			$this->sisipan_m->setNoSurat($no_surat);
			$this->sisipan_m->setNoUrut($no_urut);
			$this->sisipan_m->setNoSisipan($no_sisipan);
			$this->sisipan_m->setTglSurat($tgl_surat);
			$this->sisipan_m->setHal($hal);
			$this->sisipan_m->setIsiRingkas($isi_ringkas);
			$this->sisipan_m->setDari($dari);
			$this->sisipan_m->setTujuan($tujuan);
			$this->sisipan_m->setNip($nip);
		
			$this->sisipan_m->insert();
			$data					=	array();
			$data['sisipan']		=	$this->sisipan_m->view();
			redirect("sisipan");
		}
		public function delete(){
			$id_agenda = $this->uri->segment(3);
			$this->sisipan_m->delete($id_agenda);
			$data					=	array();
			$data['sisipan']		=	$this->sisipan_m->view();
			redirect("sisipan");
		}
	
		public function update() {
				
			$id_agenda 			= $this->input->post('id_agenda_tmp');
			$id_jenissurat		= $this->input->post('id_jenissurat');
			$id_jenisarsip		= $this->input->post('id_jenisarsip');
			$kode_klasifikasi  	= $this->input->post('kode_klasifikasi');
			$tgl_agenda 		= $this->input->post('tgl_agenda');
			$no_surat  			= $this->input->post('no_surat');
			$no_urut  			= $this->input->post('no_urut');
			$no_sisipan			= $this->input->post('no_sisipan');
			$tgl_surat  		= $this->input->post('tgl_surat');
			$hal  				= $this->input->post('hal');
			$isi_ringkas		= $this->input->post('isi_ringkas');
			$dari				= $this->input->post('dari');
			$tujuan				= $this->input->post('tujuan');
			$nip				= $this->input->post('nip');
		
			$this->sisipan_m->setIdAgenda($id_agenda);
			$this->sisipan_m->setIdJenisSurat($id_jenissurat);
			$this->sisipan_m->setIdJenisArsip($id_jenisarsip);
			$this->sisipan_m->setKodeKlasifikasi($kode_klasifikasi);
			$this->sisipan_m->setTglAgenda($tgl_agenda);
			$this->sisipan_m->setNoSurat($no_surat);
			$this->sisipan_m->setNoUrut($no_urut);
			$this->sisipan_m->setNoSisipan($no_sisipan);
			$this->sisipan_m->setTglSurat($tgl_surat);
			$this->sisipan_m->setHal($hal);
			$this->sisipan_m->setIsiRingkas($isi_ringkas);
			$this->sisipan_m->setDari($dari);
			$this->sisipan_m->setTujuan($tujuan);
			$this->sisipan_m->setNip($nip);
			
			
			$this->sisipan_m->update($id_agenda);
			$data					=	array();
			$data['sisipan']		=	$this->sisipan_m->view();
			redirect("sisipan");
		}
	}
?>