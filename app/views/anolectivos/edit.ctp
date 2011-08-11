



<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Anos Lectivos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Editar Ano Lectivo');?></h1>
        <div class="breadcrumbs"><?php //echo $html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">

<?php
    //O
    echo $form->create('Anolectivo');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados do Ano Lectivo</th>
        <?php
		$array_ano=array('2009'=>2009,'2010'=>2010,'2011'=>2011,'2012'=>2012,'2013'=>2013,'2014'=>2014,'2015'=>2015,'2016'=>2016,'2017'=>2017,'2018'=>2018,'2019'=>2019,'2020'=>2020);
        echo $this->Form->input('id',array('label'=>'ID','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	/*	
	    echo $this->Form->input('codigo',array('label'=>'Codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('tipo',array('label'=>'Tipo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('datainicio',array('label'=>'Data Inicial','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('datafim',array('label'=>'Data Final','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	*/	
		//echo $this->Form->input('codigo',array('disabled'=>'true','label'=>'codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('ano',array('disabled'=>'true','options'=> $array_ano,'label'=>'Ano','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('num_semestre',array('disabled'=>'true','label'=>'Semestre Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datainicio',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data Inicio','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datafim',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data Fim','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
       
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>
