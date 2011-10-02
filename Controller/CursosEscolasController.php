<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class CursosEscolasController extends AppController {

	var $name = 'CursosEscolas';

	function index() {
		$this->CursosEscola->recursive = 0;
		$this->set('cursosEscolas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cursos escola', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cursosEscola', $this->CursosEscola->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CursosEscola->create();
			if ($this->CursosEscola->save($this->data)) {
				$this->Session->setFlash(__('The cursos escola has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos escola could not be saved. Please, try again.', true));
			}
		}
		$escolas = $this->CursosEscola->Escola->find('list');
		$cursos = $this->CursosEscola->Curso->find('list');
		$this->set(compact('escolas', 'cursos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cursos escola', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CursosEscola->save($this->data)) {
				$this->Session->setFlash(__('The cursos escola has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos escola could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CursosEscola->read(null, $id);
		}
		$escolas = $this->CursosEscola->Escola->find('list');
		$cursos = $this->CursosEscola->Curso->find('list');
		$this->set(compact('escolas', 'cursos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cursos escola', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CursosEscola->delete($id)) {
			$this->Session->setFlash(__('Cursos escola deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cursos escola was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
