<div class="cursosEscolas view">
<h2><?php  __('Cursos Escola');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cursosEscola['CursosEscola']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Escola'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cursosEscola['Escola']['name'], array('controller' => 'escolas', 'action' => 'view', $cursosEscola['Escola']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Curso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cursosEscola['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $cursosEscola['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Adicao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cursosEscola['CursosEscola']['data_adicao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cursos Escola', true), array('action' => 'edit', $cursosEscola['CursosEscola']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cursos Escola', true), array('action' => 'delete', $cursosEscola['CursosEscola']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cursosEscola['CursosEscola']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Escolas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Escola', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escolas', true), array('controller' => 'escolas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola', true), array('controller' => 'escolas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
