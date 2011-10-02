<div class="actions" id="left-column">
	<h3><?php echo __('Detalhes Adicionais'); ?></h3>
	<br />
		<?php echo $this->Html->link(__('Lista de Usuarios', true), array('action' => 'index'),array('class'=>'link'));?>
		<?php echo $this->Html->link(sprintf(__('Novo Usuario', true)), array('action' => 'add'),array('class'=>'link')); ?>
		
</div>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Usuarios', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Usuario');?></h1>
        <div class="breadcrumbs"><?php echo $this->Html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">

<?php
    //O
    echo $this->Form->create('User');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
	<th class="full" colspan="2">Dados do Usuario</th>
        <?php
        echo $this->Form->input('id',array('label'=>'Tipo de Identificacao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	    echo $this->Form->input('username',array('label'=>'Nome do Usuario','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('password',array('label'=>'Password','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
       // echo $this->Form->input('password',array('label'=>'Data de Emiss�o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('codigocartao',array('label'=>'Codigo do Cartao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('group_id',array('label'=>'Grupo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
        </tr>
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>