<?php 
$grupo = $session->read('Auth.User.group_id');
$username = $session->read('Auth.User.username');

?>
<div class="box box-100 altbox" id="box1"><!-- box full-width -->
					<div class="boxin">
						<div class="header">
							<h3>Pagamentos</h3>
							<?php echo $this->Html->link(__('Registrar Novo', true), array('action' => 'add'),array('class'=>'button add_new','escape'=>false)); ?>

						</div>
						<div class="content" id="box1-tabular"><!-- content box 1 for tab switching -->
							<form enctype="multipart/form-data" method="post" action="" class="plain">
								<fieldset>
									<?php echo $form->create('Pagamento',array('action'=>'index','id'=>'filters')); ?>  
									<table cellspacing="0">
										<thead><!-- universal table heading -->
											<tr>
												<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>

                    							
                    							<th><?php echo $this->Paginator->sort('codigo');?></th>
												<th><?php echo $this->Paginator->sort('aluno_id');?></th>
												<th><?php echo $this->Paginator->sort('tipopagamento_id');?></th>
												<th><?php echo $this->Paginator->sort('valor');?></th>
												<th><?php echo $this->Paginator->sort('data_pagamento');?></th>
												<th><?php echo $this->Paginator->sort('data_limite');?></th>
												<th><?php echo $this->Paginator->sort('estadopagamento_id');?></th>
												<td class="tc last"><?php __('Acção');?></td>
											</tr>
											<tr>
												<td></td>
												<td></td>  
            								<td><?php echo $form->input('codigo'); ?></td>  
            								<td><?php echo $form->input('name'); ?></td>
            								<td></td>
            								<td><?php echo $form->input('data_pagamento'); ?></td>  
            								  
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
	foreach ($pagamentos as $pagamento):
		$class = "first";
		if ($i++ % 2 == 0) {
			$class = ' class="even"';
		}
	?>
	<tr<?php echo $class;?>>
		<td class="tc first"><input type="checkbox" value="true" name="data-1-check-1" id="data-1-check-1"></td>
		<td><?php echo $pagamento['Pagamento']['codigo']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pagamento['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $pagamento['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pagamento['Tipopagamento']['name'], array('controller' => 'Tipopagamento', 'action' => 'view', $pagamento['Tipopagamento']['id'])); ?>
		</td>
		<td><?php echo $pagamento['Pagamento']['valor']; ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['data_pagamento']; ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['data_limite']; ?>&nbsp;</td>
		<td><?php echo $pagamento['Estadopagamento']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pagamento['Pagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagamento['Pagamento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
										</tbody>
									</table>
								</fieldset>
							</form>
							<div class="pagination">
								<ul class="pag_list">
									<li><?php echo $paginator->prev('<< '.__('ANTERIOR', true), array(), null, array('class'=>'disabled'));?> </li>
									<?php echo $paginator->numbers(array('tag'=>'li','separator'=>null,'class'=>'pagination'));?>
                                    
									<li><?php echo $paginator->next(__('PROXIMO', true).' >>', array(), null, array('class' => 'disabled'));?></li>
								</ul>
								
								
							</div>
						</div><!-- .content#box-1-holder -->

					</div>
				</div>


