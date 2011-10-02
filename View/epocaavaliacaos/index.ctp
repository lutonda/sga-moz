

<?php //include('menu.ctp'); 
$grupo = $this->Session->read('Auth.User.group_id');
?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
	 <?php  if($grupo ==1)  echo $this->Html->link(sprintf(__('Nova Epoca de AvaliaÃ§Ã£o', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php echo __('Epocas de AvaliaÃ§Ã£o');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>

			<th><?php echo $this->Paginator->sort('Codigo','id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			<th class="actions"><?php echo __('Accao');?></th>

	</tr>
	<?php
	$i = 0;
	foreach ($t0014epocaavaliacaos as $t0014epocaavaliacao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $t0014epocaavaliacao['T0014epocaavaliacao']['id']; ?>&nbsp;</td>
		<td><?php echo $t0014epocaavaliacao['T0014epocaavaliacao']['name']; ?>&nbsp;</td>
		

		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $t0014epocaavaliacao['T0014epocaavaliacao']['id']))); ?>
                    <?php if($grupo ==1) echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $t0014epocaavaliacao['T0014epocaavaliacao']['id']))); ?>
                    <?php if($grupo ==1) echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'delete', $t0014epocaavaliacao['T0014epocaavaliacao']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$t0014epocaavaliacao['T0014epocaavaliacao']['id']))); ?>
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
