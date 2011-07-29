<?php
class TipopagamentosController extends AppController {

	var $name = 'Tipopagamentos';

	function index() {
		$this->Tipopagamento->recursive = 0;
		$this->set('tipopagamentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipopagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipopagamento', $this->Tipopagamento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipopagamento->create();
			if ($this->Tipopagamento->save($this->data)) {
				$this->Session->setFlash(__('The tipopagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipopagamento could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipopagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipopagamento->save($this->data)) {
				$this->Session->setFlash(__('The tipopagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipopagamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipopagamento->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipopagamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipopagamento->delete($id)) {
			$this->Session->setFlash(__('Tipopagamento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipopagamento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
