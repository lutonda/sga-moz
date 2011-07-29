<?php //echo $this->element('menu') ?>

<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
<div class="top-bar">
	<?php echo $this->Html->link(sprintf(__('Lista de Turmas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Turma - Visualizar');?></h1>

</div>
<div class="table">
    <img src="/sistema/img/ajax-loader.gif" style="display:none" id="ajax-loader">
	<?php echo $this->Form->create('Turma');?>
	<table class="listingform" cellpadding="0" cellspacing="0">
		<tr>
			<th class="full" colspan="2">Dados da Turma</th>
		</tr>
		<?php
	
			echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome da Turma','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid', 'Size'=>'50px'));  	
			echo $this->Form->input('t0009anolectivo_id',array('disabled'=>'true','empty'=>'--seleccione--','label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'anolectivoid'));
			
            echo $this->Form->input('t0003curso_id',array('disabled'=>'true','empty'=>'--seleccione--','label'=>'Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid','align'=>'right'));
			
			$options = array('url' => 'update_plano_estudos/','update' => 'planoestudoid');
			echo $ajax->observeField('cursoid', $options);
			
			echo $this->Form->input('t0005planoestudo_id',array('disabled'=>'true','empty'=>'--seleccione--','label'=>'Plano de Estudos','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'planoestudoid'));
            $options = array('url' => 'update_plano_curriculo/','update' => 'addturmascurriculo');
			echo $ajax->observeField('cursoid', $options);
			
            echo $this->Form->input('anocurricular',array('disabled'=>'true','options'=>$anosemestrecurr,'label'=>'Ano Curricular','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
			
			echo $this->Form->input('semestrecurricular',array('disabled'=>'true','options'=>$anosemestrecurr,'label'=>'Semestre Curricular','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
			
			echo $this->Form->input('tg0012turno_id',array('disabled'=>'true','label'=>'Turno','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));             
		
			echo $this->Form->input('tt',array('disabled'=>'true','options'=>$alunosInscritos,'label'=>'Num. de Alunos Inscritos','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
						
			echo $this->Form->input('tt',array('disabled'=>'true','options'=>$alunosAprovados,'label'=>'Num. de Alunos Aprovados','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));

			echo $this->Form->input('tt',array('disabled'=>'true','options'=>$alunosReprovados,'label'=>'Num. de Alunos Reprovados','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));	

			echo $this->Form->input('tt',array('disabled'=>'true','value'=>$mediaTurma,'label'=>'Media da nota final da turma ','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));			
 
			echo $this->Form->input($disciplina['Disciplina']['id'].'.Turma.nummaximo.',array('disabled'=>'true','label'=>'Num. Maximo de Alunos','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
			
			echo $this->Form->input('funcionario_id',array('disabled'=>'true','options'=>$funcionarios,'label'=>'Docente','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));	

			echo $this->Form->input('funcionario_ass_id',array('disabled'=>'true','options'=>$funcionarios,'label'=>'Assistente','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
			
			echo $this->Form->input('estado',array('disabled'=>'true','options'=>$estado,'label'=>'Estado','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));


			//echo $ajax->observeForm('turmasformdiv',array('url'=>'update_disciplinas/','update'=>'disciplinasdiv','indicator'=>'ajax-loader'));
			//echo $ajax->observeForm('turmasformdiv',array('url'=>'update_disciplinas/','update'=>'disciplinasdiv'));
		?>
       <tr><td></td><td><?php //echo $this->Form->end(__('EDITAR', true));?></td></tr>
	</table>
	<br />
	<br />

</div>