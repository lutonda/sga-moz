<div class="faculdades form">
<?php echo $this->Form->create('Faculdade');?>
	<fieldset>
		<legend><?php echo __('Add Faculdade'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Faculdades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Seccaos', true), array('controller' => 'seccaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccao', true), array('controller' => 'seccaos', 'action' => 'add')); ?> </li>
	</ul>
</div>