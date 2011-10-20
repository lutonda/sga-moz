
<?php //include('menu.ctp');
$grupo = $this->Session->read('Auth.User.group_id');
 ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php if($grupo ==1) echo $this->Html->link(sprintf(__('Nova Avaliacao', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php echo __('Avaliacao');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>

            <th><?php echo $this->Paginator->sort('ID','id');?></th>
			<!--<th><?php //echo $this->Paginator->sort('Codigo','t0010turma_id');?></th>-->
			<th><?php echo $this->Paginator->sort('Tipo de Avaliacao','t0015tipoavaliacao_id');?></th>
			<th><?php echo $this->Paginator->sort('Data','data');?></th>
			<th><?php echo $this->Paginator->sort('Pauta','scanpauta');?></th>
			<th class="actions"><?php echo __('Accao');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($t0018turmatipoavaliacaos as $t0018turmatipoavaliacao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr <?php echo $class;?>>
			<tr<?php echo $class;?>>
		<td><?php echo $t0018turmatipoavaliacao['T0018turmatipoavaliacao']['id']; ?>&nbsp;</td>
	<!--	<td>
		<?php //echo $this->Html->link($t0018turmatipoavaliacao['Turma']['id'], array('controller' => 't0010turmas', 'action' => 'view', $t0018turmatipoavaliacao['Turma']['id'])); ?>
		</td>
	-->
		<td>
		<?php echo $this->Html->link($t0018turmatipoavaliacao['Tipoavaliacao']['name'], array('controller' => 'tipoavaliacaos', 'action' => 'view', $t0018turmatipoavaliacao['Tipoavaliacao']['id'])); ?>
		</td>
		<td><?php echo $t0018turmatipoavaliacao['T0018turmatipoavaliacao']['data']; ?>&nbsp;</td>
		<td><?php echo $t0018turmatipoavaliacao['T0018turmatipoavaliacao']['scanpauta']; ?>&nbsp;</td>
		<td class="accoes">
	    <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'view', $t0018turmatipoavaliacao['T0018turmatipoavaliacao']['id']))); ?>
        <?php if($grupo ==1)  echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'edit', $t0018turmatipoavaliacao['T0018turmatipoavaliacao']['id']))); ?>
        <?php if($grupo ==1) echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies",'url' => array('action' => 'delete',$t0018turmatipoavaliacao['T0018turmatipoavaliacao']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $t0018turmatipoavaliacao['T0018turmatipoavaliacao']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
        <p>
<?php
//echo $this->Paginator->counter(array(
//'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%', true)
//));
?></p>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('ANTERIOR'), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('PROXIMO').' >>', array(), null, array('class' => 'disabled'));?>
</div>

</div>