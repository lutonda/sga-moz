<?php
App::import('Vendor','xtcpdf'); 
$tcpdf = new XTCPDF();
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans'

$tcpdf->SetAuthor("BackstageEL");
$tcpdf->SetAutoPageBreak( false );
$tcpdf->setHeaderFont(array($textfont,'',40));
$tcpdf->xheadercolor = array(150,0,0);
$tcpdf->xheadertext = 'União Nacional dos Camponeses';
$tcpdf->xfootertext = 'Copyright � %d União Nacional dos Camponeses. Todos os direitos reservados.';

// add a page (required with recent versions of tcpdf)
$tcpdf->AddPage();

// Now you position and print your page content
// example: 
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,'B',20);
$tcpdf->Cell(0,14, "Hello World", 0,1,'L');
// ...
// etc.
// see the TCPDF examples 

echo $tcpdf->Output('filename.pdf', 'D');

?>