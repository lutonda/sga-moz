<?php
/**
 * OpenSGA - Sistema de Gestуo Acadщmica
 *   Copyright (C) 2010-2011  INFOmoz (Informсtica-Moчambique)
 * 
 * Este programa щ um software livre: Vocъ pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licenчa por nele
 * estabelecidos. Grande parte do cѓdigo deste programa estс sob a licenчa 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versуo original desta licenчa estс disponэvel na pasta raiz deste software.
 * 
 * Este software щ distribuido sob a perspectiva de que possa ser њtil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licenчa GNU Affero General Public License para mais detalhes
 * 
 * As redistribuiчѕes deste software, mesmo quando o cѓdigo-fonte for modificado significativamente,
 * devem manter estс informaчуo legal, assim como a licenчa original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informсtica-Moчambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class ContasController extends AppController {

	var $name = 'Contas';

	function index() {
		$this->Conta->recursive = 0;
		$this->set('contas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid conta', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('conta', $this->Conta->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Conta->create();
			if ($this->Conta->save($this->data)) {
				$this->Session->setFlash(__('The conta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conta could not be saved. Please, try again.', true));
			}
		}
		$alunos = $this->Conta->Aluno->find('list');
		$this->set(compact('alunos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid conta', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Conta->save($this->data)) {
				$this->Session->setFlash(__('The conta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conta could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Conta->read(null, $id);
		}
		$alunos = $this->Conta->Aluno->find('list');
		$this->set(compact('alunos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for conta', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Conta->delete($id)) {
			$this->Session->setFlash(__('Conta deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Conta was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>