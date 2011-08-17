<div class="tg0014movimentoentidades index">
	<h2><?php __('Movimentoentidades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('Tipomovimento_id');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('detalhes');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($movimentoentidades as $movimentoentidade):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $movimentoentidade['Movimentoentidade']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($movimentoentidade['User']['id'], array('controller' => 'users', 'action' => 'view', $movimentoentidade['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($movimentoentidade['Tipomovimento']['name'], array('controller' => 'Tipomovimentos', 'action' => 'view', $movimentoentidade['Tipomovimento']['id'])); ?>
		</td>
		<td><?php echo $movimentoentidade['Movimentoentidade']['data']; ?>&nbsp;</td>
		<td><?php echo $movimentoentidade['Movimentoentidade']['detalhes']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $movimentoentidade['Movimentoentidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $movimentoentidade['Movimentoentidade']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $movimentoentidade['Movimentoentidade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $movimentoentidade['Movimentoentidade']['id'])); ?>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Movimentoentidade', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tipomovimentos', true)), array('controller' => 'Tipomovimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tipomovimento', true)), array('controller' => 'Tipomovimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>