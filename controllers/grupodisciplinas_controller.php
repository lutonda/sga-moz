<?php
class GrupodisciplinasController extends AppController {

	var $name = 'Grupodisciplinas';

	function index() {
		$this->Grupodisciplina->recursive = 0;
		$this->set('t0007grupodisciplinas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 't0007grupodisciplina'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('t0007grupodisciplina', $this->Grupodisciplina->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Grupodisciplina->create();
			if ($this->Grupodisciplina->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dado Registado com Sucesso', true), 't0007grupodisciplina'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 't0007grupodisciplina'));
			}
		}
		$disciplinas = $this->Grupodisciplina->Disciplina->find('list');
		$this->set(compact('t0004disciplinas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 't0007grupodisciplina'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Grupodisciplina->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dado Registado com Sucesso', true), 't0007grupodisciplina'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 't0007grupodisciplina'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Grupodisciplina->read(null, $id);
		}
		$disciplinas = $this->Grupodisciplina->Disciplina->find('list');
		$this->set(compact('t0004disciplinas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0007grupodisciplina'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Grupodisciplina->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Grupodisciplina'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Grupodisciplina'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','pedagogica');
        }
}
?>