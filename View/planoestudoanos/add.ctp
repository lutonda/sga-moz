<div class="planoestudoanos form">
<?php echo $this->Form->create('Planoestudoano');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Planoestudoano', true)); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Planoestudoanos', true)), array('action' => 'index'));?></li>
	</ul>
</div>