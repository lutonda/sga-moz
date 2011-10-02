<?php
class DocentesController extends AppController {

	var $name = 'Docentes';

	function index() {
		$this->Docente->recursive = 0;
		$this->set('docentes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('docente', $this->Docente->read(null, $id));
	}

	function adicionar() {
		if (!empty($this->data)) {
			$this->Docente->create();
			if ($this->Docente->save($this->data)) {
				$this->Session->setFlash(__('The docente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.', true));
			}
		}
		$entidades = $this->Docente->Entidade->find('list');
		$seccaos = $this->Docente->Seccao->find('list');
		$docenteCategorias = $this->Docente->DocenteCategoria->find('list');
		$this->set(compact('entidades', 'seccaos', 'docenteCategorias'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Docente->save($this->data)) {
				$this->Session->setFlash(__('The docente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Docente->read(null, $id);
		}
		$entidades = $this->Docente->Entidade->find('list');
		$seccaos = $this->Docente->Seccao->find('list');
		$docenteCategorias = $this->Docente->DocenteCategorium->find('list');
		$this->set(compact('entidades', 'seccaos', 'docenteCategorias'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for docente', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Docente->delete($id)) {
			$this->Session->setFlash(__('Docente deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Docente was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
