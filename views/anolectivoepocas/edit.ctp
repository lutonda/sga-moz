
<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Tempo Limite', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Tempo Limite - editar');?></h1>
      
    </div>
    <div class="table">

<?php echo $this->Form->create('T0017anolectivoepoca');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados do Turno</th>
        <?php
       	echo $this->Form->input('t0009anolectivo_id',array('label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('t0014epocaavaliacao_id',array('label'=>'Epoca','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		//echo $this->Form->input('limite',array('label'=>'Limite','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('limite',array('monthNames'=>array('','Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Limite','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>