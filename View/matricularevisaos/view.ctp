<div class="t0012matricularevisaos view">
<h2><?php  __('T0012matricularevisao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0012matricularevisao['T0012matricularevisao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Revisao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0012matricularevisao['T0012matricularevisao']['revisao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Datahora'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0012matricularevisao['T0012matricularevisao']['datahora']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Aluno'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($t0012matricularevisao['Aluno']['name'], array('controller' => 'Alunos', 'action' => 'view', $t0012matricularevisao['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Curso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($t0012matricularevisao['Curso']['name'], array('controller' => 't0003cursos', 'action' => 'view', $t0012matricularevisao['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Planoestudo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($t0012matricularevisao['Planoestudo']['name'], array('controller' => 't0005planoestudos', 'action' => 'view', $t0012matricularevisao['Planoestudo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Datamatricula'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0012matricularevisao['T0012matricularevisao']['datamatricula']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0012matricularevisao['T0012matricularevisao']['estado']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('T0012matricularevisao', true)), array('action' => 'edit', $t0012matricularevisao['T0012matricularevisao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('T0012matricularevisao', true)), array('action' => 'delete', $t0012matricularevisao['T0012matricularevisao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $t0012matricularevisao['T0012matricularevisao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('T0012matricularevisaos', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('T0012matricularevisao', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Alunos', true)), array('controller' => 'Alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Aluno', true)), array('controller' => 'Alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Cursos', true)), array('controller' => 't0003cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Curso', true)), array('controller' => 't0003cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Planoestudos', true)), array('controller' => 't0005planoestudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Planoestudo', true)), array('controller' => 't0005planoestudos', 'action' => 'add')); ?> </li>
	</ul>
</div>
