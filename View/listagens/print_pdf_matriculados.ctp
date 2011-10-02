<?php
$data =  $lista;
App::import('Vendor','xtcpdf');
$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans'
$data =  $lista;
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Raimundo Chongo');
$pdf->SetTitle('Lista de Funcionarios');
$pdf->SetSubject('TCPDF');
// set default header data
$pdf->SetHeaderData('logo.png', 16, 'Lista de Matriculados', 'Instituto Nacional de Comunicação e Imagem de Moçambique');
   
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
	  
       $pdf->Text(75, 5,$titulos);
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
$pdf->SetFont('helvetica', '', 8);

//Column titles
if(count($data)>0)
{

if($verifica ==1){$header = array(' ','Codigo. Aluno', 'Nome do Aluno','Nome do Curso','Data da Matri.');}
if($verifica ==2){$header = array(' ','Codigo. Aluno', 'Nome do Aluno','Data da Matricula','Estado');}
if($verifica ==3){$header = array(' ','Cod. Aluno', 'Nome do Aluno','Nome do Curso','Data Matri.','Data Anulação','Estado');}
if($verifica ==4){$header = array(' ','Cod. Aluno', 'Nome do Aluno','Nome do Curso','Data Matri.','Data Conclusão');}

// print colored table
		// Colors, line width and bold font
		$pdf->SetFillColor(255, 0, 0);
		$pdf->SetTextColor(255);
		$pdf->SetDrawColor(128, 0, 0);
		$pdf->SetLineWidth(0.3);
		$pdf->SetFont('', 'B');
		// Header
		
if($verifica ==1){$w = array(10,25,60,65,22);}	
if($verifica ==2){$w = array(10,25,95,25,25);}	
if($verifica ==3){$w = array(5,18,55,55,20,22,18);}	
if($verifica ==4){$w = array(5,18,60,60,20,24);}	
	
		
		
		
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
		//var_dump($lista);
		foreach($lista as $row) {
		//var_dump($row);
		if($verifica ==1){             
			$pdf->Cell($w[0], 6, $row[0], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[1], 6, $row[1], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[2], 6, $row[2], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[3], 6, $row[3], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[4], 6, $row[4], 'LR', 0, 'C', $fill);
		    $titulo = $row[0];
        }
		if($verifica ==2){ 
		
			$pdf->Cell($w[0], 6, $row[0], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[1], 6, $row[1], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[2], 6, $row[2], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[4], 7, $row[4], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[6], 6, $row[6], 'LR', 0, 'C', $fill);
			 $titulo = $row[0];
        }
		if($verifica ==3){ 
		
			$pdf->Cell($w[0], 6, $row[0], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[1], 6, $row[1], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[2], 6, $row[2], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[3], 6, $row[3], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[4], 6, $row[4], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[5], 6, $row[5], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[6], 6, $row[6], 'LR', 0, 'C', $fill);
			 $titulo = $row[0];
        }
		if($verifica ==4){ 
		//var_dump($lista);
			$pdf->Cell($w[0], 6, $row[0], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[1], 6, $row[1], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[2], 6, $row[2], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[3], 6, $row[3], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[4], 6, $row[4], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[5], 6, $row[5], 'LR', 0, 'C', $fill);
			 $titulo = $row[0];
        }			 
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

//Close and output PDF document
$pdf->Output('listagens.pdf', 'I');

?>