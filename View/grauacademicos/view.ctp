
<?php //include('menu.ctp'); ?>
<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Graus Academicos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Grau Academico - visualizar');?></h1>
    
    </div>
    <div class="table">

<?php
    //O
    echo $this->Form->create('Grauacademico');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados do Grau Academico</th>
        <?php
        echo $this->Form->input('id',array('disabled'=>'true','label'=>'Codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	    echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        ?>
        </table>
</div>
</div>