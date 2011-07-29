<?php
class CursosController extends AppController {

	var $name = 'Cursos';
	

	function index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->paginate());
		
                
	}

	function view($id = null) 
	{
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Curso Invalido','error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cursos', $this->Curso->read(null, $id));
		if (empty($this->data)) 
		{
		
		$this->data = $this->Curso->read(null, $id);
		//$this->data["Curso"]["id"]["name"]
			//var_dump($this->data);
		//$logmv->logview(3,$this->Session->read('Auth.User.id'),$this->data["Curso"]["id"],$this->data["Curso"]["name"]);
		
		}
		
		$grauacademicos = $this->Curso->Grauacademico->find('list');
		$tipocursos = $this->Curso->Tipocurso->find('list');
        $escolas = $this->Curso->Escola->find('list');
		$this->set(compact('Grauacademicos', 'tg0007tipocursos','tg0016escolas'));
	}

	function add() 
	{
	App::Import('Model','Logmv');
	$logmv = new Logmv;
		if (!empty($this->data)) {
		//var_dump($this->data);
			$this->Curso->create();
			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
				//$logmv->logInsert(3,$this->Session->read('Auth.User.id'),$this->Curso->getLastInsertID(),$this->data["Curso"]["name"]);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');
			}
		}
		$escolas = $this->Curso->Escola->find('list');
		$grauacademicos = $this->Curso->Grauacademico->find('list');
		$tipocursos = $this->Curso->Tipocurso->find('list');
		$this->set(compact('Grauacademicos', 'tg0007tipocursos','tg0016escolas'));
	}

	function edit($id = null) {
	App::Import('Model','Logmv');
	$logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {

			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash('Dados modificados com sucesso.','sucesso');
				//$logmv->logUpdate(3,$this->Session->read('Auth.User.id'),$id,$this->data["Curso"]["name"]);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
                $this->set('cursos', $this->Curso->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->Curso->read(null, $id);
		}
        $escolas = $this->Curso->Escola->find('list');
		$grauacademicos = $this->Curso->Grauacademico->find('list');
		$tipocursos = $this->Curso->Tipocurso->find('list');
		$this->set(compact('Grauacademicos', 'tg0007tipocursos','tg0016escolas'));
	}

	function delete($id = null) {
	App::Import('Model','Logmv');
	$logmv = new Logmv;
	//$logmv->logDelete(3,$this->Session->read('Auth.User.id'),$id,$this->data["Curso"]["name"]);
		if (!$id) {
			$this->Session->setFlash('Codigo Invalido para este curso','error');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Curso->delete($id)) {
	    $this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Curso nao eliminado.Por favor, tente novamente','error');
		$this->redirect(array('action' => 'index'));
	}

        function beforeRender(){
            $this->set('current_section','pedagogica');
        }
		   function pdf_index(){
		   App::Import('Model','Logmv');
	       $logmv = new Logmv;
		   //$logmv->logviw_pdf(3,$this->Session->read('Auth.User.id'));
		 
           Configure::write('debug',0); // Otherwise we cannot use this method while developing
            
            //$membros = $this->Membro->find('all');
           $cursos = $this->Curso->find('all',array('order'=> array ('Curso.name ASC')));
           $listas = array();
           foreach( $cursos as $m){
                $lista = array();
                $lista[] =$m["Curso"]["id"];
				$lista[] =$m["Curso"]["name"];
                $lista[] =$m["Grauacademico"]["name"];
                $lista[] =$m["Tipocurso"]["name"];
                $listas[] =$lista;
            }
           // $this->set('cursos',$this->Curso->find('all'));
           $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
        }
}
?>