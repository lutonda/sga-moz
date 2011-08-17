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
 
 
class MatriculasController extends AppController {

	var $name = 'Matriculas';

	function index() {
		$this->Matricula->recursive = 0;
		$this->set('matriculas', $this->paginate());
	}

	function view($id = null) {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Matricula->read(null, $id);
			//$logmv->logview(10,$this->Session->read('Auth.User.id'),$id,$this->data["Matricula"]["name"]);
		}
		$alunos = $this->Matricula->Aluno->find('list');
		$cursos = $this->Matricula->Curso->find('list');
		$planoestudos = $this->Matricula->Planoestudo->find('list');
		$users = $this->Matricula->User->find('list');
		$this->set(compact('Alunos', 't0003cursos', 't0005planoestudos', 'users'));
	}

	function add() {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!empty($this->data)) {
			$this->Matricula->create();
            $this->data['Matricula']['tg0021estadomatricula_id']=1;
			if ($this->Matricula->save($this->data)) {
			//$logmv->logInsert(10,$this->Session->read('Auth.User.id'),$this->Matricula->getLastInsertID(),$this->data["Matricula"]["codigo"]);
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		$alunos = $this->Matricula->getAlunosForMatricula();
		//sort($alunos);
		$cursos = $this->Matricula->Curso->find('list');
		$planoestudos = $this->Matricula->Planoestudo->find('list');
		$users = $this->Matricula->User->find('list');
		$this->set(compact('Alunos', 't0003cursos', 't0005planoestudos', 'users'));
	}

	function edit($id = null) {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Matricula->save($this->data)) {
			
			   
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Matricula->read(null, $id);
			 //$logmv->logUpdate(10,$this->Session->read('Auth.User.id'),$id,$this->data["Matricula"]["codigo"]);
		}
		$alunos = $this->Matricula->Aluno->find('list',array('order'=>'id'));
		$cursos = $this->Matricula->Curso->find('list');
		$planoestudos = $this->Matricula->Planoestudo->find('list');
		$users = $this->Matricula->User->find('list');
		$this->set(compact('Alunos', 't0003cursos', 't0005planoestudos', 'users'));
	}

	function delete($id = null) {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0011matricula'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Matricula->delete($id)) {
		    //$logmv->logDelete(10,$this->Session->read('Auth.User.id'),$id,'Delete Matricula');
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Matricula'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','manutencao');
        }
        function pdf_index(){
		App::Import('Model','Logmv');
	    $logmv = new Logmv;
            Configure::write('debug',0); // Otherwise we cannot use this method while developing
            $matricula = $this->Matricula->find('all',array("order"=>"Aluno.name"));
			$estado = "";
            $listas = array();
            foreach( $matricula as $m){
			//var_dump($matricula[0]["Matricula"]["tg0021estadomatricula_id"]);
                $lista = array();
                $lista[] =$m["Matricula"]["id"];
                $lista[] =$m["Aluno"]["name"];
	        $lista[] =str_replace("Licenciatura em"," L.",$m["Curso"]["name"]);
                $lista[] =$m["Planoestudo"]["name"];
				if($matricula[0]["Matricula"]["tg0021estadomatricula_id"] == 1)
				$estado = "Normal";
				if($matricula[0]["Matricula"]["tg0021estadomatricula_id"] == 2)
				$estado = "Anulada";
				if($matricula[0]["Matricula"]["tg0021estadomatricula_id"] == 3)
				$estado = "Suspensa";
				if($matricula[0]["Matricula"]["tg0021estadomatricula_id"] ==4)
				$estado = "Concluida";
				
				$lista[] =$estado;
                $lista[] =$m["Matricula"]["data"];
                $listas[] =$lista;
            }
           // $this->set('cursos',$this->Curso->find('all'));
           $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
        }


          function ajax_update_plano_estudos(){

            $curso = $this->data["Matricula"]["t0003curso_id"];

            $planoestudos = $this->Matricula->Planoestudo->find('list',array('conditions'=>array('t0003curso_id'=>$curso)));
            $this->set('planoestudos',$planoestudos);
            $this->layout = 'ajax';
        }

}
?>