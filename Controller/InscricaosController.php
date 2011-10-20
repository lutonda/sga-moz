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
 

/**
 * Modelos incluidos
 * @Todo Incluir os modelos comuns aqui
 */

 /**
 *Controller inscrições
 *
 * Controller para o processamento das inscrições dos alunos
 * Executa todos os detalhes relacionados ás inscrições dos alunos no sistema
  * A maior parte das validações e filtragens de dados ocorrem aqui
 * 
 *
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @link          http://book.cakephp.org/view/1000/Models
  * @Todo Colocar o link para a documentação aqui
 */ 
class InscricaosController extends AppController {

	var $name = 'Inscricaos';
   
	function index() {    		
		$this->Inscricao->recursive = 2;			
		$this->set('inscricaos', $this->paginate());
		
}


	function view($id = null) {
	         App::Import('Model','Logmv');
	        $logmv = new Logmv;
			App::Import('Model','Matricula');
            $matriculas = new Matricula;
			
			App::Import('Model','Turma');
            $turma = new Turma;
			
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
	//	$this->set('t0013inscricao', $this->Inscricao->read(null, $id));
				if (empty($this->data)) {
			$this->data = $this->Inscricao->read(null, $id);
			//$logmv->logview(11,$this->Session->read('Auth.User.id'),$id,$this->data["Inscricao"]["Aluno_id"]);
		
		}
		
		//var_dump($this->data);
		$alunos = $this->Inscricao->Aluno->find('list');
		$turmas = $this->Inscricao->Turma->find('list');
		$epocaavaliacaos = $this->Inscricao->Epocaavaliacao->find('list');		
		//$notafrequencia = $this->data['Inscricao']['notafrequencia'];
		
		
		$estadoinscricao = $this->Inscricao->Estadoinscricao->find('list');
		
		$curso = $turma->getCursoAluno($this->data['Inscricao']['t0010turma_id']);
		$curso1 = $curso[0]['tc']['name'];
		
		$docente = $turma->getDocente($this->data['Inscricao']['t0010turma_id']);
		$docente1 = $docente[0]['tf']['name'];
		
		$assistente = $turma->getAssistente($this->data['Inscricao']['t0010turma_id']);
		$assistente1 = $assistente[0]['tf']['name'];
		
		$plano = $turma->getPlanoEstudo($this->data['Inscricao']['t0010turma_id']);
		$plano1 = $plano[0]['tp']['name'];

		$turma = $turma->getTurma($this->data['Inscricao']['t0010turma_id']);
		$turma1 = $turma[0]['tt']['name'];		
	
		$turno = $turma->getTurno($this->data['Inscricao']['t0010turma_id']);
		$turno1 = $turno[0]['ttu']['name'];
	
		$anoCurricular = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
		$anoCurricular1 = $anoCurricular[0]['tt']['anocurricular'];

		$semestreCurricular = $turma->getSemestreCurricular($this->data['Inscricao']['t0010turma_id']);
		$semestreCurricular1 = $semestreCurricular[0]['tt']['semestrecurricular'];
		
		$anoLectivo = $turma->getAnoLectivo($this->data['Inscricao']['t0010turma_id']);
		$anoLectivo1 = $anoLectivo[0]['tal']['codigo'];

		
		$this->set(compact('Alunos', 't0010turmas', 'epocaavaliacaos', 'tg0020estadoinscricao','funcionarios','curso1','docente1','assistente1', 'plano1','turma1', 'turno1','anoCurricular1','semestreCurricular1','anoLectivo1'));
	}

	function add() {
	        App::Import('Model','Turma');
            $turma = new Turma;
			 App::Import('Model','Matricula');
            $matriculas = new Matricula;
			
		   // $ano = $this->data['Inscricao']['anocurricular'];
			//var_dump($ano);
		if (!empty($this->data)) {
		    $this->data["Inscricao"]['estadoinscricao_id'] = '1';
			$this->Inscricao->create();
			if ($this->Inscricao->save($this->data)) {
			//$logmv->logInsert(11,$this->Session->read('Auth.User.id'),$this->Inscricao->getLastInsertID(),$this->data["Inscricao"]["Aluno_id"]);
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');}
		}
		
		//$alunos = $matriculas->getAlunosForMatricula1();	
		$alunos = $matriculas->getAlunosForMatricula1();	
		$turmas = $this->Inscricao->Turma->find('list',array('order'=> array ('name ASC')));
        $disciplinas = $this->Inscricao->Turma->Disciplina->find('list',array('order'=> array ('name ASC')));
		$epocaavaliacaos = $this->Inscricao->Epocaavaliacao->find('list');
		$anolectivos = $turma->Anolectivo->find('list');
		// Anolectivos = $turma->find('all',array('id'=>$this->data['Inscricao']['t0010turma_id']));

		$curso = $turma->getCursoAluno($this->data['Inscricao']['turma_id']);
		$curso1 = $curso[0]['tc']['name'];
		
		$this->set(compact('Alunos', 'turmas', '$disciplinas','epocaavaliacaos','anolectivos','curso1'));
	}
	

    function add_turmas($inscricao_id=null){
           // App::Import('Model','Turma');
            //$turma = new Turma;
        if (!empty($this->data)) {
            
            
            $insc_base = $this->Inscricao->find('all',array('conditions'=>array('Inscricao.id'=>$this->data['Inscricao']['inscricao_id']),'recursive'=>-1));
            
            //var_dump($this->data['Inscricao']);
            $inscricao_id = $this->data['Inscricao']['inscricao_id'];
            unset($this->data['Inscricao']['inscricao_id']);
		    foreach($this->data['Inscricao'] as $insc){
				
                if(!isset($insc['Inscricao']) or $insc['Inscricao']==null){}
                else{
                $inscricao = array();
                $inscricao['Inscricao']['t0010turma_id']=$insc['Inscricao']['turma'];
                $inscricao['Inscricao']['Aluno_id'] = $insc_base[0]['Inscricao']['Aluno_id'];
                $inscricao['Inscricao']['tg0020estadoinscricao_id']=1;
                if ($this->Inscricao->save( $inscricao)) {
                   $this->Inscricao->create();
                    } else {
                       $this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 't0010turma'));
                   }
            }
            }
            //$this->Inscricao->delete($inscricao_id);
            $this->Session->setFlash('** Dados Cadastrado com Sucesso **','flashok');
            $this->redirect(array('action' => 'index'));
            
        }
        $this->set('inscricao_id',$inscricao_id);
          
		   //var_dump(Anolectivos);
		
        //$turmas = $this->Inscricao->Turma->find('list',array('conditions'=>array('anocurricular'=>$ano)),array('fields'=>array('Turma.id','Turma.name')));
		$turmas = $this->Inscricao->Turma->find('list',array('fields'=>array('Turma.id','Turma.name')));
		
		
        $this->set(compact('Alunos', 't0010turmas', '$disciplinas','epocaavaliacaos'));
    }
	
	
	
	function edit($id = null) {
			
			App::Import('Model','Turma');
            $turma = new Turma;
			App::Import('Model','Logmv');
	       $logmv = new Logmv;
			
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		
		if (!empty($this->data)) {
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}
		if (empty($this->data)) {
			$this->data = $this->Inscricao->read(null, $id);
			 //$logmv->logUpdate(11,$this->Session->read('Auth.User.id'),$id,$this->data["Inscricao"]["Aluno_id"]);
		
		}
		
		//var_dump($this->data);
		$alunos = $this->Inscricao->Aluno->find('list');
		$turmas = $this->Inscricao->Turma->find('list');
		$epocaavaliacaos = $this->Inscricao->Epocaavaliacao->find('list');		
		//$notafrequencia = $this->data['Inscricao']['notafrequencia'];
		
		$estadoinscricao = $this->Inscricao->Estadoinscricao->find('list');
		
		$curso = $turma->getCursoAluno($this->data['Inscricao']['t0010turma_id']);
		$curso1 = $curso[0]['tc']['name'];
		
		$docente = $turma->getDocente($this->data['Inscricao']['t0010turma_id']);
		$docente1 = $docente[0]['tf']['name'];
		
		$assistente = $turma->getAssistente($this->data['Inscricao']['t0010turma_id']);
		$assistente1 = $assistente[0]['tf']['name'];
		
		$plano = $turma->getPlanoEstudo($this->data['Inscricao']['t0010turma_id']);
		$plano1 = $plano[0]['tp']['name'];

		$turma = $turma->getTurma($this->data['Inscricao']['t0010turma_id']);
		$turma1 = $turma[0]['tt']['name'];		
	
		$turno = $turma->getTurno($this->data['Inscricao']['t0010turma_id']);
		$turno1 = $turno[0]['ttu']['name'];
	
		$anoCurricular = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
		$anoCurricular1 = $anoCurricular[0]['tt']['anocurricular'];

		$semestreCurricular = $turma->getSemestreCurricular($this->data['Inscricao']['t0010turma_id']);
		$semestreCurricular1 = $semestreCurricular[0]['tt']['semestrecurricular'];
		
		$anoLectivo = $turma->getAnoLectivo($this->data['Inscricao']['t0010turma_id']);
		$anoLectivo1 = $anoLectivo[0]['tal']['codigo'];

		
		$this->set(compact('Alunos', 't0010turmas', 'epocaavaliacaos', 'tg0020estadoinscricao','funcionarios','curso1','docente1','assistente1', 'plano1','turma1', 'turno1','anoCurricular1','semestreCurricular1','anoLectivo1'));
	}

	/**
	 * Inscreve os alunos nas turmas que ira frequentar
	 * O diferencial desta funcao é que ela é usada no Modal na tabela dos alunos
	 * Isso torna a aplicação mais eficiente, além de ser relativamente mais charmoso :-)
	 *
	 * @param int $aluno_id o ID do aluno a ser inscrito
	 * @return void
	 * @access public
	 * @link http://book.cakephp.org/view/1031/Saving-Your-Data
	 * @Todo colocar o link para a documentação aqui
	 */	
	function inscrever_aluno($aluno_id){
		
		$this->loadModel('Turma');
		$this->loadModel('Aluno');
		$this->loadModel('Pagamento');
		$this->loadModel('Matricula');
		
		$aluno = $this->Aluno->findById($aluno_id);
		if(!empty($this->data)){
			
			//Primeiro Devemos actualizar a matricula
			$this->Matricula->recursive = -1;
			$matricula = $this->Matricula->findByAlunoId($aluno_id);
			$matricula_nova=array('Matricula'=>array('aluno_id' =>$matricula['Matricula']['aluno_id'],'curso_id'=>$matricula['Matricula']['curso_id'],'planoestudo_id'=>$matricula['Matricula']['planoestudo_id'],'data'=>date('Y-m-d'),'estadomatricula_id'=>1,'user_id'=>$this->Session->read('Auth.User.id'),'anolectivo_id'=>4,'turno_id'=>$matricula['Matricula']['turno_id']));
			$this->Matricula->create();
			$this->Matricula->save($matricula_nova);
				
			if($this->Inscricao->saveAll($this->data['Inscricao'])){
				$this->Session->setFlash(sprintf(__('O Aluno %s Foi inscrito com sucesso',true),$aluno['Aluno']['codigo']."-".$aluno['Aluno']['name']),'flashok');
				$this->Pagamento->recursive = -1;
				$this->Pagamento->gerarPagamentos(4,$aluno_id);
				
				$pagamento_inscricao = $this->Pagamento->find('first',array('conditions'=>array('Pagamento.aluno_id'=>$aluno_id,'Pagamento.tipopagamento_id'=>2)));
				
				$pagamento_inscricao['Pagamento']['estadopagamento_id']=2;
				$this->Pagamento->save($pagamento_inscricao);
				var_dump($pagamento_inscricao);
				
				//$this->redirect(array('controller'=>'alunos','action' => 'index'));				
			}
			
		}
		
		$turmas = $this->Turma->getAllByAluno($aluno_id);
		$this->set('aluno_id',$aluno_id);	
		$this->set(compact('turmas'));
		
	}
	function delete($id = null) {
	    App::Import('Model','Logmv');
	    $logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0013inscricao'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Inscricao->delete($id)) {
		//$logmv->logDelete(11,$this->Session->read('Auth.User.id'),$id,'Delete Inscricao');
			$this->Session->setFlash('** Dados Deletados com Sucesso **','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Inscricao'));
		$this->redirect(array('action' => 'index'));
	}
	
	
        function beforeRender(){
            $this->set('current_section','manutencao');
        }

		
		
        function ajax_get_plano_estudos(){

			
            $aluno_id = $this->data['Inscricao']['Aluno_id'];
            $plano_estudo = $this->Inscricao->Aluno->getPlanoEstudoCorrente($aluno_id);
            $turmas = $this->Inscricao->Aluno->getAllTurmasByEstado($plano_estudo,$aluno_id);			
            		
            $this->layout = 'ajax';
			
        }
		
		
		function update_curso_aluno(){
			App::Import('Model','Matricula');
			App::Import('Model','Turma');
            $turma = new Turma;
            $matriculas = new Matricula;
			
			//$aluno = $this->data["Inscricao"]["Aluno_id"];
			 $curso = $matriculas->find('all',array('conditions'=>array('Aluno_id'=>$this->data['Inscricao']['Aluno_id'])));                 
			
			$turmas = $turma->find('list',array('conditions'=>array('t0003curso_id'=>$curso[0]['Curso']['id'])));
       

			$curso = $curso[0]['Curso'];	
			$this->set('curso',$curso);				
			$this->set('turmas_ano',$turmas);		
			$this->layout = 'ajax';
		}	
		
		function update_plano_aluno(){
			App::Import('Model','Matricula');
                         $matriculas = new Matricula;
			
			$curso = $matriculas->find('all',array('conditions'=>array('Aluno_id'=>$this->data['Inscricao']['Aluno_id'])));		
			$plano = $curso[0]['Planoestudo'];		
			$this->set('plano',$plano);
			$this->layout = 'ajax';
		}	
	
		function update_turma_aluno(){
			
			App::Import('Model','Turma');
            $turma = new Turma;
			$turmas = $turma->find('list',array('conditions'=>array('t0009anolectivo_id'=> $this->data["Inscricao"][      "t0009anolectivo_id"]),'order'=> array ('name ASC'),'estado'=>1));
		    //var_dump($this->data);			
			$this->set('turmas_ano',$turmas);		
			$this->layout = 'ajax';
		}

		
		function update_ano_curricular()
                {
			App::Import('Model','Turma');
                        $turma = new Turma;
                        $anolectivos = $turma->find('all',array('id'=>$this->data['Inscricao']['t0010turma_id']));
                        //$ano = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
			$ano = $anolectivos[0]['Turma']['anocurricular'];
			//var_dump($ano);
			$this->set('$t0009anolectivo',$ano);
			$this->layout = 'ajax';
		}


		function update_turma_turno(){
			App::Import('Model','Turma');
                        $turma = new Turma;

                       //var_dump($this->data['Inscricao']);
			//$turno_id = $turma->find('list',array('conditions'=>array('id'=>$this->data['Inscricao']['t0010turma_id'])));;
                        $turno_id = $turma->getTurnoTurma($this->data['Inscricao']['t0010turma_id']);

                        $turno=$turno_id[0]['ttu']['name'];
                        //var_dump($turno);
                        $this->set('turno',$turno);
			$this->layout = 'ajax';
		}


		
		
		function pdf_index(){
            Configure::write('debug',0); // Otherwise we cannot use this method while developing
            $incricao = $this->Inscricao->find('all');
			
		App::Import('Model','Inscricao');
	    $inscricao = new Inscricao;
        App::Import('Model','Logmv');
	    $logmv = new Logmv;
		$t0013inscricoes1 = $inscricao->find('all');

		for($i=0; $i<count($t0013inscricoes1); $i++){
			$t0009anolectivo = $inscricao->getAnolectivo($t0013inscricoes1[$i]['Inscricao']['t0010turma_id']);			
			$codigo[$i] = $t0009anolectivo[0]['tal']['codigo'];
		}
			
			
            $listas = array();
			//var_dump($incricao);
            foreach( $incricao as $m){
               $lista = array();
               $lista[] =$m['Inscricao']['id'];
			   
			   
			   
			   
			  $lista[] =$m['Anolectivo']['codigo'];
			   
			   $lista[] =$m['Aluno']['name'];
               $lista[] =$m['Turma']['name'];
			   $lista[] =$m["Turma"]["anocurricular"].' / '.$m["Turma"]["semestrecurricular"];
			   
			   	if($m['Turma']['turno_id'] == 1)
				{ $turno = "Diurno";}
				if($m['Turma']['turno_id'] == 2)
				{ $turno = "Pos-Laboral";}
				if($m['Turma']['turno_id'] == null)
				{ $turno = "Sem turno";}
			   $lista[] =$turno;
			   
				if($m['Inscricao']['tg0020estadoinscricao_id'] == 1)
				{ $estado1 = "Inscrito";}
				if($m['Inscricao']['tg0020estadoinscricao_id'] == 2)
				{ $estado1 = "Aprovado";}
				if($m['Inscricao']['tg0020estadoinscricao_id'] == 3)
				{ $estado1 = "Reprovado";}
                if($m['Inscricao']['tg0020estadoinscricao_id'] == 4)
				{ $estado1 = "Cancelada";}
				if($m['Inscricao']['tg0020estadoinscricao_id'] == 5)
				{ $estado1 = "Anulada";}
				if($m['Inscricao']['tg0020estadoinscricao_id'] == 6)
				{ $estado1 = "Excluido";}
                if($m['Inscricao']['tg0020estadoinscricao_id'] == 7)
				{ $estado1 = "Admitido";}
				if($m['Inscricao']['tg0020estadoinscricao_id'] == 8)
				{ $estado1 = "Dispensado";}
				if($m['Inscricao']['tg0020estadoinscricao_id'] == null)
				{ $estado1 = "Sem estado";}
			   $lista[] =$estado1;
              //  $lista[] =$m["Planoestudo"]["name"];
              //  $lista[] =$m["Turma"]["anosemestrecurr"];
              //  $lista[] =$m["Turno"]["name"];
			   $listas[] =$lista;
            }
           // $this->set('cursos',$this->Curso->find('all'));
		   //var_dump($listas);
		   $this->set('codigo',$codigo);
            $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
            $this->render();
        }
}
?>