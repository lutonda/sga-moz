<?php $grupo = $this->Session->read('Auth.User.group_id');?>

<?php
/* ---------------------------------------------------------- */
/* menu lateral, incluir em todos os files                    */
/* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
/* ---------------------------------------------------------- */                      
?>

<div class="actions" id="left-column">
	<h3><?php echo __('Detalhes Adicionais'); ?></h3>
	<br />
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Anos lectivos', true)), array('controller' => 't0009anolectivos','action' => 'index'),array('class'=>'link')); ?>
		<?php  echo $this->Html->link(sprintf(__('Turmas', true)), array('controller' => 't0010turmas', 'action' => 'index'),array('class'=>'linkselected')); ?>
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Fecho da Turma', true)), array('controller' => 't0010turmas', 'action' => 'fecho_da_turma'),array('class'=>'link')); ?>	
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Matriculas', true)), array('controller' => 't0011matriculas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php  if($grupo !=4) echo $this->Html->link(sprintf(__('Inscricoes', true)), array('controller' => 't0013inscricaos', 'action' => 'index'),array('class'=>'link')); ?>	 

</div>