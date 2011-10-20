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
 
 
class TurmasController extends AppController {

	var $name = 'Turmas';
	
	
	function index() {
		
		$this->Turma->recursive = 2;
		$grupo = $this->Session->read('Auth.User.group_id');
		
		$conditions = array();
		if($grupo==4){
			$docente_id = $this->Turma->Docente->getByUserID($this->Session->read('Auth.User.id'));
			$conditions['Turma.docente_id']=$docente_id;
		}	
		$this->paginate = array('conditions'=>$conditions);
		$this->set('turmas', $this->paginate());
	}

	function view($id = null) {
		   App::Import('Model','Logmv');
	       $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		
		if (empty($this->data)) {
			$this->data = $this->Turma->read(null, $id);
			
		}
		
		$this->loadModel('Planoestudoano');
		$planoestudoanos = $this->Planoestudoano->find('first',array('conditions'=>array('planoestudo_id'=>$this->data['Planoestudo']['id'],'disciplina_id'=>$this->data['Turma']['disciplina_id'])));
		
		
		$anocurricular = $planoestudoanos['Planoestudoano']['ano'];
		$semestrecurricular = $planoestudoanos['Planoestudoano']['semestre'];
		
		$this->loadModel('Turmatipoavaliacao');
		$turmatipoavaliacaos = $this->Turmatipoavaliacao->find('all',array('conditions'=>array('turma_id'=>$this->data['Turma']['id'])));	
        $estados=array('1'=>'Activa','2'=>'Cancelada','3'=>'Fechada');
		$anosemestrecurr = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4');
        $anolectivos = $this->Turma->Anolectivo->find('list');
		$cursos = $this->Turma->Curso->find('list');
		$planoestudos = $this->Turma->Planoestudo->find('list');
		$turnos = $this->Turma->Turno->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list');
		$docentes = $this->Turma->Docente->find('list');
        $disciplinas = array();
        $this->set('turma',$this->data);
		$this->set(compact('turmatipoavaliacaos','anolectivos','estados','mediaTurma','anosemestrecurr', 'cursos', 'planoestudos', 'turnos', 'disciplinas', 'docentes','anocurricular','semestrecurricular'));
		}

	/**
         * 
     * @todo Rever esta funcao para casos em que temos muitos utilizadores por causa do last ID
         */
        function add() {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!empty($this->data)) {

			$this->Turma->create();
			
		    $this->data["Turma"]["estado"] ='1';

			if ($this->Turma->save($this->data)) {
                $this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
				$this->redirect(array('action' => 'add_disciplinas',$this->Turma->getLastInsertID()));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 't0010turma'));
			}
			}
		$estados=array('1'=>'Activa','2'=>'Cancelada','3'=>'Fechada');
		
				
		$anosemestrecurr = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4');
        $anolectivos = $this->Turma->Anolectivo->find('list');
		$cursos = $this->Turma->Curso->find('list',array('order'=> array ('name ASC')));
		
		$planoestudos = $this->Turma->Planoestudo->find('list');
		
		$turnos = $this->Turma->Turno->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list');
		$funcionarios = $this->Turma->Funcionario->find('list');
        $disciplinas = array();
        $this->set('disciplinas',$disciplinas);
		$this->set(compact('anolectivos','estados','anosemestrecurr', 't0003cursos', 't0005planoestudos', 'turnos', 't0004disciplinas', 'funcionarios'));
	}

	function gerar_turmas(){
		if(!empty($this->data)){
			$this->Turma->criarTurmas($this->data['Turma']['ano_lectivo']);
			
			$this->Session->setFlash('As Turmas foram Geradas com Sucesso','flashok');
			$this->redirect(array('action' => 'index'));	
		}
		
		
		$anolectivos = $this->Turma->Anolectivo->find('list');
		
		$this->set(compact('anolectivos'));
		
	}

    function add_disciplinas($turma_id=null){
        App::Import('Model','Planoestudo');
        $planoestudos = new Planoestudo;
        
		
		
        App::Import('Model','Planoestudoano');
        $planoestudoanos = new Planoestudoano;
        $this->Turma->recursive = 0;
		
		
        if (!empty($this->data)) {
            $turma_base = $this->Turma->find('all',array('conditions'=>array('Turma.id'=>$turma_id),'recursive'=>-1));
            //$turma_base = $this->Turma->find('all',array('conditions'=>array('Turma.id'=>$this->data['Turma']['turma_id']),'recursive'=>-1));
			
			//var_dump($turma_base);
			//var_dump($this->data);
			
			if(!isset($this->data['disc_id'])){}
			else{
			
			
            foreach($this->data['disc_id'] as $disc_id){
                
                if(!isset($this->data[$disc_id][$disc_id]['Turma']['t0004disciplina_id'])){}
                else{
                    $this->data[$disc_id][$disc_id]['Turma']['t0009anolectivo_id']=$turma_base[0]['Turma']['t0009anolectivo_id'];
                    $this->data[$disc_id][$disc_id]['Turma']['t0003curso_id']=$turma_base[0]['Turma']['t0003curso_id'];
                    $this->data[$disc_id][$disc_id]['Turma']['t0005planoestudo_id']=$turma_base[0]['Turma']['t0005planoestudo_id'];
                    $this->data[$disc_id][$disc_id]['Turma']['turno_id']=$turma_base[0]['Turma']['turno_id'];
                    $this->data[$disc_id][$disc_id]['Turma']['funcionario_id']=$this->data[$disc_id][$disc_id]['Turma']['docente'];
                    $this->data[$disc_id][$disc_id]['Turma']['semestrecurricular']=$turma_base[0]['Turma']['semestrecurricular'];
                    $this->data[$disc_id][$disc_id]['Turma']['anocurricular']=$turma_base[0]['Turma']['anocurricular'];
					 $this->data[$disc_id][$disc_id]['Turma']['estado']='1';
                    $disciplina_name =  $this->Turma->Disciplina->find('list',array('conditions'=>array('Disciplina.id'=>$disc_id)));
                    //$this->data[$disc_id][$disc_id]['Turma']['anocurricular']['name']=$disciplina_name['disc_id'];
                         
					//var_dump($disciplina_name);
   
					$this->data[$disc_id][$disc_id]['Turma']['name']=$disciplina_name[$disc_id];   
					//var_dump($this->data[$disc_id][$disc_id]['Turma']['name']);
					
					//die();
					$this->Turma->create();
                    if ($this->Turma->save( $this->data[$disc_id][$disc_id])) {
                        //$this->Turma->create();
						//var_dump($this->data[$disc_id][$disc_id]);
                    } else {
                        $this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 't0010turma'));
                    }
                }
                    
            }
			//die();
			}
			
           $this->Turma->delete($turma_id);
            $this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
            $this->redirect(array('action' => 'index'));
        }
        $turma=$this->Turma->find('all',array('conditions'=>array('Turma.id'=>$turma_id),'recursive'=>-1));
        
		
        //$plano_estudos = $planoestudos->find('all',array('conditions'=>array('Planoestudo.id'=>$turma[0]['Turma']['t0005planoestudo_id']),'recursive'=>-1));

        $disciplinas = $planoestudoanos->find('all',array('conditions'=>array('t0005planoestudo_id'=>$turma[0]['Turma']['t0005planoestudo_id'],'ano'=>$turma[0]['Turma']['anocurricular'],'semestre'=>$turma[0]['Turma']['semestrecurricular'])));
		
       // var_dump($disciplinas);
		 
	   $funcionarios = $this->Turma->Funcionario->find('list',array('conditions'=>array('tg0011tipofuncionario_id'=> 1)));
	   
	   	   
        $this->set(compact('disciplinas','funcionarios'));
        $this->set('turma_id',$turma_id);


     
    }

	function edit($id = null) {
		$this->Turma->id = $id;
		if(!$this->Turma->exists()){
			throw new NotFoundException(__('Turma Invalida'));
		}

		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this->Turma->save($this->request->data)) {
			    
				$this->Session->setFlash('** Dados Editados com Sucesso **','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}


		if (empty($this->data)) {
			$this->data = $this->Turma->read(null, $id);
			//$logmv->logUpdate(8,$this->Session->read('Auth.User.id'),$id,$this->data["Turma"]["name"]);
		}
		
	

		
		
		$this->loadModel('Planoestudoano');
		$planoestudoanos = $this->Planoestudoano->find('first',array('conditions'=>array('planoestudo_id'=>$this->data['Planoestudo']['id'],'disciplina_id'=>$this->data['Turma']['disciplina_id'])));
		var_dump($planoestudoanos);
		
		$anocurricular = $planoestudoanos['Planoestudoano']['ano'];
		$semestrecurricular = $planoestudoanos['Planoestudoano']['semestre'];
				
        $estados=array('1'=>'Activa','2'=>'Cancelada','3'=>'Fechada');
        $anolectivos = $this->Turma->Anolectivo->find('list');
		$cursos = $this->Turma->Curso->find('list');
		$planoestudos = $this->Turma->Planoestudo->find('list');
		$turnos = $this->Turma->Turno->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list');
		$docentes = $this->Turma->Docente->find('list');
		$assistentes = $this->Turma->Docente->find('list');
        $disciplinas = array();
        $this->set('disciplinas',$disciplinas);
		$this->set(compact('anolectivos','estados','semestrecurricular','anocurricular', 'cursos', 'planoestudos', 'turnos', 'disciplinas', 'docentes','assistentes'));
		
	}

	function delete($id = null) {
		App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0010turma'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Turma->delete($id)) {
		    //$logmv->logDelete(8,$this->Session->read('Auth.User.id'),$id,$this->data["Turma"]["name"]);
			$this->Session->setFlash('** Dados Deletados com Sucesso **','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Turma'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','manutencao');
        }



        function update_plano_estudos(){
            
            $curso = $this->data["Turma"]["t0003curso_id"];            
            $planoestudos = $this->Turma->Planoestudo->find('list',array('conditions'=>array('t0003curso_id'=>$curso)));			
            $this->set('planoestudos',$planoestudos);
            $this->layout = 'ajax';
        }
		

        function update_disciplinas(){
            App::Import('Model','Planoestudoano');
            $planoestudoanos = new Planoestudoano;
            
            $plano_estudo = $this->data["Turma"]["t0005planoestudo_id"];
            $ano_lectivo_id = $this->data["Turma"]["t0009anolectivo_id"];
            $this->Turma->Anolectivo->recursive = 0;
            $ano_lectivo = $this->Turma->Anolectivo->findById($ano_lectivo_id);
           $semestre = $this->data["Turma"]["semestre"];
            $num_semestre = $ano_lectivo['Anolectivo']['num_semestre'];
            $semestres=array();
            for($i=1;$i<=$num_semestre;$i++){
                $semestres[]=$i;
            }
            $disciplinas2 = $planoestudoanos->find('list',array('fields'=>'t0004disciplina_id','conditions'=>array('t0005planoestudo_id'=>$plano_estudo,"semestre"=>$semestre)));
           
		   //var_dump($disciplinas2);
		   
            $disciplinas = $this->Turma->Disciplina->find('list',array('conditions'=>array('id'=>$disciplinas2)));
            $funcionarios = $this->Turma->Funcionario->find('list');
            $this->set(compact('funcionarios'));
            $this->set('disciplinas',$disciplinas);
            $this->set('semestres',$semestres);
          
            $this->layout = 'ajax';
        }
        // relatorio
        function pdf_index(){
            Configure::write('debug',0); // Otherwise we cannot use this method while developing
		    App::Import('Model','Logmv');
	        $logmv = new Logmv;
            $turma = $this->Turma->find('all');
            $listas = array();
			//var_dump($turma);
			$id = 1;
            foreach( $turma as $m){
                $lista = array();
                $lista[] =$id;
				$lista[] =$m["Anolectivo"]["codigo"];
                $lista[] =$m["Turma"]["name"];
                $lista[] =$m["Planoestudo"]["name"];
				$lista[] =$m["Turma"]["anocurricular"];
                $lista[] =$m["Turma"]["semestrecurricular"];
                $lista[] =$m["Turno"]["name"];
				
				
				if($m["Turma"]["estado"]==1){$estado = 'Activa';}
				if($m["Turma"]["estado"]==2){$estado = 'Cancelada';}
				if($m["Turma"]["estado"]==3){$estado = 'Fechada';}
				$lista[] =$estado;
				
                $listas[] =$lista;
				
			$id++;
			}
           // $this->set('cursos',$this->Curso->find('all'));
		   
		   //var_dump($listas);
            $this->set('lista',$listas);
			
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
            $this->render();
        }
		
		 function fecho_da_turma() {
		 	App::Import('Model','Turma');
            $turma = new Turma;
			App::Import('Model','Logmv');
	        $logmv = new Logmv;
			  if(!empty($this->data) && $this->data["Turma"]["t0009anolectivo_id"]!= "")
			  {
			 $turmas = $turma->upDateTurma($this->data["Turma"]["	t0009anolectivo_id"],$this->data["Turma"]["t0003curso_id"]);
			//var_dump($this->data["Turma"]["t0009anolectivo_id"]);
               //$logmv->logUpdate(9,$this->Session->read('Auth.User.id'),$this->data["Turma"]["t0003curso_id"],"Feicho da Turma");
               $this->Session->setFlash('** Dados Editados com Sucesso **','flashok');
			  $this->redirect(array('action' => 'index'));
			
		      }
			$anolectivos = $this->Turma->Anolectivo->find('list');
			$cursos = $this->Turma->Curso->find('list');		
			$this->set(compact('t0009anolectivos','t0003cursos'));
		 }
}
?>