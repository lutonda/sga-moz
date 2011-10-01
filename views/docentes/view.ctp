<div class="docentes view">
<h2><?php  __('Docente');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docente['Docente']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Entidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($docente['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $docente['Entidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Seccao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($docente['Seccao']['name'], array('controller' => 'seccaos', 'action' => 'view', $docente['Seccao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Docente Categoria'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($docente['DocenteCategoria']['name'], array('controller' => 'docente_categorias', 'action' => 'view', $docente['DocenteCategoria']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docente', true), array('action' => 'edit', $docente['Docente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Docente', true), array('action' => 'delete', $docente['Docente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $docente['Docente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades', true), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade', true), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccaos', true), array('controller' => 'seccaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccao', true), array('controller' => 'seccaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docente Categorias', true), array('controller' => 'docente_categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente Categoria', true), array('controller' => 'docente_categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
