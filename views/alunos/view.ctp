<?php include('menu.ctp'); 
$grupo = $session->read('Auth.User.group_id');
?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
       
        <?php echo $this->Html->link(sprintf(__('Imprimir PDF', true)), array('action' => 'pdf_index',$this->data['T0008aluno']['id']),array('class'=>'button','target'=>'_blank')); ?>
		<?php //echo $this->Html->link(sprintf(__('Novo Estudante', true)), array('action' => 'add'),array('class'=>'button')); ?>
		<?php if ($grupo!=3) echo $this->Html->link(sprintf(__('Lista de Estudantes', true)), array('action' => 'index'),array('class'=>'button')); ?>

	<h1><?php __('Estudante - visualizar');?></h1>
        
    </div>
<div class="table">

			
<?php
    //O
    echo $form->create('T0008aluno');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
				 <tr>
            <th class="full" colspan="2">Ficha do Estudante</th>
         </tr>
         <tr>
            <th class="full" colspan="2">Informação Pessoal</th>
            <?php
			echo $this->Form->input('codigo',array('disabled'=>'true','label'=>'Codigo','size'=>'70','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'10'));
		echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome do Estudante','size'=>'70','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0019genero_id',array('disabled'=>'true','label'=>'Género','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('nomepai',array('disabled'=>'true','label'=>'Nome do Pai','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'50'));
		echo $this->Form->input('nomemae',array('disabled'=>'true','label'=>'Nome da Mae','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'50'));
		echo $this->Form->input('tg0002paise_id',array('disabled'=>'true','label'=>'Nacionalidade','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0003provincia_id',array('disabled'=>'true','label'=>'Província de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('cidadenascimento_id',array('disabled'=>'true','label'=>'Cidade de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datanascimento',array('minYear'=>'1970','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','disabled'=>'true','label'=>'Data de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('dataingresso',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','disabled'=>'true','label'=>'Data de Ingresso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('proveniencianome',array('disabled'=>'true','label'=>'Provincia de Origem','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('provenienciacidade',array('disabled'=>'true','label'=>'Cidade Origem','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes de Documento</th>
        <?php
        echo $this->Form->input('tg0009documento_id',array('disabled'=>'true','label'=>'Tipo de Identificação','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	echo $this->Form->input('numdocumento',array('disabled'=>'true','label'=>'Numero do Documento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('docdataemissao',array('disabled'=>'true','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data de Emissão','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('doclocalemissao',array('disabled'=>'true','label'=>'Local de Emissão','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        ?>
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes de Domícilio</th>
        <?php
        echo $this->Form->input('moradarua',array('disabled'=>'true','label'=>'Rua','size'=>'65','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('moradalocal',array('disabled'=>'true','label'=>'Local','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('moradacpostal',array('disabled'=>'true','label'=>'Caixa Postal','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0004cidade_id',array('disabled'=>'true','label'=>'Cidade','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('email',array('disabled'=>'true','label'=>'Email Pessoal','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('telefone',array('disabled'=>'true','label'=>'Telefone','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		 ?>
        </tr>
         <tr>
	<th class="full" colspan="2">Detalhes De Domicílio Profissional</th>
        <?php
        echo $this->Form->input('etrabalhador',array('disabled'=>'true','label'=>'Trabalhador','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0010areatrabalho_id',array('disabled'=>'true','label'=>'Área de Trabalho','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresanome',array('disabled'=>'true','size'=>'65','label'=>'Nome da Empresa','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresamorada',array('disabled'=>'true','label'=>'Endereço','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresacontacto',array('disabled'=>'true','label'=>'Contacto','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresatelefone',array('disabled'=>'true','label'=>'Telefone','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresaemail',array('disabled'=>'true','label'=>'Email','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('empresasite',array('disabled'=>'true','label'=>'Site','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('detalhes',array('disabled'=>'true','label'=>'Detalhes','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                ?>
        </tr>
    <tr><td></td><td><?php //echo $this->Form->end(__('Carregar', true));?></td></tr>
        </table>
</div>
</div>