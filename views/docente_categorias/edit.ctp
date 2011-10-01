<div class="docenteCategorias form">
<?php echo $this->Form->create('DocenteCategoria');?>
	<fieldset>
		<legend><?php __('Edit Docente Categoria'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('DocenteCategoria.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DocenteCategoria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Docente Categorias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>