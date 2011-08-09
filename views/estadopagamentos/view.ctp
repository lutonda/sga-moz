<div class="estadopagamentos view">
<h2><?php  __('Estadopagamento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadopagamento['Estadopagamento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadopagamento['Estadopagamento']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estadopagamento', true), array('action' => 'edit', $estadopagamento['Estadopagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Estadopagamento', true), array('action' => 'delete', $estadopagamento['Estadopagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estadopagamento['Estadopagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estadopagamentos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estadopagamento', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('controller' => 'pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Pagamentos');?></h3>
	<?php if (!empty($estadopagamento['Pagamento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Aluno Id'); ?></th>
		<th><?php __('Conta Id'); ?></th>
		<th><?php __('Valor'); ?></th>
		<th><?php __('Data Pagamento'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Tipopagamento Id'); ?></th>
		<th><?php __('Data Orcamento'); ?></th>
		<th><?php __('Data Limite'); ?></th>
		<th><?php __('Anolectivo Id'); ?></th>
		<th><?php __('Estadopagamento Id'); ?></th>
		<th><?php __('Codigo'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estadopagamento['Pagamento'] as $pagamento):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $pagamento['id'];?></td>
			<td><?php echo $pagamento['aluno_id'];?></td>
			<td><?php echo $pagamento['conta_id'];?></td>
			<td><?php echo $pagamento['valor'];?></td>
			<td><?php echo $pagamento['data_pagamento'];?></td>
			<td><?php echo $pagamento['created'];?></td>
			<td><?php echo $pagamento['modified'];?></td>
			<td><?php echo $pagamento['tipopagamento_id'];?></td>
			<td><?php echo $pagamento['data_orcamento'];?></td>
			<td><?php echo $pagamento['data_limite'];?></td>
			<td><?php echo $pagamento['anolectivo_id'];?></td>
			<td><?php echo $pagamento['estadopagamento_id'];?></td>
			<td><?php echo $pagamento['codigo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'pagamentos', 'action' => 'view', $pagamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'pagamentos', 'action' => 'edit', $pagamento['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'pagamentos', 'action' => 'delete', $pagamento['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
