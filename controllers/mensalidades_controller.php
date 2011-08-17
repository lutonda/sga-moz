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
 
 
class MensalidadesController extends AppController {

	var $name = 'Mensalidades';

	function index() {
		$this->Mensalidade->recursive = 0;
		$this->set('mensalidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mensalidade', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mensalidade', $this->Mensalidade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Mensalidade->create();
			if ($this->Mensalidade->save($this->data)) {
				$this->Session->setFlash(__('The mensalidade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mensalidade could not be saved. Please, try again.', true));
			}
		}
		$alunos = $this->Mensalidade->Aluno->find('list');
		$months = $this->Mensalidade->Month->find('list');
		$this->set(compact('alunos', 'months'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mensalidade', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Mensalidade->save($this->data)) {
				$this->Session->setFlash(__('The mensalidade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mensalidade could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Mensalidade->read(null, $id);
		}
		$alunos = $this->Mensalidade->Aluno->find('list');
		$months = $this->Mensalidade->Month->find('list');
		$this->set(compact('alunos', 'months'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mensalidade', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Mensalidade->delete($id)) {
			$this->Session->setFlash(__('Mensalidade deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mensalidade was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>