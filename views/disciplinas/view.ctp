


<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Disciplinas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Visualizar Disciplina');?></h1>
        <div class="breadcrumbs"><?php //echo $html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">

<?php
    //
    echo $form->create('Disciplina');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados da Disciplina</th>
        <?php
        echo $this->Form->input('id',array('disabled'=>'true','label'=>'IdentificaÃƒÆ’Ã‚Â¯Ãƒâ€šÃ‚Â¿Ãƒâ€šÃ‚Â½ÃƒÆ’Ã‚Â¯Ãƒâ€šÃ‚Â¿Ãƒâ€šÃ‚Â½o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	    echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome da Disciplina','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'45'));
		echo $this->Form->input('codigo',array('disabled'=>'true','label'=>'Codigo da Disciplina','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'45'));
        echo $this->Form->input('tg0008grupodisciplinar_id',array('disabled'=>'true','label'=>'Grupo Disciplinar','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
		?>
        </tr>
    <tr><td></td><td></td></tr>
        </table>
</div>
</div>
