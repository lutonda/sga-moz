<div class="tg0013estadoentidades form">
<?php echo $this->Form->create('Tg0013estadoentidade');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Tg0013estadoentidade', true)); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tg0013estadoentidade.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tg0013estadoentidade.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tg0013estadoentidades', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('funcionarios', true)), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('funcionario', true)), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Alunos', true)), array('controller' => 'Alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Aluno', true)), array('controller' => 'Alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>