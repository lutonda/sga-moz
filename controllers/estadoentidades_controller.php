<?php
class Tg0013estadoentidadesController extends AppController {

	var $name = 'Tg0013estadoentidades';

	function index() {
		$this->Tg0013estadoentidade->recursive = 0;
		$this->set('tg0013estadoentidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tg0013estadoentidade', $this->Tg0013estadoentidade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tg0013estadoentidade->create();
			if ($this->Tg0013estadoentidade->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tg0013estadoentidade'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tg0013estadoentidade->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');

                                }
		}
		if (empty($this->data)) {
			$this->data = $this->Tg0013estadoentidade->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tg0013estadoentidade'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tg0013estadoentidade->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Tg0013estadoentidade'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>