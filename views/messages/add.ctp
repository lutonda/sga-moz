<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
	  <?php echo $this->Html->link(sprintf(__('Lista de Alertas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	  <h1><?php __('Alerta - adicionar');?></h1>

    </div>
    <div class="table">
<?php echo $this->Form->create('Message');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados do Alerta</th>
        </tr>
	<?php
		//echo $this->Form->input('user_id',array('label'=>'Nome do Funcionario','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('recipient_id',array('label'=>'Destinatario','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('assunto',array('label'=>'Assunto','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('mensagem',array('label'=>'Mensagem','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datainicio',array('label'=>'Data de Entrega','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('datafim',array('label'=>'Exibir ate','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	?>
<tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>