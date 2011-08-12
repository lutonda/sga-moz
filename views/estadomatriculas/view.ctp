<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Estados da Matricula', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Estado da Matricula - visualizar');?></h1>
        
    </div>
    <div class="table">

<?php
    echo $form->create('Estadomatricula');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados do Estado da Matricula</th>
        <?php
         echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        ?>
        </table>
</div>
</div>