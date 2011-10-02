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
 
 
 
class EscolasTipopagamentosController extends AppController {

	var $name = 'EscolasTipopagamentos';

	function index() {
		$this->EscolasTipopagamento->recursive = 0;
		$this->set('escolasTipopagamentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('escolasTipopagamento', $this->EscolasTipopagamento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EscolasTipopagamento->create();
			if ($this->EscolasTipopagamento->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dados gravados com sucesso', true), 'user'),'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O presente dado não foi gravado. Por favor, tente de novo', true), 'user'),'flasherror');
			}
		}
		$escolas = $this->EscolasTipopagamento->Escola->find('list');
		$tipopagamentos = $this->EscolasTipopagamento->Tipopagamento->find('list');
		$months = $this->EscolasTipopagamento->Month->find('list');
		$this->set(compact('escolas', 'tipopagamentos', 'months'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('ID Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EscolasTipopagamento->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dados gravados com sucesso', true), 'user'),'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Dados não gravados. Por favor, tente de novo', true), 'user'),'flasherror');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EscolasTipopagamento->read(null, $id);
		}
		$escolas = $this->EscolasTipopagamento->Escola->find('list');
		$tipopagamentos = $this->EscolasTipopagamento->Tipopagamento->find('list');
		$months = $this->EscolasTipopagamento->Month->find('list');
		$this->set(compact('escolas', 'tipopagamentos', 'months'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EscolasTipopagamento->delete($id)) {
			$this->Session->setFlash(sprintf(__('Dados removidos com sucesso', true), 'user'),'flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('Os dados não foram removidos', true), 'user'),'flasherror');
		$this->redirect(array('action' => 'index'));
	}
}
