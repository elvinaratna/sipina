<?php
	class Agenda extends CI_Controller{

 	function __construct(){
		parent::__construct();
		$this->load->model('data_m');
		$this->load->helper('url');
	}


	function index()
		 {
			 //Allowing akses to admin only
			  if($this->session->userdata('user_level')=='1'){
					$data			= array(); 
					$data ['agenda'] =  $this->data_m->tampil_data()->result();
					$this->load->view('agenda_v',$data);
			  }else{
				  echo "Access Denied";
			  }
		 }

 
	function tambah(){
		$this->load->view('sisip_v');
	}

 
 	function tambah_aksi(){
		$id_jenissurat = $this->input->post('id_jenissurat');
		$id_jenisarsip = $this->input->post('id_jenisarsip');
		$kode_klasifikasi = $this->input->post('kode_klasifikasi');
		$tgl_agenda = $this->input->post('tgl_agenda');
		$no_surat = $this->input->post('no_surat');
		$no_urut = $this->input->post('no_urut');
		$no_sisipan = $this->input->post('no_sisipan');
		$tgl_surat = $this->input->post('tgl_surat');
		$hal = $this->input->post('hal');
		$isi_ringkas = $this->input->post('isi_ringkas');
		$dari = $this->input->post('dari');
		$tujuan = $this->input->post('tujuan');
		$nip = $this->input->post('nip');

		$data = array(
			'id_jenissurat' => $id_jenissurat,
			'id_jenisarsip' => $id_jenisarsip,
			'kode_klasifikasi' => $kode_klasifikasi,
			'tgl_agenda' => $tgl_agenda,
			'no_surat' => $no_surat,
			'no_urut' => $no_urut,
			'no_sisipan' => $no_sisipan,
			'tgl_surat' => $tgl_surat,
			'hal' => $hal,
			'isi_ringkas' => $isi_ringkas,
			'dari' => $dari,
			'tujuan' => $tujuan,
			'nip' => $nip
		);
		$this->data_m->input_data($data);
		redirect('agenda/index');
	}

 

	function hapus($id_agenda){
		$where = array('id_agenda' => $id_agenda);
		$this->data_m->hapus_data($where);
		redirect('agenda/index');
	}

 

	function edit($id_agenda){
		$where = array('id_agenda' => $id_agenda);
		$data['agenda'] = $this->data_m->edit_data($where)->result();
		$this->load->view('editagenda_v',$data);
	}

	function update(){
		$id_agenda = $this->input->post('id_agenda');
		$hal = $this->input->post('hal');
		$isi_ringkas = $this->input->post('isi_ringkas');
		$dari = $this->input->post('dari');
		$tujuan = $this->input->post('tujuan');
 
 		$data = array(
		'hal' => $hal,
		'isi_ringkas' => $isi_ringkas,
		'dari' => $dari,
		'tujuan' => $tujuan
		);
		 
		$where = array(
		'id_agenda' => $id_agenda
		);
		 
		$this->data_m->update_data($where,$data);
		redirect('agenda/index');

	}

 

}