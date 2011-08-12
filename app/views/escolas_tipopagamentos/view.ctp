<div class="escolasTipopagamentos view">
<h2><?php  __('Escolas Tipopagamento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $escolasTipopagamento['EscolasTipopagamento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Escola'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($escolasTipopagamento['Escola']['name'], array('controller' => 'escolas', 'action' => 'view', $escolasTipopagamento['Escola']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipopagamento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($escolasTipopagamento['Tipopagamento']['name'], array('controller' => 'tipopagamentos', 'action' => 'view', $escolasTipopagamento['Tipopagamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $escolasTipopagamento['EscolasTipopagamento']['valor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Month'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($escolasTipopagamento['Month']['name'], array('controller' => 'months', 'action' => 'view', $escolasTipopagamento['Month']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Limite'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $escolasTipopagamento['EscolasTipopagamento']['data_limite']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mes Limite'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $escolasTipopagamento['EscolasTipopagamento']['mes_limite']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dia Limite'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $escolasTipopagamento['EscolasTipopagamento']['dia_limite']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Escolas Tipopagamento', true), array('action' => 'edit', $escolasTipopagamento['EscolasTipopagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Escolas Tipopagamento', true), array('action' => 'delete', $escolasTipopagamento['EscolasTipopagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $escolasTipopagamento['EscolasTipopagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Escolas Tipopagamentos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escolas Tipopagamento', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escolas', true), array('controller' => 'escolas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola', true), array('controller' => 'escolas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipopagamentos', true), array('controller' => 'tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipopagamento', true), array('controller' => 'tipopagamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Months', true), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month', true), array('controller' => 'months', 'action' => 'add')); ?> </li>
	</ul>
</div>
