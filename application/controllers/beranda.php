<?php
	class Beranda extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			$this->load->model('formulir_m');
			 // Cek apakah terdapat session dengan nama logged in
			if($this->session->userdata('logged_in') !== TRUE){ // Jika tidak ada
			  redirect('masuk'); // Redirect ke halaman login
			}
			}
	
	function index()
		 {
			$data			= array(); 
			$data['surat']	= $this->formulir_m->jenissurat();
			$data['dari']	= $this->formulir_m->dari();
			$data['tujuan']	= $this->formulir_m->tujuan();
			$this->load->view('formulir_v', $data);
		 }
		 
	function view_generate(){
			$data			= array(); 
			$data['agenda']	= $this->formulir_m->view_nomorsurat();
			$this->load->view('generate_v', $data);
	}

	function view_generate_sisip(){
			$data			= array(); 
			$data['agenda']	= $this->formulir_m->view_nomorsurat();
			$this->load->view('generate_sisip_v', $data);
	}
	
	function view_laporan(){
			$data			= array(); 
			$data ['laporan'] = $this->formulir_m->laporan();
			$this->load->view('laporan_v',$data);
	}

	function import(){
			$data			= array(); 
			$this->load->view('import_v',$data);
	}


	
	function view_laporanbulanan(){
			$tglsurat = $this->input->post('tglsurat');
			$data ['laporan'] = $this->formulir_m->laporan_bulanan($tglsurat);
			$this->load->view('laporan_v',$data);
	}
	
	function cari_data(){
			$data			= array(); 
			$data ['caridata'] = $this->formulir_m->caridata();
			$this->load->view('caridata_v',$data);
	}
	
	public function export_excel(){
		header("Content-Type: application/vnd.ms-excel");
		header("Content-disposition");
		
	}

	function jenisarsip()
		 {
		  if($this->input->post('id_jenissurat'))
		  {
		   echo $this->formulir_m->jenisarsip($this->input->post('id_jenissurat'));
		  }
		 }
	function klasifikasi()
		 {
		  if($this->input->post('id_jenisarsip'))
		  {
		   echo $this->formulir_m->klasifikasi($this->input->post('id_jenisarsip'));
		  }
		 }
		 
		 
		public function insert(){
			$num = $this->formulir_m->view($this->input->post('surat'),$this->input->post('arsip'),$this->input->post('klasifikasi'));
			$datepic=date_format($this->input->post('tglsurat'),"%Y/%m/%d");

			if(($this->input->post('arsip') == 'KP.03' and $this->input->post('klasifikasi') == '01' ) or ($this->input->post('arsip') == 'KP.03' and $this->input->post('klasifikasi') == '02' )){
				$data = array(
					'tgl_agenda'		=> date("y/m/d h:i:sa"),
					'id_jenissurat'		=> $this->input->post('surat'),
					'id_jenisarsip'		=> $this->input->post('arsip'),
					'kode_klasifikasi'	=> $this->input->post('klasifikasi'),
					'dari'				=> $this->input->post('dari'),
					'tujuan'			=> $this->input->post('tujuan'),
					'tgl_surat'			=> $this->input->post('tglsurat'),
					'hal'				=> $this->input->post('hal'),
					'isi_ringkas'		=> $this->input->post('isi'),
					'nip'				=> $this->session->nip,
					'no_urut'			=> $num,
					'no_surat'			=> "W.15-".$num."-".$this->input->post('arsip').".".$this->input->post('klasifikasi')." TAHUN ".date("Y")
					
				);
			}else{
				$data = array(
					'tgl_agenda'		=> date("y/m/d h:i:sa"),
					'id_jenissurat'		=> $this->input->post('surat'),
					'id_jenisarsip'		=> $this->input->post('arsip'),
					'kode_klasifikasi'	=> $this->input->post('klasifikasi'),
					'dari'				=> $this->input->post('dari'),
					'tujuan'			=> $this->input->post('tujuan'),
					'tgl_surat'			=> $this->input->post('tglsurat'),
					'hal'				=> $this->input->post('hal'),
					'isi_ringkas'		=> $this->input->post('isi'),
					'nip'				=> $this->session->nip,
					'no_urut'			=> $num,
					'no_surat'			=> "W.15-".$this->input->post('arsip').".".$this->input->post('klasifikasi')."-"
					
				);
			}

			
		
			if ($this->formulir_m->insert_data($data)){
				echo "Gagal";
			}else{
				redirect('beranda/view_generate');
			}

		}


		public function insert_sisipan(){
			$nosip = $this->formulir_m->view_sisip($this->input->post('surat'), $this->input->post('tglsurat'));
			$norut = $this->formulir_m->view_urut($this->input->post('surat'), $this->input->post('tglsurat'));
			$datepic=date_format($this->input->post('tglsurat'),"%Y/%m/%d");

				$data = array(
					'tgl_agenda'		=> date("y/m/d h:i:sa"),
					'id_jenissurat'		=> $this->input->post('surat'),
					'id_jenisarsip'		=> $this->input->post('arsip'),
					'kode_klasifikasi'	=> $this->input->post('klasifikasi'),
					'dari'				=> $this->input->post('dari'),
					'tujuan'			=> $this->input->post('tujuan'),
					'tgl_surat'			=> $this->input->post('tglsurat'),
					'hal'				=> $this->input->post('hal'),
					'isi_ringkas'		=> $this->input->post('isi'),
					'nip'				=> $this->session->nip,
					'no_urut'			=> $norut,
					'no_surat'			=> "W.15-".$this->input->post('arsip').".".$this->input->post('klasifikasi')."-",
					'no_sisipan'		=> $nosip
				);
			

			
		
			if ($this->formulir_m->insert_data($data)){
				echo "Gagal";
			}else{
				redirect('beranda/view_generate_sisip');
			}

		}
	
	}
	
		
?>
