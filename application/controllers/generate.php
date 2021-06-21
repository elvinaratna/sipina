<?php
	class generate extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			$this->load->model('formulir_m');
			$this->load->library('pdfgenerator');
		}
	
	function index()
		 {
			$data			= array(); 
			$data['agenda']	= $this->formulir_m->view_nomorsurat();
			$this->load->view('formulir_v', $data);
		 }
	
	public function cetak()
        {
			$id_agenda			= $this->uri->segment(3);
			$data				= array(); 
			$data['printnomor']	= $this->formulir_m->view_cetak($id_agenda);
            $this->load->view('cetaknomor_v', $data);
        }
	
	}
	
		
?>
