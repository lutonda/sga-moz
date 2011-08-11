<?php
class EstadopagamentosController extends AppController {

	var $name = 'Estadopagamentos';

	function index() {
		$this->Estadopagamento->recursive = 0;
		$this->set('estadopagamentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid estadopagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estadopagamento', $this->Estadopagamento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Estadopagamento->create();
			if ($this->Estadopagamento->save($this->data)) {
				$this->Session->setFlash(__('The estadopagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estadopagamento could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid estadopagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estadopagamento->save($this->data)) {
				$this->Session->setFlash(__('The estadopagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estadopagamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Estadopagamento->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for estadopagamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Estadopagamento->delete($id)) {
			$this->Session->setFlash(__('Estadopagamento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Estadopagamento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
