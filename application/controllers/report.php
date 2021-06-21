<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function index()
  {
    $this->load->library('dompdf_gen');
    $html = $this->load->view('welcome_message', $data, true);
    $filename = 'report_'.time();
    $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
  }
}