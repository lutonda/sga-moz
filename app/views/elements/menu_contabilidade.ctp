<?php
/* ---------------------------------------------------------- */
/* menu lateral, incluir em todos os files                    */
/* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
/* ---------------------------------------------------------- */                      
?>

<ul>
	<li>	<?php echo $this->Html->link(sprintf(__('Gerar Pagamentos', true)), array('controller' => 'pagamentos','action' => 'gerar_pagamentos'),array('class'=>'link')); ?></li>
</ul>