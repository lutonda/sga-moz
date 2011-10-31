<div class="months form">
<?php echo $this->Form->create('Month');?>
	<fieldset>
		<legend><?php echo __('Edit Month'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Month.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Month.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Months'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Escolas Tipopagamentos'), array('controller' => 'escolas_tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escolas Tipopagamento'), array('controller' => 'escolas_tipopagamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feriados'), array('controller' => 'feriados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feriado'), array('controller' => 'feriados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensalidades'), array('controller' => 'mensalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensalidade'), array('controller' => 'mensalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipopagamentos'), array('controller' => 'tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipopagamento'), array('controller' => 'tipopagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
