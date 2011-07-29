<?php
App::import('Vendor','xtcpdf');
$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans'

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('RChongo');
$pdf->SetTitle('Lista de Plano de Estudos');
$pdf->SetSubject('TCPDF Tutorial');
// set default header data
$pdf->SetHeaderData('logo.png', 16, 'Lista de Plano de Estudos', "Instituto Superior de Comunicação e Imagem de Moçambique");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
//$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 8);
$data_actual = date("d-m-Y H:s");
// add a page
$pdf->AddPage();

//Column titles
$header = array('ID', 'Nome do Plano','Nome do Curso','Duração em Anos','Semestres');
//$header = array('Nome', 'Organização','Localidade','Número de Cartão');

//Data loading
$data = $lista;

// print colored table
		// Colors, line width and bold font
		$pdf->SetFillColor(255, 0, 0);
		$pdf->SetTextColor(255);
		$pdf->SetDrawColor(128, 0, 0);
		$pdf->SetLineWidth(0.3);
		$pdf->SetFont('', 'B');
		// Header
		$w = array(10, 50, 70, 30, 20);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
		}
		$pdf->Ln();
		// Color and font restoration
		$pdf->SetFillColor(224, 235, 255);
		$pdf->SetTextColor(0);
		$pdf->SetFont('');
		// Data
		$fill = 0;
		foreach($data as $row) {
			$pdf->Cell($w[0], 6, $row[0], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[1], 6, $row[1], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[2], 6, $row[2], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[3], 6, $row[3], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[4], 6, $row[4], 'LR', 0, 'C', $fill);
            
			$pdf->Ln();
			$fill=!$fill;
		}
		$pdf->Cell(array_sum($w), 0, '', 'T');
                 $pdf->Text(160, 11, 'Data');
                 $pdf->Text(170, 11, $data_actual);
// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('membros.pdf', 'I');

?>