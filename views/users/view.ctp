

<div class="actions" id="left-column">
	<h3><?php __('SecÃƒÂ§ÃƒÂµes'); ?></h3>
	<br />
		<?php echo $this->Html->link(sprintf(__('Alterar Senha', true)), array('controller' => 'users', 'action' => 'trocar_senha'),array('class'=>'link'));
 ?>
</div>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Usuarios', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('UsuÃƒÂ¡rio');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
<div class="table">

<?php echo $form->create('User');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Carregamento de Novo Aluno</th>
         </tr>
          <?php
		echo $this->Form->input('username',array('disabled'=>'true','label'=>'Usuario','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('password',array('disabled'=>'true','label'=>'Password','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('codigocartao',array('disabled'=>'true','label'=>'Codigo do Cartao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('group_id',array('disabled'=>'true','label'=>'Grupo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		     ?>
        
    <tr><td></td><td><?php //echo $this->Form->end(__('Carregar', true));?></td></tr>
        </table>
</div>
    </div>
</div>