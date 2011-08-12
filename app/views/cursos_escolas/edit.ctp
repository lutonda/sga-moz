<div class="cursosEscolas form">
<?php echo $this->Form->create('CursosEscola');?>
	<fieldset>
		<legend><?php __('Edit Cursos Escola'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('escola_id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('data_adicao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CursosEscola.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CursosEscola.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos Escolas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Escolas', true), array('controller' => 'escolas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola', true), array('controller' => 'escolas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>