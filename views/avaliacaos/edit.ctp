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
 
 <div class="t0016avaliacaos form">
<?php echo $this->Form->create('Avaliacao');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Avaliacao', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('t0015tipoavaliacao_id');
		echo $this->Form->input('t0013inscricao_id');
		echo $this->Form->input('nota');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Avaliacao.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Avaliacao.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Avaliacaos', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tipoavaliacaos', true)), array('controller' => 't0015tipoavaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tipoavaliacao', true)), array('controller' => 't0015tipoavaliacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Inscricaos', true)), array('controller' => 't0013inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Inscricao', true)), array('controller' => 't0013inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>