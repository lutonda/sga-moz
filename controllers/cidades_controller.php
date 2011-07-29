<?php
class CidadesController extends AppController {

	var $name = 'Cidades';

	function index() {
		$this->Cidade->recursive = 0;
		$this->set('Cidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
			if (empty($this->data)) {
			$this->data = $this->Cidade->read(null, $id);
		}
		$provincias = $this->Cidade->Provincia->find('list');
		$paises = $this->Cidade->Paise->find('list');
		$this->set(compact('Provincias', 'Paises'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Cidade->create();
			if ($this->Cidade->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		$provincias = $this->Cidade->Provincia->find('list');
		$paises = $this->Cidade->Paise->find('list');
		$this->set(compact('Provincias', 'Paises'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'Cidade'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cidade->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Cidade->read(null, $id);
		}
		$provincias = $this->Cidade->Provincia->find('list');
		$paises = $this->Cidade->Paise->find('list');
		$this->set(compact('Provincias', 'Paises'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'Cidade'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cidade->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Cidade'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>