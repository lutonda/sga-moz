
<?php //include('menu.ctp'); ?>
<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Graus Academicos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Grau Academico - editar');?></h1>
        
    </div>
    <div class="table">

<?php
    //O
    echo $form->create('Grauacademico');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados do Grau Academico</th>
        <?php
        echo $this->Form->input('id',array('label'=>'Codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	    echo $this->Form->input('name',array('label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        ?>
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>