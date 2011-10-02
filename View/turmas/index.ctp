<?php 
$grupo = $this->Session->read('Auth.User.group_id');
$username = $this->Session->read('Auth.User.username');
?>

<div class="box box-100 altbox" id="box1"><!-- box full-width -->
					<div class="boxin">
						<div class="header">
							<h3>Estudantes</h3>
							<?php echo $this->Html->link(__('Registrar novo', true), array('action' => 'add'),array('class'=>'button add_new','escape'=>false)); ?>

						</div>
						<div class="content" id="box1-tabular"><!-- content box 1 for tab switching -->
							<form enctype="multipart/form-data" method="post" action="" class="plain">
								<fieldset>
									<?php echo $this->Form->create('Aluno',array('action'=>'index','id'=>'filters')); ?>  
									<table cellspacing="0">
										<thead><!-- universal table heading -->
											<tr>
												<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
													
    <th><?php echo $this->Paginator->sort('ID','id');?></th>
			<th><?php echo $this->Paginator->sort('Ano Lectivo','anolectivo_id');?></th>
			<th><?php echo $this->Paginator->sort('Nome da Turma','name');?></th>
			<th><?php echo $this->Paginator->sort('Plano de Estudo','planoestudos_id');?></th>
			<th><?php echo $this->Paginator->sort('A/S','semestrecurricular');?></th>
			<th><?php echo $this->Paginator->sort('Turno','turno_id');?></th>
			<th><?php echo $this->Paginator->sort('Estado','estado');?></th>
			
                    							<td class="tc last"><?php echo __('Acção');?></td>
											</tr>
											<tr>
												<td></td>
												<td></td>  
            								<td><?php echo $this->Form->input('codigo'); ?></td>  
            								<td><?php echo $this->Form->input('name'); ?></td>  
            								  
            								<td>  
                								<button type="submit" name="data[filter]" value="filter">Filtrar</button>  
                								<button type="submit" name="data[reset]" value="reset">Limpar</button>  
									            </td>  
									        </tr>  
										</thead>
										<tfoot><!-- table foot - what to do with selected items -->
											<tr>
												<td colspan="6" class="first last"><!-- do not forget to set appropriate colspan if you will edit this table -->
													<label>
														Com os seleccionados:
														<select name="data-1-groupaction">
															<option value="delete">remover</option>
															<option value="edit">editar</option>
														</select>
													</label>
													<input type="submit" value="OK" class="button altbutton">
												</td>
											</tr>
										</tfoot>
										<tbody>
<?php
	$i = 0;
	
	//$codigo_funcionario =
	
	foreach ($turmas as $turma):
		     $class ="first";
		if ($i++ % 2 == 0) {
			$class = ' class="even"';
		}
		
		$codigo_funcionario = $turma['funcionario']['codigo'];
		if(($grupo !=4) || ($grupo ==4 && $username == $codigo_funcionario)){
	?>
	<tr<?php echo $class;?>>
		<td class="tc first"><input type="checkbox" value="true" name="data-1-check-1" id="data-1-check-1"></td>
		<td><?php echo $turma['Turma']['id']; ?>&nbsp;</td>
		<td>

			<?php echo $this->Html->link($turma['Anolectivo']['codigo'], array('controller' => 'anolectivos', 'action' => 'view', $turma['Anolectivo']['codigo'])); ?>

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
										</tbody>
									</table>
								</fieldset>
							</form>
							<div class="pagination">
								<ul class="pag_list">
									<li><?php echo $this->Paginator->prev('<< '.__('ANTERIOR'), array(), null, array('class'=>'disabled'));?> </li>
									<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null,'class'=>'pagination'));?>
                                    
									<li><?php echo $this->Paginator->next(__('PROXIMO').' >>', array(), null, array('class' => 'disabled'));?></li>
								</ul>
								
								
							</div>
						</div><!-- .content#box-1-holder -->

					</div>
				</div>






<div class="projectos index" id="center-column">
    <div class="top-bar">
	    <?php echo $this->Html->link(sprintf(__('Imprimir PDF', true)), array('action' => 'pdf_index'),array('class'=>'button','target'=>'_blank')); ?>
        <?php if($grupo !=4)  echo $this->Html->link(sprintf(__('Nova Turma', true)), array('action' => 'add'),array('class'=>'button')); ?>
        <?php if($grupo !=4)  echo $this->Html->link(sprintf(__('Gerar Todas Turmas', true)), array('action' => 'gerar_turmas'),array('class'=>'button')); ?>
	<h1><?php echo __('Turmas');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
    <th><?php echo $this->Paginator->sort('ID','id');?></th>
			<th><?php echo $this->Paginator->sort('Ano Lectivo','anolectivo_id');?></th>
			<th><?php echo $this->Paginator->sort('Nome da Turma','name');?></th>
			<th><?php echo $this->Paginator->sort('Plano de Estudo','planoestudos_id');?></th>
			<th><?php echo $this->Paginator->sort('A/S','semestrecurricular');?></th>
			<th><?php echo $this->Paginator->sort('Turno','turno_id');?></th>
			<th><?php echo $this->Paginator->sort('Estado','estado');?></th>
			<th class="actions"><?php echo __('Accoes');?></th>
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

			<?php echo $this->Html->link($turma['Anolectivo']['codigo'], array('controller' => 'anolectivos', 'action' => 'view', $turma['Anolectivo']['codigo'])); ?>

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
//'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%', true)
//));
?></p>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('ANTERIOR'), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('PROXIMO').' >>', array(), null, array('class' => 'disabled'));?>
</div>

</div>
