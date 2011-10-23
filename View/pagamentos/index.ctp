<?php
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
							<h3>Pagamentos</h3>
							<?php echo $this->Html->link(__('Registrar Novo', true), array('action' => 'add'),array('class'=>'button add_new','escape'=>false)); ?>

						</div>
						<div class="content" id="box1-tabular"><!-- content box 1 for tab switching -->
							<form enctype="multipart/form-data" method="post" action="" class="plain">
								<fieldset>
									<?php echo $this->Form->create('Pagamento',array('action'=>'index','id'=>'filters')); ?>  
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
												<td class="tc last"><?php echo __('Acção');?></td>
											</tr>
											<tr>
												
												<td></td>  
            								<td><?php echo $this->Form->input('codigo',array('label'=>false,'size'=>10)); ?></td>  
            								<td><?php echo $this->Form->input('name',array('label'=>false,'size'=>8)); ?></td>
            								<td><?php echo $this->Form->input('tipopagamento_id', array('label'=>false,'class'=>'filtro_select')); ?></td>
            								<td><?php echo $this->Form->input('valor',array('label'=>false,'size'=>4)); ?></td>
            								<td><?php echo $this->Form->input('data_pagamento',array('label'=>false)); ?></td> 
            								<td><?php echo $this->Form->input('data_limite',array('label'=>false)); ?></td>
            								<td><?php echo $this->Form->input('estadopagamento_id',array('label'=>false,'class'=>'filtro_select')); ?></td> 
            								  
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
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Visualizar","title"=>"Visualizar",'url' => array('action' => 'view', $pagamento['Pagamento']['id']))); ?>
                <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Editar","title"=>"Editar",'url' => array('action' => 'edit', $pagamento['Pagamento']['id']))); ?>
                    
		</td>

	</tr>
<?php endforeach; ?>
										</tbody>
									</table>
								</fieldset>
							</form>
							<div class="pagination">
								<ul>
									<li><?php echo $this->Paginator->prev('<<', array(), null, array('class'=>'disabled'));?> </li>
									<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null));?>
                                    
									<li><?php echo $this->Paginator->next('>>', array(), null, array('class' => 'disabled'));?></li>
								</ul>
								
								
							</div>
						</div><!-- .content#box-1-holder -->

					</div>
				</div>


