<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 ?>
 <div  class="box box-100 altbox">
	<div class="boxin">
		<div class="header">
			<h3><?php __('Painel');?></h3>
			<a href="#" class="button"><?php __('Lista de Cursos')?>&nbsp;»</a>
		</div>
		<?php echo $form->create('Disciplina',array('class'=>'fields'));?>
		<fieldset>
													<div class="dashboard_menu_wrapper">
												<ul class="dashboard_menu">
													<li><?php echo $this->Html->link('<span class="d1" href="#">Estudantes</span>',array('controller'=>'alunos','action'=>'index'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d2" href="#">Registrar Estudante</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d3" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d4" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d5" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d6" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d7" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d8" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d9" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d10" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d11" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d12" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d13" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d14" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d15" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d16" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													
												</ul>
												</div>
												<!--[if !IE]>end dashboard menu<![endif]-->
		</fieldset>

	</div>
</div>



<!--
<div class="actions" id="left-column">
</div>
<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php //echo $this->Html->link(sprintf(__('Novo Funcionario', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Alertas');?></h1>

    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
			<th><?php echo 'Código';?></th>
			<th><?php echo 'Usuário';?></th>
			<th><?php echo 'Assunto';?></th>
			<th><?php echo 'Data';?></th>
			
	</tr>
	<?php
	$i = 0;
	foreach ($alertas as $alerta):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $alerta['Tg0017message']['id']; ?>&nbsp;</td>
		<td><?php echo $alerta['User']['username']; ?>&nbsp;</td>
        <td><?php echo $this->Html->link($alerta['Tg0017message']['assunto'], array('controller' => 'tg0017messages', 'action' => 'view', $alerta['Tg0017message']['id'])); ?>&nbsp;</td>
		<td><?php echo  $alerta['Tg0017message']['datainicio']; ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</table>

</div>

</div>-->