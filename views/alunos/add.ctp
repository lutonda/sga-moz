<div  class="box box-100">
	<div class="boxin">
		<div class="header">
			<h3>Cadastro de Novo Estudante</h3>
			<a href="#" class="button">Lista de Estudantes&nbsp;»</a>
		</div>
		<?php echo $form->create('Aluno',array('enctype' => 'multipart/form-data','class'=>'fields'));?>
		<fieldset class="last">
			<legend>Informação Pessoal</legend>
			<table width="100%">
				<tr>
				<td width="30%" class="formulario">
								<div class="row">
									<label>Nome Completo:</label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('name',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Data de Nascimento:</label>
									<div class="inputs">
										<span class="input_wrapper_data"><?php echo $datePicker->picker('datanascimento',array('minYear'=>date('Y')-70,'maxYear' => date('Y')-10,'monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>false,'div'=>false));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Sexo:</label>
									<div class="inputs">
										<span class="input_wrapper">
								<?php echo $this->Form->input('genero_id',array('label'=>false,'div'=>false));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->								
                                										
					</td>
					<td width="30%" class="formulario">

								<div class="row">
									<label>Fotografia:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('foto',array('type'=>'file','label'=>false,'div'=>false,'size'=>9));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Nome do Pai:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('nomepai',array('label'=>false,'div'=>false,'class'=>'txt'));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Nome da Mae:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('nomemae',array('label'=>false,'div'=>false,'class'=>'txt'));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->																								
						
					</td>
					<td width="30%" class="formulario">

								<div class="row">
									<label>Nacionalidade:</label>
									<div class="inputs">
										<span class="input_wrapper">
												<?php echo $this->Form->input('paise_id',array('label'=>false,'div'=>false));?>
			
        	</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Provincia:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('provincia_id',array('label'=>false,'div'=>false));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label>Cidade:</label>
									<div class="inputs">
										<span class="input_wrapper">
									<?php echo $this->Form->input('cidadenascimento_id',array('label'=>false,'div'=>false));?></span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->																								
						
					</td>
				</tr>
			</table>	


			
		</fieldset>
			
		<fieldset>
			<legend>Detalhes de Ingresso</legend>
			<table width="100%">
				<tr>
				<td width="50%" class="formulario">
								<div class="row">
									<label><?php __('Nome do Curso:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('curso_id',array('label'=>false,'div'=>false,'id'=>'cursoid'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Plano de estudos:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('planoestudo_id',array('label'=>false,'div'=>false,'id'=>'planoestudoid'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Data de Ingresso:')?></label>
									<div class="inputs">
										<span class="input_wrapper_data"><?php echo $this->Form->input('dataingresso',array('minYear'=>'2000','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->								
								</td>
								<td width="50%" class="formulario">
								<div class="row">
									<label><?php __('Provincia de Origem:')?></label>
									<div class="inputs">
										<span class="input_wrapper">		<?php echo $this->Form->input('proveniencianome',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Cidade de Origem:')?></label>
									<div class="inputs">
										<span class="input_wrapper">		<?php echo $this->Form->input('provenienciacidade',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
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
									<label><?php __('Tipo de Identificação:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('documento_id',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Numero do Documento de Identificação:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php 	      echo $this->Form->input('numdocumento',array('label'=>false,'div'=>false,'class'=>'txt'));
        ?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								</td>
								<td width="50%"	class="formulario"?>
								<div class="row">
									<label><?php __('Data de emissão:')?></label>
									<div class="inputs">
										<span class="input_wrapper_data">        	<?php echo $this->Form->input('docdataemissao',array('dateFormat'=>'DMY','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>false,'div'=>false));
        ?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Local de emissão:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('doclocalemissao',array('label'=>false,'div'=>false,'class'=>'txt'));
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
									<label><?php __('Cidade onde mora:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('cidade_id',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Bairro:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('moradalocal',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Avenida/Rua:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('moradarua',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Caixa Postal:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('moradacpostal',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								</td>
								<td width="50%">
								<div class="row">
									<label><?php __('Telefone:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('telefone',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Telemovel:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('telemovel',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Email Pessoal:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('email',array('label'=>false,'div'=>false,'class'=>'txt'));?>
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
										<span class="input_wrapper_data"><label><?php __('É Trabalhador?:')?><?php echo $this->Form->input('etrabalhador',array('label'=>false,'div'=>false,'hiddenField'=>'false'));?></label>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Área de Trabalho:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('areatrabalho_id',array('label'=>false,'div'=>false));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Nome da empresa:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('empresanome',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Endereço da empresa:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('empresamorada',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								
								</td>
								<td width="50%">
								<div class="row">
									<label><?php __('Nome do responsável:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('empresacontacto',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->

								<div class="row">
									<label><?php __('Telefone:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('empresatelefone',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->

								<div class="row">
									<label><?php __('Email da empresa:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('empresaemail',array('label'=>false,'div'=>false,'class'=>'txt'));?>
										<?php //echo $this->Html->image('search.png',array('class'=>'img_search'))?>	
										</span>
										
									</div>
								</div>
								<!--[if !IE]>end row<![endif]-->
								<div class="row">
									<label><?php __('Website da empresa:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php echo $this->Form->input('empresasite',array('label'=>false,'div'=>false,'class'=>'txt'));?>
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
									<label><?php __('Detalhes Adicionais:')?></label>
									<div class="inputs">
										<span class="input_wrapper"><?php  echo $this->Form->input('detalhes',array('label'=>false,'div'=>false,'class'=>'txt','cols'=>80));
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