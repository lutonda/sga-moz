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
$pdf->SetHeaderData('logo.png', 16, 'Pauta de Resultados', 'Instituto Nacional de Comunicação e Imagem de Moçambique');
   
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
$pdf->SetFont('helvetica', 'B', 9);
$pdf->Text(72, 5,$titulos);
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
$pdf->SetFont('helvetica', '', 8);
$pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
//Column titles
if(count($data)>0)
{

		foreach($lista1 as $row) {
					$anoLectivo = $row[0];
					$disciplina=$row[1];
					$curso=$row[2];				
					$docente = $row[3];					
		}		
		
		//mesma linha
		$pdf->Text(15, 30, 'Curso de: ');		
		$pdf->Text(30, 30, $curso);	
		$pdf->Text(15, 40, 'Ano Lectivo de: ');		
		$pdf->Text(35, 40, $anoLectivo);

		
		//mesma linha
		$pdf->Text(15, 50, 'Disciplina: ');		
		$pdf->Text(30, 50, $disciplina);
		
		//mesma linha
		//$pdf->Text(15, 50, 'Docente: ');		
		//$pdf->Text(30, 50, $docente);
		
		
		
		$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
		




$header = array('Cod.Aluno', 'Nome do Aluno','CIF','Exame','CFD', 'Observação');
// print colored table
		// Colors, line width and bold font
		$pdf->SetFillColor(255, 0, 0);
		$pdf->SetTextColor(255);
		$pdf->SetDrawColor(128, 0, 0);
		$pdf->SetLineWidth(0.3);
		$pdf->SetFont('', 'B');
		// Header
		$w = array(20,65,12,12,12,65);
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
		$count = 0;
		$linha = 80;
		foreach($lista as $row) {			
		
			$pdf->Cell($w[0], 6, $row[0], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[1], 6, $row[1], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[2], 6, $row[2], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[3], 6, $row[3], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[4], 6, $row[4], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[5], 6, $row[5], 'LR', 0, 'C', $fill);
						
			/*$sum=$row[2]+$row[3]+$row[4]+$row[5]+$row[6]+$row[7]+$row[8];
			
			$media = round($sum/$row[9]);
			*/
			
			//$pdf->Cell($w[9], 6, $media, 'LR', 0, 'C', $fill);
			
			$pdf->Ln();
			$fill=!$fill;
			$linha= $linha+5;
			
		}
		$pdf->Cell(array_sum($w), 0, '', 'T');
		
		$pdf->Text(90, $linha+10,'O Director Pedagógico');
		$pdf->Text(80, $linha+20,'_____________________________');
}
else
{
  $pdf->SetTextColor(180,14,22);
  $pdf->SetFont('helvetica', 'B', 7);
  $pdf->RoundedRect(15, 30, 180, 4, 1.50, '1111', '1F');
  $pdf->Text(30, 30, 'Não ha dados para listar nesta opção.');
}
                $pdf->Text(160, 11, 'Data');
                 $pdf->Text(170, 11, $data_actual);
                 $pdf->SetFont('helvetica', 'B', 10);
                // $pdf->Text(72, 5,$titulo);
//Close and output PDF document
$pdf->Output('listagens.pdf', 'I');

?>