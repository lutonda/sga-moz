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
			<h3>Geração Automática de Turmas</h3>
			<a href="#" class="button">Lista de Turmas&nbsp;»</a>
		</div>
		<?php echo $this->Form->create('Pagamento');?>
		<fieldset class="last">
			<legend>Informações da Turma</legend>
			<table>
				<tr>
			<?php echo $this->Form->input('ano_lectivo',array('options'=>$anolectivos,'label'=>'Ano Lectivo:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false,'class'=>'txt'));?>

						
			</tr>
			
			<?php //echo $datePicker->picker('start_date')?>
			</table>
			
		</fieldset>
			

        <table class="listingform" cellpadding="0" cellspacing="0">
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true),array('class'=>'button'));?></td></tr>
        </table>
	</div>
</div>