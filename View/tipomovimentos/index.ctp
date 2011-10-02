<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Novo Tipo de Movimento', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php echo __('Tipos de Movimento');?></h1>
       
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
			<th><?php echo $this->Paginator->sort('Id','id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>

			<th class="actions"><?php echo __('AcÃ§Ã£o');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tg0015tipomovimentos as $tg0015tipomovimento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tg0015tipomovimento['Tg0015tipomovimento']['id']; ?>&nbsp;</td>
		<td><?php echo $tg0015tipomovimento['Tg0015tipomovimento']['name']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $tg0015tipomovimento['Tg0015tipomovimento']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$tg0015tipomovimento['Tg0015tipomovimento']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminart",'url' => array('action' => 'delete', $tg0015tipomovimento['Tg0015tipomovimento']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$tg0015tipomovimento['Tg0015tipomovimento']['id']))); ?>
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

