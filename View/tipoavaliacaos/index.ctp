<?php //include('menu.ctp');
$grupo = $this->Session->read('Auth.User.group_id');
 ?>
<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php  if($grupo ==1)  echo $this->Html->link(sprintf(__('Novo Tipo de Avaliacao', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php echo __('Tipo de Avaliacao');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
            <th><?php echo $this->Paginator->sort('Epoca de Avaliacao','t0014epocaavaliacao_id');?></th>
			<th class="actions"><?php echo __('Accoes');?></th>
</tr>
	<?php
	$i = 0;
	foreach ($tipoavaliacaos as $tipoavaliacao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tipoavaliacao['Tipoavaliacao']['id']; ?>&nbsp;</td>
		<td><?php echo $tipoavaliacao['Tipoavaliacao']['name']; ?>&nbsp;</td>
        <td><?php echo $tipoavaliacao['Epocaavaliacao']['name']; ?>&nbsp;</td>
		     
		<td class="accoes">
	            <?php  echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'view', $tipoavaliacao['Tipoavaliacao']['id']))); ?>
                    <?php if($grupo ==1) echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'edit', $tipoavaliacao['Tipoavaliacao']['id']))); ?>
                    <?php if($grupo ==1) echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies",'url' => array('action' => 'delete',$tipoavaliacao['Tipoavaliacao']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $tipoavaliacao['Tipoavaliacao']['id']))); ?>
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