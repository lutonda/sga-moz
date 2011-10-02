<div class="actions" id="left-column">
	<h3><center><?php echo __('Relatorios gerais'); echo $this->Html->script('radio'); ?></center></h3>
        <br/>
	<?php echo $this->Html->link(sprintf(__('Listagem de Estudantes', true)), array('action' => 'listagens'),array('class'=>'link')); ?>
        <?php echo $this->Html->link(sprintf(__('Listagem Funcionarios',  true)), array('action' => 'listagens_funcionario'),array('class'=>'link'));?>
        <?php echo $this->Html->link(sprintf(__('Alunos Matriculados', true)), array('action' => 'matriculados'),array('class'=>'link')); ?>
        <?php echo $this->Html->link(sprintf(__('Alunos Inscritos',  true)), array('action' => 'inscricao'),array('class'=>'link'));?>
         <?php echo $this->Html->link(sprintf(__('Listagem de Pautas',  true)), array('action' => 'listagem_de_pautas'),array('class'=>'linkselected'));?>
		 <?php //echo $this->Html->link(sprintf(__('Pauta de Resultados',  true)), array('action' => 'listagem_de_pauta_resultados'),array('class'=>'link'));?>
		 <?php echo $this->Html->link(sprintf(__('Declaracao',  true)), array('action' => 'declaracao'),array('class'=>'link'));?>
       <?php echo $this->Html->link(sprintf(__('Certificado',  true)), array('action' => 'certificado'),array('class'=>'link'));?>
</div>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php //echo $this->Html->link(sprintf(__('Novo Funcionario', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php echo __('Listagens de Pautas');?></h1>

    </div>

    <div class="table">
	<table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="0"></th>
        </tr>
	
	
	<tr>
        <td>
        <?php echo $this->Form->create('Listagens',array('action' => 'print_pdf_pauta','target'=>'_blank'));
            $options= array('1'=>'Mapa de Frequencias');
            $attributes = array('value'=>false,'legend'=>false,'onChange'=>'desativacurso();');
			echo $this->Form->radio('select',$options,$attributes,array('size'=>15));		
		?>
		</td>
		<td></td>
	</tr>
	
		<tr>
        <td>
        <?php echo $this->Form->create('Listagens',array('action' => 'print_pdf_pauta','target'=>'_blank'));
            $options= array('2'=>'Pauta de Resultados');
            $attributes = array('value'=>false,'legend'=>false,'onChange'=>'desativacurso();');
			echo $this->Form->radio('select',$options,$attributes,array('size'=>15));		
		?>
		</td>
		<td></td>
	</tr>
		<?php
            echo $this->Form->input('t0009anolectivo_id',array('empty'=>'--seleccione--','options'=>Anolectivos,'label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'anolectivoid'));
			
			 echo $this->Form->input('t0003curso_id',array('empty'=>'--seleccione--','options'=>$cursos,'label'=>'Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
			$options = array('url' => 'update_plano/','update' => 'planoid');
			echo $ajax->observeField('cursoid', $options);			 


			echo $this->Form->input('t0005planoestudo_id',array('empty'=>'--seleccione--','options'=>$plano,'label'=>'Plano de estudo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','id'=>'planoid','div'=>false));
			$options = array('url' => 'update_turma_pauta/','update' => 'turma');
            echo $ajax->observeField('planoid', $options);

			

		echo $this->Form->input('t0010turma_id',array('empty'=>'--seleccione--','options'=>$turmas,'label'=>'Turma','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'turma'));
?>
<tr><td></td><td><center><?php echo $this->Form->end(__('Listar', true));?></center></td></tr>
        </table>

</div>

</div>