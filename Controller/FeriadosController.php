<?php
App::uses('AppController', 'Controller');
/**
 * Feriados Controller
 *
 * @property Feriado $Feriado
 */
class FeriadosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Feriado->recursive = 0;
		$this->set('feriados', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Feriado->id = $id;
		if (!$this->Feriado->exists()) {
			throw new NotFoundException(__('Invalid feriado'));
		}
		$this->set('feriado', $this->Feriado->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Feriado->create();
			if ($this->Feriado->save($this->request->data)) {
				$this->Session->setFlash(__('The feriado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feriado could not be saved. Please, try again.'));
			}
		}
		$provincias = $this->Feriado->Provincium->find('list');
		$cidades = $this->Feriado->Cidade->find('list');
		$this->set(compact('provincias', 'cidades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Feriado->id = $id;
		if (!$this->Feriado->exists()) {
			throw new NotFoundException(__('Invalid feriado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Feriado->save($this->request->data)) {
				$this->Session->setFlash(__('The feriado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feriado could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Feriado->read(null, $id);
		}
		$provincias = $this->Feriado->Provincium->find('list');
		$cidades = $this->Feriado->Cidade->find('list');
		$this->set(compact('provincias', 'cidades'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Feriado->id = $id;
		if (!$this->Feriado->exists()) {
			throw new NotFoundException(__('Invalid feriado'));
		}
		if ($this->Feriado->delete()) {
			$this->Session->setFlash(__('Feriado deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Feriado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
