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
			<h3>Cadastro de Novo Estudante</h3>
			<a href="#" class="button">Lista de Estudantes&nbsp;»</a>
		</div>
		<?php echo $this->Form->create('Docente',array('enctype' => 'multipart/form-data','class'=>'fields'));?>
		<fieldset class="last">
			<legend>Informação Pessoal</legend>
			<table width="100%">
				<tr>
				<td width="30%" class="formulario">
								<div class="row">
									<label>Nome Completo:</label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.name',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Data de Nascimento:</label>
									<div class="inputs">
										<span class="input_wrapper_data"><?php echo $this->Form->input('Entidade.datanascimento',array('minYear'=>date('Y')-70,'maxYear' => date('Y')-10,'monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>false,'div'=>false));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Sexo:</label>
									<div class="inputs">
										<span class="input_wrapper">
								<?php echo $this->Form->input('Entidade.genero_id',array('label'=>false,'div'=>false));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->								
                                										
					</td>
					<td width="30%" class="formulario">

								<div class="row">
									<label>Fotografia:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('Entidade.foto',array('type'=>'file','label'=>false,'div'=>false,'size'=>9));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Nome do Pai:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('Entidade.nomepai',array('label'=>false,'div'=>false,'class'=>'txt'));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Nome da Mae:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('Entidade.nomemae',array('label'=>false,'div'=>false,'class'=>'txt'));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->																								
						
					</td>
					<td width="30%" class="formulario">

								<div class="row">
									<label>Nacionalidade:</label>
									<div class="inputs">
										<span class="input_wrapper">
												<?php echo $this->Form->input('Entidade.paise_id',array('label'=>false,'div'=>false));?>
			
        	</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Provincia:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('Entidade.provincia_id',array('label'=>false,'div'=>false));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Cidade:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('Entidade.cidadenascimento_id',array('label'=>false,'div'=>false));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->																								
						
					</td>
				</tr>
			</table>	


			
		</fieldset>
			
		<fieldset>
			<legend>Detalhes de Docencia</legend>
			<table width="100%">
				<tr>
				<td width="50%" class="formulario">
								<div class="row">
									<label><?php echo __('Faculdade:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('faculdade_id',array('label'=>false,'div'=>false,'id'=>'cursoid'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Departamento:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('departamento_id',array('label'=>false,'div'=>false,'id'=>'planoestudoid'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Secção:')?></label>
									<div class="inputs">
										<span class="input_wrapper_data"><?php echo $this->Form->input('seccao_id',array('minYear'=>'2000','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->								
								</td>
								<td width="50%" class="formulario">
								<div class="row">
									<label><?php echo __('Categoria:')?></label>
									<div class="inputs">
										<span class="input_wrapper">		<?php echo $this->Form->input('docente_categoria_id',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-
								<div class="row">
									<label><?php echo __('Cidade de Origem:')?></label>
									<div class="inputs">
										<span class="input_wrapper">		<?php echo $this->Form->input('provenienciacidade',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif] -->
								<div class="row">
									<label><?php //__('Data de Ingresso:')?></label>
									<div class="inputs">
										<span class="input_wrapper_data"><?php //echo $this->Form->input('dataingresso',array('minYear'=>'2000','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->																																	


								</td>								
				

				</tr>
			</table>	
		</fieldset>
		<fieldset>
			<legend>Detalhes de Identificação</legend>
			<table width="100%">
				<tr>
				<td width="50%" class="formulario">
								<div class="row">
									<label><?php echo __('Tipo de Identificação:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.documento_id',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Numero do Documento de Identificação:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php 	      echo $this->Form->input('Entidade.numdocumento',array('label'=>false,'div'=>false,'class'=>'txt'));
        ?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								</td>
								<td width="50%"	class="formulario"?>
								<div class="row">
									<label><?php echo __('Data de emissão:')?></label>
									<div class="inputs">
										<span class="input_wrapper_data">        	<?php echo $this->Form->input('Entidade.docdataemissao',array('dateFormat'=>'DMY','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>false,'div'=>false));
        ?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Local de emissão:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.doclocalemissao',array('label'=>false,'div'=>false,'class'=>'txt'));
        ?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
																									
								</td>													
        </tr>
        </table>
		</fieldset>
		<fieldset>
			<legend>Detalhes de domicilio</legend>
			<table width="100%">
				<tr>
				<td width="50%" class="formulario">
								<div class="row">
									<label><?php echo __('Cidade onde mora:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.cidade_id',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Bairro:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.moradalocal',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Avenida/Rua:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.moradarua',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Caixa Postal:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.moradacpostal',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								</td>
								<td width="50%">
								<div class="row">
									<label><?php echo __('Telefone:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.telefone',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Telemovel:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.telemovel',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Email Pessoal:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.email',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
				</td>
				</tr>
				</table>
		</fieldset>
		<fieldset>
			<legend>Detalhes de domicilio Profissional</legend>
			<table width="100%">
				<tr>
				<td width="50%" class="formulario">
								<div class="row">
									
									<div class="inputs">
										<span class="input_wrapper_data"><label><?php echo __('É Trabalhador?:')?>
											<?php echo $this->Form->input('Entidade.etrabalhador',array('label'=>false,'div'=>false,'hiddenField'=>'false'));?></label>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Área de Trabalho:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.areatrabalho_id',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Nome da empresa:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.empresanome',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Endereço da empresa:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.empresamorada',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								
								</td>
								<td width="50%">
								<div class="row">
									<label><?php echo __('Nome do responsável:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.empresacontacto',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->

								<div class="row">
									<label><?php echo __('Telefone:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.empresatelefone',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->

								<div class="row">
									<label><?php echo __('Email da empresa:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.empresaemail',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php echo __('Website da empresa:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('Entidade.empresasite',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->																																																								
				</td>
				</tr>
			</table>
			
		</fieldset>
		<fieldset>
			<legend>Observacoes</legend>
				<table width="100%">
					<tr>
							<td width="100%">
								<div class="row">
									<label><?php echo __('Detalhes Adicionais:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php  echo $this->Form->input('Entidade.detalhes',array('label'=>false,'div'=>false,'class'=>'txt','cols'=>80));
	                ?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
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
