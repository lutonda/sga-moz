<div class="planoestudoanos index">
	<h2><?php __('Planoestudoanos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ano');?></th>
			<th><?php echo $this->Paginator->sort('semestre');?></th>
			<th><?php echo $this->Paginator->sort('grupodisciplina');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($planoestudoanos as $planoestudoano):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $planoestudoano['Planoestudoano']['id']; ?>&nbsp;</td>
		<td><?php echo $planoestudoano['Planoestudoano']['ano']; ?>&nbsp;</td>
		<td><?php echo $planoestudoano['Planoestudoano']['semestre']; ?>&nbsp;</td>
		<td><?php echo $planoestudoano['Planoestudoano']['grupodisciplina']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $planoestudoano['Planoestudoano']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $planoestudoano['Planoestudoano']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $planoestudoano['Planoestudoano']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $planoestudoano['Planoestudoano']['id'])); ?>
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
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Planoestudoano', true)), array('action' => 'add')); ?></li>
	</ul>
</div>