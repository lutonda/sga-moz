<?php
App::import('Vendor','xtcpdf');
$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans'
$data =  $lista;
//var_dump($data);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Raimundo Chongo');
$pdf->SetTitle('Lista de Estudantes');
$pdf->SetSubject('TCPDF');
// set default header data
$pdf->SetHeaderData('logo.png', 16," Lista de Estudantes", 'Escola Superior de Economia e Gestão');
   
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


// set font
//$pdf->SetFont('helvetica', '', 8);
$data_actual = date("d-m-Y H:s");
// add a page
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 8);
$pdf->Text(160, 11, 'Data');
       $pdf->Text(170, 11, $data_actual);
       $pdf->SetFont('helvetica', 'B', 10);
	   //var_dump($titulos);
	   //var_dump($descricao);
       $pdf->Text(75, 5,$titulos);
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
$pdf->SetFont('helvetica', '', 8);

if(count($data)>0)
{
$header = array(' ','Codigo', 'Nome');
// print colored table
		// Colors, line width and bold font
		$pdf->SetFillColor(176,224,230);
		$pdf->SetTextColor(255);
		$pdf->SetDrawColor(128, 0, 0);
		$pdf->SetLineWidth(0.3);
		$pdf->SetFont('', 'B');
		// Header
		$w = array(10, 40, 140);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'L', 1);
		}
		$pdf->Ln();
		// Color and font restoration
		$pdf->SetFillColor(224, 235, 255);
		$pdf->SetTextColor(0);
		$pdf->SetFont('');
                
		// Data
		$fill = 0;
		//var_dump($lista);
		foreach($lista as $row) {
		    $titulo = $row[0];
			//var_dump($titulos);
			$pdf->Cell($w[0], 6, $row[1], 'LR', 0, 'L', $fill);
			$pdf->Cell($w[1], 6, $row[2], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[2], 6, $row[3], 'LR', 0, 'L', $fill);
			
			$pdf->Ln();
			$fill=!$fill;
                      
		}
                
		$pdf->Cell(array_sum($w), 0, '', 'T');
}
else
{
  $pdf->SetTextColor(180,14,22);
  $pdf->SetFont('helvetica', 'B', 7);
  $pdf->RoundedRect(15, 30, 180, 4, 1.50, '1111', '1F');
  $pdf->Text(30, 30, 'Não ha dados para listar nesta opção.');
  
} 
            
                       //  $pdf->Text(170, 11, $data_actual);
//Close and output PDF document
$pdf->Output('listagens.pdf', 'I');

?>