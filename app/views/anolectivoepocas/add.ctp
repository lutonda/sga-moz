<div class="t0017anolectivoepocas form">
<?php echo $this->Form->create('T0017anolectivoepoca');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('T0017anolectivoepoca', true)); ?></legend>
	<?php
		echo $this->Form->input('t0009anolectivo_id');
		echo $this->Form->input('t0014epocaavaliacao_id');
		echo $this->Form->input('limite');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('T0017anolectivoepocas', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Anolectivos', true)), array('controller' => 't0009anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Anolectivo', true)), array('controller' => 't0009anolectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Epocaavaliacaos', true)), array('controller' => 't0014epocaavaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Epocaavaliacao', true)), array('controller' => 't0014epocaavaliacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>