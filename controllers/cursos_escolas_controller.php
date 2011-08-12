<?php
class CursosEscolasController extends AppController {

	var $name = 'CursosEscolas';

	function index() {
		$this->CursosEscola->recursive = 0;
		$this->set('cursosEscolas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cursos escola', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cursosEscola', $this->CursosEscola->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CursosEscola->create();
			if ($this->CursosEscola->save($this->data)) {
				$this->Session->setFlash(__('The cursos escola has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos escola could not be saved. Please, try again.', true));
			}
		}
		$escolas = $this->CursosEscola->Escola->find('list');
		$cursos = $this->CursosEscola->Curso->find('list');
		$this->set(compact('escolas', 'cursos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cursos escola', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CursosEscola->save($this->data)) {
				$this->Session->setFlash(__('The cursos escola has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos escola could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CursosEscola->read(null, $id);
		}
		$escolas = $this->CursosEscola->Escola->find('list');
		$cursos = $this->CursosEscola->Curso->find('list');
		$this->set(compact('escolas', 'cursos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cursos escola', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CursosEscola->delete($id)) {
			$this->Session->setFlash(__('Cursos escola deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cursos escola was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
