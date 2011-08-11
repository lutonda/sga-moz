<?php
$data_turma =  $lista_turma;
$data_pauta =  $lista_pauta;
$data_exame =  $lista_exame;
//var_dump($lista_turma);

App::import('Vendor','xtcpdf');
$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans'
$data_turma =  $lista_turma;
$data_pauta =  $lista_pauta;
$data_exame =  $lista_exame;


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Raimundo Chongo');
$pdf->SetTitle('Lista de Funcionarios');
$pdf->SetSubject('TCPDF');
// set default header data
$pdf->SetHeaderData('logo.png', 16, 'Lista', 'Instituto Nacional de Comunicação e Imagem de Moçambique');
   
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
$pdf->Text(42, 5.5,$titulos);
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
//var_dump($lista_pauta);
if(count($data_turma)>0 || count($data_pauta)>0 || count($data_exame)>0)
{
//var_dump($lista2);
//var_dump($verifica);
		foreach($lista_turma as $row) {
					$curso=$row[3];
					$disciplina=$row[2];
					$ano = $row[0];
					$semestre = $row[1];
					$docente = $row[4];
					$myLabels = $row[5].',Media Final';
					$anolectivo = $row[6];
		}	
				
	if($verifica ==1){	
		//mesma linha
		$pdf->Text(15, 30, 'Curso de: ');		
		$pdf->Text(30, 30, $curso);		
		$pdf->Text(85, 30, $ano);
		$pdf->Text(88, 30, ' - ano ');
		$pdf->Text(98, 30, $semestre);
		$pdf->Text(100, 30, ' - semestre ');
		
		//mesma linha
		$pdf->Text(15, 40, 'Disciplina: ');		
		$pdf->Text(30, 40, $disciplina);
		
		//mesma linha
		$pdf->Text(15, 50, 'Docente: ');		
		$pdf->Text(30, 50, $docente);		
	}

	if($verifica == 2){
		$pdf->Text(15, 30, 'Curso de: ');		
		$pdf->Text(30, 30, $curso);	
		$pdf->Text(15, 40, 'Ano Lectivo de: ');		
		$pdf->Text(35, 40, $anolectivo);

		
		//mesma linha
		$pdf->Text(15, 50, 'Disciplina: ');		
		$pdf->Text(30, 50, $disciplina);
	
	}

	
		$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
		

		if($verifica == 1){$header = explode(',', $myLabels);}
        if($verifica == 2){$header = array('Cod.Aluno', 'Nome do Aluno','CIF','Exame','CFD', 'Observação');}
		
		// Colors, line width and bold font
		$pdf->SetFillColor(255, 0, 0);
		$pdf->SetTextColor(255);
		$pdf->SetDrawColor(128, 0, 0);
		$pdf->SetLineWidth(0.3);
		$pdf->SetFont('', 'B');
		// Header
		
		
		$num_headers = count($header);
		
	 if($verifica==1){	
		//Ajusta o tamanho de cada coluna
		$w = array();		
		$w[0]=18;$w[1]=50;
		for($i = 2; $i < $num_headers; $i++) {
			$w[$i]  = 20;
			
		}
		//var_dump($w);
	 }
	
	if($verifica == 2){
		$w = array(20,65,12,12,12,65);
	}
	
	
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
		$sum = 0;
		
	if($verifica == 1){	
		foreach($lista_pauta as $row) {			
		                   // percorre todos os campos do arry da linha e afixa
                   for ($i = 0; $i < count($row); $i++) {
				 
				    $pdf->Cell($w[$i], 6, $row[$i], 'LR', 0, 'C', $fill);
					 
					 if ($i>1) {
						$sum=$sum + $row[$i];
                      }
                   }
                   // coloca a coluna com a media
                   $media = round($sum/(count($row)-2));
				     $sum = 0;
                   $pdf->Cell($w[$i], 6, $media, 'LR', 0, 'C', $fill);
			
			$pdf->Ln();
			$fill=!$fill;
			
		}
	}

	if($verifica ==2){
	$linha = 80;
	
		 
		foreach($lista_exame as $row) {			
		//var_dump($lista_exame);
			$pdf->Cell($w[0], 6, $row[0], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[1], 6, $row[1], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[2], 6, $row[2], 'LR', 0, 'C', $fill);
			$pdf->Cell($w[3], 6, $row[3], 'LR', 0, 'C', $fill);
			
			$sum=$row[2]+$row[3];
			
			$media = round($sum/2);
		    $sum = 0;  
			$pdf->Cell($w[4], 6, $media, 'LR', 0, 'C', $fill);
			$pdf->Cell($w[5], 6, '', 'LR', 0, 'C', $fill);
			
								
			$pdf->Ln();
			$fill=!$fill;
			$linha= $linha+5;
			
		}	
	}
	
		$pdf->Cell(array_sum($w), 0, '', 'T');
		
	if($verifica ==2){
		$pdf->Text(90, $linha+10,'O Director Pedagógico');
		$pdf->Text(80, $linha+20,'_____________________________');
	}
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