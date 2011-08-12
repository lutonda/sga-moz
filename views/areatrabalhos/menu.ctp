<?php
/* ---------------------------------------------------------- */
/* OP��O : Pedagogica                                         */
/* menu lateral, incluir em todos os files                    */
/* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
/* ---------------------------------------------------------- */                      
?>

<div class="actions" id="left-column">
	<h3><?php __('Detalhes Adicionais'); ?></h3>
        <br/>
	<?php  echo $this->Html->link(sprintf(__('Administração >>', true)), array('controller' =>'t0002funcionarios'),array('class'=>'link2')); ?>
	<?php  echo $this->Html->link(sprintf(__('Graus Academicos', true)), array('controller' => 'Tg0001grauacademicos'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Países', true)), array('controller' => 'tg0002paises'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Províncias', true)), array('controller' => 'tg0003provincias'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Cidades', true)), array('controller' => 'tg0004cidades'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Cargos', true)), array('controller' => 'tg0005cargos'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Departamentos', true)), array('controller' => 'tg0006departamentos'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Tipos de Curso', true)), array('controller' => 'tg0007tipocursos'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Grupos Disciplinares', true)), array('controller' => 'tg0008grupodisciplinars'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Docs de Identificação', true)), array('controller' => 'tg0009documentos'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Áreas de Trabalho', true)), array('controller' => 'tg0010areatrabalhos'),array('class'=>'linkselected')); ?>
        <?php  echo $this->Html->link(sprintf(__('Turnos', true)), array('controller' => 'tg0012turnos'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Escolas', true)), array('controller' => 'tg0016escolas'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Gêneros', true)), array('controller' => 'tg0019generos'),array('class'=>'link')); ?>

</div>