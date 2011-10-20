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
													
			
			<th><?php echo $this->Paginator->sort('name','Disciplina');?></th>
			<th><?php echo $this->Paginator->sort('anolectivo_id','Ano Lectivo');?></th>
			<th><?php echo $this->Paginator->sort('turno_id','Turno');?></th>
			<th><?php echo $this->Paginator->sort('docente_id','Docente');?></th>
			
                    							<td class="tc last"><?php echo __('Acção');?></td>
											</tr>
											<tr>
												<td></td>
												 
            								
            								<td><?php echo $this->Form->input('name',array('label'=>false,'size'=>10)); ?></td>
            								<td><?php echo $this->Form->input('anolectivo_id'); ?></td>  
            								<td><?php echo $this->Form->input('turno_id'); ?></td>  
            								<td><?php echo $this->Form->input('funcionario_id'); ?></td>    
            								  
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
		

	?>
	<tr<?php echo $class;?>>
		<td class="tc first"><input type="checkbox" value="true" name="data-1-check-1" id="data-1-check-1"></td>
		

		<td>
			<?php echo $this->Html->link($turma['Turma']['name'], array('controller' => 'turmas', 'action' => 'view', $turma['Turma']['id'])); ?>
		</td>
		<td>

			<?php echo $this->Html->link($turma['Anolectivo']['codigo'], array('controller' => 'anolectivos', 'action' => 'view', $turma['Anolectivo']['codigo'])); ?>

		</td>		
		<td>
			<?php echo $this->Html->link($turma['Turno']['name'], array('controller' => 'tg0012turnos', 'action' => 'view', $turma['Turno']['id'])); ?>
		</td>
		<td>
			<?php
             if(!isset($turma['Docente']['Entidade']['name'])) $turma['Docente']['Entidade']['name']=''; 	 	
			echo $this->Html->link($turma['Docente']['Entidade']['name'], array('controller' => 't0010turmas', 'action' => 'view', $turma['Docente']['id'])); ?>
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

 endforeach; ?>
										</tbody>
									</table>
								</fieldset>
							</form>
							<div class="pagination">
								<ul class="left">
									<li><?php
	echo $this->Paginator->counter(array(
	'format' => __('Mostrando %current% linhas. Total: %count% linhas retornadas')
	));
	?>	</li>
								</ul>
								<ul class="pag_list">
									<li><?php echo $this->Paginator->prev('<< '.__('ANTERIOR'), array(), null, array('class'=>'disabled'));?> </li>
									<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null,'class'=>'pagination'));?>
                                    
									<li><?php echo $this->Paginator->next(__('PROXIMO').' >>', array(), null, array('class' => 'disabled'));?></li>
								</ul>
								
								
							</div>
						</div><!-- .content#box-1-holder -->

					</div>
				</div>




