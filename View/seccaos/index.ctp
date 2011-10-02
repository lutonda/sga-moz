<div class="seccaos index">
	<h2><?php echo __('Seccaos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('departamento_id');?></th>
			<th><?php echo $this->Paginator->sort('faculdade_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($seccaos as $seccao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $seccao['Seccao']['id']; ?>&nbsp;</td>
		<td><?php echo $seccao['Seccao']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($seccao['Departamento']['name'], array('controller' => 'departamentos', 'action' => 'view', $seccao['Departamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($seccao['Faculdade']['name'], array('controller' => 'faculdades', 'action' => 'view', $seccao['Faculdade']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $seccao['Seccao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $seccao['Seccao']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $seccao['Seccao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $seccao['Seccao']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Seccao', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos', true), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento', true), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculdades', true), array('controller' => 'faculdades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculdade', true), array('controller' => 'faculdades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>