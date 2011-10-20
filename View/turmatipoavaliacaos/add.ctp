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
		<?php echo $this->Form->create('Turmatipoavaliacao',array('class'=>'fields'));?>
		<fieldset>
			<legend><?php echo __('Detalhes do Curso')?></legend>
			<table>
				<tr>
				<td width="50%">
					<table>
						<tr>
							<td>
								<label>Turma:</label>
									<span class="input_wrapper">
										<?php echo $this->Form->input('turma',array('disabled'=>true,'value'=>1,'label'=>false,'div'=>false));?></span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Tipo de Avaliação:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('tipoavaliacao_id',array('label'=>false,'div'=>false));?>
									</span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Data e Hora:</label>
									<span class="input_wrapper_data"><?php echo $this->Form->input('data',array('minYear'=>date('Y')-70,'maxYear' => date('Y')-10,'monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>false,'div'=>false));?></span>
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
