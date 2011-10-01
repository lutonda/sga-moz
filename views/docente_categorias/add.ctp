<div class="docenteCategorias form">
<?php echo $this->Form->create('DocenteCategoria');?>
	<fieldset>
		<legend><?php __('Add Docente Categoria'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Docente Categorias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>