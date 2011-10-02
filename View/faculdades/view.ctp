<div class="faculdades view">
<h2><?php  __('Faculdade');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $faculdade['Faculdade']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $faculdade['Faculdade']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Faculdade', true), array('action' => 'edit', $faculdade['Faculdade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Faculdade', true), array('action' => 'delete', $faculdade['Faculdade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $faculdade['Faculdade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculdades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculdade', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccaos', true), array('controller' => 'seccaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccao', true), array('controller' => 'seccaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Seccaos');?></h3>
	<?php if (!empty($faculdade['Seccao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Faculdade Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($faculdade['Seccao'] as $seccao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $seccao['id'];?></td>
			<td><?php echo $seccao['name'];?></td>
			<td><?php echo $seccao['departamento_id'];?></td>
			<td><?php echo $seccao['faculdade_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'seccaos', 'action' => 'view', $seccao['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'seccaos', 'action' => 'edit', $seccao['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'seccaos', 'action' => 'delete', $seccao['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $seccao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Seccao', true), array('controller' => 'seccaos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
