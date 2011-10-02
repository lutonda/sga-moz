<div class="accoes" id="left-column">
	<h3><?php echo __('Detalhes Adicionais'); ?></h3>
	<br />
		<?php echo $this->Html->link(__('Lista de Usuarios', true), array('action' => 'index'),array('class'=>'link'));?>

</div>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Ver Perfil', true)), array('action' => 'view'),array('class'=>'button')); ?>
	<h1><?php echo __('Alterar Senha');?></h1>
        <div class="breadcrumbs"><?php echo $this->Html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">
<?php echo $this->Form->create('User');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Alterar Senha</th>
         </tr>
         <tr>
	<?php
		echo $this->Form->input('id',array('label'=>'Nome do Usuario','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('senhaantiga',array('type'=>'password','label'=>'Senha Antiga','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('novasenha1',array('type'=>'password','label'=>'Nova Senha','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('novasenha2',array('type'=>'password','label'=>'Confirmar Senha','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		
	?>
      </tr>

    <tr><td></td><td><?php echo $this->Form->end(__('Carregar', true));?></td></tr>
        </table>
</div>
</div>
