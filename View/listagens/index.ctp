<div class="actions" id="left-column">
	<h3><center><?php echo __('Relatorios gerais'); echo $this->Html->script('radio'); ?></center></h3>
        <br/>
	<?php echo $this->Html->link(sprintf(__('Listagem de Estudantes', true)), array('action' => 'listagens'),array('class'=>'linkselected')); ?>
        <?php echo $this->Html->link(sprintf(__('Listagem Funcionarios',  true)), array('action' => 'listagens_funcionario'),array('class'=>'link'));?>
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
	<h1><?php echo __('Listagens de Estudantes Matriculados');?></h1>

    </div>

    <div class="table">
	<table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="0"></th>
        </tr>
	<tr>
        <td>
        <?php echo $this->Form->create('Listagens',array('action' => 'print_pdf','target'=>'_blank'));?>
      <?php
          // $options= array('1'=>'Masculino','2'=>'Femenino');
            $options= array('3'=>'Estudantes por Curso');
            $attributes = array('value'=>false,'legend'=>false,'onChange'=>'desativacurso();');
	    echo $this->Form->radio('select',$options,$attributes,array('size'=>15));?>
            <?php
            ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
            echo $this->Form->input('t0003curso_id',array('type'=>'select','div'=>false,'label'=>false));
        ?>
        </td>
        </tr>
        <tr>
        <td>
        <?php
            $options= array('4'=>'Estudantes por Cidade');
            $attributes = array('value'=>false,'legend'=>false);
	    // echo $this->Form->input('curso_ck',array('type'=>'checkbox','label'=>'Por Curso','div'=>false));
            echo $this->Form->radio('select',$options,$attributes,array('size'=>15));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
		  //  RA 2011.04.02 	
          //  echo $this->Form->input('name',array('options'=>$cidades,'div'=>false,'label'=>false));
			 echo $this->Form->input('Cidade_id',array('type'=>'select','div'=>false,'label'=>false));
        ?>
            </td>
        </tr>
        <tr>
        <td>
        <?php
            $options= array('5'=>'Estudantes por Provincia');
            $attributes = array('value'=>false,'legend'=>false);
	    // echo $this->Form->input('curso_ck',array('type'=>'checkbox','label'=>'Por Curso','div'=>false));
            echo $this->Form->radio('select',$options,$attributes,array('size'=>15));?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
          //  RA 2011.04.02 	
          //echo $this->Form->input('name',array('options'=>$provincias,'div'=>false,'label'=>false));
		    echo $this->Form->input('provincia', array('options'=>$provincias,'type'=>'select','div'=>false,'label'=>false));
        ?>
        </td>
        </tr>
        <tr>
        <td>
        <?php
           $options= array('6'=>'Por Turma');
           $attributes = array('value'=>false,'legend'=>false);
	   echo $this->Form->radio('select',$options,$attributes,array('size'=>15));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
           echo $this->Form->input('turma',array('options'=>$disciplinas,'type'=>'select','div'=>false,'label'=>false));
        ?>

               </td>
        </tr>
        <tr>
        <td>
        <?php 
           $options= array('1'=>'Masculino','2'=>'Femenino');
           $attributes = array('value'=>false,'legend'=>false);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <?php
	   echo $this->Form->select('gender',$options);
         
        ?>

<tr><td><center><?php echo $this->Form->end(__('Listar', true));?></center></td></tr>
        </table>

</div>

</div>