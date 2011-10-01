<?php $grupo = $session->read('Auth.User.group_id');?>
<ul>
						
						<li><?php if($grupo == 1 || $grupo == 2)  echo $this->Html->link(sprintf(__('Funcionarios', true)), array('action' => 'index'),array('class'=>'linkselected')); ?></a></li>
												<li><?php if($grupo == 1 || $grupo == 2)  echo $this->Html->link(sprintf(__('Docentes', true)), array('controller'=>'docentes','action' => 'index'),array('class'=>'linkselected')); ?></a></li>
						<?php if($grupo == 1 || $grupo == 2)  echo "<li>".$this->Html->link(sprintf(__('Alertas', true)), array('controller'=>'messages','action' => 'index'),array('class'=>'link'))."</li>"; ?>
						<?php if($grupo == 1 || $grupo == 2)  echo "<li>".$this->Html->link(sprintf(__('Backup do Sistema', true)), array('controller'=>'messages','action' => 'index'),array('class'=>'link'))."</li>"; ?>
						<?php if($grupo == 1 || $grupo == 2)  echo "<li>".$this->Html->link(sprintf(__('Actualizar Sistema', true)), array('controller'=>'messages','action' => 'index'),array('class'=>'link'))."</li>"; ?>
						
						<li>
							<span class="drop"><span><span><a href="#" class="sm8">Parametrizações</a></span></span></span>
					<ul>
	<li><?php  echo $this->Html->link(sprintf(__('Graus Academicos', true)), array('controller' => 'grauacademicos'),array('class'=>'link')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Países', true)), array('controller' => 'paises'),array('class'=>'linkselected')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Províncias', true)), array('controller' => 'provincias'),array('class'=>'link')); ?></li>
    <li>    <?php  echo $this->Html->link(sprintf(__('Cidades', true)), array('controller' => 'cidades'),array('class'=>'link')); ?></li>
    <li>    <?php  echo $this->Html->link(sprintf(__('Cargos', true)), array('controller' => 'cargos'),array('class'=>'link')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Departamentos', true)), array('controller' => 'departamentos'),array('class'=>'link')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Tipos de Curso', true)), array('controller' => 'tipocursos'),array('class'=>'link')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Grupos Disciplinares', true)), array('controller' => 'grupodisciplinars'),array('class'=>'link')); ?></li>
   <li>     <?php  echo $this->Html->link(sprintf(__('Docs de Identificação', true)), array('controller' => 'documentos'),array('class'=>'link')); ?></li>
   <li>     <?php  echo $this->Html->link(sprintf(__('Áreas de Trabalho', true)), array('controller' => 'areatrabalhos'),array('class'=>'link')); ?></li>
   <li>     <?php  echo $this->Html->link(sprintf(__('Turnos', true)), array('controller' => 'turnos'),array('class'=>'link')); ?></li>
<li>	<?php  echo $this->Html->link(sprintf(__('Escolas', true)), array('controller' => 'escolas'),array('class'=>'link')); ?></li>
  <li>      <?php  echo $this->Html->link(sprintf(__('Gêneros', true)), array('controller' => 'generos'),array('class'=>'link')); ?></li>

							</ul>
						</li>
						
						
						<li>
							<span class="drop"><span><span><a href="#" class="sm8">Mais Acções</a></span></span></span>
					<ul>
	<li><?php  echo $this->Html->link(sprintf(__('Graus Academicos', true)), array('controller' => 'grauacademicos'),array('class'=>'link')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Países', true)), array('controller' => 'paises'),array('class'=>'linkselected')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Províncias', true)), array('controller' => 'provincias'),array('class'=>'link')); ?></li>
    <li>    <?php  echo $this->Html->link(sprintf(__('Cidades', true)), array('controller' => 'cidades'),array('class'=>'link')); ?></li>
    <li>    <?php  echo $this->Html->link(sprintf(__('Cargos', true)), array('controller' => 'cargos'),array('class'=>'link')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Departamentos', true)), array('controller' => 'departamentos'),array('class'=>'link')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Tipos de Curso', true)), array('controller' => 'tipocursos'),array('class'=>'link')); ?></li>
	<li><?php  echo $this->Html->link(sprintf(__('Grupos Disciplinares', true)), array('controller' => 'grupodisciplinars'),array('class'=>'link')); ?></li>
   <li>     <?php  echo $this->Html->link(sprintf(__('Docs de Identificação', true)), array('controller' => 'documentos'),array('class'=>'link')); ?></li>
   <li>     <?php  echo $this->Html->link(sprintf(__('Áreas de Trabalho', true)), array('controller' => 'areatrabalhos'),array('class'=>'link')); ?></li>
   <li>     <?php  echo $this->Html->link(sprintf(__('Turnos', true)), array('controller' => 'turnos'),array('class'=>'link')); ?></li>
<li>	<?php  echo $this->Html->link(sprintf(__('Escolas', true)), array('controller' => 'escolas'),array('class'=>'link')); ?></li>
  <li>      <?php  echo $this->Html->link(sprintf(__('Gêneros', true)), array('controller' => 'generos'),array('class'=>'link')); ?></li>

							</ul>
						</li>						
					</ul>