<div class="escolasTipopagamentos index">
	<h2><?php echo __('Escolas Tipopagamentos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('escola_id');?></th>
			<th><?php echo $this->Paginator->sort('tipopagamento_id');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th><?php echo $this->Paginator->sort('month_id');?></th>
			<th><?php echo $this->Paginator->sort('data_limite');?></th>
			<th><?php echo $this->Paginator->sort('mes_limite');?></th>
			<th><?php echo $this->Paginator->sort('dia_limite');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($escolasTipopagamentos as $escolasTipopagamento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $escolasTipopagamento['EscolasTipopagamento']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($escolasTipopagamento['Escola']['name'], array('controller' => 'escolas', 'action' => 'view', $escolasTipopagamento['Escola']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($escolasTipopagamento['Tipopagamento']['name'], array('controller' => 'tipopagamentos', 'action' => 'view', $escolasTipopagamento['Tipopagamento']['id'])); ?>
		</td>
		<td><?php echo $escolasTipopagamento['EscolasTipopagamento']['valor']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($escolasTipopagamento['Month']['name'], array('controller' => 'months', 'action' => 'view', $escolasTipopagamento['Month']['id'])); ?>
		</td>
		<td><?php echo $escolasTipopagamento['EscolasTipopagamento']['data_limite']; ?>&nbsp;</td>
		<td><?php echo $escolasTipopagamento['EscolasTipopagamento']['mes_limite']; ?>&nbsp;</td>
		<td><?php echo $escolasTipopagamento['EscolasTipopagamento']['dia_limite']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $escolasTipopagamento['EscolasTipopagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $escolasTipopagamento['EscolasTipopagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $escolasTipopagamento['EscolasTipopagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $escolasTipopagamento['EscolasTipopagamento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Escolas Tipopagamento', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Escolas', true), array('controller' => 'escolas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola', true), array('controller' => 'escolas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipopagamentos', true), array('controller' => 'tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipopagamento', true), array('controller' => 'tipopagamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Months', true), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month', true), array('controller' => 'months', 'action' => 'add')); ?> </li>
	</ul>
</div>