<?php
class AreatrabalhosController extends AppController {

	var $name = 'Areatrabalhos';

	function index() {
		$this->Areatrabalho->recursive = 0;
		$this->set('tg0010areatrabalhos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		//$this->set('tg0010areatrabalho', $this->Areatrabalho->read(null, $id));
                if (empty($this->data)) {
			$this->data = $this->Areatrabalho->read(null, $id);
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->Areatrabalho->create();
			if ($this->Areatrabalho->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tg0010areatrabalho'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Areatrabalho->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Areatrabalho->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tg0010areatrabalho'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Areatrabalho->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Areatrabalho'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>