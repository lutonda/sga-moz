<?php $grupo = $session->read('Auth.User.group_id');?>

<?php
/* ---------------------------------------------------------- */
/* OP??O : Pedagogica                                         */
/* menu lateral, incluir em todos os files                    */
/* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
/* ---------------------------------------------------------- */                      


?>

<div class="actions" id="left-column">

	<h3><?php __('Detalhes Adicionais'); ?></h3>
        <br/>
	<?php if($grupo == 1 || $grupo == 2)  echo $this->Html->link(sprintf(__('Funcionarios', true)), array('action' => 'index'),array('class'=>'linkselected')); ?>
        <?php if($grupo == 1 || $grupo == 2)  echo $this->Html->link(sprintf(__('Alertas', true)), array('controller'=>'tg0017messages','action' => 'index'),array('class'=>'link')); ?>
	<?php  if($grupo == 1 || $grupo == 2)  echo $this->Html->link(sprintf(__('Parametrizacao >>', true)), array('controller' => 'Grauacademicos', 'action' => 'index'),array('class'=>'link')); ?>

</div>
