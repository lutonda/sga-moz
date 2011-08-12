<div class="months form">
<?php echo $this->Form->create('Month');?>
	<fieldset>
		<legend><?php __('Edit Month'); ?></legend>
	<?php
		echo $this->Form->input('int');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Month.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Month.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Months', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Mensalidades', true), array('controller' => 'mensalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensalidade', true), array('controller' => 'mensalidades', 'action' => 'add')); ?> </li>
	</ul>
</div>