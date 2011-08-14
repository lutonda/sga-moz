<?php
class TipoprecedenciasController extends AppController {

	var $name = 'Tipoprecedencias';

	function index() {
		$this->Tipoprecedencia->recursive = 0;
		$this->set('tipoprecedencias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipoprecedencia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipoprecedencia', $this->Tipoprecedencia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipoprecedencia->create();
			if ($this->Tipoprecedencia->save($this->data)) {
				$this->Session->setFlash(__('The tipoprecedencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoprecedencia could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipoprecedencia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipoprecedencia->save($this->data)) {
				$this->Session->setFlash(__('The tipoprecedencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoprecedencia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipoprecedencia->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipoprecedencia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipoprecedencia->delete($id)) {
			$this->Session->setFlash(__('Tipoprecedencia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipoprecedencia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
