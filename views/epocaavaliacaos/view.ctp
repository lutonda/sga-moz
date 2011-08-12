

<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Epocas de Avaliacao', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Epoca de Avaliacao - Visualizar');?></h1>

    </div>
    <div class="table">

<?php
    //O
    echo $form->create('Epocaavaliacao');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Epoca de Avaliacao</th>
         </tr>
         <tr>
            <?php
		echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'45'));
	     ?>
	</tr>

        </table>
</div>
</div>