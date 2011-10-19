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
 
 
class SemestrelectivosController extends AppController {

	var $name = 'Semestrelectivos';

	function index() {
		$this->Semestrelectivo->recursive = 0;
		$this->set('t0019semestrelectivos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('t0019semestrelectivo', $this->Semestrelectivo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
                   $anolectivos = $this->Semestrelectivo->Anolectivo->create();
                   
                   if($this->Semestrelectivo->Anolectivo->save($this->data)){
                   foreach($this->data['Semestrelectivo'] as $semestre){
                        $semestre['t0009anolectivo_id']=$this->Semestrelectivo->Anolectivo->getInsertID();
                       
                       
                    $this->Semestrelectivo->create();
                    if(!$this->Semestrelectivo->save($semestre)){
                       $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');
                    }
                   }
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
				$this->redirect(array('action' => 'index'));
			
			}
		}
                  
		$anolectivos = $this->Semestrelectivo->Anolectivo->find('list');
		$this->set(compact('t0009anolectivos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Semestrelectivo->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');	}
		}
		if (empty($this->data)) {
			$this->data = $this->Semestrelectivo->read(null, $id);
		}
		$anolectivos = $this->Semestrelectivo->Anolectivo->find('list');
		$this->set(compact('t0009anolectivos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0019semestrelectivo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Semestrelectivo->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Semestrelectivo'));
		$this->redirect(array('action' => 'index'));
	}


        function update_semestres(){
           $this->set('num',$this->data['Anolectivo']['num_semestre']);
            $this->layout = 'ajax';
        }
}
?>