<div class="months index">
	<h2><?php echo __('Months');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($months as $month): ?>
	<tr>
		<td><?php echo h($month['Month']['id']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $month['Month']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $month['Month']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $month['Month']['id']), null, __('Are you sure you want to delete # %s?', $month['Month']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Month'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Escolas Tipopagamentos'), array('controller' => 'escolas_tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escolas Tipopagamento'), array('controller' => 'escolas_tipopagamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feriados'), array('controller' => 'feriados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feriado'), array('controller' => 'feriados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensalidades'), array('controller' => 'mensalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensalidade'), array('controller' => 'mensalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipopagamentos'), array('controller' => 'tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipopagamento'), array('controller' => 'tipopagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
