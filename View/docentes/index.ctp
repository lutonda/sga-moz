<?php 
$grupo = $this->Session->read('Auth.User.group_id');
$username = $this->Session->read('Auth.User.username');

?>
<div class="box box-100 altbox" id="box1"><!-- box full-width -->
					<div class="boxin">
						<div class="header">
							<h3><?php echo __('Docentes')?></h3>
							<?php echo $this->Html->link(__('Registrar novo', true), array('action' => 'adicionar'),array('class'=>'button add_new','escape'=>false)); ?>

						</div>
						<div class="content" id="box1-tabular"><!-- content box 1 for tab switching -->
							<form enctype="multipart/form-data" method="post" action="" class="plain">
								<fieldset>
									<?php echo $this->Form->create('Curso',array('action'=>'index','id'=>'filters')); ?>  
									<table cellspacing="0">
										<thead><!-- universal table heading -->
											<tr>
												<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
											
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('entidade_id');?></th>
			<th><?php echo $this->Paginator->sort('seccao_id');?></th>
			<th><?php echo $this->Paginator->sort('docente_categoria_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
											</tr>
											<tr>
												<td></td>
											  <td></td>
            								<td><?php echo $this->Form->input('codigo',array('label'=>false,'size'=>8)); ?></td>  
            								<td><?php echo $this->Form->input('name',array('label'=>false,'size'=>10)); ?></td>
            								<td><?php echo $this->Form->input('group_id',array('label'=>false)); ?></td> 
            								  
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
	foreach ($docentes as $docente):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
		<td><?php echo $docente['Docente']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docente['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $docente['Entidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docente['Seccao']['name'], array('controller' => 'seccaos', 'action' => 'view', $docente['Seccao']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docente['DocenteCategoria']['name'], array('controller' => 'docente_categorias', 'action' => 'view', $docente['DocenteCategoria']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $docente['Docente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $docente['Docente']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $docente['Docente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $docente['Docente']['id'])); ?>
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
				