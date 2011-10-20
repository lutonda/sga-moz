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
 
 
class TurmatipoavaliacaosController extends AppController {

	var $name = 'Turmatipoavaliacaos';

	function index() {
		$this->Turmatipoavaliacao->recursive = 0;
		$this->set('turmatipoavaliacaos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('t0018turmatipoavaliacao', $this->Turmatipoavaliacao->read(null, $id));
                if (empty($this->data)) {
			$this->data = $this->Turmatipoavaliacao->read(null, $id);
		}

		$turma = $this->Turmatipoavaliacao->Turma->find('list');
		$tipoavaliacao = $this->Turmatipoavaliacao->Tipoavaliacao->find('list');
       	$this->set(compact('t0010turma', 't0015tipoavaliacao'));
	}

	function add($turma_id) {
		if (!empty($this->data)) {
			$tta = $this->data;
			$tta['Turmatipoavaliacao']['turma_id']=$turma_id;
			
			$this->Turmatipoavaliacao->create();
			if ($this->Turmatipoavaliacao->save($tta)) {
				$this->Session->setFlash(__('Avaliacao Adicionada com sucesso'),'flashok');
				$this->redirect(array('controller'=>'turmas','action' => 'view',$turma_id));
				
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo Zai.','flasherror');}
		}

	
		var_dump($turma_id);
		$turmas = $this->Turmatipoavaliacao->Turma->find('list');
		$tipoavaliacaos = $this->Turmatipoavaliacao->Tipoavaliacao->find('list');
		$this->set(compact('t0010turmas', 'tipoavaliacaos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Turmatipoavaliacao->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}
		if (empty($this->data)) {
			$this->data = $this->Turmatipoavaliacao->read(null, $id);
		}
		$turmas = $this->Turmatipoavaliacao->Turma->find('list');
		$tipoavaliacaos = $this->Turmatipoavaliacao->Tipoavaliacao->find('list');
		$this->set(compact('t0010turmas', 'tipoavaliacaos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0018turmatipoavaliacao'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Turmatipoavaliacao->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Turmatipoavaliacao'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','avaliacao');
        }
		
		
}
?>