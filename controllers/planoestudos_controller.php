<?php
class PlanoestudosController extends AppController {

	var $name = 'Planoestudos';

	function index() {
		$this->Planoestudo->recursive = 0;
		$this->set('planoestudos', $this->paginate());
	}

	function view($id = null) {
            App::Import('Model','Planoestudoano');
            App::Import('Model','Disciplina');
            App::Import('Model','Logmv');
	        $logmv =new Logmv;
            $planoestudoanos = new Planoestudoano;
            $disciplina = new Disciplina;

            if (!$id) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('planoestudo', $this->Planoestudo->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->Planoestudo->read(null, $id);
			//var_dump($this->data);
			////////$logmv->logview(5,$this->Session->read('Auth.User.id'),$this->data["Planoestudo"]["id"],$this->data["Planoestudo"]["name"]);
		}

                $disciplinas = $this->Planoestudo->getAllDisciplinasByPlanoEstudo($id);


                $disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($id,1,1);
                $this->set('pdisciplina',$disciplinas_precedencia);
                $this->set('plano_id',$id);
                $cursos = $this->Planoestudo->Curso->find('list');
				$this->set(compact('cursos','disciplinas','anos','semestres','disciplinas','pobrigatorias','popcionais'));
	}

	function add() {
	    App::Import('Model','Logmv');
	    $logmv =new Logmv;
		if (!empty($this->data)) {
			$this->Planoestudo->create();
			if ($this->Planoestudo->save($this->data)) {
			//////$logmv->logInsert(5,$this->Session->read('Auth.User.id'),$this->Planoestudo->getLastInsertID(),$this->data["Planoestudo"]["name"]);
				$this->Session->setFlash('Adicione os grupos de disciplinas deste plano. ','sucesso');
				//var_dump($this->Planoestudo->id);
				$this->redirect(array('action' => 'add_grupodisciplinas',$this->Planoestudo->id));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');
			}
		}
		$cursos = $this->Planoestudo->Curso->find('list');
		$this->set(compact('cursos'));
	}

   function add_precedencias($plano_id=null,$disc_id=null){
       App::Import('Model','Planoestudoano');
       App::Import('Model','Disciplina');
       App::Import('Model','Grupodisciplina');
       App::Import('Model','Logmv');
	        $logmv =new Logmv;
            $planoestudoanos = new Planoestudoano;
            $disciplina = new Disciplina;
            $grupodisciplina = new Grupodisciplina;



            if(!empty($this->data)){
               
                if(!empty($this->data['pobrigatorias'])){foreach($this->data['pobrigatorias'] as $po){
                    $grupod = array('planoestudo_id'=>$this->data['Planoestudo']['plano_id'],'tipo'=>'O','disciplina_id'=>$this->data['Planoestudo']['disc_id'],'grupodisciplinasprec'=>$po);
                    $grupodp = array('Grupodisciplina'=>$grupod);
                    $grupodisciplina->create();
                    $grupodisciplina->save($grupodp);
                }
                }
                if(!empty($this->data['paconselhadas'])){
                foreach($this->data['paconselhadas'] as $po){
                    $grupod = array('planoestudo_id'=>$this->data['Planoestudo']['plano_id'],'tipo'=>'A','disciplina_id'=>$this->data['Planoestudo']['disc_id'],'grupodisciplinasprec'=>$po);
                    $grupodp = array('Grupodisciplina'=>$grupod);
                    $grupodisciplina->create();
                    $grupodisciplina->save($grupodp);


                }
                }
                 $this->Session->setFlash('Dado Registado com Sucesso.Adicione Mais disciplinas.','sucesso');
				$this->redirect(array('action' => 'add_grupodisciplinas',$this->data['Planoestudo']['plano_id']));

            }

            $disciplinaq = $disciplina->query("select * from planoestudoanos where disciplina_id = {$disc_id} and planoestudo_id={$plano_id}");
			
            

            $disciplinas_precedentes = $disciplina->query("select * from planoestudoanos where planoestudo_id={$plano_id} and ano <={$disciplinaq[0]['planoestudoanos']['ano']}");

           
            $precedencias=array();
            foreach($disciplinas_precedentes as $disc){
                $disciplina_nome = $disciplina->query("select name from disciplinas where id = {$disc['planoestudoanos']['disciplina_id']}");
				//var_dump($disc['planoestudoanos']['t0004disciplina_id']);
				
                $precedencias[$disc['planoestudoanos']['disciplina_id']]['name']=$disciplina_nome[0]['disciplinas']['name'];
				
                $precedencias[$disc['planoestudoanos']['disciplina_id']]['id']=$disc['planoestudoanos']['disciplina_id'];

            }
			//var_dump($precedencias);
            $this->set('precedencias',$precedencias);
             $this->set('plano_id',$plano_id);
              $this->set('disc_id',$disc_id);
   }

    function add_grupodisciplinas($plano_id,$ano_c=1,$semestre_c=1){
        App::Import('Model','Planoestudoano');
        App::Import('Model','Disciplina');

        $planoestudoanos = new Planoestudoano;
        $disciplina = new Disciplina;
            
            //var_dump($this->Planoestudo->id);

            if(!empty($this->data)){
              
                $this->data['Planoestudoano']['planoestudo_id']=$plano_id;
                
				//var_dump($this->data['Planoestudoano']['t0005planoestudo_id']);
				
                if ($planoestudoanos->save($this->data)) {
				$this->Session->setFlash('Dado Registado com Sucesso.Adicione Mais disciplinas.','sucesso');
				$this->redirect(array('action' => 'add_precedencias',$this->Planoestudo->id,$this->data['Planoestudoano']['disciplina_id']));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');
			}
            }

            $plano_estudo=$this->Planoestudo->findById($plano_id);
            $this->data['Planoestudo']=$plano_estudo['Planoestudo'];

            

            

		$cursos = $this->Planoestudo->Curso->find('list');
        $disciplinas_excluir = array();
        $disciplinas_adicionadas = $this->Planoestudo->getAllDisciplinasByPlanoEstudo($plano_id);
		
		
        foreach($disciplinas_adicionadas as $dd){
            $disciplinas_excluir[]=$dd['d']['id'];
        }
        
        $disciplinas = $disciplina->find('list',array('conditions'=>array('NOT'=>array('id'=>$disciplinas_excluir)), 'order'=> array ('name ASC')));
       	   
	            $anos=array();
                for($i=1;$i<=$plano_estudo['Planoestudo']['duracao'];$i++){
                    $anos[$i]=$i;
                }
                for($i=1;$i<=$plano_estudo['Planoestudo']['semestresano'];$i++){
                    $semestres[$i]=$i;
                }


                $disciplinas2 = $this->Planoestudo->getAllDisciplinasByPlanoEstudo($plano_id);
                $disciplina1 = array_keys($disciplinas);
                $precedencias = $this->Planoestudo->getAllPrecedenciasByDisciplina($disciplina1[0],$plano_id);
               
                $disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($plano_id,1,1);
                $this->set('pdisciplina',$disciplinas_precedencia);
                $this->set('plano_id',$plano_id);
                $this->set(compact('cursos','disciplinas2','anos','semestres','disciplinas','pobrigatorias','popcionais'));
        }
        
        function update_disciplinas_precedencia($plano_id,$accao){

            App::Import('Model','Planoestudoano');
            $planoestudoanos = new Planoestudoano;
            $ano = $this->data['Planoestudoano']['ano'];
            $disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($plano_id,$ano,1);
            $this->set('pdisciplina',$disciplinas_precedencia);

            $this->layout = 'ajax';
        }

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Planoestudo->save($this->data)) {
			////$logmv->logUpdate(5,$this->Session->read('Auth.User.id'),$id,$this->data["Planoestudo"]["name"]);
				
				$this->Session->setFlash('Dados Registados com Sucesso','error');
                                $this->redirect(array('action' => 'add_grupodisciplinas',$id));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Planoestudo->read(null, $id);
		}
		$cursos = $this->Planoestudo->Curso->find('list');
		$this->set(compact('cursos'));
	}

	function delete($id = null) {	
        App::Import('Model','Planoestudo');
        $planoestudos = new Planoestudo;
		if (!$id) {
			$this->Session->setFlash('Invalido codigo para %s', 'error');
			$this->redirect(array('action'=>'index'));
		}
		$dados = $planoestudos->getAllMatriculasByPlanoEstudo($id);
		
		//var_dump($dados);
		
		if(empty($dados)){
		//////$logmv->logDelete(5,$this->Session->read('Auth.User.id'),$id,$this->data["Planoestudo"]["name"]);
		$planoestudoano = $planoestudos->deleteAllDisciplinasByPlanoEstudo($id);
		$planoestudogruposdisc = $planoestudos->deleteAllGrupoDiscByPlanoEstudo($id);
		if ($this->Planoestudo->delete($id)){ 
			$this->Session->setFlash('Dados deletados com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		}
		$this->Session->setFlash('Nao e possivel apagar. Matriculas Associadas','error');
		$this->redirect(array('action' => 'index'));
	}


    function  remove_disc($plano_id,$disc_id,$plano_retorno){
            App::Import('Model','Planoestudoano');
            App::Import('Model','Disciplina');

            $planoestudoanos = new Planoestudoano;
            $disciplina = new Disciplina;
            
            $planoestudoanos->query("delete from planoestudoanos where id={$plano_id}");

            $planoestudoanos->query("delete from grupodisciplinas where disciplina_id={$disc_id}");
            $this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'add_grupodisciplinas',$plano_retorno));

        
    }

        function beforeRender(){
            $this->set('current_section','pedagogica');
        }
            function pdf_index(){
            Configure::write('debug',0); // Otherwise we cannot use this method while developing
            $planoestudo = $this->Planoestudo->find('all');
            $listas = array();
            foreach( $planoestudo as $m){
                $lista = array();
                $lista[] =$m["Planoestudo"]["id"];
              	$lista[] =$m["Planoestudo"]["name"];
                $lista[] =$m["Curso"]["name"];
                $lista[] =$m["Planoestudo"]["duracao"];
                $lista[] =$m["Planoestudo"]["semestresano"];
                $listas[] =$lista;
            }
           // $this->set('cursos',$this->Curso->find('all'));
           $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
        }
       function pdf_index_planoestudo($id = null){
           // quando queremos visualizar as variaveis temos de comentar a funcao abaixo : nota bem
            Configure::write('debug',0); // Otherwise we cannot use this method while developing
            $planoestudo = $this->Planoestudo->findById($id);// quando quer trazer dados por id
            //$cursos = $this->Planoestudo->Curso->find('list',array('conditions'=>array('')));
            $disciplinas = $this->Planoestudo->getAllDisciplinasByPlanoEstudo($id);
	    $this->set(compact('cursos','disciplinas','planoestudo'));
		//var_dump($disciplinas);
		//var_dump($planoestudo);
            $listas = array();
            $teste = array();
            $teste[] = $id;
            $teste[] = $planoestudo['Planoestudo']['name'];
            $teste[] = $planoestudo['Curso']['name'];
           foreach( $disciplinas as $m){
                $lista = array();
                $lista[] = $m['d']['codigo'];
                $lista[] = $m['d']['name'];
	            $lista[] = $m['p']['ano'];
                $lista[] = $m['p']['semestre'];
				$lista[] = $m['p']['cargahorariateoricas'];
				$lista[] = $m['p']['cargahorariapraticas'];
                $listas[] =$lista;
            }




           // $teste[] = $this->data['Planoestudoano']["name"];
            
            $this->set('teste1',$teste);
            $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout,comenta quando quer visualizar as variaveis
           //$this->render('/t0005planoestudos/pdf_teste');
	       $this->render(); // comenta quando quer visualizar as variaveis
        }


        function ajax_add_obr(){
            App::import('Model','Grupodisciplina');
            $grupodisciplina = new Grupodisciplina;

            //$nova_disciplina =
           
            $a = array();
            $a["codigo"]=null;
            $a["tipo"] = "O";
            $a["disciplina_id"] = $this->data["Planoestudoano"]["disciplina_id"];
            $a["grupodisciplinasprec"] = $this->data["Planoestudoano"]["pdisciplina"];
            $precedencia = array('Grupodisciplina'=>$a);

            $grupodisciplina->save($precedencia);

            $precedencias = $grupodisciplina->find('all',array('conditions'=>array('disciplina_id'=>$a["disciplina_id"])));

            $this->set('precedencias',$precedencias);



            //var_dump($precedencias);
            $this->layout = 'ajax';
        }

        function _getAllPrecedencias(){
            
        }



}
?>