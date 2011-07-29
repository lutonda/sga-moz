<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Avalicoes', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Adicionar Avalicao');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

 <div class="table">


<?php echo $form->create('T0018turmatipoavaliacao',array('id'=>'avaliacaoForm'));?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados da avalicao</th>
         </tr>
         <tr>
            <?php
                echo $this->Form->input('t0010turma_id',array('label'=>'Codigo da turma','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));			
                echo $this->Form->input('t0015tipoavaliacao_id',array('label'=>'Tipo de avalicao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('data',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data Inicio','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('scanpauta',array('label'=>'Pauta','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	    ?>
        </tr>
        </table>
         <br/>
<tr><td></td><td class ="full" colspan="4"><?php echo $this->Form->end(__('Gravar', true));?></td></tr>
</div>
</div>
