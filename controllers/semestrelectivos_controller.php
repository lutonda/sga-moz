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
 
 
class T0019semestrelectivosController extends AppController {

	var $name = 'T0019semestrelectivos';

	function index() {
		$this->T0019semestrelectivo->recursive = 0;
		$this->set('t0019semestrelectivos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('t0019semestrelectivo', $this->T0019semestrelectivo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
                   $anolectivos = $this->T0019semestrelectivo->Anolectivo->create();
                   
                   if($this->T0019semestrelectivo->Anolectivo->save($this->data)){
                   foreach($this->data['T0019semestrelectivo'] as $semestre){
                        $semestre['t0009anolectivo_id']=$this->T0019semestrelectivo->Anolectivo->getInsertID();
                       
                       
                    $this->T0019semestrelectivo->create();
                    if(!$this->T0019semestrelectivo->save($semestre)){
                       $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');
                    }
                   }
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			
			}
		}
                  
		$anolectivos = $this->T0019semestrelectivo->Anolectivo->find('list');
		$this->set(compact('t0009anolectivos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->T0019semestrelectivo->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');	}
		}
		if (empty($this->data)) {
			$this->data = $this->T0019semestrelectivo->read(null, $id);
		}
		$anolectivos = $this->T0019semestrelectivo->Anolectivo->find('list');
		$this->set(compact('t0009anolectivos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0019semestrelectivo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->T0019semestrelectivo->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'T0019semestrelectivo'));
		$this->redirect(array('action' => 'index'));
	}


        function update_semestres(){
           $this->set('num',$this->data['Anolectivo']['num_semestre']);
            $this->layout = 'ajax';
        }
}
?>