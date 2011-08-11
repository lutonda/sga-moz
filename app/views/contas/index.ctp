<div class="contas index">
	<h2><?php __('Contas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('aluno_id');?></th>
			<th><?php echo $this->Paginator->sort('saldo');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($contas as $conta):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $conta['Conta']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($conta['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $conta['Aluno']['id'])); ?>
		</td>
		<td><?php echo $conta['Conta']['saldo']; ?>&nbsp;</td>
		<td><?php echo $conta['Conta']['created']; ?>&nbsp;</td>
		<td><?php echo $conta['Conta']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $conta['Conta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $conta['Conta']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $conta['Conta']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $conta['Conta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Conta', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos', true), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno', true), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('controller' => 'pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>