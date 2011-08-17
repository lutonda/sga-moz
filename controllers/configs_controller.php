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
 
 
class ConfigsController extends AppController {

	var $name = 'Configs';

	function index() {
		$this->Config->recursive = 0;
		$this->set('configs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid config', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('config', $this->Config->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Config->create();
			if ($this->Config->save($this->data)) {
				$this->Session->setFlash(__('The config has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid config', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Config->save($this->data)) {
				$this->Session->setFlash(__('The config has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Config->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for config', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Config->delete($id)) {
			$this->Session->setFlash(__('Config deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Config was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function language($language_id){
		if($language_id==1)
		$this->Session->write('Config.language', 'por');
		
		else{
			$this->Session->write('Config.language', 'eng');
		}
		Configure::write('Config.language', $this->Session->read('Config.language'));
		//$this->Session->setFlash(__('O idioma do Sistema foi alterado com sucesso', true));
		$this->redirect(array('action' => 'index'));
	}
}
