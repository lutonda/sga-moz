<?php
/* ---------------------------------------------------------- */
/* OP��O : Pedagogica                                         */
/* menu lateral, incluir em todos os files                    */
/* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
/* ---------------------------------------------------------- */                      
?>

<div class="actions" id="left-column">
	<h3><center><?php echo __('Relatorios gerais'); ?></center></h3>
        <br/>
		<?php echo $this->Html->link(sprintf(__('Listagem de Estudantes', true)), array('action' => 'listagens'),array('class'=>'linkselected')); ?>
        <?php echo $this->Html->link(sprintf(__('Listagem Funcionarios',  true)), array('action' => 'listagens_funcionario'),array('class'=>'linkselected'));?>
	
</div>