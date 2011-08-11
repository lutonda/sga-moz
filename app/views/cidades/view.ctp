<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Cidades', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Cidade - visualizar');?></h1>
        <div class="breadcrumbs"><?php echo $html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">

<?php
    echo $form->create('Cidade');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados da Cidade</th>
        <?php
        echo $this->Form->input('codigo',array('disabled'=>'true','label'=>'Codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('Provincia_id',array('disabled'=>'true','label'=>'Provincia','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
       echo $this->Form->input('Paise_id',array('disabled'=>'true','label'=>'Pais','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	   ?>
        </tr>
    <tr><td></td><td><?php //echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>