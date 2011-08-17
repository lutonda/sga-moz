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
 <div class="t0017anolectivoepocas view">
<h2><?php  __('T0017anolectivoepoca');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0017anolectivoepoca['T0017anolectivoepoca']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Anolectivo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($t0017anolectivoepoca['Anolectivo']['id'], array('controller' => 't0009anolectivos', 'action' => 'view', $t0017anolectivoepoca['Anolectivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Epocaavaliacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($t0017anolectivoepoca['Epocaavaliacao']['name'], array('controller' => 't0014epocaavaliacaos', 'action' => 'view', $t0017anolectivoepoca['Epocaavaliacao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Limite'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $t0017anolectivoepoca['T0017anolectivoepoca']['limite']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('T0017anolectivoepoca', true)), array('action' => 'edit', $t0017anolectivoepoca['T0017anolectivoepoca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('T0017anolectivoepoca', true)), array('action' => 'delete', $t0017anolectivoepoca['T0017anolectivoepoca']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $t0017anolectivoepoca['T0017anolectivoepoca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('T0017anolectivoepocas', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('T0017anolectivoepoca', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Anolectivos', true)), array('controller' => 't0009anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Anolectivo', true)), array('controller' => 't0009anolectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Epocaavaliacaos', true)), array('controller' => 't0014epocaavaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Epocaavaliacao', true)), array('controller' => 't0014epocaavaliacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
