
<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Epocas de Avaliacao', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Editar Epoca de Avaliacao');?></h1>
        <div class="breadcrumbs"><?php //echo $this->Html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">

<?php
    //O
    echo $this->Form->create('Epocaavaliacao');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados de Epoca de Avaliacao</th>
        <?php
		//  echo $this->Form->input('id',array('label'=>'ID','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));

		echo $this->Form->input('name',array('label'=>'nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                
		?>

    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>
