<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Listas de Avalicao', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Visualizar a Avalicao');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

 <div class="table">
<?php
    //O
    echo $this->Form->create('T0018turmatipoavaliacao');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2"> Dados da Avaliacao</th>
        <?php
		echo $this->Form->input('t0010turma_id',array('disabled'=>'true','label'=>'Codigo da turma','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('t0015tipoavaliacao_id',array('disabled'=>'true','label'=>'Tipo de avalicao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('data',array('disabled'=>'true','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data Inicio','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
               echo $this->Form->input('scanpauta',array('disabled'=>'true','label'=>'Numero de Semestres','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>

    <tr><td></td><td><?php //echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>
