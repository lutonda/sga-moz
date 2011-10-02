<div class="regimelectivos view">
<h2><?php  __('Regimelectivo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $regimelectivo['Regimelectivo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $regimelectivo['Regimelectivo']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Regimelectivo', true), array('action' => 'edit', $regimelectivo['Regimelectivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Regimelectivo', true), array('action' => 'delete', $regimelectivo['Regimelectivo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $regimelectivo['Regimelectivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Regimelectivos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regimelectivo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anolectivos', true), array('controller' => 'anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anolectivo', true), array('controller' => 'anolectivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Anolectivos');?></h3>
	<?php if (!empty($regimelectivo['Anolectivo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Ano'); ?></th>
		<th><?php echo __('Num Semestre'); ?></th>
		<th><?php echo __('Datainicio'); ?></th>
		<th><?php echo __('Datafim'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Regimelectivo Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($regimelectivo['Anolectivo'] as $anolectivo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $anolectivo['id'];?></td>
			<td><?php echo $anolectivo['codigo'];?></td>
			<td><?php echo $anolectivo['ano'];?></td>
			<td><?php echo $anolectivo['num_semestre'];?></td>
			<td><?php echo $anolectivo['datainicio'];?></td>
			<td><?php echo $anolectivo['datafim'];?></td>
			<td><?php echo $anolectivo['created'];?></td>
			<td><?php echo $anolectivo['modified'];?></td>
			<td><?php echo $anolectivo['regimelectivo_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'anolectivos', 'action' => 'view', $anolectivo['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'anolectivos', 'action' => 'edit', $anolectivo['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'anolectivos', 'action' => 'delete', $anolectivo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $anolectivo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Anolectivo', true), array('controller' => 'anolectivos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
