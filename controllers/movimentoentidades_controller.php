<?php
class MovimentoentidadesController extends AppController {

	var $name = 'Movimentoentidades';

	function index() {
		$this->Movimentoentidade->recursive = 0;
		$this->set('tg0014movimentoentidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tg0014movimentoentidade', $this->Movimentoentidade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Movimentoentidade->create();
			if ($this->Movimentoentidade->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		$users = $this->Movimentoentidade->User->find('list');
		$tipomovimentos = $this->Movimentoentidade->Tipomovimento->find('list');
		$this->set(compact('users', 'Tipomovimentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tg0014movimentoentidade'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Movimentoentidade->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Movimentoentidade->read(null, $id);
		}
		$users = $this->Movimentoentidade->User->find('list');
		$tipomovimentos = $this->Movimentoentidade->Tipomovimento->find('list');
		$this->set(compact('users', 'Tipomovimentos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tg0014movimentoentidade'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Movimentoentidade->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Movimentoentidade'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>