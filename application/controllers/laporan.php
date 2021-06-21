<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_m','tagenda');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('laporan_v');
	}

	public function ajax_list()
	{
		$list = $this->tagenda->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $tagenda) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $tagenda->nama;
			$row[] = $tagenda->jumlah;

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->tagenda->count_all(),
						"recordsFiltered" => $this->tagenda->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

}
