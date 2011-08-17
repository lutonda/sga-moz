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
 
 <div class="cursosEscolas index">
	<h2><?php __('Cursos Escolas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('escola_id');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th><?php echo $this->Paginator->sort('data_adicao');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cursosEscolas as $cursosEscola):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cursosEscola['CursosEscola']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursosEscola['Escola']['name'], array('controller' => 'escolas', 'action' => 'view', $cursosEscola['Escola']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cursosEscola['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $cursosEscola['Curso']['id'])); ?>
		</td>
		<td><?php echo $cursosEscola['CursosEscola']['data_adicao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $cursosEscola['CursosEscola']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $cursosEscola['CursosEscola']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $cursosEscola['CursosEscola']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cursosEscola['CursosEscola']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cursos Escola', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Escolas', true), array('controller' => 'escolas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola', true), array('controller' => 'escolas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>