<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Nova Provincia', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Provincias');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
			<th><?php echo $this->Paginator->sort('Id','id');?></th>
			<th><?php echo $this->Paginator->sort('Codigo','codigo');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			<th><?php echo $this->Paginator->sort('Codigo do Pais','Paise_id');?></th>
			<th class="actions"><?php __('Accao');?></th>
	</tr>
		<?php
	$i = 0;
	foreach ($provincias as $provincia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $provincia['Provincia']['id']; ?>&nbsp;</td>
		<td><?php echo $provincia['Provincia']['codigo']; ?>&nbsp;</td>
		<td><?php echo $provincia['Provincia']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($provincia['Paise']['name'], array('controller' => 'Paises', 'action' => 'view', $provincia['Paise']['id'])); ?>
		
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $provincia['Provincia']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$provincia['Provincia']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Apagar",'url' => array('action' => 'delete', $provincia['Provincia']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$provincia['Provincia']['id']))); ?>
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
	<?php echo $this->Paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('proximo', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

</div>
