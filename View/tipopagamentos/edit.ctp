<div class="tipopagamentos form">
<?php echo $this->Form->create('Tipopagamento');?>
	<fieldset>
		<legend><?php echo __('Edit Tipopagamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tipopagamento.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tipopagamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipopagamentos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('controller' => 'pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>