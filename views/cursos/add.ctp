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
			<h3><?php __('Adicionar novo Curso')?></h3>
			<a href="#" class="button"><?php __('Lista de Cursos')?>&nbsp;»</a>
		</div>
		<?php echo $form->create('Curso',array('class'=>'fields'));?>
		<fieldset>
			<legend><?php __('Detalhes do Curso')?></legend>
			<table>
				<tr>
				<td width="50%">
					<table>
						<tr>
							<td>
								<label>
									Nome do Curso: 
									<span class="hotspot" onmouseover="tooltip.show('Nome do Curso a Adicionar');" onmouseout="tooltip.hide();">?</span
								</label>
								<span class="input_wrapper blank">
									<?php echo $this->Form->input('name',array('label'=>false,'div'=>false,'class'=>'txt','size'=>45));?>
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Grau Academico:</label>
								<span class="input_wrapper blank">
									<?php  echo $this->Form->input('grauacademico_id',array('label'=>false,'div'=>false));?>
								<span class="input_wrapper blank">
							</td>
						</tr>
						<tr>
							<td>
								<label>Tipo de Curso:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('tipocurso_id',array('label'=>false,'div'=>false));?>
									</span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Escola:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('escola_id',array('label'=>false,'div'=>false));?>
									</span>
							</td>
						</tr>																		
					</table>
					</td>
					<td width="50%">
					<table>
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
