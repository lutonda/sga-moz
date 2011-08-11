


<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Avalicoes', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Visualizar Avalicoes');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
<div class="table">


<div class="t0016avaliacaos view">
<h2><?php  __('Avaliacao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $avaliacao['Avaliacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipoavaliacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($avaliacao['Tipoavaliacao']['name'], array('controller' => 't0015tipoavaliacaos', 'action' => 'view', $avaliacao['Tipoavaliacao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inscricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($avaliacao['Inscricao']['id'], array('controller' => 't0013inscricaos', 'action' => 'view', $avaliacao['Inscricao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nota'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $avaliacao['Avaliacao']['nota']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $avaliacao['Avaliacao']['data']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Avaliacao', true)), array('action' => 'edit', $avaliacao['Avaliacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Avaliacao', true)), array('action' => 'delete', $avaliacao['Avaliacao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $avaliacao['Avaliacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Avaliacaos', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Avaliacao', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tipoavaliacaos', true)), array('controller' => 't0015tipoavaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tipoavaliacao', true)), array('controller' => 't0015tipoavaliacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Inscricaos', true)), array('controller' => 't0013inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Inscricao', true)), array('controller' => 't0013inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
