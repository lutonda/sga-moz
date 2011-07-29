<?php
class TipoavaliacaosController extends AppController {

	var $name = 'Tipoavaliacaos';

	function index() {
		$this->Tipoavaliacao->recursive = 0;
		$this->set('t0015tipoavaliacaos', $this->paginate());
	}

	function view($id = null) {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('t0015tipoavaliacao', $this->Tipoavaliacao->read(null, $id));
                if (empty($this->data)) {
			$this->data = $this->Tipoavaliacao->read(null, $id);
			//$logmv->logview(13,$this->Session->read('Auth.User.id'),$id,$this->data["Tipoavaliacao"]["name"]);
		
                        $epocaavaliacaos = $this->Tipoavaliacao->Epocaavaliacao->find('list');
		$this->set(compact('t0014epocaavaliacaos'));
		}
                
	}

	function add() {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!empty($this->data)) {
			$this->Tipoavaliacao->create();
			if ($this->Tipoavaliacao->save($this->data)) {
			//$logmv->logInsert(13,$this->Session->read('Auth.User.id'),$this->Tipoavaliacao->getLastInsertID(),$this->data["Tipoavaliacao"]["name"]);
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');

                                }
		}
        $epocaavaliacaos = $this->Tipoavaliacao->Epocaavaliacao->find('list');
		$this->set(compact('t0014epocaavaliacaos'));
	}

	function edit($id = null) {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipoavaliacao->save($this->data)) {
			    //$logmv->logUpdate(13,$this->Session->read('Auth.User.id'),$id,$this->data["Tipoavaliacao"]["name"]);
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipoavaliacao->read(null, $id);
		}
                $epocaavaliacaos = $this->Tipoavaliacao->Epocaavaliacao->find('list');
		$this->set(compact('t0014epocaavaliacaos'));
	}

	function delete($id = null) {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0015tipoavaliacao'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipoavaliacao->delete($id)) {
		//$logmv->logDelete(13,$this->Session->read('Auth.User.id'),$id,'Delete Tipo de Avaliacao');
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Tipoavaliacao'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','avaliacao');
        }
}
?>