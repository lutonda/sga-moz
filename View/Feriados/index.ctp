<div class="feriados index">
	<h2><?php echo __('Feriados');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('provincia_id');?></th>
			<th><?php echo $this->Paginator->sort('cidade_id');?></th>
			<th><?php echo $this->Paginator->sort('dia');?></th>
<<<<<<< HEAD
			<th><?php echo $this->Paginator->sort('month_id');?></th>
=======
			<th><?php echo $this->Paginator->sort('mes');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
>>>>>>> 35801335a86a2e7e00116c8036e9e34f553dacfe
			<th><?php echo $this->Paginator->sort('detalhes');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($feriados as $feriado): ?>
	<tr>
		<td><?php echo h($feriado['Feriado']['id']); ?>&nbsp;</td>
		<td><?php echo h($feriado['Feriado']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($feriado['Provincia']['name'], array('controller' => 'provincias', 'action' => 'view', $feriado['Provincia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($feriado['Cidade']['name'], array('controller' => 'cidades', 'action' => 'view', $feriado['Cidade']['id'])); ?>
		</td>
		<td><?php echo h($feriado['Feriado']['dia']); ?>&nbsp;</td>
<<<<<<< HEAD
		<td>
			<?php echo $this->Html->link($feriado['Month']['name'], array('controller' => 'months', 'action' => 'view', $feriado['Month']['id'])); ?>
		</td>
=======
		<td><?php echo h($feriado['Feriado']['mes']); ?>&nbsp;</td>
		<td><?php echo h($feriado['Feriado']['created']); ?>&nbsp;</td>
		<td><?php echo h($feriado['Feriado']['modified']); ?>&nbsp;</td>
>>>>>>> 35801335a86a2e7e00116c8036e9e34f553dacfe
		<td><?php echo h($feriado['Feriado']['detalhes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $feriado['Feriado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $feriado['Feriado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $feriado['Feriado']['id']), null, __('Are you sure you want to delete # %s?', $feriado['Feriado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Feriado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
<<<<<<< HEAD
		<li><?php echo $this->Html->link(__('List Months'), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month'), array('controller' => 'months', 'action' => 'add')); ?> </li>
=======
>>>>>>> 35801335a86a2e7e00116c8036e9e34f553dacfe
	</ul>
</div>
