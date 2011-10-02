<div class="t0012matricularevisaos index">
	<h2><?php echo __('T0012matricularevisaos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('revisao');?></th>
			<th><?php echo $this->Paginator->sort('datahora');?></th>
			<th><?php echo $this->Paginator->sort('Aluno_id');?></th>
			<th><?php echo $this->Paginator->sort('t0003curso_id');?></th>
			<th><?php echo $this->Paginator->sort('t0005planoestudo_id');?></th>
			<th><?php echo $this->Paginator->sort('datamatricula');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($t0012matricularevisaos as $t0012matricularevisao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $t0012matricularevisao['T0012matricularevisao']['id']; ?>&nbsp;</td>
		<td><?php echo $t0012matricularevisao['T0012matricularevisao']['revisao']; ?>&nbsp;</td>
		<td><?php echo $t0012matricularevisao['T0012matricularevisao']['datahora']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($t0012matricularevisao['Aluno']['name'], array('controller' => 'Alunos', 'action' => 'view', $t0012matricularevisao['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($t0012matricularevisao['Curso']['name'], array('controller' => 't0003cursos', 'action' => 'view', $t0012matricularevisao['Curso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($t0012matricularevisao['Planoestudo']['name'], array('controller' => 't0005planoestudos', 'action' => 'view', $t0012matricularevisao['Planoestudo']['id'])); ?>
		</td>
		<td><?php echo $t0012matricularevisao['T0012matricularevisao']['datamatricula']; ?>&nbsp;</td>
		<td><?php echo $t0012matricularevisao['T0012matricularevisao']['estado']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $t0012matricularevisao['T0012matricularevisao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $t0012matricularevisao['T0012matricularevisao']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $t0012matricularevisao['T0012matricularevisao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $t0012matricularevisao['T0012matricularevisao']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('T0012matricularevisao', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Alunos', true)), array('controller' => 'Alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Aluno', true)), array('controller' => 'Alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Cursos', true)), array('controller' => 't0003cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Curso', true)), array('controller' => 't0003cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Planoestudos', true)), array('controller' => 't0005planoestudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Planoestudo', true)), array('controller' => 't0005planoestudos', 'action' => 'add')); ?> </li>
	</ul>
</div>