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
											
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('autoload');?></th>
                    							<td class="tc last"><?php __('Acção');?></td>
											</tr>
											<tr>
												<td></td>
											  
            								<td><?php echo $form->input('codigo',array('label'=>false,'size'=>5)); ?></td>  
            								<td><?php echo $form->input('name',array('label'=>false,'size'=>10)); ?></td>
            								<td><?php echo $form->input('curso_id',array('label'=>false,'empty'=>true,'class'=>'filtro_select')); ?></td>
            								<td><?php echo $form->input('escola_id',array('label'=>false,'empty'=>true)); ?></td>  
            								  
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
	foreach ($configs as $config):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $config['Config']['id']; ?>&nbsp;</td>
		<td><?php echo $config['Config']['name']; ?>&nbsp;</td>
		<td><?php echo $config['Config']['value']; ?>&nbsp;</td>
		<td><?php echo $config['Config']['autoload']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $config['Config']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $config['Config']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $config['Config']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $config['Config']['id'])); ?>
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
