
<?php //include('menu.ctp'); ?>
<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Escolas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Nova Escola');?></h1>
        <div class="breadcrumbs"><?php echo $html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">


<?php echo $form->create('Escola');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Carregamento de Escola</th>
         </tr>
         <tr>
            <?php
		echo $this->Form->input('name',array('label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		//echo $this->Form->input('logo',array('label'=>'Logo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
       		 
		 ?>
        </tr>
      
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>
