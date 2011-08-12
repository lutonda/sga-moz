<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Inscricoes', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Visualizar Inscricao');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
    <div class="table">

<?php
    //O
    echo $form->create('Inscricao');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
		
		  <tr>
            <th class="full" colspan="2">Dados da Inscricao</th>
         </tr>
		
<?php	
		echo $this->Form->input('Aluno_id',array('disabled'=>'true','options'=>$alunos,'empty'=>'--Seleccione--','label'=>'Nome do Aluno','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'alunoid'));
		$options = array('url' => 'update_curso_aluno/','update' => 'cursoid');
	    echo $ajax->observeField('alunoid', $options);
		
		echo $this->Form->input('cc',array('disabled'=>'true','value'=>$curso1,'label'=>'Curso','size'=>'50px','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid','align'=>'right'));
		
		echo $this->Form->input('tal',array('disabled'=>'true','value'=>$anoLectivo1,'empty'=>'--Seleccione--','label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));

		echo $this->Form->input('tp',array('disabled'=>'true','value'=>$plano1,'empty'=>'--Seleccione--','label'=>'Plano de estudo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));	
		
		echo $this->Form->input('tt',array('disabled'=>'true','value'=>$turma1,'Size'=>'50px','empty'=>'--Seleccione--','label'=>'Turma','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));	
		
		echo $this->Form->input('ta',array('disabled'=>'true','value'=>$anoCurricular1,'empty'=>'--Seleccione--','label'=>'Ano Curricular','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));	
		
		echo $this->Form->input('ts',array('disabled'=>'true','value'=>$semestreCurricular1,'empty'=>'--Seleccione--','label'=>'Semestre Curricular','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		
		echo $this->Form->input('ttu',array('disabled'=>'true','value'=>$turno1,'label'=>'Turno da Turma','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));

		echo $this->Form->input('tf',array('disabled'=>'true','value'=>$docente1,'label'=>'Docente','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));	

			echo $this->Form->input('tf',array('disabled'=>'true','value'=>$assistente1,'label'=>'Assistente','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
			
			echo $this->Form->input('tg0020estadoinscricao_id',array('disabled'=>'true','options'=>$estadoinscricao,'label'=>'Estado','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));	

			echo $this->Form->input('notafrequencia',array('disabled'=>'true','options'=>$notafrequencia,'label'=>'Nota de Frequencia do Aluno ','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));	

			echo $this->Form->input('notafinal',array('disabled'=>'true','options'=>$notafinal ,'label'=>'Nota Final','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));		

			echo $this->Form->input('t0014epocaavaliacao_id',array('disabled'=>'true','options'=>$epocaavaliacao_id ,'label'=>'Epoca da Avaliacao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));				
		
			echo $this->Form->input('data',array('disabled'=>'true','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data da Inscricao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		
	
	
?>
        </tr>
    <tr><td></td><td><?php //echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>