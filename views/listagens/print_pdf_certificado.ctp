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
$pdf->SetHeaderData('logo.png', 16," Certificado", 'Instituto Nacional de Comunicação e Imagem de Moçambique');
   
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

if(count($data)>0 && $verifica == true)
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
		
		$pdf->Text(15, 60, 'Joana Francisco Manhiça Muianga ----------------------------------------------------------------------------------------------------------------------------------------------');
		$pdf->Text(15, 65, 'Chefe da Secretaria do Instituto Profissional de Comunicação e Imagem --------------------------------------------------------------------------------------------');
		//mesma linha
		$pdf->Text(15, 70, 'certifica, em cumprimento do despacho exarado no requerimento que fica arquivado nesta Secretaria, que ');
		$pdf->Text(150, 70, $nome);
		
		//mesma linha
		$pdf->Text(15, 75, 'Filho de  ');
		$pdf->Text(27, 75, '***Nome do pai**** '); // acrescentar a variavel da filiacao do pai
		$pdf->Text(100, 75, ' e de '); 
		$pdf->Text(108, 75, '***Nome da mae**** '); // acrescentar a variavel da filiacao do pai
		
		//mesma linha
		$pdf->Text(15, 80, 'nascido em   ');
		$pdf->Text(30, 80, $datanasc);
		$pdf->Text(46, 80, 'em');
		$pdf->Text(52, 80, $provincia);
		$pdf->Text(65, 80, '     , concluiu neste Instituto em ');
		$pdf->Text(120, 80, '**data fim do curso**');
		$pdf->Text(148, 80, 'o Curso Profissionalizante de ------   ');
		
		//mesma linha		
		$pdf->Text(15, 85, $curso);
		$pdf->Text(70, 85, ' com os resultados finais seguintes: ');
		$pdf->Text(15, 90, '-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------');
		$pdf->Text(15, 95,'');
		

		$linha=100;
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
		   
		   $sum=$sum+$row[7];		      
		   $cont++;
		}
		
		// media final das disciplinas - mesma linha
		$media_disciplinas=$sum/$cont;
        $media = round($media_disciplinas);         
		$pdf->Text(15, $linha+5,'Média Final das Disciplinas ');
		$pdf->Text(50, $linha+5,$media); 
		$pdf->Text(55, $linha+5,'valores');		
		
		//mesma linha
		$pdf->Text(15, $linha+10,'Nota Final do Curso '); 
		$pdf->Text(50, $linha+10,$notafinal); 
		$pdf->Text(55, $linha+10,'valores');
		
		
		$pdf->Text(15, $linha+15, '-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------');
		
		$pdf->Text(15, $linha+20,'Consta de documentos arquivados na Secretaria deste Instituto, processo nº _____/20_____Passei a presente certidão que vou assinar e leva o');
		
		$pdf->Text(15, $linha+25,'selo branco em uso neste Estabelecimento de Ensino. ------------------------------------------------------------------------------------------------------------------------');

		$pdf->Text(80, $linha+40,'Maputo, _____ de _________ de 20____');
		
		//mesma linha
		$pdf->Text(25, $linha+60,'O Director Geral');
		$pdf->Text(155, $linha+60,'O Chefe da Secretaria');
		
		//mesma linha
		$pdf->Text(15, $linha+70,'______________________________');
		$pdf->Text(150, $linha+70,'_____________________________');
		
		
		$pdf->Text(90, $linha+80,'O Director Pedagógico');
		$pdf->Text(80, $linha+90,'_____________________________');
		 
		
}
else
{
  $pdf->SetTextColor(180,14,22);
  $pdf->SetFont('helvetica', 'B', 7);
  $pdf->RoundedRect(15, 30, 180, 4, 1.50, '1111', '1F');
  $pdf->Text(30, 30, 'Não ha dados para listar nesta opção. O aluno ainda não concluiu as disciplinas do plano de estudo');
  
} 
                //$pdf->Text(160, 11, 'Data');
                 //$pdf->Text(170, 11, $data_actual);
                 $pdf->SetFont('helvetica', 'B', 10);
                 $pdf->Text(72, 5,$titulo);
                //  $pdf->Text(170, 11, $data_actual);
//Close and output PDF document
$pdf->Output('listagens.pdf', 'I');

?>