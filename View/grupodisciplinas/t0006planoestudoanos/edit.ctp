<div class="planoestudoanos form">
<?php echo $this->Form->create('Planoestudoano');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Planoestudoano', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ano');
		echo $this->Form->input('semestre');
		echo $this->Form->input('grupodisciplina');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Planoestudoano.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Planoestudoano.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Planoestudoanos', true)), array('action' => 'index'));?></li>
	</ul>
</div>