<?php include('menu.ctp'); 
$grupo = $session->read('Auth.User.group_id');
?>

	<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php if ($grupo!=4) echo $this->Html->link(sprintf(__('Lista de Funcionarios', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Funcionarios - visualizar');?></h1>
     
    </div>
    <div class="table">

<?php
    //O
    echo $form->create('T0002funcionario');?>
       <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Ficha do Funcionario</th>
        </tr>
        <tr>
            <th class="full" colspan="2">Informação Pessoal</th>
	<?php
	    //echo $this->Form->input('user_id',array('label'=>'codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('name',array('label'=>'Nome','size'=>'60','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('foto',array('type'=>'file','label'=>'Foto','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0019genero_id',array('empty'=>'--seleccione--','label'=>'Genero','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0001grauacademico_id',array('empty'=>'--seleccione--','label'=>'Grau Academico','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datanascimento',array('dateFormat'=>'DMY','minYear'=>'1930','disabled'=>true,'monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>'Data de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('tg0004cidade_id',array('empty'=>'--seleccione--','label'=>'Naturalidade','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));

                ?></tr>
          <tr>
            <th class="full" colspan="2">Detalhes de Documento</th>
	<?php
                echo $this->Form->input('tg0002paise_id',array('empty'=>'--seleccione--','label'=>'Nacionalidade','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('tg0009documento_id',array('empty'=>'--seleccione--','label'=>'Tipo de Identificacao','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('numdocid',array('label'=>'Numero de Documento','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
               echo $this->Form->input('docdataemissao',array('dateFormat'=>'DMY','disabled'=>true,'monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>'Data de Emissão','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('doclocalemissao',array('label'=>'Local de Emissão','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        ?>
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes de Domicílio e Contactos</th>
        <?php
                echo $this->Form->input('moradarua',array('label'=>'Endereco','size'=>'60','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0004cidade_id',array('empty'=>'--seleccione--','label'=>'Cidade','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('moradacpostal',array('label'=>'Caixa Postal','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('email',array('label'=>'Email','size'=>'30','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('telefone',array('label'=>'Telefone','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('telemovel',array('label'=>'Telemovel','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		 ?>
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes Institucionais</th>
        <?php
                echo $this->Form->input('datainicio',array('dateFormat'=>'DMY','disabled'=>true,'monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>'Data Inicio','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0011tipofuncionario_id',array('empty'=>'--seleccione--','label'=>'Tipo de Funcionario','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0006departamento_id',array('empty'=>'--seleccione--','label'=>'Departamento','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	        echo $this->Form->input('tg0005cargo_id',array('empty'=>'--seleccione--','label'=>'Cargo','disabled'=>true,'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        ?>
<tr><td></td><td><?php //echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>
