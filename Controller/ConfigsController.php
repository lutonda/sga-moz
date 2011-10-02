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
 

class ConfigsController extends AppController {

	var $name = 'Configs';

	function index() {
		$this->Config->recursive = 0;
		$this->set('configs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('config', $this->Config->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Config->create();
			if ($this->Config->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dados Gravados com Sucesso', true), 'user'),'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Dados não gravados. Por favor, tente de novo', true), 'user'),'flasherror');
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('ID Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Config->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dados gravados com sucesso', true), 'user'),'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Dados não gravados. Por favor, tente de novo', true), 'user'),'flasherror');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Config->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Config->delete($id)) {
			$this->Session->setFlash(sprintf(__('Dados removidos com sucesso', true), 'user'),'flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('Dados não removidos.Por favor, tente de novo', true), 'user'),'flasherror');
		$this->redirect(array('action' => 'index'));
	}
	
	function language($language_id){
		if($language_id==1)
		$this->Session->write('Config.language', 'por');
		
		else{
			$this->Session->write('Config.language', 'eng');
		}
		Configure::write('Config.language', $this->Session->read('Config.language'));
		$this->Session->setFlash(sprintf(__('O idioma do sistema foi alterado com sucesso', true), 'user'),'flashok');
		$this->redirect(array('controller'=>'pages','action'=>'display','homepage'));
	}
}


