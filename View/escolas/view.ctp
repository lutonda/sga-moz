<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Escolas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Escola - visualizar');?></h1>

    </div>
    <div class="table">

<?php
    echo $this->Form->create('Escola');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados da Escola</th>
        <?php
         echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
       //  echo $this->Form->input('logo',array('disabled'=>'true','label'=>'Logo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
       
	   ?>
       
    <tr><td></td><td><?php //echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>