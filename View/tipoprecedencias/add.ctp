<div class="tipoprecedencias form">
<?php echo $this->Form->create('Tipoprecedencia');?>
	<fieldset>
		<legend><?php echo __('Add Tipoprecedencia'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipoprecedencias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Grupodisciplinas', true), array('controller' => 'grupodisciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupodisciplina', true), array('controller' => 'grupodisciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>