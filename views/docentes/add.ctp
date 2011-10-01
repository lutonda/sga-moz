<div class="docentes form">
<?php echo $this->Form->create('Docente');?>
	<fieldset>
		<legend><?php __('Add Docente'); ?></legend>
	<?php
		echo $this->Form->input('entidade_id');
		echo $this->Form->input('seccao_id');
		echo $this->Form->input('docente_categoria_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Docentes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entidades', true), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade', true), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccaos', true), array('controller' => 'seccaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccao', true), array('controller' => 'seccaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docente Categorias', true), array('controller' => 'docente_categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente Categoria', true), array('controller' => 'docente_categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>