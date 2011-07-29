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
$pdf->SetHeaderData('logo.png', 16," Declaração de frequência", 'Instituto Nacional de Comunicação e Imagem de Moçambique');
   
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
//$data_actual = date("d-m-Y H:s");
// add a page
$pdf->AddPage();

$pdf->SetFont('helvetica', '', 8);
$titulo = "";
//Column titles

if(count($data)>0)
{
		$fill = 0;		
//$data = date('Y-m-d'); 
		
		foreach($lista as $row) {
		            $nome = $row[1];
					$datanasc =$row[2];
					$provincia =$row[3];
					$curso=$row[4];
					
		}		
		
		$pdf->Text(80, 30, 'REPÚBLICA DE MOÇAMBIQUE');		
		$pdf->Text(60, 37, 'INSTITUTO PROFISSIONAL DE COMUNICAÇÃO E IMAGEM');
		$pdf->Text(80, 44, 'CERTIDÃO DE HABILITAÇÕES');
		
		//mesma linha
		$pdf->Text(15, 60, 'Para os devidos efeitos e a pedido da interessada declara-se que');
		$pdf->Text(99, 60, $nome);
		$pdf->Text(140, 60, '---------------------------------------------------------------');
		
		
		//mesma linha
		$pdf->Text(15, 65, 'é aluno(a) Finalista do Curso  ');
		$pdf->Text(52, 65, $curso);
		$pdf->Text(105, 65, ' do INSTITUTO PROFISSIONAL DE COMUNICAÇÃO E IMAGEM, faltando-');
		
		//mesma linha
		$pdf->Text(15, 70, '-lhe a defesa do Curso, com os seguintes resultados: ');
		$pdf->Text(15, 75, '-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------');
		$pdf->Text(15, 80,'');
		

		$linha=85;
		$cont=0;		
		$sum=0;
		foreach($lista as $row) {
		
			$pdf->Text(15, $linha,$row[5]);
			$pdf->Text(85, $linha,'-');
			$pdf->Text(90, $linha,$row[7]);
			if($row[7] == 10){$pdf->Text(105,$linha,'(Dez) valores');}
			if($row[7] == 11){$pdf->Text(105,$linha,'(Onze) valores');}
			if($row[7] == 12){$pdf->Text(105,$linha,'(Doze) valores');}
			if($row[7] == 13){$pdf->Text(105,$linha,'(Treze) valores');}
			if($row[7] == 14){$pdf->Text(105,$linha,'(Catorze) valores');}
			if($row[7] == 15){$pdf->Text(105,$linha,'(Quinze) valores');}
			if($row[7] == 16){$pdf->Text(105,$linha,'(Dezasseis) valores');}
			if($row[7] == 17){$pdf->Text(105,$linha,'(Dezassete) valores');}
			if($row[7] == 18){$pdf->Text(105,$linha,'(Dezoito) valores');}
			if($row[7] == 19){$pdf->Text(105,$linha,'(Dezanove) valores');}
			if($row[7] == 20){$pdf->Text(105,$linha,'(Vinte) valores');}
			
			$notafinal=$row[6];
			
			$pdf->Ln();
			$fill=!$fill;
           $linha= $linha+5;
		   
		   //$sum=$sum+$row[7];		      
		   //$cont++;
		}
		
		$pdf->Text(80, $linha+15,'Maputo, _____ de _________ de 20____');
		
		//mesma linha
		$pdf->Text(25, $linha+25,'O Director Geral');
		$pdf->Text(155, $linha+25,'O Chefe da Secretaria');
		
		//mesma linha
		$pdf->Text(15, $linha+35,'______________________________');
		$pdf->Text(150, $linha+35,'_____________________________');
		
		
		$pdf->Text(90, $linha+50,'O Director Pedagógico');
		$pdf->Text(80, $linha+60,'_____________________________');
		 
		
}
else
{
  $pdf->SetTextColor(180,14,22);
  $pdf->SetFont('helvetica', 'B', 7);
  $pdf->RoundedRect(15, 30, 180, 4, 1.50, '1111', '1F');
  $pdf->Text(30, 30, 'Não ha dados para listar nesta opção.');
  
} 
                //$pdf->Text(160, 11, 'Data');
                 //$pdf->Text(170, 11, $data_actual);
                 $pdf->SetFont('helvetica', 'B', 10);
                 $pdf->Text(72, 5,$titulo);
                //  $pdf->Text(170, 11, $data_actual);
//Close and output PDF document
$pdf->Output('listagens.pdf', 'I');

?>