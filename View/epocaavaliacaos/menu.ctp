<?php

$grupo = $this->Session->read('Auth.User.group_id');
/* ---------------------------------------------------------- */
/* OP��O : Pedagogica                                         */
/* menu lateral, incluir em todos os files                    */
/* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
/* ---------------------------------------------------------- */                      
?>
<div class="actions" id="left-column">
	<h3><?php echo __('Detalhes Adicionais'); ?></h3>
	<br />
<?php echo $this->Html->link(sprintf(__('Avaliacao', true)), array('controller' => 'avaliacaos','action' => 'index'),array('class'=>'link')); ?>
<?php echo $this->Html->link(sprintf(__('Tipo de Avaliacoes', true)), array('controller' => 'tipoavaliacaos', 'action' => 'index'),array('class'=>'link')); ?>
<?php echo $this->Html->link(sprintf(__('Épocas de Avaliação', true)), array('controller' => 'epocaavaliacaos', 'action' => 'index'),array('class'=>'linkselected')); ?>
<?php if($grupo != 3) echo $this->Html->link(sprintf(__('Tempo Limite', true)), array('controller' => 'anolectivoepocas', 'action' => 'index'),array('class'=>'link')); ?>	
<?php //echo $this->Html->link(sprintf(__('Registo de Notas', true)), array('controller' => 'avaliacaos', 'action' => 'registo_de_notas'),array('class'=>'link')); ?>
	
</div>