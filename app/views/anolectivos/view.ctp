



<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Anos Lectivos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Visualizar Ano Lectivo');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
<div class="table">
<?php
    //O
    echo $form->create('Anolectivo');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
		<tr>
            <th class="full" colspan="2">Dados do Ano Lectivo</th>
         </tr>
		
        <?php
        echo $this->Form->input('id',array('disabled'=>'true','label'=>'ID','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		/*
	    echo $this->Form->input('codigo',array('disabled'=>'true','label'=>'Codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('tipo',array('disabled'=>'true','label'=>'Tipo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('datainicio',array('disabled'=>'true','label'=>'Data Inicial','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('datafim',array('disabled'=>'true','label'=>'Data Final','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		*/
		
		echo $this->Form->input('ano',array('disabled'=> 'true','label'=>'Ano','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('num_semestre',array('disabled'=> 'true','label'=>'Semestre Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datainicio',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','disabled'=> 'true','label'=>'Data Inicio','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datafim',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','disabled'=> 'true','label'=>'Data Fim','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
    <tr><td></td><td></td></tr>
        </table>
</div>
    </div>
</div>
