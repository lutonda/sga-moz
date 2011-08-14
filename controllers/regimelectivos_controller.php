<?php
class RegimelectivosController extends AppController {

	var $name = 'Regimelectivos';

	function index() {
		$this->Regimelectivo->recursive = 0;
		$this->set('regimelectivos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid regimelectivo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('regimelectivo', $this->Regimelectivo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Regimelectivo->create();
			if ($this->Regimelectivo->save($this->data)) {
				$this->Session->setFlash(__('The regimelectivo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regimelectivo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid regimelectivo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Regimelectivo->save($this->data)) {
				$this->Session->setFlash(__('The regimelectivo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regimelectivo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Regimelectivo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for regimelectivo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Regimelectivo->delete($id)) {
			$this->Session->setFlash(__('Regimelectivo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Regimelectivo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
