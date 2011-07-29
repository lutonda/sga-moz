<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Estudantes', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Estudante - editar');?></h1>

	</div>
    <div class="table">

<?php
    //O
    echo $form->create('Aluno',array('enctype'=>'multipart/form-data'));?>
        <table class="listingform" cellpadding="0" cellspacing="0">
				 <tr>
            <th class="full" colspan="2">Ficha de Estudante</th>
         </tr>
         <tr>
            <th class="full" colspan="2">InformaÃƒÂ§ÃƒÂ£o Pessoal</th>
            <?php
			echo $this->Form->input('codigo',array('disabled'=>'true','label'=>'Codigo','size'=>'70','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'10'));
		echo $this->Form->input('name',array('label'=>'Nome do Estudante','before'=>'<tr><td>','between'=>'</td><td align="left">','after'=>'</td></tr>','div'=>false,'size'=>'45'));
		echo $this->Form->input('foto',array('type'=>'file','label'=>'Fotografia','before'=>'<tr><td>','between'=>'</td><td align="left">','after'=>'</td></tr>','div'=>false,'size'=>'3'));
		echo $this->Form->input('tg0019genero_id',array('label'=>'Genero','before'=>'<tr><td>','between'=>'</td><td align="left">','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
				echo $this->Form->input('nomepai',array('label'=>'Nome do Pai','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'50'));
		echo $this->Form->input('nomemae',array('label'=>'Nome da Mae','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'50'));
		echo $this->Form->input('tg0002paise_id',array('label'=>'Nacionalidade','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
		echo $this->Form->input('tg0003provincia_id',array('label'=>'ProvÃƒÂ­ncia de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
    echo $this->Form->input('cidadenascimento_id',array('label'=>'Cidade de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
		echo $this->Form->input('datanascimento',array('minYear'=>'1941','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('dataingresso',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data de Ingresso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('proveniencianome',array('label'=>'Provincia de Origem','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('provenienciacidade',array('label'=>'Cidade de Origem','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));



	?>
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes de Documento</th>
        <?php
         echo $this->Form->input('tg0009documento_id',array('label'=>'Tipo de IdentificaÃƒÂ§ÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
	    echo $this->Form->input('numdocumento',array('label'=>'Numero do Documento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'18'));
        echo $this->Form->input('docdataemissao',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data de EmissÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('doclocalemissao',array('label'=>'Local de EmissÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'18'));?>
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes de DomicÃƒÂ­lio</th>
        <?php
        echo $this->Form->input('moradarua',array('label'=>'Rua','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('moradalocal',array('label'=>'Local','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('moradacpostal',array('label'=>'Caixa Postal','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0004cidade_id',array('label'=>'Cidade','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
		echo $this->Form->input('email',array('label'=>'Email Pessoal','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('telefone',array('label'=>'Telefone','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		 ?>
        </tr>
         <tr>
	<th class="full" colspan="2">Detalhes De DomicÃƒÂ­lio Profissional</th>
        <?php
         echo $this->Form->input('etrabalhador',array('label'=>'','before'=>'<tr><td>Trabalhador</td><td>','between'=>'</td>','after'=>'</tr>','div'=>false));
		echo $this->Form->input('tg0010areatrabalho_id',array('label'=>'Area de Trabalho','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
		echo $this->Form->input('empresanome',array('label'=>'Nome da Empresa','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'25'));
		echo $this->Form->input('empresamorada',array('label'=>'Endereco','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'25'));
		echo $this->Form->input('empresacontacto',array('label'=>'Contacto','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'25'));
		echo $this->Form->input('empresatelefone',array('label'=>'Telefone','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'25'));
		echo $this->Form->input('empresaemail',array('label'=>'Email','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'25'));
		echo $this->Form->input('empresasite',array('label'=>'Site','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'25'));
                echo $this->Form->input('detalhes',array('label'=>'Detalhes','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'45'));
               ?>
        </tr>
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>
