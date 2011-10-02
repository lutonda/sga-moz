<div class="t0019semestrelectivos index">
	<h2><?php echo __('T0019semestrelectivos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('t0009anolectivo_id');?></th>
			<th><?php echo $this->Paginator->sort('semestre');?></th>
			<th><?php echo $this->Paginator->sort('data_inicio');?></th>
			<th><?php echo $this->Paginator->sort('data_fim');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($t0019semestrelectivos as $t0019semestrelectivo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $t0019semestrelectivo['T0019semestrelectivo']['id']; ?>&nbsp;</td>
		<td><?php echo $t0019semestrelectivo['T0019semestrelectivo']['codigo']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($t0019semestrelectivo['Anolectivo']['id'], array('controller' => 't0009anolectivos', 'action' => 'view', $t0019semestrelectivo['Anolectivo']['id'])); ?>
		</td>
		<td><?php echo $t0019semestrelectivo['T0019semestrelectivo']['semestre']; ?>&nbsp;</td>
		<td><?php echo $t0019semestrelectivo['T0019semestrelectivo']['data_inicio']; ?>&nbsp;</td>
		<td><?php echo $t0019semestrelectivo['T0019semestrelectivo']['data_fim']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $t0019semestrelectivo['T0019semestrelectivo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $t0019semestrelectivo['T0019semestrelectivo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $t0019semestrelectivo['T0019semestrelectivo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $t0019semestrelectivo['T0019semestrelectivo']['id'])); ?>
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
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('T0019semestrelectivo', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Anolectivos', true)), array('controller' => 't0009anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Anolectivo', true)), array('controller' => 't0009anolectivos', 'action' => 'add')); ?> </li>
	</ul>
</div>