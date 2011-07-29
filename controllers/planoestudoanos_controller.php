<?php
class PlanoestudoanosController extends AppController {

	var $name = 'Planoestudoanos';

	function index() {
		$this->Planoestudoano->recursive = 0;
		$this->set('planoestudoanos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'planoestudoano'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('planoestudoano', $this->Planoestudoano->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Planoestudoano->create();
			if ($this->Planoestudoano->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dado Registado com Sucesso', true), 'planoestudoano'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 'planoestudoano'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'planoestudoano'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Planoestudoano->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dado Registado com Sucesso', true), 'planoestudoano'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 'planoestudoano'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Planoestudoano->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'planoestudoano'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Planoestudoano->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Planoestudoano'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Planoestudoano'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','pedagogica');
        }
}
?>