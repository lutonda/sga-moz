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
		<?php echo $form->create('Aluno',array('enctype' => 'multipart/form-data','class'=>'fields'));?>
		<fieldset class="last">
			<legend>Informação Pessoal</legend>
			<table>
				<tr>
					<td class="label"><label>Nomes:</label></td>
					<td>
						
						<span class="search_input">
			<?php echo $this->Form->input('name',array('label'=>false,'div'=>false,'size'=>'25','class'=>'txt'));?>
						<?php echo $this->Html->image('search.png',array('class'=>'img_search'))?>
						</span>
					</td>
			<?php echo $this->Form->input('foto',array('type'=>'file','label'=>'Fotografia:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false,'size'=>2));?>
			<?php echo $this->Form->input('datanascimento',array('minYear'=>date('Y')-70,'maxYear' => date('Y')-10,'monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data Nascimento:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));?>
			</tr>
			<tr>

			<?php echo $this->Form->input('nomepai',array('label'=>'Nome do Pai:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false,'size'=>'25','class'=>'txt'));?>
		<?php echo $this->Form->input('nomemae',array('label'=>'Nome da Mae:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false,'size'=>'25','class'=>'txt'));?>
			<?php echo $this->Form->input('genero_id',array('label'=>'Genero:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));?>			
				
			</tr>
			<tr>
			<?php echo $this->Form->input('paise_id',array('label'=>'Nacionalidade:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));?>
			<?php echo $this->Form->input('provincia_id',array('label'=>'Província:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));?>
        	<?php echo $this->Form->input('cidadenascimento_id',array('label'=>'Cidade:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));?>
						
			</tr>
			
			<?php //echo $datePicker->picker('start_date')?>
			</table>
			
		</fieldset>
		<fieldset>
			<legend>Detalhes de Identificação</legend>
			<table>
				<tr>
			<?php echo $this->Form->input('documento_id',array('label'=>'Tipo de Identificação','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
	      echo $this->Form->input('numdocumento',array('label'=>'Numero do Documento','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
        ?>
        </tr>
        <tr>
        	<?php echo $this->Form->input('docdataemissao',array('dateFormat'=>'DMY','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>'Data de Emissão','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
        echo $this->Form->input('doclocalemissao',array('label'=>'Local de Emissão','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
        ?>
        </tr>
        </table>
		</fieldset>
		<fieldset>
			<legend>Detalhes de domicilio</legend>
			<table>
				<tr>
				<?php
        echo $this->Form->input('cidade_id',array('label'=>'Cidade','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
		echo $this->Form->input('moradalocal',array('label'=>'Bairro','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
        echo $this->Form->input('moradarua',array('label'=>'Rua','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
		?>
		</tr>
		<tr>
		<?php
		echo $this->Form->input('telefone',array('label'=>'Telefone','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
        echo $this->Form->input('telemovel',array('label'=>'Telemovel','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
        echo $this->Form->input('moradacpostal',array('label'=>'Caixa Postal','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
		
		echo $this->Form->input('email',array('label'=>'Email Pessoal','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));
		
		 ?>			
				</tr>
				</table>
		</fieldset>
		<fieldset>
			<legend>Detalhes de domicilio Profissional</legend>
			<table>
				<tr>
				<?php
        echo $this->Form->input('etrabalhador',array('label'=>'','before'=>'<td>Trabalhador</td><td>','between'=>'</td>','after'=>'','div'=>false));
		?>
		</tr>
		<tr>
		<?php
		echo $this->Form->input('areatrabalho_id',array('label'=>'Area de Trabalho','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));
		echo $this->Form->input('empresanome',array('label'=>'Nome da Empresa','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));
		echo $this->Form->input('empresamorada',array('label'=>'Endereco','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));
		?>
		</tr>
		<tr>
		<?php
		echo $this->Form->input('empresacontacto',array('label'=>'Responsavel(Nome)','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));
		echo $this->Form->input('empresatelefone',array('label'=>'Telefone','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));
		echo $this->Form->input('empresaemail',array('label'=>'Email','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));
		?>
		</tr>
		<tr>
		<?php
		echo $this->Form->input('empresasite',array('label'=>'Site','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));	
					?>
				</tr>
			</table>
			
		</fieldset>
			<script>
				$j(function() {
					$j( "#tabs" ).tabs();
				});
			</script>
			<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Ingresso</a></li>
				<li><a href="#tabs-2">Identificação</a></li>
				<li><a href="#tabs-3">Domicilio</a></li>
				<li><a href="#tabs-4">Profissão</a></li>
				<li><a href="#tabs-5">Inscrições</a></li>
				<li><a href="#tabs-8">Requisições</a></li>
				<li><a href="#tabs-6">Pagamentos</a></li>
				<li><a href="#tabs-9">Avaliações</a></li>
				<li><a href="#tabs-7">Notas</a></li>
			</ul>
			<div id="tabs-1">
				<table>
					<tr>
						<td width="45%">
							<table>
								<tr>
									<td class="tab-data-index">Curso:</td><td class="tab-data-desc"><?php echo $aluno['Curso']['name'];?></td>			
								</tr>
								<tr>
									<?php /**
									 * @Todo Corrigir o plano de estudos aqui
									 */?>
									<td class="tab-data-index">Plano de Estudos:</td><td class="tab-data-desc"><?php echo $aluno['Curso']['name'];?></td>			
								</tr>							
							</table>
						</td>
						<td width="45%">
							<table>
								<tr>
									<td class="tab-data-index">Data de Ingresso:</td><td class="tab-data-desc"><?php echo $aluno['Aluno']['dataingresso'];?></td>			
								</tr>
								<tr>
									<td class="tab-data-index">Cidade de Origem:</td><td class="tab-data-desc"><?php echo $aluno['Aluno']['provenienciacidade'];?></td>			
								</tr>
								<tr>
									<td class="tab-data-index">Provincia de Origem:</td><td class="tab-data-desc"><?php echo $aluno['Aluno']['proveniencianome'];?></td>			
								</tr>															
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div id="tabs-2">
				
			</div>
			<div id="tabs-3">

			</div>
			<div id="tabs-4">

			</div>
			<div id="tabs-5">

			</div>
			<div id="tabs-6">

			</div>
			<div id="tabs-7">
				<table>
					<tr>
						<?php  echo $this->Form->input('detalhes',array('label'=>'Detalhes','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));
                ?>
					</tr>	
				</table>
			</div>
			<div id="tabs-8">

			</div>
			<div id="tabs-9">

			</div>
		</div>
	</div>
</div>
	