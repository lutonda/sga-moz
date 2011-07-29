<div class="pagamentos index">
	<h2><?php __('Pagamentos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('aluno_id');?></th>
			<th><?php echo $this->Paginator->sort('conta_id');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th><?php echo $this->Paginator->sort('data_pagamento');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pagamentos as $pagamento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pagamento['Pagamento']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pagamento['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $pagamento['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pagamento['Conta']['id'], array('controller' => 'contas', 'action' => 'view', $pagamento['Conta']['id'])); ?>
		</td>
		<td><?php echo $pagamento['Pagamento']['valor']; ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['data_pagamento']; ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['created']; ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pagamento['Pagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagamento['Pagamento']['id'])); ?>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos', true), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno', true), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contas', true), array('controller' => 'contas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conta', true), array('controller' => 'contas', 'action' => 'add')); ?> </li>
	</ul>
</div>