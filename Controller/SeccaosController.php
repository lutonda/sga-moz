<?php
class SeccaosController extends AppController {

	var $name = 'Seccaos';

	function index() {
		$this->Seccao->recursive = 0;
		$this->set('seccaos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid seccao', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('seccao', $this->Seccao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Seccao->create();
			if ($this->Seccao->save($this->data)) {
				$this->Session->setFlash(__('The seccao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seccao could not be saved. Please, try again.', true));
			}
		}
		$departamentos = $this->Seccao->Departamento->find('list');
		$faculdades = $this->Seccao->Faculdade->find('list');
		$this->set(compact('departamentos', 'faculdades'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid seccao', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Seccao->save($this->data)) {
				$this->Session->setFlash(__('The seccao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seccao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Seccao->read(null, $id);
		}
		$departamentos = $this->Seccao->Departamento->find('list');
		$faculdades = $this->Seccao->Faculdade->find('list');
		$this->set(compact('departamentos', 'faculdades'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for seccao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Seccao->delete($id)) {
			$this->Session->setFlash(__('Seccao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Seccao was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
