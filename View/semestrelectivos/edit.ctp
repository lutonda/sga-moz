<div class="t0019semestrelectivos form">
<?php echo $this->Form->create('T0019semestrelectivo');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('T0019semestrelectivo', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('t0009anolectivo_id');
		echo $this->Form->input('semestre');
		echo $this->Form->input('data_inicio');
		echo $this->Form->input('data_fim');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('T0019semestrelectivo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('T0019semestrelectivo.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('T0019semestrelectivos', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Anolectivos', true)), array('controller' => 't0009anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Anolectivo', true)), array('controller' => 't0009anolectivos', 'action' => 'add')); ?> </li>
	</ul>
</div>