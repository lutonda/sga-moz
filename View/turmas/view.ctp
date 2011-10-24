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
 
 
 
 <div  class="box box-100">
	<div class="boxin">
		<div class="header">
			<h3><?php echo __('Visualização  da Turma')?></h3>
			<a href="#" class="button"><?php echo __('Lista de Turmas')?>&nbsp;»</a>
       		<?php  echo $this->Html->link(__('Adicionar Avaliação'),
  array('controller'=>'turmatipoavaliacaos', 'action'=>'add',$turma['Turma']['id']),
  array('class'=>'button','title'=>'Adicionar Avaliação', 'escape'=>false,'onclick'=>'Modalbox.show(this.href, {
    title: this.title, width: 900, overlayClose: false,
    afterHide: function(element, value) {new Ajax.Updater(\'PeopleContainer\',\'/people/display\')}}); return false;')); ?>
		</div>
		<?php echo $this->Form->create('Turma',array('class'=>'fields'));?>
		<fieldset>
			<legend><?php echo __('Detalhes da Turma')?></legend>
			<table>
				<tr>
				<td width="49%">
					<table>
						<tr>
							<td>
								<label>
									Nome da Turma: 
									<span class="hotspot" onmouseover="tooltip.show('Nome do Curso a Adicionar');" onmouseout="tooltip.hide();">?</span
								</label>
								<span class="input_wrapper blank">
									<?php echo $this->Form->input('name',array('label'=>false,'div'=>false,'class'=>'txt','size'=>45));?>
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Ano Lectivo:</label>
								<span class="input_wrapper blank">
									<?php  echo $this->Form->input('anolectivo_id',array('label'=>false,'div'=>false));?>
								<span class="input_wrapper blank">
							</td>
						</tr>
						<tr>
							<td>
								<label>Curso:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('curso_id',array('label'=>false,'div'=>false));?>
									</span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Plano de Estudos:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('planoestudo_id',array('label'=>false,'div'=>false));?>
									</span>
							</td>
						</tr>																		
					</table>
					</td>
					<td width="49%">
							<table>
							<tr>
								<td>
									<label>
										Ano Curricular: 
										<span class="hotspot" onmouseover="tooltip.show('Nome do Curso a Adicionar');" onmouseout="tooltip.hide();">?</span
									</label>
									<span class="input_wrapper blank">
										<?php echo $this->Form->input('anocurricular',array('value'=>$anocurricular,'disabled'=>true,'label'=>false,'div'=>false,'class'=>'txt','size'=>45));?>
									</span>
								</td>
							</tr>
							<tr>
								<td>
									<label>Semestre Curricular:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('semestrecurricular',array('value'=>$semestrecurricular,'disabled'=>true,'label'=>false,'div'=>false));?>
									<span class="input_wrapper blank">
								</td>
							</tr>
							<tr>
								<td>
									<label>Turno:</label>
										<span class="input_wrapper blank">
											<?php  echo $this->Form->input('turno',array('label'=>false,'div'=>false));?>
										</span>
								</td>
							</tr>
							<tr>
								<td>
									<label>Numero Máximo de Alunos:</label>
										<span class="input_wrapper blank">
											<?php  echo $this->Form->input('nummaximo',array('label'=>false,'div'=>false));?>
										</span>
								</td>
							</tr>																		
						</table>						
					</td>
				</tr>
			</table>	
		</fieldset>
<fieldset>
			<legend><?php echo __('Avaliações Registradas')?></legend>

					<div class="boxin">
						<div class="content" id="box1-tabular"><!-- content box 1 for tab switching -->
							<form enctype="multipart/form-data" method="post" action="" class="plain">
								<fieldset>
									<table cellspacing="0">
										<thead><!-- universal table heading -->
											<tr>
												<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
											
                        <th>Avaliação</th>
			<th>Data</th>
                    							<td class="tc last"><?php echo __('Acção');?></td>
											</tr>
										</thead>
										<tfoot><!-- table foot - what to do with selected items -->
										</tfoot>
										<tbody>
	<?php
	$i = 0;
	foreach ($turmatipoavaliacaos as $turmatipoavaliacao):
		$class = "first";
		if ($i++ % 2 == 0) {
			$class = ' class="even"';
		}
	?>
	<tr<?php echo $class;?>>
	<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
		<td><?php echo $turmatipoavaliacao['Tipoavaliacao']['name']; ?>&nbsp;</td>

		<td><?php echo $turmatipoavaliacao['Turmatipoavaliacao']['data']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('controller'=>'avaliacaos','action' => 'view', $turmatipoavaliacao['Turmatipoavaliacao']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('controller'=>'avaliacaos','action' => 'edit', $turmatipoavaliacao['Turmatipoavaliacao']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminar",'url' => array('controller'=>'avaliacaos','action' => 'delete',$turmatipoavaliacao['Turmatipoavaliacao']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $turmatipoavaliacao['Turmatipoavaliacao']['id']))); ?>
		</td>

	</tr>
<?php endforeach; ?>
										</tbody>
									</table>
								</fieldset>
						</div><!-- .content#box-1-holder -->

					</div>
			
	
		</fieldset>						
		<fieldset>
			<legend><?php echo __('Detalhes de Docencia')?></legend>
			<table>
				<tr>
				<td width="49%">
					<table>
						<tr>
							<td>
								<label>
									Nome do Docente: 
									<span class="hotspot" onmouseover="tooltip.show('Nome do Curso a Adicionar');" onmouseout="tooltip.hide();">?</span
								</label>
								<span class="input_wrapper blank">
									<?php echo $this->Form->input('docente_id',array('label'=>false,'div'=>false));?>
								</span>
							</td>
						</tr>														
					</table>
					</td>
					<td width="49%">
					<table width="100%">
						<tr>
							<td>
								<label>Nome do Assistente:</label>
								<span class="input_wrapper blank">
									<?php  echo $this->Form->input('assistente',array('label'=>false,'div'=>false));?>
								<span class="input_wrapper blank">
							</td>
						</tr>															
					</table>					
					</td>
				</tr>
			</table>	
		</fieldset>	
		<fieldset>
			<legend><?php echo __('Outros Detalhes')?></legend>
			<table>
				<tr>
				<td width="49%">
					<table>
						<tr>
							<td>
								<label>
									Estado da Turma: 
									<span class="hotspot" onmouseover="tooltip.show('Nome do Curso a Adicionar');" onmouseout="tooltip.hide();">?</span
								</label>
								<span class="input_wrapper blank">
									<?php echo $this->Form->input('estado',array('label'=>false,'div'=>false));?>
								</span>
							</td>
						</tr>														
					</table>
					</td>
					<td width="49%">
					<table width="100%">
						<tr>
							<td>
							</td>
						</tr>															
					</table>					
					</td>
				</tr>
			</table>	
		</fieldset>				
        <table class="listingform" cellpadding="0" cellspacing="0">
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true),array('class'=>'button'));?></td></tr>
        </table>
	</div>
</div>

