<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 * 
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 * 
 * Este software � distribuido sob a perspectiva de que possa ser �til para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 * 
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 ?>
 <!--[if !IE]>start section<![endif]-->
					<div class="section table_section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Matriculas</h2>
							<span class="title_wrapper_left"></span>
							<span class="title_wrapper_right"></span>
						</div>
						<!--[if !IE]>end title wrapper<![endif]-->
						<!--[if !IE]>start section content<![endif]-->
						<div class="section_content">
							<!--[if !IE]>start section content top<![endif]-->
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">

												<form action="#">
												<fieldset>
												<!--[if !IE]>start table_wrapper<![endif]-->
												<div class="table_wrapper">
													<div class="table_wrapper_inner">
													<table cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
	<tr>
		    <th><?php echo $this->Paginator->sort('Cod.','id');?></th>
			<th><?php echo $this->Paginator->sort('Nome do aluno','t0008aluno_id');?></th>
			<th><?php echo $this->Paginator->sort('Plano de estudo','t0005planoestudo_id');?></th>
			<th><?php echo $this->Paginator->sort('Nome do curso','tg0021estadomatricula_id');?></th>
			<th><?php echo $this->Paginator->sort('Data','data');?></th>
	
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($matriculas as $matricula):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>

	<tr
	<?php echo $class;?>>
		<td><?php echo $matricula['Matricula']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($matricula['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $matricula['Aluno']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($matricula['Planoestudo']['name'], array('controller' => 'planoestudos', 'action' => 'view', $matricula['Planoestudo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($matricula['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $matricula['Curso']['id'])); ?>
		</td>
		<td><?php echo $matricula['Matricula']['data']; ?>&nbsp;</td>
		
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $matricula['Matricula']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $matricula['Matricula']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminar",'url' => array('action' => 'delete', $matricula['Matricula']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $matricula['Matricula']['id']))); ?>
		</td>
		
	</tr>
<?php endforeach; ?>
	</table>


													</div>
												</div>
												<!--[if !IE]>end table_wrapper<![endif]-->

												<!--[if !IE]>start table menu<![endif]-->
												<div class="pagination">
													<ul class="left">
														<li><?php echo $this->Html->link(__('<span><span>NOVA MATRICULA</span></span>', true), array('action' => 'add'),array('class'=>'button add_new','escape'=>false)); ?></li>
													</ul>
                                                    
													
													<ul>
														<li><?php echo $this->Paginator->prev('<<', array(), null, array('class'=>'disabled'));?> </li>
														<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null));?>
                                                        
														<li><?php echo $this->Paginator->next('>>', array(), null, array('class' => 'disabled'));?></li>
													</ul>
													
													
												</div>
												<!--[if !IE]>end table menu<![endif]-->


												</fieldset>
												</form>


											</div>
										</div>
									</div>
								</div>
							</div>
							<!--[if !IE]>end section content top<![endif]-->
							<!--[if !IE]>start section content bottom<![endif]-->
							<span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
							<!--[if !IE]>end section content bottom<![endif]-->

						</div>
						<!--[if !IE]>end section content<![endif]-->
					</div>
					<!--[if !IE]>end section<![endif]-->
