<div class="t0019semestrelectivos view">
<h2><?php  __('T0019semestrelectivo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0019semestrelectivo['T0019semestrelectivo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0019semestrelectivo['T0019semestrelectivo']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Anolectivo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($t0019semestrelectivo['Anolectivo']['id'], array('controller' => 't0009anolectivos', 'action' => 'view', $t0019semestrelectivo['Anolectivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Semestre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0019semestrelectivo['T0019semestrelectivo']['semestre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Data Inicio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0019semestrelectivo['T0019semestrelectivo']['data_inicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Data Fim'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0019semestrelectivo['T0019semestrelectivo']['data_fim']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('T0019semestrelectivo', true)), array('action' => 'edit', $t0019semestrelectivo['T0019semestrelectivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('T0019semestrelectivo', true)), array('action' => 'delete', $t0019semestrelectivo['T0019semestrelectivo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $t0019semestrelectivo['T0019semestrelectivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('T0019semestrelectivos', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('T0019semestrelectivo', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Anolectivos', true)), array('controller' => 't0009anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Anolectivo', true)), array('controller' => 't0009anolectivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
