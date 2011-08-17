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

 <!--[if !IE]>start section<![endif]-->
					<div class="section table_section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Cursos</h2>
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

			
			<th><?php echo $this->Paginator->sort('Codigo','codigo');?></th>
			<th><?php echo $this->Paginator->sort('Ano','ano');?></th>
            <th><?php echo $this->Paginator->sort('Regime','regime');?></th>
            <th><?php echo $this->Paginator->sort('Semestre Lectivo','num_semestre');?></th>
			<th class="actions"><?php __('Accao');?></th>
		
	</tr>
	<?php
	$i = 0;
	foreach ($anolectivos as $anolectivo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		
		<td><?php echo $anolectivo['Anolectivo']['codigo']; ?>&nbsp;</td>
		<td><?php echo $anolectivo['Anolectivo']['ano']; ?>&nbsp;</td>
        <td><?php echo $anolectivo['Anolectivo']['regime']; ?>&nbsp;</td>
        <td><?php echo $anolectivo['Anolectivo']['num_semestre']; ?>&nbsp;</td>
		
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $anolectivo['Anolectivo']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $anolectivo['Anolectivo']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'delete', $anolectivo['Anolectivo']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$anolectivo['Anolectivo']['id']))); ?>
		</td>
		
	</tr>
<?php endforeach; ?>
	</table>


													</div>
												</div>
												<!--[if !IE]>end table_wrapper<![endif]-->

												<!--[if !IE]>start table menu<![endif]-->
												<div class="table_menu">
													<ul class="left">
														<li><?php echo $this->Html->link(__('<span><span>NOVO CURSO</span></span>', true), array('action' => 'add'),array('class'=>'button add_new','escape'=>false)); ?></li>
													</ul>
													<ul class="right">
														<li><a href="#" class="button check_all"><span><span>MARCAR TODAS</span></span></a></li>
														<li><a href="#" class="button uncheck_all"><span><span>DESMARCAR TODAS</span></span></a></li>
														<li><span class="button approve"><span><span>REMOVER</span></span></span></li>
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
