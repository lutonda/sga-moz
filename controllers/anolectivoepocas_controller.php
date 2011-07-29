<?php
class T0017anolectivoepocasController extends AppController {

	var $name = 'T0017anolectivoepocas';

	function index() {
		$this->T0017anolectivoepoca->recursive = 0;
		$this->set('t0017anolectivoepocas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('t0017anolectivoepoca', $this->T0017anolectivoepoca->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->T0017anolectivoepoca->create();
			if ($this->T0017anolectivoepoca->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		Anolectivos = $this->T0017anolectivoepoca->Anolectivo->find('list');
		$epocaavaliacaos = $this->T0017anolectivoepoca->Epocaavaliacao->find('list');
		$this->set(compact('t0009anolectivos', 't0014epocaavaliacaos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->T0017anolectivoepoca->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->T0017anolectivoepoca->read(null, $id);
		}
		Anolectivos = $this->T0017anolectivoepoca->Anolectivo->find('list');
		$epocaavaliacaos = $this->T0017anolectivoepoca->Epocaavaliacao->find('list');
		$this->set(compact('t0009anolectivos', 't0014epocaavaliacaos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('** ID invalido **','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->T0017anolectivoepoca->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'T0017anolectivoepoca'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','manutencao');
        }
		
		
		function tempo_limite(){
		    App::Import('Model','Logmv');
	        $logmv = new Logmv;
			if (!empty($this->data)) {
			$this->T0017anolectivoepoca->create();
			if ($this->T0017anolectivoepoca->save($this->data)) {
			//$logmv->logInsert(15,$this->Session->read('Auth.User.id'),$this->T0017anolectivoepoca->getLastInsertID(),"Tempo Limite");
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
			Anolectivos = $this->T0017anolectivoepoca->Anolectivo->find('list');
		
			$epocaavaliacaos = $this->T0017anolectivoepoca->Epocaavaliacao->find('list');
			$this->set(compact('t0009anolectivos', 't0014epocaavaliacaos'));
        }
		
		function index_tempo_limite(){
		
		}
}
?>