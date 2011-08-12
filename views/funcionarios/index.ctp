<?php 
$grupo = $session->read('Auth.User.group_id');
$username = $session->read('Auth.User.username');
?>

<?php include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php if($grupo ==1) echo $this->Html->link(sprintf(__('Novo Funcionario', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Funcionarios');?></h1>

    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
			<th><?php echo $this->Paginator->sort('Código','id');?></th>
			<th><?php echo $this->Paginator->sort('Usuário','user_id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			
			<th class="actions"><?php __('Acções');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($t0002funcionarios as $t0002funcionario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		
		if(($grupo !=4) || ($grupo ==4 && $username == $t0002funcionario['T0002funcionario']['codigo'])){
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $t0002funcionario['T0002funcionario']['id']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($t0002funcionario['User']['username'], array('controller' => 'users', 'action' => 'view', $t0002funcionario['User']['id'])); ?>&nbsp;</td>
		<td><?php echo  $t0002funcionario['T0002funcionario']['name']; ?>&nbsp;</td>
	
		<td class="accoes">
	        <?php echo $html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' =>'view',$t0002funcionario['T0002funcionario']['id']))); ?>
            <?php echo $html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$t0002funcionario['T0002funcionario']['id']))); ?>
            <?php if($grupo == 1 || $grupo == 2) echo $html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminar",'url' => array('action' => 'delete', $t0002funcionario['T0002funcionario']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $t0002funcionario['T0002funcionario']['id']))); ?>
		</td>
		
	</tr>
<?php 
}
endforeach; ?>
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