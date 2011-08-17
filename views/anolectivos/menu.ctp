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
 ?><?php $grupo = $session->read('Auth.User.group_id');?>


<div class="actions" id="left-column">
	<h3><?php __('Detalhes Adicionais'); ?></h3>
	<br />
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Anos lectivos', true)), array('controller' => 't0009anolectivos','action' => 'index'),array('class'=>'linkselected')); ?>
		<?php  echo $this->Html->link(sprintf(__('Turmas', true)), array('controller' => 't0010turmas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Fecho da Turma', true)), array('controller' => 't0010turmas', 'action' => 'fecho_da_turma'),array('class'=>'link')); ?>
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Matriculas', true)), array('controller' => 't0011matriculas', 'action' => 'index'),array('class'=>'link')); ?>
		<?php if($grupo !=4) echo $this->Html->link(sprintf(__('Inscricoes', true)), array('controller' => 't0013inscricaos', 'action' => 'index'),array('class'=>'link')); ?>	 
</div>