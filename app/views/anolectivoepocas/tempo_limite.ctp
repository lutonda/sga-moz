<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
<div class="top-bar">
	<?php echo $this->Html->link(sprintf(__('Lista de Tempo Limite', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Avaliacoes - Tempo Limite');?></h1>

</div>
<div class="table">
    <img src="/sistema/img/ajax-loader.gif" style="display:none" id="ajax-loader">
	<?php echo $this->Form->create('T0017anolectivoepoca');?>
	<table class="listingform" cellpadding="0" cellspacing="0">
		<tr>
			<th class="full" colspan="2">Tempo Limite das Avaliacoes</th>
		</tr>
		<?php
			
			echo $this->Form->input('t0009anolectivo_id',array('empty'=>'--seleccione--','options'=>Anolectivos,'label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'anolectivoid'));
            echo $this->Form->input('t0014epocaavaliacao_id',array('empty'=>'--seleccione--','label'=>'Epoca de Avaliacao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'align'=>'right'));
			echo $this->Form->input('limite',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Tempo Limite','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		
		
		
		?>
        <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
	</table>
	<br />
	<br />
	
</div>