<div class="mensalidades index">
	<h2><?php __('Mensalidades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('aluno_id');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('data_pagamento');?></th>
			<th><?php echo $this->Paginator->sort('month_id');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('valor_multa');?></th>
			<th><?php echo $this->Paginator->sort('ano');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($mensalidades as $mensalidade):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $mensalidade['Mensalidade']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mensalidade['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $mensalidade['Aluno']['id'])); ?>
		</td>
		<td><?php echo $mensalidade['Mensalidade']['valor']; ?>&nbsp;</td>
		<td><?php echo $mensalidade['Mensalidade']['created']; ?>&nbsp;</td>
		<td><?php echo $mensalidade['Mensalidade']['data_pagamento']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mensalidade['Month']['name'], array('controller' => 'months', 'action' => 'view', $mensalidade['Month']['id'])); ?>
		</td>
		<td><?php echo $mensalidade['Mensalidade']['modified']; ?>&nbsp;</td>
		<td><?php echo $mensalidade['Mensalidade']['valor_multa']; ?>&nbsp;</td>
		<td><?php echo $mensalidade['Mensalidade']['ano']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $mensalidade['Mensalidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $mensalidade['Mensalidade']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $mensalidade['Mensalidade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mensalidade['Mensalidade']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mensalidade', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos', true), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno', true), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Months', true), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month', true), array('controller' => 'months', 'action' => 'add')); ?> </li>
	</ul>
</div>