<?php //include('menu.ctp'); ?>
 
<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Nova Area de Trabalho', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Areas de Trabalho');?></h1>
        
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
			<th><?php echo $this->Paginator->sort('Id','id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			<th class="actions"><?php __('AcÃ§Ãµes');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tg0010areatrabalhos as $tg0010areatrabalho):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tg0010areatrabalho['Tg0010areatrabalho']['id']; ?>&nbsp;</td>
		<td><?php echo $tg0010areatrabalho['Tg0010areatrabalho']['name']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php echo $html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view',$tg0010areatrabalho['Tg0010areatrabalho']['id']))); ?>
                    <?php echo $html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$tg0010areatrabalho['Tg0010areatrabalho']['id']))); ?>
					<?php echo $html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminar",'url' => array('action' => 'delete', $tg0010areatrabalho['Tg0010areatrabalho']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tg0010areatrabalho['Tg0010areatrabalho']['id']))); ?>
		</td>

	</tr>
<?php endforeach; ?>
	</table>

</div>
        <p>
<?php
//echo $paginator->counter(array(
//'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
//));
?></p>

<div class="paging">
	<?php echo $paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('proximo', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

</div>
