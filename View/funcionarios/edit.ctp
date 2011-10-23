<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Funcionarios', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Funcionario - editar');?></h1>
     
    </div>
    <div class="table">

<?php
    //O
    echo $this->Form->create('Funcionario');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Ficha do Funcionario</th>
        </tr>
        <tr>
            <th class="full" colspan="2">InformaÃƒÂ§ÃƒÂ£o Pessoal</th>
	<?php
	    //echo $this->Form->input('user_id',array('label'=>'codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('name',array('label'=>'Nome','size'=>'60','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('foto',array('type'=>'file','label'=>'Foto','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0019genero_id',array('empty'=>'--seleccione--','label'=>'Genero','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0001grauacademico_id',array('empty'=>'--seleccione--','label'=>'Grau Academico','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datanascimento',array('dateFormat'=>'DMY','minYear'=>'1930','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>'Data de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('tg0004cidade_id',array('empty'=>'--seleccione--','label'=>'Naturalidade','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));

                ?></tr>
          <tr>
            <th class="full" colspan="2">Detalhes de Documento</th>
	<?php
                echo $this->Form->input('tg0002paise_id',array('empty'=>'--seleccione--','label'=>'Nacionalidade','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('tg0009documento_id',array('empty'=>'--seleccione--','label'=>'Tipo de Identificacao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('numdocid',array('label'=>'Numero de Documento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
               echo $this->Form->input('docdataemissao',array('dateFormat'=>'DMY','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>'Data de EmissÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('doclocalemissao',array('label'=>'Local de EmissÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        ?>
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes de DomicÃƒÂ­lio e Contactos</th>
        <?php
                echo $this->Form->input('moradarua',array('label'=>'Endereco','size'=>'60','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0004cidade_id',array('empty'=>'--seleccione--','label'=>'Cidade','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('moradacpostal',array('label'=>'Caixa Postal','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('email',array('label'=>'Email','size'=>'30','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('telefone',array('label'=>'Telefone','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('telemovel',array('label'=>'Telemovel','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		 ?>
        </tr>
        <tr>
	<th class="full" colspan="2">Detalhes Institucionais</th>
        <?php
                echo $this->Form->input('datainicio',array('dateFormat'=>'DMY','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'label'=>'Data Inicio','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0011tipofuncionario_id',array('empty'=>'--seleccione--','label'=>'Tipo de Funcionario','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0006departamento_id',array('empty'=>'--seleccione--','label'=>'Departamento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	        echo $this->Form->input('tg0005cargo_id',array('empty'=>'--seleccione--','label'=>'Cargo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        ?>
<tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        
        </table>
</div>
</div>