<?php
class GrauacademicosController extends AppController {

	var $name = 'Grauacademicos';

	function index() {
		$this->Grauacademico->recursive = 0;
		$this->set('Grauacademicos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('Grauacademico', $this->Grauacademico->read(null, $id));
	    if (empty($this->data)) {
			$this->data = $this->Grauacademico->read(null, $id);
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->Grauacademico->create();
			if ($this->Grauacademico->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Grauacademico->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');	}
		}
		if (empty($this->data)) {
			$this->data = $this->Grauacademico->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'Grauacademico'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Grauacademico->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Grauacademico'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>