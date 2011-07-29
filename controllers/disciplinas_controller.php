<?php
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
			$this->Session->setFlash('Invalido %s', 'error');
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
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');
			}
		}
		$grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
		$this->set(compact('grupodisciplinars'));
	}

	function edit($id = null) 
	{
	  App::Import('Model','Logmv');
	  $logmv = new Logmv;
		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Disciplina->save($this->data)) {
			////$logmv->logUpdate(4,$this->Session->read('Auth.User.id'),$id,$this->data["Disciplina"]["name"]);
				
				$this->Session->setFlash('Dados modificados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Disciplina->read(null, $id);
		}
		$grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
		$this->set(compact('grupodisciplinars'));
	}

	function delete($id = null) 
	{
	App::Import('Model','Logmv');
	$logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido codigo para %s','error');
			$this->redirect(array('action'=>'index'));
		}
		$verifica = $this->Disciplina->query("select id from grupodisciplinas where disciplina_id = {$id}");
		//var_dump($verifica);
		
		if(empty($verifica))
		{
	    if ($this->Disciplina->delete($id)) 
		{
		////$logmv->logDelete(4,$this->Session->read('Auth.User.id'),$id,$this->data["Disciplina"]["name"]);
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		}
		$this->Session->setFlash('Esta Disciplina nao pode ser Deletada. Ja Pertence a um Palno de Estudo.','error');
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender()
		{
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