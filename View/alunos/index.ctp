﻿<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 ?>
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
											
												<td class="filterable"><?php echo $this->Paginator->sort('codigo','Codigo');?></td>
							                    <td class="filterable" ><?php echo $this->Paginator->sort('name','Nome');?></td>
							                    <td class="filterable" ><?php echo $this->Paginator->sort('curso_id','Curso');?></td>
							                    <td class="filterable" ><?php echo $this->Paginator->sort('escola_id','Escola');?></td>
                    							<td class="tc last"><?php echo __('Acção');?></td>
											</tr>
											<tr>
												<td></td>
											  
            								<td><?php echo $this->Form->input('codigo',array('label'=>false,'size'=>5)); ?></td>  
            								<td><?php echo $this->Form->input('name',array('label'=>false,'size'=>10)); ?></td>
            								<td><?php echo $this->Form->input('curso_id',array('label'=>false,'empty'=>true,'class'=>'filtro_select')); ?></td>
            								<td><?php echo $this->Form->input('escola_id',array('label'=>false,'empty'=>true)); ?></td>  
            								  
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
											
												<td><?php echo $aluno['Aluno']['codigo']; ?>&nbsp;</td>
												<td><?php echo $aluno['Aluno']['name']; ?>&nbsp;</td>
												<td><?php echo $aluno['Curso']['name']; ?>&nbsp;</td>
												<td><?php echo $aluno['Escola']['name']; ?>&nbsp;</td>
											
												
												
												<td class="accoes">
											        <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $aluno['Aluno']['id']))); ?>
										                <?php  if($grupo ==1) echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $aluno['Aluno']['id']))); ?>
										                
											        <?php  echo $this->Html->link($this->Html->image("/img/save-icon.gif"),  array('action' => 'pdf_index', $aluno['Aluno']['id']),array('target'=>'_blank','escape'=>false)); ?>
											        <?php  echo $this->Html->link($this->Html->image("/img/page_new.gif"),
  array('controller'=>'inscricaos', 'action'=>'inscrever_aluno',$aluno['Aluno']['id']),
  array('title'=>'Fazer Inscricao', 'escape'=>false,'onclick'=>'Modalbox.show(this.href, {
    title: this.title, width: 900, overlayClose: false,
    afterHide: function(element, value) {new Ajax.Updater(\'PeopleContainer\',\'/alunos/index\')}}); return false;')); ?>
													<?php  echo $this->Html->link($this->Html->image("/img/dollar.png"),
  array('controller'=>'pagamentos', 'action'=>'gerar_facturas',$aluno['Aluno']['id']),
  array('title'=>'Efectuar Pagamento', 'escape'=>false,'onclick'=>'Modalbox.show(this.href, {
    title: this.title, width: 900, overlayClose: false,
    afterHide: function(element, value) {new Ajax.Updater(\'PeopleContainer\',\'/people/display\')}}); return false;')); ?>
    <?php  echo $this->Html->link($this->Html->image("/img/dollar.png"),  array('controller'=>'pagamentos','action' => 'imprimir_facturas', $aluno['Aluno']['id']),array('target'=>'_blank','escape'=>false)); ?>
												</td>
												
											</tr>
											
										<?php
										 } endforeach; ?>
										</tbody>
									</table>
								</fieldset>
							</form>
							<div class="pagination">
								<ul class="left">
									<li>
												<?php
	echo $this->Paginator->counter(array(
	'format' => __('Mostrando %current% linhas. Total: %count% linhas retornadas')
	));
	?>	</li>
								</ul>
								<ul>
									<li><?php echo $this->Paginator->prev('<<', array(), null, array('class'=>'disabled'));?> </li>
									<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null));?>
                                    
									<li><?php echo $this->Paginator->next('>>', array(), null, array('class' => 'disabled'));?></li>
								</ul>
								
								
							</div>
						</div><!-- .content#box-1-holder -->

					</div>
				</div>


