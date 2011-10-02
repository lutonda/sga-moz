<?php //echo $this->element('menu') ?>

<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
<div class="top-bar">
	<?php echo $this->Html->link(sprintf(__('Lista de Turmas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Turma - adicionar');?></h1>

</div>
<div class="table">
    <img src="/sistema/img/ajax-loader.gif" style="display:none" id="ajax-loader">
	<?php echo $this->Form->create('Turma',array('id'=>'turmasformdiv'));?>
	<table class="listingform" cellpadding="0" cellspacing="0">
		<tr>
			<th class="full" colspan="2">Dados da Turma</th>
		</tr>
		<?php
			
			echo $this->Form->input('t0009anolectivo_id',array('empty'=>'--seleccione--','label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'anolectivoid'));
			
            echo $this->Form->input('t0003curso_id',array('empty'=>'--seleccione--','label'=>'Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid','align'=>'right'));
			
			$options = array('url' => 'update_plano_estudos/','update' => 'planoestudoid');
			echo $ajax->observeField('cursoid', $options);
		
			
			echo $this->Form->input('t0005planoestudo_id',array('empty'=>'--seleccione--','label'=>'Plano de Estudos','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'planoestudoid'));
			
           // $options = array('url' => 'update_plano_curriculo/','update' => 'addturmascurriculo');
		//	echo $ajax->observeField('cursoid', $options);
			
            echo $this->Form->input('anocurricular',array('options'=>$anosemestrecurr,'label'=>'Ano Curricular','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
			echo $this->Form->input('semestrecurricular',array('options'=>$anosemestrecurr,'label'=>'Semestre Curricular','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
			echo $this->Form->input('tg0012turno_id',array('label'=>'Turno','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
			echo $this->Form->input('estado',array('options'=>$estados,'label'=>'Estado','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
			


			//echo $ajax->observeForm('turmasformdiv',array('url'=>'update_disciplinas/','update'=>'disciplinasdiv','indicator'=>'ajax-loader'));
		?>
        <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
	</table>
	<br />
	<br />
	
</div>