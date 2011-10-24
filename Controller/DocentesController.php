<?php
class DocentesController extends AppController {

	var $name = 'Docentes';

	function index() {
		$this->Docente->recursive = 2;
		$this->set('docentes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('docente', $this->Docente->read(null, $id));
	}

	function adicionar() {
		if (!empty($this->data)) {
			$this->Docente->create();
			
			//Antes de Gravar o Docente precisamos gravar o Usuario e a Entidade
			
			//Primeiro vamos criar um usuario na tabela users
			//O Username sera o email, logo este campo eh obrigatorio
			$this->Docente->Entidade->User->create();
			$user_data = array('User'=>array('username'=>$this->data['Entidade']['email'],'password'=>$this->data['Entidade']['email'],'group_id'=>4,'name'=>$this->data['Entidade']['name']));
			
			if($this->Docente->Entidade->User->save($user_data)){
				
				//Agora gravamos o dados da Entidade
			$nome_foto = WWW_ROOT."\ffotos\\".$this->data['Entidade']['foto']['name'];
			$imagem=array($this->data['Entidade']['foto']);
			
			$fileOk = $this->uploadFiles('upload',$imagem);
			$entidade_data = array('Entidade'=>$this->data['Entidade']);
			if(isset($fileOk['urls']) and $fileOk['urls']!=null){
			$entidade_data ['Entidade']['foto']=$fileOk['urls'][0];}
			else{
				$entidade_data ['Entidade']['foto']='';
			}
			
				
				
				
				$entidade_data['Entidade']['user_id'] = $this->Docente->Entidade->User->getLastInsertID();
				$this->Docente->Entidade->create();
				if($this->Docente->Entidade->save($entidade_data)){
					
					//Finalmente Podemos gravar os dados do docente
					$docente_data = array('Docente'=>$this->data['Docente']);
					$docente_data['Docente']['entidade_id'] = $this->Docente->Entidade->getLastInsertID();
					if ($this->Docente->save($docente_data)) {
						$this->Docente->configuraAcl($this->Docente->Entidade->User->getLastInsertID());
						$this->Session->setFlash(__('Docente Registrado com Sucesso'),'flashok');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('Erro ao registrar Docente, tente de novo'),'flasherror');
					}
					
				}
			}

		}
		
		$entidades = $this->Docente->Entidade->find('list');
		$seccaos = $this->Docente->Seccao->find('list');
		$faculdades = $this->Docente->Seccao->Faculdade->find('list');
		$departamentos = $this->Docente->Seccao->Departamento->find('list');
		$docenteCategorias = $this->Docente->DocenteCategoria->find('list');
		$this->set(compact('entidades', 'seccaos', 'docenteCategorias','faculdades','departamentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Docente->save($this->data)) {
				$this->Session->setFlash(__('The docente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Docente->read(null, $id);
		}
		$entidades = $this->Docente->Entidade->find('list');
		$seccaos = $this->Docente->Seccao->find('list');
		$docenteCategorias = $this->Docente->DocenteCategorium->find('list');
		$this->set(compact('entidades', 'seccaos', 'docenteCategorias'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for docente', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Docente->delete($id)) {
			$this->Session->setFlash(__('Docente deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Docente was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
