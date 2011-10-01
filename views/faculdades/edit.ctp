<div class="faculdades form">
<?php echo $this->Form->create('Faculdade');?>
	<fieldset>
		<legend><?php __('Edit Faculdade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Faculdade.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Faculdade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Faculdades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Seccaos', true), array('controller' => 'seccaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccao', true), array('controller' => 'seccaos', 'action' => 'add')); ?> </li>
	</ul>
</div>