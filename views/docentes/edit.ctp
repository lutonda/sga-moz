<div class="docentes form">
<?php echo $this->Form->create('Docente');?>
	<fieldset>
		<legend><?php __('Edit Docente'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Docente.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Docente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entidades', true), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade', true), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccaos', true), array('controller' => 'seccaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccao', true), array('controller' => 'seccaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docente Categorias', true), array('controller' => 'docente_categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente Categoria', true), array('controller' => 'docente_categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>