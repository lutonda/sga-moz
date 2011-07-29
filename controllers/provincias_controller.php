<?php
class ProvinciasController extends AppController {

	var $name = 'Provincias';

	function index() {
		$this->Provincia->recursive = 0;
		$this->set('Provincias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Provincia->read(null, $id);
		}
	}
	function add() {
		if (!empty($this->data)) {
			$this->Provincia->create();
			if ($this->Provincia->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		
		}
		$paises = $this->Provincia->Paise->find('list');
		$this->set(compact('Paises'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tg0003provincium'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Provincia->save($this->data)) {
			$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Provincia->read(null, $id);
		}
		$paises = $this->Provincia->Paise->find('list');
		$this->set(compact('Paises'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tg0003provincium'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Provincia->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Tg0003provincium'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>