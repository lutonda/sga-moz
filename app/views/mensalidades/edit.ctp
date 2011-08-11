<div class="mensalidades form">
<?php echo $this->Form->create('Mensalidade');?>
	<fieldset>
		<legend><?php __('Edit Mensalidade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('valor');
		echo $this->Form->input('data_pagamento');
		echo $this->Form->input('month_id');
		echo $this->Form->input('valor_multa');
		echo $this->Form->input('ano');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Mensalidade.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Mensalidade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mensalidades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Alunos', true), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno', true), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Months', true), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month', true), array('controller' => 'months', 'action' => 'add')); ?> </li>
	</ul>
</div>