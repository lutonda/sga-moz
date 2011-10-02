<div class="tipopagamentos index">
	<h2><?php echo __('Tipopagamentos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tipopagamentos as $tipopagamento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tipopagamento['Tipopagamento']['id']; ?>&nbsp;</td>
		<td><?php echo $tipopagamento['Tipopagamento']['name']; ?>&nbsp;</td>
		<td><?php echo $tipopagamento['Tipopagamento']['valor']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tipopagamento['Tipopagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tipopagamento['Tipopagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tipopagamento['Tipopagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipopagamento['Tipopagamento']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tipopagamento', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('controller' => 'pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>