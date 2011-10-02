

<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Novo Estado da Matricula', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php echo __('Estado da Matricula');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
	<th><?php echo $this->Paginator->sort('ID','id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			<th class="actions"><?php echo __('Accao');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($estadomatriculas as $estadomatricula):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $estadomatricula['Estadomatricula']['id']; ?>&nbsp;</td>
		<td><?php echo $estadomatricula['Estadomatricula']['name']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $estadomatricula['Estadomatricula']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$estadomatricula['Estadomatricula']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminar",'url' => array('action' => 'delete', $estadomatricula['Estadomatricula']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$estadomatricula['Estadomatricula']['id']))); ?>
		</td>
		
	</tr>
<?php endforeach; ?>
	</table>

</div>
        <p>
</p>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('ANTERIOR'), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('PROXIMO').' >>', array(), null, array('class' => 'disabled'));?>
</div>

</div>