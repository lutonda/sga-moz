<div class="estadopagamentos index">
	<h2><?php __('Estadopagamentos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($estadopagamentos as $estadopagamento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $estadopagamento['Estadopagamento']['id']; ?>&nbsp;</td>
		<td><?php echo $estadopagamento['Estadopagamento']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $estadopagamento['Estadopagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $estadopagamento['Estadopagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $estadopagamento['Estadopagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estadopagamento['Estadopagamento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estadopagamento', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('controller' => 'pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>