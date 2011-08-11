<?php
class TurmasController extends AppController {

	var $name = 'Turmas';

	function index() {
		$this->Turma->recursive = 0;	
		$this->set('turmas', $this->paginate());
	}

	function view($id = null) {
		   App::Import('Model','Logmv');
	       $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		
		if (empty($this->data)) {
			$this->data = $this->Turma->read(null, $id);
			//$logmv->logview(8,$this->Session->read('Auth.User.id'),$id,$this->data["Disciplina"]["name"]);
		}
		$alunosInscritos= $this->Turma->getAlunosInscritos($this->data['Turma']['id']);	
		$alunosAprovados= $this->Turma->getAlunosAprovados($this->data['Turma']['id']);
		$alunosReprovados= $this->Turma->getAlunosReprovados($this->data['Turma']['id']);
		$somaNotaFinal= $this->Turma->getSomaNotaFinal($this->data['Turma']['id']);
	

		$mediaTurma= (int)$somaNotaFinal[0][0]['sum(notafinal)']/(int)$alunosInscritos[0][0]['count(*)'];
				
        $estados=array('1'=>'Activa','2'=>'Cancelada','3'=>'Fechada');
		$anosemestrecurr = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4');
        $anolectivos = $this->Turma->Anolectivo->find('list');
		$cursos = $this->Turma->Curso->find('list');
		$planoestudos = $this->Turma->Planoestudo->find('list');
		$turnos = $this->Turma->Turno->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list');
		$funcionarios = $this->Turma->Funcionario->find('list');
        $disciplinas = array();
        $this->set('disciplinas',$disciplinas);
		$this->set(compact('t0009anolectivos','estados','alunosInscritos','somaNotaFinal','alunosReprovados','alunosAprovados','mediaTurma','anosemestrecurr', 't0003cursos', 't0005planoestudos', 'tg0012turnos', 't0004disciplinas', 'funcionarios'));
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
                $this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
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
		$this->set(compact('t0009anolectivos','estados','anosemestrecurr', 't0003cursos', 't0005planoestudos', 'tg0012turnos', 't0004disciplinas', 'funcionarios'));
	}

	function gerar_turmas(){
		if(!empty($this->data)){
			$this->Turma->criarTurmas($this->data['Turma']['ano_lectivo']);
			
			$this->Session->setFlash('As Turmas foram Geradas com Sucesso','sucesso');
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
                    $this->data[$disc_id][$disc_id]['Turma']['tg0012turno_id']=$turma_base[0]['Turma']['tg0012turno_id'];
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
            $this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
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
		App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Turma->save($this->data)) {
			    
				$this->Session->setFlash('** Dados Editados com Sucesso **','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Turma->read(null, $id);
			//$logmv->logUpdate(8,$this->Session->read('Auth.User.id'),$id,$this->data["Turma"]["name"]);
		}
		$alunosInscritos= $this->Turma->getAlunosInscritos($this->data['Turma']['id']);	
		$alunosAprovados= $this->Turma->getAlunosAprovados($this->data['Turma']['id']);
		$alunosReprovados= $this->Turma->getAlunosReprovados($this->data['Turma']['id']);
		$somaNotaFinal= $this->Turma->getSomaNotaFinal($this->data['Turma']['id']);
	

		$mediaTurma= (int)$somaNotaFinal[0][0]['sum(notafinal)']/(int)$alunosInscritos[0][0]['count(*)'];
				
        $estados=array('1'=>'Activa','2'=>'Cancelada','3'=>'Fechada');
		$anosemestrecurr = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4');
        $anolectivos = $this->Turma->Anolectivo->find('list');
		$cursos = $this->Turma->Curso->find('list');
		$planoestudos = $this->Turma->Planoestudo->find('list');
		$turnos = $this->Turma->Turno->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list');
		$funcionarios = $this->Turma->Funcionario->find('list');
        $disciplinas = array();
        $this->set('disciplinas',$disciplinas);
		$this->set(compact('t0009anolectivos','estados','alunosInscritos','somaNotaFinal','alunosReprovados','alunosAprovados','mediaTurma','anosemestrecurr', 't0003cursos', 't0005planoestudos', 'tg0012turnos', 't0004disciplinas', 'funcionarios'));
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
			$this->Session->setFlash('** Dados Deletados com Sucesso **','sucesso');
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
               $this->Session->setFlash('** Dados Editados com Sucesso **','sucesso');
			  $this->redirect(array('action' => 'index'));
			
		      }
			$anolectivos = $this->Turma->Anolectivo->find('list');
			$cursos = $this->Turma->Curso->find('list');		
			$this->set(compact('t0009anolectivos','t0003cursos'));
		 }
}
?>