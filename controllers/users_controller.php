<?php
/**
 * OpenSGA - Sistema de Gestуo Acadщmica
 *   Copyright (C) 2010-2011  INFOmoz (Informсtica-Moчambique)
 * 
 * Este programa щ um software livre: Vocъ pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licenчa por nele
 * estabelecidos. Grande parte do cѓdigo deste programa estс sob a licenчa 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versуo original desta licenчa estс disponэvel na pasta raiz deste software.
 * 
 * Este software щ distribuido sob a perspectiva de que possa ser њtil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licenчa GNU Affero General Public License para mais detalhes
 * 
 * As redistribuiчѕes deste software, mesmo quando o cѓdigo-fonte for modificado significativamente,
 * devem manter estс informaчуo legal, assim como a licenчa original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informсtica-Moчambique) (http://infomoz.net)
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
        
		
        function login(){
            	
		    if ($this->Auth->user()) {
            	$this->loadModel('Config');
            	$this->set('current_section','administracao');
				
				$configs = $this->Config->find('all',array('conditions'=>array('Config.autoload'=>1)));
				foreach($configs as $config){
					$this->Session->write('Config.'.$config['Config']['name'],$config['Config']['value']);
				}
				
				//$this->redirect('/');
			}
        }

		function after_login() {

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

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(array('login','logout'));
	}

}
?>