<div class="actions" id="left-column">
	<h3><center><?php __('Relatorios gerais'); echo $this->Html->script('radio'); ?></center></h3>
        <br/>
	<?php echo $this->Html->link(sprintf(__('Listagem de Estudantes', true)), array('action' => 'listagens'),array('class'=>'link')); ?>
        <?php echo $this->Html->link(sprintf(__('Listagem Funcionarios',  true)), array('action' => 'listagens_funcionario'),array('class'=>'linkselected'));?>
        <?php echo $this->Html->link(sprintf(__('Alunos Matriculados', true)), array('action' => 'matriculados'),array('class'=>'link')); ?>
        <?php echo $this->Html->link(sprintf(__('Alunos Inscritos',  true)), array('action' => 'inscricao'),array('class'=>'link'));?>
         <?php echo $this->Html->link(sprintf(__('Listagem de Pautas',  true)), array('action' => 'listagem_de_pautas'),array('class'=>'link'));?>
		 <?php //echo $this->Html->link(sprintf(__('Pauta de Resultados',  true)), array('action' => 'listagem_de_pauta_resultados'),array('class'=>'link'));?>
		<?php echo $this->Html->link(sprintf(__('Declaracao',  true)), array('action' => 'declaracao'),array('class'=>'link'));?>
        <?php echo $this->Html->link(sprintf(__('Certificado',  true)), array('action' => 'certificado'),array('class'=>'link'));?>



</div>
<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php //echo $this->Html->link(sprintf(__('Novo Funcionario', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Listagens de Funcionario');?></h1>

    </div>

    <div class="table">
	<table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="0"></th>
        </tr>
	<tr>
        <td>
            <?php echo $form->create('Listagens',array('action' => 'print_pdf_funcionarios','name'=>'listagens','target'=>'_blank')); ?>
        <?php
           $options= array('3'=>'Por Departamento');
           $attributes = array('value'=>false,'legend'=>false,'onChange'=>'desativadepartamento();');//
	   echo $this->Form->radio('select',$options,$attributes,array('size'=>15));
           ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
           echo $this->Form->input('departamento',array('options'=> $departamento,'div'=>false,'label'=>false));
        ?>
        </td>
        </tr>
        <tr>
        <td>
        <?php
           $options= array('4'=>'Por Tipo de Funcionario');
           $attributes = array('value'=>false,'legend'=>false,'onChange'=>'desativatipofunc();');//
	   echo $this->Form->radio('select',$options,$attributes,array('size'=>15));
           ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
           echo $this->Form->input('tipo_func_id',array('options'=> $tipofuncionarios,'div'=>false,'label'=>false));
        ?>
        </td>
        </tr>
        <tr>
        <td>
        <?php
           $options= array('5'=>'Por Grau academico');
           $attributes = array('value'=>false,'legend'=>false,'onChange'=>'desativagrau();');
	    echo $this->Form->radio('select',$options,$attributes,array('size'=>15));
            ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
            echo $this->Form->input('grau',array('options'=> $grauacademico,'div'=>false,'label'=>false));
        ?>
        
                 </td>
        </tr>
        <tr>
        <td>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
        echo $this->Form->label('name','   Genero',array('size'=>'15'));
           $options= array('1'=>'Masculino','2'=>'Femenino');
           $attributes = array('value'=>false,'legend'=>false);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
           <?php
	   echo $this->Form->select('gender',$options);?>
<tr><td><center><?php echo $this->Form->end(__('Listar', true));?></center></td></tr>
        </table>

</div>

</div>