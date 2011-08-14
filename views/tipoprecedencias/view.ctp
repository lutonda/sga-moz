<div class="tipoprecedencias view">
<h2><?php  __('Tipoprecedencia');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoprecedencia['Tipoprecedencia']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoprecedencia['Tipoprecedencia']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipoprecedencia', true), array('action' => 'edit', $tipoprecedencia['Tipoprecedencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tipoprecedencia', true), array('action' => 'delete', $tipoprecedencia['Tipoprecedencia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipoprecedencia['Tipoprecedencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoprecedencias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoprecedencia', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupodisciplinas', true), array('controller' => 'grupodisciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupodisciplina', true), array('controller' => 'grupodisciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Grupodisciplinas');?></h3>
	<?php if (!empty($tipoprecedencia['Grupodisciplina'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Codigo'); ?></th>
		<th><?php __('Planoestudo Id'); ?></th>
		<th><?php __('Tipoprecedencia Id'); ?></th>
		<th><?php __('Disciplina Id'); ?></th>
		<th><?php __('Grupodisciplinasprec'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipoprecedencia['Grupodisciplina'] as $grupodisciplina):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $grupodisciplina['id'];?></td>
			<td><?php echo $grupodisciplina['codigo'];?></td>
			<td><?php echo $grupodisciplina['planoestudo_id'];?></td>
			<td><?php echo $grupodisciplina['tipoprecedencia_id'];?></td>
			<td><?php echo $grupodisciplina['disciplina_id'];?></td>
			<td><?php echo $grupodisciplina['grupodisciplinasprec'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'grupodisciplinas', 'action' => 'view', $grupodisciplina['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'grupodisciplinas', 'action' => 'edit', $grupodisciplina['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'grupodisciplinas', 'action' => 'delete', $grupodisciplina['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grupodisciplina['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grupodisciplina', true), array('controller' => 'grupodisciplinas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
