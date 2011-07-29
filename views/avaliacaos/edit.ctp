<div class="t0016avaliacaos form">
<?php echo $this->Form->create('Avaliacao');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Avaliacao', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('t0015tipoavaliacao_id');
		echo $this->Form->input('t0013inscricao_id');
		echo $this->Form->input('nota');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Avaliacao.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Avaliacao.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Avaliacaos', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tipoavaliacaos', true)), array('controller' => 't0015tipoavaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tipoavaliacao', true)), array('controller' => 't0015tipoavaliacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Inscricaos', true)), array('controller' => 't0013inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Inscricao', true)), array('controller' => 't0013inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>