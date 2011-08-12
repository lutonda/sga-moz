<?php $html->addCrumb('Administra��o', '/contas'); ?>
<?php $html->addCrumb('Usu�rios', '/contas'); ?>
<?php $html->addCrumb('Adicionar Usu�rios', '/contas/add'); ?>

<div class="actions" id="left-column">
	<h3><?php __('Detalhes Adicionais'); ?></h3>
	<br />
		<?php echo $this->Html->link(sprintf(__('Cursos', true)), array('controller' => 't0003cursos', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Disciplinas', true)), array('controller' => 't0004disciplinas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Plano de Estudos', true)), array('controller' => 't0005planoestudos', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Grupo de Disciplinas', true)), array('controller' => 't0007grupodisciplinas', 'action' => 'index'),array('class'=>'link')); ?>
		</div>



<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Grupo de Disciplinas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Grupo de Disciplinas');?></h1>
        <div class="breadcrumbs"><?php echo $html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">
<?php echo $this->Form->create('T0007grupodisciplina');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados da Associa��o</th>
        </tr>
	<?php
	    echo $this->Form->input('ordem',array('label'=>'Ordem','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('t0004disciplina_id',array('label'=>'Disciplina','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('cargahorariateoricas',array('label'=>'Carga Horaria Teorica','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('cargahorariapraticas',array('label'=>'Carga Horaria Pratica','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('creditos',array('label'=>'Creditos','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('grupodisciplinasprec',array('label'=>'Grupo Disciplar','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	?>
<tr><td></td><td><?php echo $this->Form->end(__('Gravar', true));?></td></tr>
        </table>
</div>
</div>