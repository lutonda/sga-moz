<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Novo Documento', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php echo __('Documentos');?></h1>
        
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
	<th><?php echo $this->Paginator->sort('Id','id');?></th>
	<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			<th class="actions"><?php echo __('Accoes');?></th>
</tr>
		<?php
	$i = 0;
	foreach ($documentos as $tg0009documento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tg0009documento['Documento']['id']; ?>&nbsp;</td>
		<td><?php echo $tg0009documento['Documento']['name']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $tg0009documento['Documento']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $tg0009documento['Documento']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminar",'url' => array('action' => 'delete',$tg0009documento['Documento']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $tg0009documento['Documento']['id']))); ?>
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
	<?php echo $this->Paginator->prev('<<', array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next('>>', array(), null, array('class' => 'disabled'));?>
</div>

</div>