<div class="actions" id="left-column">
	<h3><?php echo __('Detalhes Adicionais'); ?></h3>
	<br />
		<?php echo $this->Html->link(sprintf(__('Cursos', true)), array('controller' => 't0003cursos', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Disciplinas', true)), array('controller' => 't0004disciplinas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Plano de Estudos', true)), array('controller' => 't0005planoestudos', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Grupo de Disciplinas', true)), array('controller' => 't0007grupodisciplinas', 'action' => 'index'),array('class'=>'link')); ?>
		</div>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Grupo de Disciplinas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Grupo de Disciplinas');?></h1>
     
    </div>
    <div class="table">

<?php
    //O
    echo $this->Form->create('Grupodisciplina');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Modificacao do Grupo de Disciplina</th>
         </tr>
         <tr>
            <?php
		echo $this->Form->input('id',array('label'=>'Codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('ordem',array('label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('t0004disciplina_id',array('label'=>'Codigo da Disciplina','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('cargahorariateoricas',array('label'=>'Carga Horaria Teorica','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
         echo $this->Form->input('cargahorariapraticas',array('label'=>'Carga Horaria Praticas','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('creditos',array('label'=>'Creditos','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('grupodisciplinasprec',array('label'=>'Prescedente','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
          
		 ?>
	</tr>
    <tr><td></td><td><?php echo $this->Form->end(__('Carregar', true));?></td></tr>
        </table>
</div>
</div>