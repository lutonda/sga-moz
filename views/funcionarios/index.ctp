<?php 
$grupo = $session->read('Auth.User.group_id');
$username = $session->read('Auth.User.username');

?>
<div class="box box-100 altbox" id="box1"><!-- box full-width -->
					<div class="boxin">
						<div class="header">
							<h3><?php __('Cursos')?></h3>
							<?php echo $this->Html->link(__('Registrar novo', true), array('action' => 'add'),array('class'=>'button add_new','escape'=>false)); ?>

						</div>
						<div class="content" id="box1-tabular"><!-- content box 1 for tab switching -->
							<form enctype="multipart/form-data" method="post" action="" class="plain">
								<fieldset>
									<?php echo $form->create('Curso',array('action'=>'index','id'=>'filters')); ?>  
									<table cellspacing="0">
										<thead><!-- universal table heading -->
											<tr>
												<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
											
			<th><?php echo $this->Paginator->sort('Código','id');?></th>
			<th><?php echo $this->Paginator->sort('Usuário','user_id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
                    							<td class="tc last"><?php __('Acção');?></td>
											</tr>
											<tr>
												<td></td>
											  
            								<td><?php echo $form->input('codigo',array('label'=>false,'size'=>8)); ?></td>  
            								<td><?php echo $form->input('name',array('label'=>false,'size'=>10)); ?></td>
            								<td><?php echo $form->input('group_id',array('label'=>false)); ?></td> 
            								  
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
	foreach ($funcionarios as $funcionario):
		$class = "first";
		if ($i++ % 2 == 0) {
			$class = ' class="even"';
		}
		
		if(($grupo !=4) || ($grupo ==4 && $username == $funcionario['Funcionario']['codigo'])){
	?>
	<tr<?php echo $class;?>>
													<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
		
		<td><?php echo $this->Html->link($funcionario['User']['username'], array('controller' => 'users', 'action' => 'view', $funcionario['User']['id'])); ?>&nbsp;</td>
		<td><?php echo  $funcionario['Funcionario']['name']; ?>&nbsp;</td>
		<td><?php echo  $funcionario['User']['Group']['name']; ?>&nbsp;</td>
	
		<td class="accoes">
	        <?php echo $html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' =>'view',$funcionario['Funcionario']['id']))); ?>
            <?php echo $html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$funcionario['Funcionario']['id']))); ?>
            <?php if($grupo == 1 || $grupo == 2) echo $html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminar",'url' => array('action' => 'delete', $funcionario['Funcionario']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $funcionario['Funcionario']['id']))); ?>
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
								<ul class="left">
									<li><?php
	echo $this->Paginator->counter(array(
	'format' => __('showing %current% records out of %count% total', true)
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