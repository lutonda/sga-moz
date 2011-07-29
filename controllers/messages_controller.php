<?php
class MessagesController extends AppController {

	var $name = 'Messages';

	function index() {
		$this->Message->recursive = 0;
		$this->set('tg0017messages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tg0017message', $this->Message->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->Message->read(null, $id);
		}
		$users = $this->Message->User->find('list');
		$recipients = $this->Message->Recipient->find('list');
		$this->set(compact('users', 'recipients'));
		
	}

	function add() {
		if (!empty($this->data)) {
			$this->Message->create();
            $this->data['Message']['user_id']=$this->Session->read('Auth.user.id');
			if ($this->Message->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		$users = $this->Message->User->find('list');
		$recipients = $this->Message->Recipient->find('list');
		$this->set(compact('users', 'recipients'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tg0017message'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Message->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Message->read(null, $id);
		}
		$users = $this->Message->User->find('list');
		$recipients = $this->Message->Recipient->find('list');
		$this->set(compact('users', 'recipients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tg0017message'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Message->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Message'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>