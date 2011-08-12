<div class="cursosEscolas index">
	<h2><?php __('Cursos Escolas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('escola_id');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th><?php echo $this->Paginator->sort('data_adicao');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cursosEscolas as $cursosEscola):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cursosEscola['CursosEscola']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursosEscola['Escola']['name'], array('controller' => 'escolas', 'action' => 'view', $cursosEscola['Escola']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cursosEscola['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $cursosEscola['Curso']['id'])); ?>
		</td>
		<td><?php echo $cursosEscola['CursosEscola']['data_adicao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $cursosEscola['CursosEscola']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $cursosEscola['CursosEscola']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $cursosEscola['CursosEscola']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cursosEscola['CursosEscola']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cursos Escola', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Escolas', true), array('controller' => 'escolas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola', true), array('controller' => 'escolas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>