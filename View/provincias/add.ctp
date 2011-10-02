<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Provincias', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Provincia - adicionar');?></h1>
   
    </div>
    <div class="table">


<?php echo $this->Form->create('Provincia');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Carregamento de Provincia</th>
         </tr>
         <tr>
            <?php
		echo $this->Form->input('codigo',array('label'=>'Codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('name',array('label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('Paise_id',array('label'=>'Pais','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		     ?>
        </tr>
      
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>
