<?php 
$grupo = $session->read('Auth.User.group_id');
$username = $session->read('Auth.User.username');

?>
<div class="box box-100 altbox" id="box1"><!-- box full-width -->
					<div class="boxin">
						<div class="header">
							<h3><?php __('Inscrições')?></h3>
							<?php echo $this->Html->link(__('Registrar novo', true), array('action' => 'add'),array('class'=>'button add_new','escape'=>false)); ?>
							<?php echo $this->Html->link(sprintf(__('Imprimir PDF', true)), array('action' => 'pdf_index'),array('class'=>'button','target'=>'_blank')); ?>

						</div>
						<div class="content" id="box1-tabular"><!-- content box 1 for tab switching -->
							<form enctype="multipart/form-data" method="post" action="" class="plain">
								<fieldset>
									<?php echo $form->create('Aluno',array('action'=>'index','id'=>'filters')); ?>  
									<table cellspacing="0">
										<thead><!-- universal table heading -->
											<tr>
												<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
											
			<th><?php echo $this->Paginator->sort(__('Codigo',true),'id');?></th>
			<th><?php echo $this->Paginator->sort(__('Ano Lectivo',true),'anolectivo_id');?></th>
			<th><?php echo $this->Paginator->sort(__('Nome do Aluno',true),'Aluno_id');?></th>
			<th><?php echo $this->Paginator->sort(__('Nome da Disciplina',true),'turma_id');?></th>
			<th><?php echo $this->Paginator->sort(__('Semestre',true),'semestrecurricular');?></th>	
			<th><?php echo $this->Paginator->sort(__('Turno',true),'turno_id');?></th>			
		    <th><?php echo $this->Paginator->sort(__('Estado',true),'estadoinscricao_id');?></th>
                    							<td class="tc last"><?php __('Acção');?></td>
											</tr>
											<tr>
												<td></td>
											  
            								<td><?php echo $form->input('codigo',array('label'=>false,'size'=>5)); ?></td>  
            								<td><?php echo $form->input('name',array('label'=>false,'size'=>10)); ?></td>
            								<td><?php echo $form->input('curso_id',array('label'=>false,'empty'=>true,'class'=>'filtro_select')); ?></td>
            								<td><?php echo $form->input('escola_id',array('label'=>false,'empty'=>true)); ?></td>  
            								<td></td>
            								<td></td>
            								<td></td>  
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
														<?php __('Com os seleccionados:')?>
														<select name="data-1-groupaction">
															<option value="delete"><?php __('remover')?></option>
															<option value="edit"><?php __('editar')?></option>
														</select>
													</label>
													<input type="submit" value="OK" class="button altbutton">
												</td>
											</tr>
										</tfoot>
										<tbody>
	<?php
	$i = 0;
   

	foreach ($inscricaos as $inscricao):
		$class = "first";
		
		
		if ($i++ % 2 == 0) {
			$class = ' class="even"';
			
		}
		

	?>
	<tr <?php echo $class; ?>>
		<td class="tc first"><input type="checkbox" value="true" name="data-1-check-1" id="data-1-check-1"></td>
		<td><?php echo $inscricao['Inscricao']['id']; ?>&nbsp;</td>
				<td>
			<?php echo $this->Html->link($inscricao['Turma']['Anolectivo']['ano'], array('controller' => 'Alunos', 'action' => 'view', $inscricao['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscricao['Aluno']['name'], array('controller' => 'Alunos', 'action' => 'view', $inscricao['Aluno']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($inscricao['Turma']['Disciplina']['name'], array('controller' => 'turmas', 'action' => 'view', $inscricao['Turma']['id'])); ?>
		</td>
		
		<td>
			<?php echo $inscricao['Turma']['Anolectivo']['num_semestre']; ?>&nbsp;
		</td>
		
		<td>
			<?php 
			echo $this->Html->link($inscricao['Turma']['Turno']['name'], array('controller' => 'tg0012turnos', 'action' => 'view', $inscricao['Turma']['Turno']['id'])); ?>
		</td>
		
		<td>
            <?php 

				echo $this->Html->link($inscricao['Estadoinscricao']['name'], array('controller' => 't0013inscricao', 'action' => 'view', $inscricao['Estadoinscricao']['id'])); 
			?>
		</td>
		
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'view', $inscricao['Inscricao']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'edit', $inscricao['Inscricao']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies",'url' => array('action' => 'delete', $inscricao['Inscricao']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$inscricao['Inscricao']['id']))); ?>
		</td>
		
	</tr>
	
	
<?php endforeach; ?>
										</tbody>
									</table>
								</fieldset>
							</form>
							<div class="pagination">
								<ul class="left">
									<li><?php
	echo $this->Paginator->counter(array(
	'format' => __('Mostrando %current% linhas. Total: %count% linhas retornadas', true)
	));
	?>	</li>
								</ul>
								<ul class="pag_list">
									<li><?php echo $paginator->prev('<< '.__('ANTERIOR', true), array(), null, array('class'=>'disabled'));?> </li>
									<?php echo $paginator->numbers(array('tag'=>'li','separator'=>null,'class'=>'pagination'));?>
                                    
									<li><?php echo $paginator->next(__('PROXIMO', true).' >>', array(), null, array('class' => 'disabled'));?></li>
								</ul>
								
								
							</div>
						</div><!-- .content#box-1-holder -->

					</div>
				</div>
