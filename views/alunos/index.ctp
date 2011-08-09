<?php 
$grupo = $session->read('Auth.User.group_id');
$username = $session->read('Auth.User.username');

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
									<?php echo $form->create('Aluno',array('action'=>'index','id'=>'filters')); ?>  
									<table cellspacing="0">
										<thead><!-- universal table heading -->
											<tr>
												<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
												<td class="tc">Foto</td>
												<td class="filterable"><?php echo $this->Paginator->sort('Codigo','codigo');?></td>
							                    <td class="filterable" ><?php echo $this->Paginator->sort('Nome','name');?></td>
							                    <td class="filterable" ><?php echo $this->Paginator->sort('Curso','curso_id');?></td>
                    							<td class="tc last"><?php __('Acção');?></td>
											</tr>
											<tr>
												<td></td>
												<td></td>  
            								<td><?php echo $form->input('codigo'); ?></td>  
            								<td><?php echo $form->input('name'); ?></td>
            								<td><?php echo $form->input('curso_id'); ?></td>  
            								  
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
											//var_dump($grupo.'User'.$username);
											foreach ($alunos as $aluno):
												$class = "first";
												if ($i++ % 2 == 0) {
													$class = ' class="even"';
												}
												
												if(($grupo !=3) || ($grupo ==3 && $username == $aluno['Aluno']['codigo'])){
												
											?>
											<tr<?php echo $class;?>>
												<td class="tc first"><input type="checkbox" value="true" name="data-1-check-1" id="data-1-check-1"></td>
												<td class="tc"><span class="tag tag-gray">jpeg</span></td>
												<td><?php echo $aluno['Aluno']['codigo']; ?>&nbsp;</td>
												<td><?php echo $aluno['Aluno']['name']; ?>&nbsp;</td>
												<td><?php echo $aluno['Curso']['name']; ?>&nbsp;</td>
											
												
												
												<td class="accoes">
											        <?php echo $html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $aluno['Aluno']['id']))); ?>
										                <?php  if($grupo ==1) echo $html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $aluno['Aluno']['id']))); ?>
										                <?php  if($grupo ==1) echo $html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'delete', $aluno['Aluno']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $aluno['Aluno']['id']))); ?>
											        <?php  echo $html->link($html->image("/img/save-icon.gif"),  array('action' => 'pdf_index', $aluno['Aluno']['id']),array('target'=>'_blank','escape'=>false)); ?>
											        <?php  echo $html->link($html->image("/img/page_new.gif"),
  array('controller'=>'inscricaos', 'action'=>'inscrever_aluno',$aluno['Aluno']['id']),
  array('title'=>'Fazer Inscricao', 'escape'=>false,'onclick'=>'Modalbox.show(this.href, {
    title: this.title, width: 900, overlayClose: false,
    afterHide: function(element, value) {new Ajax.Updater(\'PeopleContainer\',\'/people/display\')}}); return false;')); ?>
													<?php  echo $html->link($html->image("/img/dollar.png"),
  array('controller'=>'pagamentos', 'action'=>'gerar_facturas',$aluno['Aluno']['id']),
  array('title'=>'Efectuar Pagamento', 'escape'=>false,'onclick'=>'Modalbox.show(this.href, {
    title: this.title, width: 900, overlayClose: false,
    afterHide: function(element, value) {new Ajax.Updater(\'PeopleContainer\',\'/people/display\')}}); return false;')); ?>
    <?php  echo $html->link($html->image("/img/dollar.png"),  array('controller'=>'pagamentos','action' => 'imprimir_facturas', $aluno['Aluno']['id']),array('target'=>'_blank','escape'=>false)); ?>
												</td>
												
											</tr>
											
										<?php
										 } endforeach; ?>
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


