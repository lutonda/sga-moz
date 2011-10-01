<?php
class DocenteCategoriasController extends AppController {

	var $name = 'DocenteCategorias';

	function index() {
		$this->DocenteCategoria->recursive = 0;
		$this->set('docenteCategorias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid docente categoria', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('docenteCategoria', $this->DocenteCategoria->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DocenteCategoria->create();
			if ($this->DocenteCategoria->save($this->data)) {
				$this->Session->setFlash(__('The docente categoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente categoria could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid docente categoria', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocenteCategoria->save($this->data)) {
				$this->Session->setFlash(__('The docente categoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente categoria could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocenteCategoria->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for docente categoria', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocenteCategoria->delete($id)) {
			$this->Session->setFlash(__('Docente categoria deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Docente categoria was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
