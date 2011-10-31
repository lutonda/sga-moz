<div class="months view">
<h2><?php  echo __('Month');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($month['Month']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($month['Month']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Month'), array('action' => 'edit', $month['Month']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Month'), array('action' => 'delete', $month['Month']['id']), null, __('Are you sure you want to delete # %s?', $month['Month']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Months'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escolas Tipopagamentos'), array('controller' => 'escolas_tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escolas Tipopagamento'), array('controller' => 'escolas_tipopagamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feriados'), array('controller' => 'feriados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feriado'), array('controller' => 'feriados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensalidades'), array('controller' => 'mensalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensalidade'), array('controller' => 'mensalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipopagamentos'), array('controller' => 'tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipopagamento'), array('controller' => 'tipopagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Escolas Tipopagamentos');?></h3>
	<?php if (!empty($month['EscolasTipopagamento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Escola Id'); ?></th>
		<th><?php echo __('Tipopagamento Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Month Id'); ?></th>
		<th><?php echo __('Data Limite'); ?></th>
		<th><?php echo __('Mes Limite'); ?></th>
		<th><?php echo __('Dia Limite'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($month['EscolasTipopagamento'] as $escolasTipopagamento): ?>
		<tr>
			<td><?php echo $escolasTipopagamento['id'];?></td>
			<td><?php echo $escolasTipopagamento['escola_id'];?></td>
			<td><?php echo $escolasTipopagamento['tipopagamento_id'];?></td>
			<td><?php echo $escolasTipopagamento['valor'];?></td>
			<td><?php echo $escolasTipopagamento['month_id'];?></td>
			<td><?php echo $escolasTipopagamento['data_limite'];?></td>
			<td><?php echo $escolasTipopagamento['mes_limite'];?></td>
			<td><?php echo $escolasTipopagamento['dia_limite'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'escolas_tipopagamentos', 'action' => 'view', $escolasTipopagamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'escolas_tipopagamentos', 'action' => 'edit', $escolasTipopagamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'escolas_tipopagamentos', 'action' => 'delete', $escolasTipopagamento['id']), null, __('Are you sure you want to delete # %s?', $escolasTipopagamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Escolas Tipopagamento'), array('controller' => 'escolas_tipopagamentos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Feriados');?></h3>
	<?php if (!empty($month['Feriado'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Provincia Id'); ?></th>
		<th><?php echo __('Cidade Id'); ?></th>
		<th><?php echo __('Dia'); ?></th>
		<th><?php echo __('Month Id'); ?></th>
		<th><?php echo __('Detalhes'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($month['Feriado'] as $feriado): ?>
		<tr>
			<td><?php echo $feriado['id'];?></td>
			<td><?php echo $feriado['name'];?></td>
			<td><?php echo $feriado['provincia_id'];?></td>
			<td><?php echo $feriado['cidade_id'];?></td>
			<td><?php echo $feriado['dia'];?></td>
			<td><?php echo $feriado['month_id'];?></td>
			<td><?php echo $feriado['detalhes'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'feriados', 'action' => 'view', $feriado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'feriados', 'action' => 'edit', $feriado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'feriados', 'action' => 'delete', $feriado['id']), null, __('Are you sure you want to delete # %s?', $feriado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feriado'), array('controller' => 'feriados', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mensalidades');?></h3>
	<?php if (!empty($month['Mensalidade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Data Pagamento'); ?></th>
		<th><?php echo __('Month Id'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Valor Multa'); ?></th>
		<th><?php echo __('Ano'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($month['Mensalidade'] as $mensalidade): ?>
		<tr>
			<td><?php echo $mensalidade['id'];?></td>
			<td><?php echo $mensalidade['aluno_id'];?></td>
			<td><?php echo $mensalidade['valor'];?></td>
			<td><?php echo $mensalidade['created'];?></td>
			<td><?php echo $mensalidade['data_pagamento'];?></td>
			<td><?php echo $mensalidade['month_id'];?></td>
			<td><?php echo $mensalidade['modified'];?></td>
			<td><?php echo $mensalidade['valor_multa'];?></td>
			<td><?php echo $mensalidade['ano'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mensalidades', 'action' => 'view', $mensalidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mensalidades', 'action' => 'edit', $mensalidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mensalidades', 'action' => 'delete', $mensalidade['id']), null, __('Are you sure you want to delete # %s?', $mensalidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mensalidade'), array('controller' => 'mensalidades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tipopagamentos');?></h3>
	<?php if (!empty($month['Tipopagamento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Month Id'); ?></th>
		<th><?php echo __('Data Limite'); ?></th>
		<th><?php echo __('Mes Limite'); ?></th>
		<th><?php echo __('Dia Limite'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($month['Tipopagamento'] as $tipopagamento): ?>
		<tr>
			<td><?php echo $tipopagamento['id'];?></td>
			<td><?php echo $tipopagamento['name'];?></td>
			<td><?php echo $tipopagamento['valor'];?></td>
			<td><?php echo $tipopagamento['codigo'];?></td>
			<td><?php echo $tipopagamento['month_id'];?></td>
			<td><?php echo $tipopagamento['data_limite'];?></td>
			<td><?php echo $tipopagamento['mes_limite'];?></td>
			<td><?php echo $tipopagamento['dia_limite'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tipopagamentos', 'action' => 'view', $tipopagamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tipopagamentos', 'action' => 'edit', $tipopagamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tipopagamentos', 'action' => 'delete', $tipopagamento['id']), null, __('Are you sure you want to delete # %s?', $tipopagamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipopagamento'), array('controller' => 'tipopagamentos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
