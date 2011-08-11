<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Estado de Mensagem', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Estado da Mensagem - visualizar');?></h1>

    </div>
    <div class="table">

<?php
    echo $form->create('Tg0018estadomessage');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados do Estado de Mensagem</th>
        <?php
        echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
       ?>
       
    <tr><td></td><td><?php //echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>