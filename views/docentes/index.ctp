<div class="docentes index">
	<h2><?php __('Docentes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('entidade_id');?></th>
			<th><?php echo $this->Paginator->sort('seccao_id');?></th>
			<th><?php echo $this->Paginator->sort('docente_categoria_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($docentes as $docente):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $docente['Docente']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docente['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $docente['Entidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docente['Seccao']['name'], array('controller' => 'seccaos', 'action' => 'view', $docente['Seccao']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docente['DocenteCategoria']['name'], array('controller' => 'docente_categorias', 'action' => 'view', $docente['DocenteCategoria']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $docente['Docente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $docente['Docente']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $docente['Docente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $docente['Docente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Docente', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entidades', true), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade', true), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccaos', true), array('controller' => 'seccaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccao', true), array('controller' => 'seccaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docente Categorias', true), array('controller' => 'docente_categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente Categoria', true), array('controller' => 'docente_categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>