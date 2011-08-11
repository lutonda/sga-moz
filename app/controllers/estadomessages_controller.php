<?php
class Tg0018estadomessagesController extends AppController {

	var $name = 'Tg0018estadomessages';

	function index() {
		$this->Tg0018estadomessage->recursive = 0;
		$this->set('tg0018estadomessages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tg0018estadomessage', $this->Tg0018estadomessage->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->Tg0018estadomessage->read(null, $id);
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tg0018estadomessage->create();
			if ($this->Tg0018estadomessage->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tg0018estadomessage'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tg0018estadomessage->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Tg0018estadomessage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tg0018estadomessage'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tg0018estadomessage->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Tg0018estadomessage'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>