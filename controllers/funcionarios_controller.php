<?php
class FuncionariosController extends AppController {

	var $name = 'funcionarios';

	function index() {
	
		$this->Funcionario->recursive = 0;
		$this->set('funcionarios', $this->paginate());
	}

	function view($id = null) {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('funcionario', $this->Funcionario->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->Funcionario->read(null, $id);
			//$logmv->logview(16,$this->Session->read('Auth.User.id'),$this->data["funcionario"]["id"],$this->data["funcionario"]["name"]);
		}
                $users = $this->Funcionario->User->find('list');
		$grauacademicos = $this->Funcionario->Grauacademico->find('list');
		$paises = $this->Funcionario->Paise->find('list');
		$cidades = $this->Funcionario->Cidade->find('list');
		$provincias = $this->Funcionario->Provincia->find('list');
		$documentos = $this->Funcionario->Documento->find('list');
		$cargos = $this->Funcionario->Cargo->find('list');
		$departamentos = $this->Funcionario->Departamento->find('list');
		$tipofuncionarios = $this->Funcionario->Tipofuncionario->find('list');
                $generos = $this->Funcionario->Genero->find('list');
                $cargos = $this->Funcionario->Cargo->find('list');
				$departamento = $this->Funcionario->Departamento->find('list');
		$this->set(compact('users', 'Grauacademicos', 'Paises', 'Cidades', 'Provincias', 'Documentos', 'tg0005cargos', 'tg0006departamentos', 'tg0011tipofuncionarios','generos','tg0005cargos','tg0006departamento'));
	
	}

	function add() {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!empty($this->data)) {
			$this->Funcionario->create();
                       
                       // $nome_foto = WWW_ROOT."\ffotos\\".$this->data['funcionario']['foto']['name'];
                        //var_dump($this->data['Aluno']['foto']['tmp_name']);
                        $this->Funcionario->User->create();
                        $this->data['User']['username'] = $this->Funcionario->criaUsername($this->data['funcionario']['name']);
                         $this->data['funcionario']['codigo'] = $this->data['User']['username'];
                        $this->data['User']['password'] = md5($this->data['funcionario']['codigo']);
                        $this->data['User']['codigocartao'] = $this->data['funcionario']['codigo'];
						
						if($this->data["funcionario"]["tg0011tipofuncionario_id"]!=1);
                          $this->data['User']['group_id'] = 2;
						if($this->data["funcionario"]["tg0011tipofuncionario_id"]==1);
                          $this->data['User']['group_id'] = 4;
						
						  
                        $this->Funcionario->User->save($this->data);
                        $this->data['funcionario']['user_id'] = $this->Funcionario->User->getLastInsertID();
                        $this->data['funcionario']['foto'] = $this->data['funcionario']['codigo'].".jpg";
			if ($this->Funcionario->save($this->data)) {
			//$logmv->logInsert(16,$this->Session->read('Auth.User.id'),$this->Funcionario->getLastInsertID(),$this->data["funcionario"]["name"]);
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		$users = $this->Funcionario->User->find('list');
		$grauacademicos = $this->Funcionario->Grauacademico->find('list');
		$paises = $this->Funcionario->Paise->find('list');
		$cidades = $this->Funcionario->Cidade->find('list');
		$provincias = $this->Funcionario->Provincia->find('list');
		$documentos = $this->Funcionario->Documento->find('list');
    
		$cargos = $this->Funcionario->Cargo->find('list');
		$departamentos = $this->Funcionario->Departamento->find('list');
		$tipofuncionarios = $this->Funcionario->Tipofuncionario->find('list');
		$generos = $this->Funcionario->Genero->find('list');
		$cidadenascimentos = $this->Funcionario->CidadeNascimento->find('list');
	   
		$departamento = $this->Funcionario->Departamento->find('list');
	   //var_dump($departamento);
		$this->set(compact('users', 'Paises', 'Cidades', 'Provincias', 'Documentos', 'tg0010areatrabalhos','generos','cidadenascimentos','Grauacademicos','tg0011tipofuncionarios','tg0006departamentos','tg0005cargos','tg0006departamento'));
		//$this->set(compact('users', 'Grauacademicos', 'Paises', 'Cidades', 'Provincias', 'Documentos', 'tg0005cargos', 'tg0006departamentos', 'tg0011tipofuncionarios'));
	}

	function edit($id = null) {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Funcionario->save($this->data)) {
			//$logmv->logUpdate(16,$this->Session->read('Auth.User.id'),$id,$this->data["funcionario"]["name"]);
				$this->Session->setFlash('Dados Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Funcionario->read(null, $id);
		}
		$users = $this->Funcionario->User->find('list');
		$grauacademicos = $this->Funcionario->Grauacademico->find('list');
		$paises = $this->Funcionario->Paise->find('list');
		$cidades = $this->Funcionario->Cidade->find('list');
		$provincias = $this->Funcionario->Provincia->find('list');
		$documentos = $this->Funcionario->Documento->find('list');
		$cargos = $this->Funcionario->Cargo->find('list');
		$departamentos = $this->Funcionario->Departamento->find('list');
		$tipofuncionarios = $this->Funcionario->Tipofuncionario->find('list');
                $generos = $this->Funcionario->Genero->find('list');
                $cargos = $this->Funcionario->Cargo->find('list');
				$departamento = $this->Funcionario->Departamento->find('list');
		$this->set(compact('users', 'Grauacademicos', 'Paises', 'Cidades', 'Provincias', 'Documentos', 'tg0005cargos', 'tg0006departamentos', 'tg0011tipofuncionarios','generos','tg0005cargos','tg0006departamento'));
	}

	function delete($id = null) {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
	    App::Import('Model','User');
        $users = new User;
		App::Import('Model','Turma');
        $turmas = new Turma;
	
		if (!$id) {
			$this->Session->setFlash('Codigo Invalido para %s','error');
			$this->redirect(array('action'=>'index'));
		}
		
		$dados = $turmas->getTurmasByFuncionario($id);
		
		if(empty($dados)){
		
		$user_id = $users->getUserByFuncionario($id);
		
		//var_dump($user_id[0]["us"]["id"]);
		$users = $users->deleteUser($user_id[0]["us"]["id"]);
		
		if ($this->Funcionario->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		}
		$this->Session->setFlash('Nao e possivel apagar. Turmas associadas ao Funcionario','error');
		$this->redirect(array('action' => 'index'));
	}

        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>
