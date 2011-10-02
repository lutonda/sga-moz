<div class="actions" id="left-column">
	<h3><center><?php echo __('Relatorios gerais'); echo $this->Html->script('radio'); ?></center></h3>
        <br/>
	<?php echo $this->Html->link(sprintf(__('Listagem de Estudantes', true)), array('action' => 'listagens'),array('class'=>'link')); ?>
        <?php echo $this->Html->link(sprintf(__('Listagem Funcionarios',  true)), array('action' => 'listagens_funcionario'),array('class'=>'link'));?>
        <?php echo $this->Html->link(sprintf(__('Alunos Matriculados', true)), array('action' => 'matriculados'),array('class'=>'link')); ?>
        <?php echo $this->Html->link(sprintf(__('Alunos Inscritos',  true)), array('action' => 'inscricao'),array('class'=>'linkselected'));?>
         <?php echo $this->Html->link(sprintf(__('Listagem de Pautas',  true)), array('action' => 'listagem_de_pautas'),array('class'=>'link'));?>
		 <?php //echo $this->Html->link(sprintf(__('Pauta de Resultados',  true)), array('action' => 'listagem_de_pauta_resultados'),array('class'=>'link'));?>
		<?php echo $this->Html->link(sprintf(__('Declaracao',  true)), array('action' => 'declaracao'),array('class'=>'link'));?>
        <?php echo $this->Html->link(sprintf(__('Certificado',  true)), array('action' => 'certificado'),array('class'=>'link'));?>

</div>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php //echo $this->Html->link(sprintf(__('Novo Funcionario', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php echo __('Listagens de Estudantes Inscritos');?></h1>
    </div>

    <div class="table">
	<table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="0"></th>
        </tr>
	<tr>
        <td>
        <?php echo $this->Form->create('Listagens',array('action' => 'print_pdf_inscricao','target'=>'_blank'));?>
      <?php
            $options= array('1'=>'Todos');
            $attributes = array('value'=>false,'legend'=>false,'onChange'=>'desativacurso();');
	    echo $this->Form->radio('select',$options,$attributes,array('size'=>15));?>
			           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
		   echo $this->Form->input('t0009anolectivos',array('options'=>Anolectivos,'type'=>'select','div'=>false,'label'=>false, 'id'=>'anolectivoid'));
		$options = array('url' => 'update_turma/','update' => 'turma');
        echo $ajax->observeField('anolectivoid', $options);
		
		/*Caso seja necessario colocar "'options'=>$turmas"
		   */
		   ?>
		   &nbsp;&nbsp;
           <?php echo $this->Form->input('turma',array('options'=>$turmas,'type'=>'select','div'=>false,'label'=>false, 'id'=>'turma'));
		   
        ?>
        </td>
        </tr>
  
  
  	<tr>
        <td>
        <?php echo $this->Form->create('Listagens',array('action' => 'print_pdf_inscricao','target'=>'_blank'));?>
      <?php
            $options= array('2'=>'Todos Anulados / Cancelados');
            $attributes = array('value'=>false,'legend'=>false,'onChange'=>'desativacurso();');
	    echo $this->Form->radio('select',$options,$attributes,array('size'=>15));?>
			&nbsp;<?php
		   echo $this->Form->input('t0009anolectivos2',array('options'=>Anolectivos,'type'=>'select','div'=>false,'label'=>false, 'id'=>'anolectivoid1'));
				
		$options = array('url' => 'update_turma1/','update' => 'turma1');
        echo $ajax->observeField('anolectivoid1', $options);
		
		/*Caso seja necessario colocar "'options'=>$turmas1"
		*/
		   ?>
		   &nbsp;&nbsp;
           <?php echo $this->Form->input('turma2',array('options'=>$turmas1,'type'=>'select','div'=>false,'label'=>false, 'id'=>'turma1'));
		   
        ?>
        </td>
        </tr>
  
  
       <tr>
        <td>
        <?php
           $options= array('3'=>' Por Turma');
           $attributes = array('value'=>false,'legend'=>false);
	   //echo $this->Form->radio('select',$options,$attributes,array('size'=>15));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
           //echo $this->Form->input('turmas',array('empty'=>'--seleccione--','options'=>$turmas,'type'=>'select','div'=>false,'label'=>false));
        ?>

               </td>
        </tr>

<tr><td><center><?php echo $this->Form->end(__('Listar', true));?></center></td></tr>
        </table>

</div>

</div>