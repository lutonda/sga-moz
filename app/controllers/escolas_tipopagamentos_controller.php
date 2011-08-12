<?php
class EscolasTipopagamentosController extends AppController {

	var $name = 'EscolasTipopagamentos';

	function index() {
		$this->EscolasTipopagamento->recursive = 0;
		$this->set('escolasTipopagamentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid escolas tipopagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('escolasTipopagamento', $this->EscolasTipopagamento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EscolasTipopagamento->create();
			if ($this->EscolasTipopagamento->save($this->data)) {
				$this->Session->setFlash(__('The escolas tipopagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The escolas tipopagamento could not be saved. Please, try again.', true));
			}
		}
		$escolas = $this->EscolasTipopagamento->Escola->find('list');
		$tipopagamentos = $this->EscolasTipopagamento->Tipopagamento->find('list');
		$months = $this->EscolasTipopagamento->Month->find('list');
		$this->set(compact('escolas', 'tipopagamentos', 'months'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid escolas tipopagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EscolasTipopagamento->save($this->data)) {
				$this->Session->setFlash(__('The escolas tipopagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The escolas tipopagamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EscolasTipopagamento->read(null, $id);
		}
		$escolas = $this->EscolasTipopagamento->Escola->find('list');
		$tipopagamentos = $this->EscolasTipopagamento->Tipopagamento->find('list');
		$months = $this->EscolasTipopagamento->Month->find('list');
		$this->set(compact('escolas', 'tipopagamentos', 'months'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for escolas tipopagamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EscolasTipopagamento->delete($id)) {
			$this->Session->setFlash(__('Escolas tipopagamento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Escolas tipopagamento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
