<?php
class EstadomatriculasController extends AppController {

	var $name = 'Estadomatriculas';

	function index() {
		$this->Estadomatricula->recursive = 0;
		$this->set('tg0021estadomatriculas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tg0021estadomatricula', $this->Estadomatricula->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->Estadomatricula->read(null, $id);
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->Estadomatricula->create();
			if ($this->Estadomatricula->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tg0021estadomatricula'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estadomatricula->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Estadomatricula->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tg0021estadomatricula'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Estadomatricula->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Estadomatricula'));
		$this->redirect(array('action' => 'index'));
	}

        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>