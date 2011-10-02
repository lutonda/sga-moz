<div class="docenteCategorias view">
<h2><?php  __('Docente Categoria');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docenteCategoria['DocenteCategoria']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docenteCategoria['DocenteCategoria']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docente Categoria', true), array('action' => 'edit', $docenteCategoria['DocenteCategoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Docente Categoria', true), array('action' => 'delete', $docenteCategoria['DocenteCategoria']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $docenteCategoria['DocenteCategoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docente Categorias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente Categoria', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Docentes');?></h3>
	<?php if (!empty($docenteCategoria['Docente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Seccao Id'); ?></th>
		<th><?php echo __('Docente Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($docenteCategoria['Docente'] as $docente):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $docente['id'];?></td>
			<td><?php echo $docente['entidade_id'];?></td>
			<td><?php echo $docente['seccao_id'];?></td>
			<td><?php echo $docente['docente_categoria_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'docentes', 'action' => 'view', $docente['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'docentes', 'action' => 'edit', $docente['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'docentes', 'action' => 'delete', $docente['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $docente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
