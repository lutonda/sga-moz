<?php 
$grupo = $session->read('Auth.User.group_id');
$username = $session->read('Auth.User.username');
?>





<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
	    <?php echo $this->Html->link(sprintf(__('Imprimir PDF', true)), array('action' => 'pdf_index'),array('class'=>'button','target'=>'_blank')); ?>
        <?php if($grupo !=4)  echo $this->Html->link(sprintf(__('Nova Turma', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Turmas');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
    <th><?php echo $this->Paginator->sort('ID','id');?></th>
			<th><?php echo $this->Paginator->sort('Ano Lectivo','t0009anolectivo_id');?></th>
			<th><?php echo $this->Paginator->sort('Nome da Turma','name');?></th>
			<th><?php echo $this->Paginator->sort('Plano de Estudo','t0005planoestudos_id');?></th>
			<th><?php echo $this->Paginator->sort('A/S','semestrecurricular');?></th>
			<th><?php echo $this->Paginator->sort('Turno','tg0012turno_id');?></th>
			<th><?php echo $this->Paginator->sort('Estado','estado');?></th>
			<th class="actions"><?php __('Accoes');?></th>
	</tr>
	<?php
	$i = 0;
	
	//$codigo_funcionario =
	
	foreach ($turmas as $turma):
		     $class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		
		$codigo_funcionario = $turma['funcionario']['codigo'];
		if(($grupo !=4) || ($grupo ==4 && $username == $codigo_funcionario)){
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $turma['Turma']['id']; ?>&nbsp;</td>
		<td>

			<?php echo $this->Html->link($turma['Anolectivo']['codigo'], array('controller' => 't0009anolectivos', 'action' => 'view', $turma['Anolectivo']['codigo'])); ?>

		</td>
		<td>
			<?php echo $this->Html->link($turma['Turma']['name'], array('controller' => 't0003cursos', 'action' => 'view', $turma['Curso']['id'])); ?>
		</td>
		<td>


			<?php  echo $this->Html->link($turma['Planoestudo']['name'], array('controller' => 't0005planoestudos', 'action' => 'view', $turma['Planoestudo']['id'])); ?>

		</td>
		<td><?php echo $turma['Turma']['anocurricular'].' / '.$turma['Turma']['semestrecurricular']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($turma['Turno']['name'], array('controller' => 'tg0012turnos', 'action' => 'view', $turma['Turno']['id'])); ?>
		</td>
		<td>
			<?php
			if($turma['Turma']['estado'] == 1 || $turma['Turma']['estado'] ==null)
			{ $estado1 = "Activa";}
			if($turma['Turma']['estado'] == 2)
			{ $estado1 = "Cancelada";}
			if($turma['Turma']['estado'] == 3)
			{ $estado1 = "Fechada";}
               	 	
			echo $this->Html->link($estado1, array('controller' => 't0010turmas', 'action' => 'view', $turma['Turma']['estado'])); ?>
		</td>		
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $turma['Turma']['id']))); ?>
                    <?php
					if($turma['Turma']['estado'] == 1 || $turma['Turma']['estado'] == 2 || $turma['Turma']['estado'] ==null)
					echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $turma['Turma']['id']))); ?>
                    <?php //echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'delete', $turma['Turma']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $turma['Turma']['id']))); ?>
		</td>
		
	</tr>
<?php
}
 endforeach; ?>
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
