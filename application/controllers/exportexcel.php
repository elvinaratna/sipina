<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Exportexcel extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model('formulir_m');
    }    
	public function index() {
		$tglsurat = $this->input->post('tglsurat');
        $data['page'] = 'export-excel';
        $data['title'] = 'Laporan Bulan '.$tglsurat;
        $data['report'] = $this->formulir_m->laporan();
		$this->load->view('laporan_v',$data);
    }
	public function createExcel() {
		$report =  $this->formulir_m->laporan();
		$fileName = 'monthlyReport.xlsx';  
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Klasifikasi Surat');
        $sheet->setCellValue('C1', 'Jumlah');      
        $rows = 2;
		$i=1;
        foreach ($report as $val){
            $sheet->setCellValue('A'.$rows, $i++);
            $sheet->setCellValue('B'.$rows, $val->nama);
            $sheet->setCellValue('C'.$rows, $val->jumlah);
            $rows++;
        } 
		//$sheet->setCellValue('C'.$n, '=SUM(C2:C'.$n')');
        $writer = new Xlsx($spreadsheet);
		$writer->save("upload/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);              
    }    
}
?>