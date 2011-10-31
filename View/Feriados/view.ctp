<div class="feriados view">
<h2><?php  echo __('Feriado');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($feriado['Feriado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($feriado['Feriado']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provincia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($feriado['Provincia']['name'], array('controller' => 'provincias', 'action' => 'view', $feriado['Provincia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($feriado['Cidade']['name'], array('controller' => 'cidades', 'action' => 'view', $feriado['Cidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dia'); ?></dt>
		<dd>
			<?php echo h($feriado['Feriado']['dia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo $this->Html->link($feriado['Month']['name'], array('controller' => 'months', 'action' => 'view', $feriado['Month']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalhes'); ?></dt>
		<dd>
			<?php echo h($feriado['Feriado']['detalhes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Feriado'), array('action' => 'edit', $feriado['Feriado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Feriado'), array('action' => 'delete', $feriado['Feriado']['id']), null, __('Are you sure you want to delete # %s?', $feriado['Feriado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Feriados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feriado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Months'), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month'), array('controller' => 'months', 'action' => 'add')); ?> </li>
	</ul>
</div>
