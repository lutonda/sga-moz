<?php //echo $this->element('menu') ?>


<div class="actions" id="left-column">
	<h3><?php echo __('Detalhes Adicionais'); ?></h3>
	<br />
		<?php echo $this->Html->link(sprintf(__('Anos lectivos', true)), array('controller' => 't0009anolectivos','action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Turmas', true)), array('controller' => 't0010turmas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Fecho da Turma', true)), array('controller' => 't0010turmas', 'action' => 'fecho_da_turma'),array('class'=>'linkselected')); ?>
		<?php echo $this->Html->link(sprintf(__('Matriculas', true)), array('controller' => 't0011matriculas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Inscricoes', true)), array('controller' => 't0013inscricaos', 'action' => 'index'),array('class'=>'link')); ?>	 
</div>

<div class="projectos form" id="center-column">
<div class="top-bar">
	<?php echo $this->Html->link(sprintf(__('Lista de Turmas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Turma - Fecho da Turma');?></h1>

</div>
<div class="table">
    <img src="/sistema/img/ajax-loader.gif" style="display:none" id="ajax-loader">
	<?php echo $this->Form->create('Turma',array('id'=>'turmasformdiv'));?>
	<table class="listingform" cellpadding="0" cellspacing="0">
		<tr>
			<th class="full" colspan="2">Fecho da Turma</th>
		</tr>
		<?php
			
			echo $this->Form->input('t0009anolectivo_id',array('empty'=>'--seleccione--','label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'anolectivoid'));
            echo $this->Form->input('t0003curso_id',array('empty'=>'--seleccione--','label'=>'Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid','align'=>'right'));
			$options = array('url' => 'update_plano_estudos/','update' => 'planoestudoid');
			echo $ajax->observeField('cursoid', $options);
			
		?>
        <tr><td></td><td><?php echo $this->Form->end(__('FECHO DA TURMA', true));?></td></tr>
	</table>
	<br />
	<br />
	
</div>