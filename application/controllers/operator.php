<?php
	class Operator extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			$this->load->model('operator_m');
			 // Cek apakah terdapat session dengan nama authenticated
			if($this->session->userdata('logged_in') !== TRUE){ // Jika tidak ada
			  redirect('masuk'); // Redirect ke halaman login
			}
			}
	
	function index()
		 {
			 //Allowing akses to admin only
			  if($this->session->userdata('user_level')==='1'){
					$data			= array(); 
					$data ['op'] = $this->operator_m->view_data();
					$this->load->view('operator_v',$data);
			  }else{
				  echo "Access Denied";
			  }
		 }

	
	}
	
		
?>
