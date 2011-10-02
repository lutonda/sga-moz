<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 ?>
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
       //$pdf->Text(75, 5,$titulos);
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
	   $pdf->Ln();
$pdf->SetFont('helvetica', '', 8);

if(count($data)>0)
{
$header = array('#','Codigo de Pagamento', 'Pagamento Referente','Data Limite');
// print colored table
		// Colors, line width and bold font
		$pdf->SetFillColor(176,224,230);
		$pdf->SetTextColor(255);
		$pdf->SetDrawColor(128, 0, 0);
		$pdf->SetLineWidth(0.3);
		$pdf->SetFont('', 'B');
		// Header
		$w = array(10, 40, 40,20);
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
		$ii=1;
		
		foreach($lista as $row) {
		    $titulo = $row['codigo'];
			//var_dump($titulos);
			$pdf->Cell($w[0], 6, $ii, 'LR', 0, 'L', $fill);
			$pdf->Cell($w[1], 6, $row['codigo'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[2], 6, $row['pagamento'], 'LR', 0, 'L', $fill);
			$pdf->Cell($w[3], 6, $row['data_limite'], 'LR', 0, 'L', $fill);
			
			$pdf->Ln();
			$fill=!$fill;
			$ii++;
                      
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