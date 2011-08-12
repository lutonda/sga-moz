<?php 
App::import('Vendor', 'jpgraph/jpgraph');
App::import('Vendor', 'jpgraph/jpgraph_bar');

$ydata = $numero_alunos['numeros'];
$xdata = $numero_alunos['provincia'];
// Create the graph. 
$graph = new Graph(240,300);    
$graph->SetScale("textlin");
$graph->img->SetMargin(30,10,40,70);
$graph->xaxis->SetFont(FF_FONT1,FS_BOLD);
$graph->title->Set("Alunos por Provincia");

// Setup font for axis
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,10);
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,10);

// Show 0 label on Y-axis (default is not to show)
$graph->yscale->ticks->SupressZeroLabel(false);


// Setup X-axis labels
$graph->xaxis->SetTickLabels($xdata);
$graph->xaxis->SetLabelAngle(50);

// Create the bar pot
$bplot = new BarPlot($ydata);
$bplot->SetWidth(0.6);

// Setup color for gradient fill style
$bplot->SetFillGradient("navy:0.9","navy:1.85",GRAD_LEFT_REFLECTION);

// Set color for the frame of each bar
$bplot->SetColor("white");
$graph->Add($bplot);

// Display the graph
$graph->Stroke();



?> 