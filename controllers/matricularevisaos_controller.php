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
 
 
class T0012matricularevisaosController extends AppController {

	var $name = 'T0012matricularevisaos';

	function index() {
		$this->T0012matricularevisao->recursive = 0;
		$this->set('t0012matricularevisaos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('t0012matricularevisao', $this->T0012matricularevisao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->T0012matricularevisao->create();
			if ($this->T0012matricularevisao->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');}
		}
		$alunos = $this->T0012matricularevisao->Aluno->find('list');
		$cursos = $this->T0012matricularevisao->Curso->find('list');
		$planoestudos = $this->T0012matricularevisao->Planoestudo->find('list');
		$this->set(compact('Alunos', 't0003cursos', 't0005planoestudos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->T0012matricularevisao->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->T0012matricularevisao->read(null, $id);
		}
		$alunos = $this->T0012matricularevisao->Aluno->find('list');
		$cursos = $this->T0012matricularevisao->Curso->find('list');
		$planoestudos = $this->T0012matricularevisao->Planoestudo->find('list');
		$this->set(compact('Alunos', 't0003cursos', 't0005planoestudos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0012matricularevisao'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->T0012matricularevisao->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'T0012matricularevisao'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','manutencao');
        }
}
?>