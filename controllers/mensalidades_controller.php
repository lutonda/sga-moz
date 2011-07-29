<?php
class MensalidadesController extends AppController {

	var $name = 'Mensalidades';

	function index() {
		$this->Mensalidade->recursive = 0;
		$this->set('mensalidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mensalidade', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mensalidade', $this->Mensalidade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Mensalidade->create();
			if ($this->Mensalidade->save($this->data)) {
				$this->Session->setFlash(__('The mensalidade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mensalidade could not be saved. Please, try again.', true));
			}
		}
		$alunos = $this->Mensalidade->Aluno->find('list');
		$months = $this->Mensalidade->Month->find('list');
		$this->set(compact('alunos', 'months'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mensalidade', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Mensalidade->save($this->data)) {
				$this->Session->setFlash(__('The mensalidade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mensalidade could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Mensalidade->read(null, $id);
		}
		$alunos = $this->Mensalidade->Aluno->find('list');
		$months = $this->Mensalidade->Month->find('list');
		$this->set(compact('alunos', 'months'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mensalidade', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Mensalidade->delete($id)) {
			$this->Session->setFlash(__('Mensalidade deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mensalidade was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>