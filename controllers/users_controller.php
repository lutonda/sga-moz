<?php
class UsersController extends AppController {

	var $name = 'Users';
        
        function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
        $this->set('current_section','administracao');
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			//$this->set('user', $this->User->read(null, $id));
			$this->data = $this->User->read(null, $id);
		}
		$users = $this->User->find('list');
		//$this->set(compact('users'));
		$groups = $this->User->Group->find('list');
		$this->set(compact('users','groups'));
	
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'user'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'user'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'User'));
		$this->redirect(array('action' => 'index'));
	}
        /* metodo defino por Raimundo -> permite a visualizacao do login */
        function login(){
		    App::Import('Model','Logmv');
	        $logmv = new Logmv;
            $this->set('current_section','administracao');
			$this->data = $this->User->read(null,$this->Session->read('Auth.User.id'));
			//var_dump($this->Session->read('Auth.User.id'));
			//$tg0022logmv->loglogin(2,$this->Session->read('Auth.User.id'));
        }

		function after_login() {
		  App::Import('Model','Matricula');
          $matriculas = new Matricula;
		  App::Import('Model','Logmv');
	      $logmv = new Logmv;
		$this->data = $this->User->read(null,$this->Session->read('Auth.User.id'));
		// ATENCAO: O ID A PASSAR ï¿½ O DO ALUNO E Nï¿½O O DO USER
		// RA 2011.04.08
		//var_dump($this->Session->read('Auth.User.id'));
		$estado = $matriculas->verificaStatusAluno($this->Session->read('Auth.User.id'));	
		//var_dump($this->Session->read('Auth.User.id'));
        if(isset($estado[0])){
		if($estado[0]["matriculas"]["estadomatricula_id"] == '2' || $estado[0]["matriculas"]["estadomatricula_id"] == '3')
		{
            $this->Auth->logout();
                $this->redirect(array('action'=>'login'));
				//var_dump($this->Session->read('Auth.User.id'));
				$logmv->loglogin(2,$this->Session->read('Auth.User.id'));
				
		}
		else
		{
		$this->redirect(array('controller'=>'pages','action' => 'homepage'));
		$logmv->loglogin(2,$this->Session->read('Auth.User.id'));
		}
		
	    }
        else{
            $this->redirect(array('controller'=>'pages','action' => 'homepage'));
		$logmv->loglogin(2,$this->Session->read('Auth.User.id'));
        }
        }
        
        function logout(){
		        App::Import('Model','Logmv');
	            $logmv = new Logmv;
				//var_dump($this->Session->read('Auth.User.id'));
				$logmv->loglogout(2,$this->Session->read('Auth.User.id'));
                $this->Auth->logout();
                $this->redirect(array('action'=>'login'));
        }

    function trocar_senha($id = null){
            if (!$id && empty($this->data)) {
                $this->data = $this->User->read(null,$this->Session->read('Auth.User.id'));
            }
		if ($id && !empty($this->data)) {
			$senha_antiga = $this->data['User']['senhaantiga'];
            $senha_nova1 = $this->data['User']['novasenha1'];
            $senha_nova2 = $this->data['User']['novasenha2'];

            $senha_bd = $this->User->findById($this->Session->read('Auth.User.id'));
            if($senha_bd['User']['password']==md5($senha_antiga)){
                if($senha_nova1 == $senha_nova2){
                    $this->data['User']['password'] = md5($senha_nova1);
                    if ($this->User->save($this->data)) {
                        $this->Session->setFlash(sprintf(__('Dado Cadastrado com sucesso', true), 'user'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 'user'));
                    }
                }
                else{
                    $this->Session->setFlash(sprintf(__('As senhas nao conferem', true), 'user'));
                    $this->redirect(array('action' => 'index'));
                }
            }
            else{
                $this->Session->setFlash(sprintf(__('A senha antiga nao confere', true), 'user'));
                $this->redirect(array('action' => 'index'));
            }
            

            /*if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dado Cadastrado com sucesso', true), 'user'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 'user'));
			}*/
		}
    }
        function beforeRender(){
            $this->set('current_section','administracao');
        }


}
?>