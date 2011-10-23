<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 * 
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 * 
 * Este software � distribuido sob a perspectiva de que possa ser �til para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 * 
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class UsersController extends AppController {

	var $name = 'Users';
        
        function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
        $this->set('current_section','administracao');
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID do Usuário Inválido', true), 'user'),'flasherror');
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
				$this->Session->setFlash(sprintf(__('Usuário Registrado com Sucesso', true), 'user'),'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao registrar usuário. Tente de novo', true), 'user'),'flasherror');
		}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('ID do Usuário Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Os dados do usuário foram actualizados com sucesso', true), 'user'),'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');
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
			$this->Session->setFlash(sprintf(__('ID do Usuário Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(sprintf(__('Usuário removido com sucesso', true), 'user'),'flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('O usuário não foi removido', true), 'user'),'flasherror');
		$this->redirect(array('action' => 'index'));
	}
        
	/*	
        function login(){
            var_dump($this->Auth->user());	
		    if ($this->Auth->user()) {
            	$this->loadModel('Config');
            	$this->set('current_section','administracao');
				
				$configs = $this->Config->find('all',array('conditions'=>array('Config.autoload'=>1)));
				foreach($configs as $config){
					$this->Session->write('Config.'.$config['Config']['name'],$config['Config']['value']);
				}
				
				$this->redirect('/');
			}
        }
*/
	function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash('Your username or password was incorrect.');
	        }
	    }
	}
	
	function after_login(){
		$this->redirect(array('controller'=>'pages','action'=>'homepage'));
	}

        
        function logout(){
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
                        $this->Session->setFlash(sprintf(__('Senha alterada com sucesso', true), 'user'),'flashok');
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(sprintf(__('Erro ao alterar a senha. Por favor, tente de novo', true), 'user'),'flasherror');
                    }
                }
                else{
                    $this->Session->setFlash(sprintf(__('As senhas introduzidas não são idênticas', true), 'user'),'flasherror');
                    $this->redirect(array('action' => 'index'));
                }
            }
            else{
                $this->Session->setFlash(sprintf(__('A senha antiga nao confere', true), 'user'));
                $this->redirect(array('action' => 'index'));
            }

		}
    }
        function beforeRender(){
            parent::beforeRender();	
            $this->set('current_section','administracao');
        }

	function beforeFilter(){
		$this->Auth->allow(array('login','logout'));
		parent::beforeFilter();
		
	}
	
	function teste(){
		
		$this->User->geraUsername('Nilza Martina Notico');
		$this->render('add');
	}

}
?>