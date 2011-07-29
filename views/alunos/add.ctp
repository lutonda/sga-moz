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
			<?php echo $datePicker->picker('datanascimento',array('minYear'=>date('Y')-70,'maxYear' => date('Y')-10,'monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data Nascimento:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false));?>
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
			<legend>Detalhes de Ingresso</legend>
			<table>
				<tr>
				<?php echo $this->Form->input('planoestudo_id',array('label'=>'Plano de Estudo','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false,'id'=>'planoestudoid'));?>
				
				<?php echo $this->Form->input('curso_id',array('label'=>'Nome do Curso','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false,'id'=>'cursoid'));?>
				<?php echo $this->Form->input('planoestudo_id',array('label'=>'Plano de Estudo','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false,'id'=>'planoestudoid'));?>
				</tr>
				<tr>			
		<?php echo $this->Form->input('proveniencianome',array('label'=>'Provincia de Origem','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));?>
		<?php echo $this->Form->input('provenienciacidade',array('label'=>'Cidade Origem','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));?>
		<?php echo $this->Form->input('dataingresso',array('minYear'=>'2000','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data de Ingresso','before'=>'<td>','between'=>'</td><td>','after'=>'</td>','div'=>false));?>
		
				</tr>
			</table>	
		</fieldset>
		<fieldset>
			<legend>Detalhes de Identificação</legend>
			<?php echo $this->Form->input('documento_id',array('label'=>'Tipo de IdentificaÃƒÂ§ÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	      echo $this->Form->input('numdocumento',array('label'=>'Numero do Documento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('docdataemissao',array('dateFormat'=>'DMY','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>'Data de EmissÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('doclocalemissao',array('label'=>'Local de EmissÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        ?>
		</fieldset>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Ficha de Estudante</th>
         </tr>
         <tr>
            <th class="full" colspan="2">Informação Pessoal</th>
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes de Documento</th>
        
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes de DomicÃƒÂ­lio</th>
        <?php
        echo $this->Form->input('moradarua',array('label'=>'Rua','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'60'));
		echo $this->Form->input('moradalocal',array('label'=>'Local','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('moradacpostal',array('label'=>'Caixa Postal','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('cidade_id',array('label'=>'Cidade','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('email',array('label'=>'Email Pessoal','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('telefone',array('label'=>'Telefone','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('telemovel',array('label'=>'Telemovel','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		 ?>
        </tr>
         <tr>
	<th class="full" colspan="2">Detalhes De DomicÃƒÂ­lio Profissional</th>
        <?php
        echo $this->Form->input('etrabalhador',array('label'=>'','before'=>'<tr><td>Trabalhador</td><td>','between'=>'</td>','after'=>'</tr>','div'=>false));
		echo $this->Form->input('areatrabalho_id',array('label'=>'Area de Trabalho','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresanome',array('label'=>'Nome da Empresa','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresamorada',array('label'=>'Endereco','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresacontacto',array('label'=>'ResponsÃƒÂ¡vel(Nome)','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresatelefone',array('label'=>'Telefone','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresaemail',array('label'=>'Email','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresasite',array('label'=>'Site','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('detalhes',array('label'=>'Detalhes','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                ?>
        </tr>
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
	</div>
</div>