<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetakpdf extends CI_Controller {

		public function __construct()
        {   
            parent::__construct();
            $this->load->library('pdfgenerator');
        }
		public function cetak()
        {
            $this->load->view('cetaknomor_v', $data);
        }
}
