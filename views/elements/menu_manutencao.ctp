<?php
/* ---------------------------------------------------------- */
/* menu lateral, incluir em todos os files                    */
/* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
/* ---------------------------------------------------------- */                      
?>

<ul>
	<li>	<?php echo $this->Html->link(sprintf(__('Anos lectivos', true)), array('controller' => 'anolectivos','action' => 'index'),array('class'=>'link')); ?></li>
	<li>	<?php echo $this->Html->link(sprintf(__('Turmas', true)), array('controller' => 'turmas', 'action' => 'index'),array('class'=>'sm8')); ?></li>
	
	<li>	<?php echo $this->Html->link(sprintf(__('Matriculas', true)), array('controller' => 'matriculas', 'action' => 'index'),array('class'=>'link')); ?></li>
	<li>	<?php echo $this->Html->link(sprintf(__('Inscricoes', true)), array('controller' => 'inscricaos', 'action' => 'index'),array('class'=>'link')); ?>	 </li>
</ul>