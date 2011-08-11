<div class="tg0014movimentoentidades form">
<?php echo $this->Form->create('Movimentoentidade');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Movimentoentidade', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Tipomovimento_id');
		echo $this->Form->input('data');
		echo $this->Form->input('detalhes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Movimentoentidade.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Movimentoentidade.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Movimentoentidades', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tipomovimentos', true)), array('controller' => 'Tipomovimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tipomovimento', true)), array('controller' => 'Tipomovimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>