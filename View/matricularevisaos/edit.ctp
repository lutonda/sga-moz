<div class="t0012matricularevisaos form">
<?php echo $this->Form->create('T0012matricularevisao');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('T0012matricularevisao', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('revisao');
		echo $this->Form->input('datahora');
		echo $this->Form->input('Aluno_id');
		echo $this->Form->input('t0003curso_id');
		echo $this->Form->input('t0005planoestudo_id');
		echo $this->Form->input('datamatricula');
		echo $this->Form->input('estado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('T0012matricularevisao.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('T0012matricularevisao.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('T0012matricularevisaos', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Alunos', true)), array('controller' => 'Alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Aluno', true)), array('controller' => 'Alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Cursos', true)), array('controller' => 't0003cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Curso', true)), array('controller' => 't0003cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Planoestudos', true)), array('controller' => 't0005planoestudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Planoestudo', true)), array('controller' => 't0005planoestudos', 'action' => 'add')); ?> </li>
	</ul>
</div>