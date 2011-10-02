<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Tipos de Funcionario', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Tipo de Funcionario - adicionar');?></h1>

    </div>
    <div class="table">


<?php echo $this->Form->create('Tipofuncionario');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados de Tipo de Funcionario</th>
         </tr>
         <tr>
            <?php
		echo $this->Form->input('name',array('label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
        </tr>

    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>

