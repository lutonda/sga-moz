<br />
		<?php echo $this->Html->link(sprintf(__('Novo Curso', true)), array('controller' => 't0003cursos','action' => 'add'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Listagem de  Cursos', true)), array('controller' => 't0003cursos', 'action' => 'index'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Disciplina', true)), array('controller' => 't0004disciplinas', 'action' => 'add'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Plano de Estudos', true)), array('controller' => 't0005planoestudos', 'action' => 'add'),array('class'=>'link')); ?>
		<?php echo $this->Html->link(sprintf(__('Grupo de Disciplinas', true)), array('controller' => 't0004disciplinas', 'action' => 'add'),array('class'=>'link')); ?>