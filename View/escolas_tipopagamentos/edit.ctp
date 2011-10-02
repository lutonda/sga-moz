<div class="escolasTipopagamentos form">
<?php echo $this->Form->create('EscolasTipopagamento');?>
	<fieldset>
		<legend><?php echo __('Edit Escolas Tipopagamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('escola_id');
		echo $this->Form->input('tipopagamento_id');
		echo $this->Form->input('valor');
		echo $this->Form->input('month_id');
		echo $this->Form->input('data_limite');
		echo $this->Form->input('mes_limite');
		echo $this->Form->input('dia_limite');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EscolasTipopagamento.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EscolasTipopagamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Escolas Tipopagamentos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Escolas', true), array('controller' => 'escolas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola', true), array('controller' => 'escolas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipopagamentos', true), array('controller' => 'tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipopagamento', true), array('controller' => 'tipopagamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Months', true), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month', true), array('controller' => 'months', 'action' => 'add')); ?> </li>
	</ul>
</div>