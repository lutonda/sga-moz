<?php
/* ---------------------------------------------------------- */
/* OP��O : Pedagogica                                         */
/* menu lateral, incluir em todos os files                    */
/* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
/* ---------------------------------------------------------- */                      
?>

<div class="actions" id="left-column">
	<h3><?php echo __('Detalhes Adicionais'); ?></h3>
	<br />
	    <?php echo $this->Html->link(sprintf(__('Cursos', true)), array('controller' => 't0003cursos', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Disciplinas', true)), array('controller' => 't0004disciplinas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Plano de Estudos', true)), array('controller' => 't0005planoestudos', 'action' => 'index'),array('class'=>'linkselected')); ?>
</div>