


<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Cursos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Visualizar Curso');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
<div class="table">

<?php
    //O
    echo $form->create('Curso');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados do Curso</th>
         </tr>
         <tr>
            <?php
		echo $this->Form->input('id',array('disabled'=>'true','label'=>'Codigo do Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome do Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'45'));
		echo $this->Form->input('Grauacademico_id',array('disabled'=>'true','label'=>'Grau Academico','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
		echo $this->Form->input('tg0007tipocurso_id',array('disabled'=>'true','label'=>'Tipo de Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
        echo $this->Form->input('tg0016escola_id',array('disabled'=>'true','label'=>'Escola','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
         
		 ?>
    <tr><td></td><td><?php //echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
    </div>
</div>