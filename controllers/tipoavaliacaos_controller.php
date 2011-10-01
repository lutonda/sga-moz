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
			$this->Session->setFlash('Invalido %s', 'flasherror');
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
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');

                                }
		}
        $epocaavaliacaos = $this->Tipoavaliacao->Epocaavaliacao->find('list');
		$this->set(compact('t0014epocaavaliacaos'));
	}

	function edit($id = null) {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipoavaliacao->save($this->data)) {
			    //$logmv->logUpdate(13,$this->Session->read('Auth.User.id'),$id,$this->data["Tipoavaliacao"]["name"]);
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
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
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
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