<div class="contas form">
<?php echo $this->Form->create('Conta');?>
	<fieldset>
		<legend><?php __('Edit Conta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('saldo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Conta.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Conta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Alunos', true), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno', true), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('controller' => 'pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>