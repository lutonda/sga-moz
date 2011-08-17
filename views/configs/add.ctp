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
			<h3>Configurações do Sistema</h3>
			<a href="#" class="button">Lista configurações&nbsp;»</a>
		</div>
		<?php echo $form->create('Config',array('class'=>'fields'));?>
		<fieldset class="last">
			<legend>Configurações básicas</legend>
			<table width="100%">
				<tr>
				<td width="30%" class="formulario">
								<div class="row">
									<label>Chave:</label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('name',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
					</td>
					<td width="30%" class="formulario">								
								<div class="row">
									<label>Valor:</label>
									<div class="inputs">
										<span class="input_wrapper">
								<?php echo $this->Form->input('value',array('label'=>false,'div'=>false));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->								
					</td>
					<td width="30%" class="formulario">                                										

								<div class="row">
									<label>Carregar Automaticamente?:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('autoload',array('label'=>false,'div'=>false,'class'=>'txt'));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->																							
						
					</td>
				</tr>
			</table>	


			
		</fieldset>
        <table class="listingform" cellpadding="0" cellspacing="0">
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true),array('class'=>'button'));?></td></tr>
        </table>
	</div>
</div>

