<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class masuk extends CI_Controller {

	public function __construct() {
	parent::__construct();
		$this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('user_m');
	}
	
	public function index(){
		if($this->session->userdata('logged_in') == TRUE){ // Jika user sudah login (Session authenticated ditemukan)
			  redirect('beranda'); // Redirect ke page welcome
			}
		$this->load->view('login_v'); // Load view login.php
	  }
	
	
	public function login(){
		$nip = $this->input->post('nip'); // Ambil isi dari inputan nip pada form login
		$password = MD5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
		$validate = $this->user_m->validate($nip,$password);
		
		if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $nip  = $data['nip'];
        $nama = $data['nama'];
        $user_level = $data['user_level'];
        $sesdata = array(
            'nip'  		=> $nip,
            'nama'     	=> $nama,
            'user_level'=> $user_level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($user_level === '1'){
            redirect('sUp3r4DM1N');
        // access login for operator
        }else{
            redirect('beranda');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('masuk');
    }
	  }

	  
	public function logout(){
		$this->session->sess_destroy(); // Hapus semua session
		redirect('masuk'); // Redirect ke halaman login
	}
	
		public function passwd() {
			
			$ke			= $this->uri->segment(3);
			$nip		= $this->session->userdata('nip');
			
			//var post
			$p1				= md5($this->input->post('n1'));
			$p2				= md5($this->input->post('n2'));
			$p3				= md5($this->input->post('n3'));
			
				$cek_password_lama	= $this->db->query("SELECT password FROM mpegawai WHERE nip = '$nip'")->row();
				//echo $nip;
				
				if ($cek_password_lama->password != $p1) {
					$this->session->set_flashdata('k_passwd', '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Password Lama Tidak Sama
              </div>');
					redirect('beranda');
				} else if ($p2 != $p3) {
					$this->session->set_flashdata('k_passwd', '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Password Baru Tidak Sama
              </div>');
					redirect('beranda');
				} else if ($p1 == $p2) {
					$this->session->set_flashdata('k_passwd', '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Password Baru sama dengan password lama
              </div>');
					redirect('beranda');
				} else {
					$this->db->query("UPDATE mpegawai SET password = '$p3' WHERE nip = '$nip'");
					$this->session->set_flashdata('k_passwd', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
				Password berhasil diperbarui
              </div>');
					$this->session->sess_destroy();
					redirect('masuk');
				}
			
		}
}
