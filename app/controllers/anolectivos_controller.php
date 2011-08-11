<?php
class AnolectivosController extends AppController {

	var $name = 'Anolectivos';

	function index() {
		$this->Anolectivo->recursive = 0;
		$this->set('anolectivos', $this->paginate());
	}

	function view($id = null) {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('anolectivo', $this->Anolectivo->read(null, $id));
		if (empty($this->data)) {
			//$this->set('user', $this->User->read(null, $id));
			$this->data = $this->Anolectivo->read(null, $id);
			//$logmv->logview(6,$this->Session->read('Auth.User.id'),$this->data["Anolectivo"]["id"],$this->data["Anolectivo"]["codigo"]);
		}
		$anolectivo = $this->Anolectivo->find('list');
		//$this->set(compact('users'));
		//$groups = $this->User->Group->find('list');
		$this->set(compact('anolectivo'));
	}

	function add() {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!empty($this->data)) {
			$this->Anolectivo->create();
            $this->data['Anolectivo']['codigo'] = $this->data['Anolectivo']['ano']."-".$this->data['Anolectivo']['num_semestre'];
			if ($this->Anolectivo->save($this->data)) {
			//$logmv->logInsert(6,$this->Session->read('Auth.User.id'),$this->Anolectivo->getLastInsertID(),$this->data["Anolectivo"]["codigo"]);
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		
		
	}

	function edit($id = null) {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Anolectivo->save($this->data)) {
			//$logmv->logUpdate(6,$this->Session->read('Auth.User.id'),$id,$this->data["Anolectivo"]["codigo"]);
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Anolectivo->read(null, $id);
		}
	}

	function delete($id = null) {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0009anolectivo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Anolectivo->delete($id)) {
		//$logmv->logDelete(6,$this->Session->read('Auth.User.id'),$id,$this->data["Anolectivo"]["codigo"]);
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Anolectivo'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
           $this->set('current_section','manutencao');
		//	$this->set('current_section','estudantes');
        }
         function pdf_index(){
		    App::Import('Model','Logmv');
	        $logmv = new Logmv;
            Configure::write('debug',0); // Otherwise we cannot use this method while developing
            $anolectivo = $this->Anolectivo->find('all');
            $listas = array();
            foreach( $anolectivo as $m){
                $lista = array();
                $lista[] =$m["Anolectivo"]["id"];
                $lista[] =$m["Anolectivo"]["codigo"];
	        $lista[] =$m["Anolectivo"]["ano"];
                $lista[] =$m["Anolectivo"]["num_semestre"];
               // $lista[] =$m["Planoestudo"]["duracao"];
               // $lista[] =$m["Planoestudo"]["semestresano"];
                $listas[] =$lista;
            }
           // $this->set('cursos',$this->Curso->find('all'));
           $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
        }
}
?>