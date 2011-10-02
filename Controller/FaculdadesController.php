<?php
class FaculdadesController extends AppController {

	var $name = 'Faculdades';

	function index() {
		$this->Faculdade->recursive = 0;
		$this->set('faculdades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid faculdade', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('faculdade', $this->Faculdade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Faculdade->create();
			if ($this->Faculdade->save($this->data)) {
				$this->Session->setFlash(__('The faculdade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faculdade could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid faculdade', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Faculdade->save($this->data)) {
				$this->Session->setFlash(__('The faculdade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faculdade could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Faculdade->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for faculdade', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Faculdade->delete($id)) {
			$this->Session->setFlash(__('Faculdade deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Faculdade was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
