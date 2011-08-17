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
 
 
class ArosController extends AppController {

	var $name = 'Aros';

	function index() {
		$this->Aro->recursive = 0;
		$this->set('aros', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'aro'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('aro', $this->Aro->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Aro->create();
			if ($this->Aro->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dado Cadastrado com sucesso', true), 'aro'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 'aro'));
			}
		}
		$parentAros = $this->Aro->ParentAro->find('list');
		$acos = $this->Aro->Aco->find('list');
		$this->set(compact('parentAros', 'acos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'aro'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Aro->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dado Cadastrado com sucesso', true), 'aro'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 'aro'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Aro->read(null, $id);
		}
		$parentAros = $this->Aro->ParentAro->find('list');
		$acos = $this->Aro->Aco->find('list');
		$this->set(compact('parentAros', 'acos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'aro'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Aro->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Aro'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Aro'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>