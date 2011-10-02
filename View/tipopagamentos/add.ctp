<div class="tipopagamentos form">
<?php echo $this->Form->create('Tipopagamento');?>
	<fieldset>
		<legend><?php echo __('Add Tipopagamento'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipopagamentos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('controller' => 'pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>