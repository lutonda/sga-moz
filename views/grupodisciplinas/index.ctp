<

<div class="actions" id="left-column">
	<h3><?php __('Detalhes Adicionais'); ?></h3>
	<br />
	    <?php echo $this->Html->link(sprintf(__('Novo Grupo Disciplinar', true)), array('controller' => 'Grupodisciplina','action' => 'add'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Lista De Disciplinas', true)), array('controller' => 't0004disciplinas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Nova Disciplina', true)), array('controller' => 't0004disciplinas', 'action' => 'add'),array('class'=>'link')); ?>
		
		</div>
<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Novo Curso', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Curso');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>	
			<th><?php echo $this->Paginator->sort('Codigo','id');?></th>
			<th><?php echo $this->Paginator->sort('Ordem','ordem');?></th>
			<th><?php echo $this->Paginator->sort('Disciplina','t0004disciplina_id');?></th>
			<th><?php echo $this->Paginator->sort('Creditos','creditos');?></th>
			<th><?php echo $this->Paginator->sort('Grupo Disciplinar','grupodisciplinasprec');?></th>
			<th class="actions"><?php __('Accoes');?></th>
</tr>
	<?php
	$i = 0;
	foreach ($grupodisciplinas as $grupodisciplina):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
             <td><?php echo $grupodisciplina['Grupodisciplina']['id']; ?>&nbsp;</td>
		<td><?php echo $grupodisciplina['Grupodisciplina']['ordem']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grupodisciplina['Disciplina']['name'], array('controller' => 't0004disciplinas', 'action' => 'view', $grupodisciplina['Disciplina']['id'])); ?>
		</td>
		<td><?php echo $grupodisciplina['Grupodisciplina']['creditos']; ?>&nbsp;</td>
		<td><?php echo $grupodisciplina['Grupodisciplina']['grupodisciplinasprec']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'view',$grupodisciplina['Grupodisciplina']['id']))); ?>
                <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'edit',$grupodisciplina['Grupodisciplina']['id']))); ?>
                <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies",'url' => array('action' => 'delete',$grupodisciplina['Grupodisciplina']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$grupodisciplina['Grupodisciplina']['id']))); ?>
		</td>

	</tr>
<?php endforeach; ?>
	</table>

</div>
        <p>
<?php
//echo $this->Paginator->counter(array(
//'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
//));
?></p>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('proximo', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

</div>
