<?php $grupo = $this->Session->read('Auth.User.group_id');?>

<ul>
						
<?php if($grupo ==1 || $grupo ==4) echo $this->Html->link(sprintf(__('Avaliacao', true)), array('controller' => 'avaliacaos','action' => 'registo_de_notas'),array('class'=>'linkselected')); ?>

<?php if($grupo ==3) echo $this->Html->link(sprintf(__('Avaliacao', true)), array('controller' => 'avaliacaos','action' => 'index'),array('class'=>'linkselected')); ?>

<?php if($grupo !=3) echo $this->Html->link(sprintf(__('Tipo de Avaliacoes', true)), array('controller' => 'tipoavaliacaos', 'action' => 'index'),array('class'=>'link')); ?>

<?php if($grupo !=3) echo $this->Html->link(sprintf(__('Épocas de Avaliação', true)), array('controller' => 'epocaavaliacaos', 'action' => 'index'),array('class'=>'link')); ?>

<?php if($grupo !=3) echo $this->Html->link(sprintf(__('Tempo Limite', true)), array('controller' => 'anolectivoepocas', 'action' => 'index'),array('class'=>'link')); ?>	
<?php //echo $this->Html->link(sprintf(__('Registo de Notas', true)), array('controller' => 'avaliacaos', 'action' => 'registo_de_notas'),array('class'=>'link')); ?>						
						<li>
							<span class="drop"><span><span><a href="#" class="sm8">Mais Acções</a></span></span></span>
						<!--	<ul>
								<li><a class="sm6" href="#">Download options</a></li>
								<li><a class="sm4" href="#">Menu item</a></li>
								<li><a class="sm6" href="#">Download options</a></li>
								<li><a class="sm6" href="#">Download options</a></li>
								<li><a class="sm6" href="#">Download options</a></li>
							</ul> -->
						</li>
					</ul>
