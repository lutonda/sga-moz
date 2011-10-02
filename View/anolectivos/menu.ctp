<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 * 
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 * 
 * Este software � distribuido sob a perspectiva de que possa ser �til para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 * 
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 ?><?php $grupo = $this->Session->read('Auth.User.group_id');?>


<div class="actions" id="left-column">
	<h3><?php echo __('Detalhes Adicionais'); ?></h3>
	<br />
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Anos lectivos', true)), array('controller' => 't0009anolectivos','action' => 'index'),array('class'=>'linkselected')); ?>
		<?php  echo $this->Html->link(sprintf(__('Turmas', true)), array('controller' => 't0010turmas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Fecho da Turma', true)), array('controller' => 't0010turmas', 'action' => 'fecho_da_turma'),array('class'=>'link')); ?>
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Matriculas', true)), array('controller' => 't0011matriculas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Inscricoes', true)), array('controller' => 't0013inscricaos', 'action' => 'index'),array('class'=>'link')); ?>	 
</div>