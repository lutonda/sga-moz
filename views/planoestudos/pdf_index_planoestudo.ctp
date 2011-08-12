<?php
App::import('Vendor','xtcpdf');
$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans'

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('RChongo');
$pdf->SetTitle('Plano de Estudos');
$pdf->SetSubject('TCPDF Tutorial');
// set default header data
$pdf->SetHeaderData('logo.png', 16, 'Dados do Plano de Estudos', "Instituto Superior de Comunicação e Imagem de Moçambique");

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
//Data loading
$pdf->AddPage();
$data =  $teste1;
// print colored table
		// Colors, line width and bold font
$pdf->SetTextColor(7,7,152);
$pdf->SetFont('helvetica', 'B', 6);
$pdf->RoundedRect(15, 23, 180, 6, 1.50, '1111', '1F');
$pdf->Text(18, 25, 'Codigo do Plano');
$pdf->Text(68, 25, 'Nome do Plano');
$pdf->Text(128, 25, 'Curso');
//------------------- ------------------------------------------------------------
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('helvetica', 'B', 6);
$pdf->Text(38, 25,$data[0]);
$pdf->Text(98, 25,$data[1]);
$pdf->Text(138, 25,$data[2]);


//--------------------------------------------------------------------------------
$pdf->SetTextColor(0,8,9);
$pdf->RoundedRect(15, 37, 180, 6, 1.50, '1111', '1F');
$pdf->Text(18, 39, 'Lista de Disciplinas pertecentes a este Plano');
$pdf->SetFont('helvetica', 'B', 6);
$data_actual = date("d-m-Y H:s");


// add a page
// $this->data["T0005planoestudo"]["id"]

//Column titles
$pdf->Ln(12);
$data =  $lista;
if(sizeof($data) != 0)
{
         $header = array('Id','Disciplina','Ano','Semestre','Teorica','Pratica');

         	$pdf->SetFillColor(255, 0, 0);
		$pdf->SetTextColor(255);
		$pdf->SetDrawColor(128, 0, 0);
		$pdf->SetLineWidth(0.3);
		$pdf->SetFont('', 'B');
		// Header
		$w = array(30, 30, 30, 30, 30, 30);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$pdf->Cell($w[$i],7, $header[$i], 1, 0, 'C', 1);
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
			$pdf->Cell($w[5], 6, $row[5], 'LR', 0, 'C', $fill);
			
			$pdf->Ln();
			$fill=!$fill;
		}
		$pdf->Cell(array_sum($w), 0, '', 'T');
}
else
{
$pdf->SetFont('helvetica', 'B', 6);
$pdf->SetTextColor(180,14,22);
$pdf->RoundedRect(15, 47, 180, 6, 1.50, '1111', '1F');
$pdf->Text(18, 48, 'Disciplinas nao definidas para este plano de estudo');
}
                 $pdf->Text(160, 11, 'Data');
                 $pdf->Text(170, 11, $data_actual);
// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('plano_de_estudos.pdf', 'I');

?>