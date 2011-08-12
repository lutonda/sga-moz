<div class="pagamentos view">
<h2><?php  __('Pagamento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aluno'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pagamento['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $pagamento['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conta'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pagamento['Conta']['id'], array('controller' => 'contas', 'action' => 'view', $pagamento['Conta']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['valor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Pagamento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['data_pagamento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pagamento', true), array('action' => 'edit', $pagamento['Pagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pagamento', true), array('action' => 'delete', $pagamento['Pagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagamento['Pagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos', true), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno', true), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contas', true), array('controller' => 'contas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conta', true), array('controller' => 'contas', 'action' => 'add')); ?> </li>
	</ul>
</div>
