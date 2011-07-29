<div class="months view">
<h2><?php  __('Month');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Int'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $month['Month']['int']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $month['Month']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Month', true), array('action' => 'edit', $month['Month']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Month', true), array('action' => 'delete', $month['Month']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $month['Month']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Months', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensalidades', true), array('controller' => 'mensalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensalidade', true), array('controller' => 'mensalidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Mensalidades');?></h3>
	<?php if (!empty($month['Mensalidade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Aluno Id'); ?></th>
		<th><?php __('Valor'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Data Pagamento'); ?></th>
		<th><?php __('Month Id'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Valor Multa'); ?></th>
		<th><?php __('Ano'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($month['Mensalidade'] as $mensalidade):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $mensalidade['id'];?></td>
			<td><?php echo $mensalidade['aluno_id'];?></td>
			<td><?php echo $mensalidade['valor'];?></td>
			<td><?php echo $mensalidade['created'];?></td>
			<td><?php echo $mensalidade['data_pagamento'];?></td>
			<td><?php echo $mensalidade['month_id'];?></td>
			<td><?php echo $mensalidade['modified'];?></td>
			<td><?php echo $mensalidade['valor_multa'];?></td>
			<td><?php echo $mensalidade['ano'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'mensalidades', 'action' => 'view', $mensalidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'mensalidades', 'action' => 'edit', $mensalidade['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'mensalidades', 'action' => 'delete', $mensalidade['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mensalidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mensalidade', true), array('controller' => 'mensalidades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
