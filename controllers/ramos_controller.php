<?php
class RamosController extends AppController {

	var $name = 'Ramos';

	function index() {
		$this->Ramo->recursive = 0;
		$this->set('ramos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ramo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ramo', $this->Ramo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ramo->create();
			if ($this->Ramo->save($this->data)) {
				$this->Session->setFlash(__('The ramo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ramo could not be saved. Please, try again.', true));
			}
		}
		$cursos = $this->Ramo->Curso->find('list');
		$this->set(compact('cursos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ramo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ramo->save($this->data)) {
				$this->Session->setFlash(__('The ramo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ramo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ramo->read(null, $id);
		}
		$cursos = $this->Ramo->Curso->find('list');
		$this->set(compact('cursos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ramo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ramo->delete($id)) {
			$this->Session->setFlash(__('Ramo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ramo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>