<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$pdf = new pdfgenerator('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetTitle('Registrasi Surat');
    $pdf->SetTopMargin(55);
	$pdf->SetLeftMargin(12);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('Author');
    $pdf->SetDisplayMode('real', 'default');
    $pdf->AddPage();
	$pdf->Image('assets/images/logo.png', '', 5, 58, 50, '', '', '', false, 300, '', false, false, 1, false, false, false);
	$pdf->Image('assets/images/jatim.png', 75, 27, 60, 10, '', '', '', false, 300, '', false, false, 1, false, false, false);
	$pdf->Image('assets/images/best.png', 140, 24, 45, 15, '', '', '', false, 300, '', false, false, 1, false, false, false);
	
	
	$row1 = $printnomor->row();
	$html='	<h3 align="center">Registrasi Nomor Surat</h3> </br>
			<table align="center" width="700px" cellpadding="5">
				<tr>
				<td align="left" width="25%" >Tanggal Registrasi</td>
				<td align="left">: '.$row1->tgl_agenda.'</td>
				</tr>
				
				<tr>
				<td align="left" width="25%" >Nomor Surat</td>
				<td align="left">: '.$row1->no_surat.'<b><big>'.$row1->no_urut.'</big>
				</b></td>
				</tr>
				
				<tr>
				<td align="left" width="25%" >Hal</td>
				<td align="justify">: '.$row1->hal.'</td>
				</tr>
				
				<tr>
				<td align="left" width="25%" >Isi Ringkas</td>
				<td align="justify">: '.$row1->isi_ringkas.'</td>
				</tr>
				
				<tr>
				<td align="left" width="25%" >Dari</td>
				<td align="left">: '.$row1->dari.'</td>
				</tr>
				
				<tr>
				<td align="left" width="25%" >Tujuan</td>
				<td align="left">: '.$row1->tujuan.'</td>
				</tr>
				
			</table>';
	
	
	$pdf->writeHTML($html, true, false, true, false, '');
    $pdf->Output('nomorsurat.pdf', 'I');

?>