<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
	  <?php echo $this->Html->link(sprintf(__('Lista de Alertas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	  <h1><?php __('Alerta - visualizar');?></h1>

    </div>
    <div class="table">
<?php echo $this->Form->create('Message');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados do Alerta</th>
        </tr>
	<?php
		//echo $this->Form->input('user_id',array('label'=>'Nome do Funcionario','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('recipient_id',array('disabled'=>'true','label'=>'Destinatario','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('assunto',array('disabled'=>'true','label'=>'Assunto','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('mensagem',array('disabled'=>'true','label'=>'Mensagem','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datainicio',array('minYear'=>'2010','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','disabled'=>'true','label'=>'Data de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('datafim',array('minYear'=>'2010','monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','disabled'=>'true','label'=>'Data de Nascimento','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	?>
<tr><td></td><td><?php //echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>