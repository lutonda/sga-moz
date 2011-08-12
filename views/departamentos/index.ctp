
<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
	    <?php //echo $this->Html->link(sprintf(__('Imprimir PDF', true)), array('action' => 'pdf_index'),array('class'=>'button','target'=>'_blank')); ?>
        <?php echo $this->Html->link(sprintf(__('Novo Departamento', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Departamento');?></h1>
        
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
    <th><?php echo $this->Paginator->sort('ID','id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			
	</tr>
	<?php
	$i = 0;
	foreach ($departamentos as $departamento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $departamento['Departamento']['id']; ?>&nbsp;</td>
		<td><?php echo $departamento['Departamento']['name']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $departamento['Departamento']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $departamento['Departamento']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'delete', $departamento['Departamento']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $departamento['Departamento']['id']))); ?>
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
