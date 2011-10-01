<div class="seccaos form">
<?php echo $this->Form->create('Seccao');?>
	<fieldset>
		<legend><?php __('Edit Seccao'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('faculdade_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Seccao.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Seccao.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Seccaos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Departamentos', true), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento', true), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculdades', true), array('controller' => 'faculdades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculdade', true), array('controller' => 'faculdades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>