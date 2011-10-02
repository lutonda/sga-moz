<div class="ramos view">
<h2><?php  __('Ramo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ramo['Ramo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ramo['Ramo']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Curso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ramo['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $ramo['Curso']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ramo', true), array('action' => 'edit', $ramo['Ramo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Ramo', true), array('action' => 'delete', $ramo['Ramo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ramo['Ramo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ramos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ramo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planoestudoanos', true), array('controller' => 'planoestudoanos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planoestudoano', true), array('controller' => 'planoestudoanos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Planoestudoanos');?></h3>
	<?php if (!empty($ramo['Planoestudoano'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Planoestudo Id'); ?></th>
		<th><?php echo __('Ano'); ?></th>
		<th><?php echo __('Semestre'); ?></th>
		<th><?php echo __('Cargahorariateoricas'); ?></th>
		<th><?php echo __('Cargahorariapraticas'); ?></th>
		<th><?php echo __('Creditos'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Ramo Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ramo['Planoestudoano'] as $planoestudoano):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $planoestudoano['id'];?></td>
			<td><?php echo $planoestudoano['planoestudo_id'];?></td>
			<td><?php echo $planoestudoano['ano'];?></td>
			<td><?php echo $planoestudoano['semestre'];?></td>
			<td><?php echo $planoestudoano['cargahorariateoricas'];?></td>
			<td><?php echo $planoestudoano['cargahorariapraticas'];?></td>
			<td><?php echo $planoestudoano['creditos'];?></td>
			<td><?php echo $planoestudoano['disciplina_id'];?></td>
			<td><?php echo $planoestudoano['codigo'];?></td>
			<td><?php echo $planoestudoano['ramo_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'planoestudoanos', 'action' => 'view', $planoestudoano['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'planoestudoanos', 'action' => 'edit', $planoestudoano['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'planoestudoanos', 'action' => 'delete', $planoestudoano['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $planoestudoano['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planoestudoano', true), array('controller' => 'planoestudoanos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
