<?php $html->addCrumb('Manutenção', '/t0009anolectivos'); ?>
<?php $html->addCrumb('Inscrições', '/t0013inscricaos'); ?>
<?php $html->addCrumb('Nova Inscrição', '/t0013inscricaos/add'); ?>
<div class="actions" id="left-column">
	<h3><?php __('Detalhes Adicionais'); ?></h3>
	<br />
	<ul>
		<?php echo $this->Html->link(sprintf(__('Anos lectivos', true)), array('controller' => '$t0009anolectivo','action' => 'add'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Turmas', true)), array('controller' => 't0010turmas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Fecho da Turma', true)), array('controller' => 't0010turmas', 'action' => 'fecho_da_turma'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Matriculas', true)), array('controller' => 't0011matriculas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Inscricoes', true)), array('controller' => 't0013inscricaos', 'action' => 'index'),array('class'=>'linkselected')); ?>
	</ul>
</div>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Inscrições', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Nova Inscrição');?></h1>

    </div>
    <div class="table">
<?php echo $this->Form->create('T0013inscricao');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados da Inscrição</th>
        </tr>
	<?php 
	
		echo $this->Form->input('t0008aluno_id',array('options'=>$t0008alunos,'empty'=>'--Seleccione--','label'=>'Nome do Aluno','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'alunoid'));
		$options = array('url' => 'update_curso_aluno/','update' => 'cursoid');
	    //echo $ajax->observeField('alunoid', $options);
		$options = array('url' => 'update_plano_aluno/','update' => 'planoid');
	    //echo $ajax->observeField('alunoid', $options);
		
		
		
		echo $this->Form->input('t0003curso_id',array('disabled'=>'true','options'=>$curso,'label'=>'Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid','align'=>'right'));

		
		//echo $this->Form->input('cc',array('disabled'=>'true','value'=>$curso1,'label'=>'Curso','Size'=>'50px','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid','align'=>'right','id'=>'cursoid'));
		
		echo $this->Form->input('t0005planoestudo_id',array('disabled'=>'true','options'=>$plano,'label'=>'Plano de estudo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','id'=>'planoid','div'=>false));
		
		echo $this->Form->input('t0009anolectivo_id',array('empty'=>'--seleccione--','options'=>$t0009anolectivo,'label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'anolectivoid'));
        $options = array('url' => 'update_turma_aluno/','update' => 'turma');
        //echo $ajax->observeField('anolectivoid', $options);
				

		
		echo $this->Form->input('t0010turma_id',array('empty'=>'--seleccione--','options'=>$t0010turmas,'label'=>'Turma','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'turma'));
		//$options = array('url' => 'update_ano_curricular/','update' => 'ano');
                //echo $ajax->observeField('turma', $options);
                $options = array('url' => 'update_turma_turno/','update' => 'turno');
                //echo $ajax->observeField('turma', $options);
		
		//echo $this->Form->input('uu',array('options'=>$t0009anolectivo,'empty'=>'--Seleccione--','label'=>'Ano Curricular','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'ano'));
		
		//echo $this->Form->input('ts',array('disabled'=>'true','value'=>$semestreCurricular1,'empty'=>'--Seleccione--','label'=>'Semestre Curricular','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		
		echo $this->Form->input('tg0012turno_id',array('disabled'=>'true','value'=>$turno,'label'=>'Turno da Turma','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'turno'));

		echo $this->Form->input('data',array('monthNames'=>array('','Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data da Inscricao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));

             //   $options = array('url' => 'ajax_get_plano_estudos/','update' => 'turmasdiv');
             //  echo $ajax->observeField('nomealunoid', $options);
	?> 
	<tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
        <div id=""></div>

</div>
</div>