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
 
 
 
class DisciplinasController extends AppController {

	var $name = 'Disciplinas';

	function index() {
		$this->Disciplina->recursive = 0;
		$this->set('disciplinas', $this->paginate());
	}

	function view($id = null) {
	   App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
	$this->set('disciplina', $this->Disciplina->read(null, $id));
    // var_dump($this->data);
			if (empty($this->data)) {
			$this->data = $this->Disciplina->read(null, $id);
	      	////$logmv->logview(4,$this->Session->read('Auth.User.id'),$this->data["Disciplina"]["id"],$this->data["Disciplina"]["name"]);
		}
		$grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
		$this->set(compact('grupodisciplinars'));
	}

	function add() {
		App::Import('Model','Logmv');
	    $logmv = new Logmv;
		
		if (!empty($this->data)) {
			$this->Disciplina->create();
			if ($this->Disciplina->save($this->data)) {
			////$logmv->logInsert(4,$this->Session->read('Auth.User.id'),$this->Disciplina->getLastInsertID(),$this->data["Disciplina"]["name"]);
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');
			}
		}
		$grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
		$this->set(compact('grupodisciplinars'));
	}

	function edit($id = null){
	  $this->Disciplina->id = $id;
		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			//die(var_dump($this->request->data));
			if ($this->Disciplina->save($this->request->data)) {
			////$logmv->logUpdate(4,$this->Session->read('Auth.User.id'),$id,$this->data["Disciplina"]["name"]);
				
				$this->Session->setFlash('Dados modificados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Disciplina->read(null, $id);
		}
		$grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
		$this->set(compact('grupodisciplinars'));
	}

/*	function delete($id = null) 
	{
	App::Import('Model','Logmv');
	$logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido codigo para %s','flasherror');
			$this->redirect(array('action'=>'index'));
		}
		$verifica = $this->Disciplina->query("select id from grupodisciplinas where disciplina_id = {$id}");
		//var_dump($verifica);
		
		if(empty($verifica))
		{
	    if ($this->Disciplina->delete($id)) 
		{
		////$logmv->logDelete(4,$this->Session->read('Auth.User.id'),$id,$this->data["Disciplina"]["name"]);
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		}
		$this->Session->setFlash('Esta Disciplina nao pode ser Deletada. Ja Pertence a um Palno de Estudo.','flasherror');
		$this->redirect(array('action' => 'index'));
	}
 * 
 */
        function beforeRender()
		{
            parent::beforeRender();
            $this->set('current_section','pedagogica');
        }
          
        function pdf_index()
		{
            Configure::write('debug',0); 
            $disciplina = $this->Disciplina->find('all',array('order'=> array ('Disciplina.name ASC'))); 
            $listas = array();
			$id = 1;
            foreach( $disciplina as $m)
			{
                $lista = array();
                $lista[] =$id;
	            $lista[] =$m["Disciplina"]["codigo"];
                $lista[] =$m["Disciplina"]["name"];
                $lista[] =$m["Grupodisciplinar"]["name"];
                $listas[] =$lista;
				$id++;
            }
          
            $this->set('lista',$listas);
            $this->layout = 'pdf'; //this will use the pdf.ctp layout
            $this->render();
        }
}
?>