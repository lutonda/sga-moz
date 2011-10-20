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
 
 

class AvaliacaosController extends AppController {

	var $name = 'Avaliacaos';
	 var $components = array('Session');


   
	function index() {
	 		
		$this->set('avaliacaos', $this->paginate());
	}
	
	function docente_index(){
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('t0016avaliacao', $this->Avaliacao->read(null, $id));
	}

	function add() {
            App::Import('Model','Turma');
            App::Import('Model','Curso');
			App::Import('Model','Epocaavaliacao');
			App::Import('Model','Logmv');
			
	        $logmv = new Logmv;
            $curso = new Curso;
            $turma = new Turma;
			$epocaavaliacao = new Epocaavaliacao;
			
            $cursos = $curso->find('list');
           $turmas = $turma->find('list');
			$epocaavaliacaos = $epocaavaliacao->find('list');
            $anolectivos = $turma->Anolectivo->find('list');
			$planoestudos = $turma->Planoestudo->find('list');
			
		if (!empty($this->data)) {
			$this->Avaliacao->create();
			if ($this->Avaliacao->save($this->data)) {
			
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
				$this->redirect(array('action' => 'lancamento_de_notas',$this->Avaliacao->getLastInsertID(),$this->data['Avaliacao']['t0010turma']));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');
			}
		}
		$tipoavaliacaos = $this->Avaliacao->Tipoavaliacao->find('list');
		$inscricaos = $this->Avaliacao->Inscricao->find('list');

               
             

			
		$this->set(compact('tipoavaliacaos','t0013inscricaos','t0003cursos','t0010turmas','t0009anolectivos','t0005planoestudos','epocaavaliacaos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Avaliacao->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}
		if (empty($this->data)) {
			$this->data = $this->Avaliacao->read(null, $id);
		}
		$tipoavaliacaos = $this->Avaliacao->Tipoavaliacao->find('list');
		$inscricaos = $this->Avaliacao->Inscricao->find('list');
		$this->set(compact('tipoavaliacaos', 't0013inscricaos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0016avaliacao'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Avaliacao->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Avaliacao'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','avaliacao');
        }
		
		
		function registo_de_notas(){
			
		    App::Import('Model','Turma');
            App::Import('Model','Curso');
			App::Import('Model','Epocaavaliacao');
            $curso = new Curso;
            $turma = new Turma;
			$epocaavaliacao = new Epocaavaliacao;
			 //var_dump($this->data['Avaliacaos']['t0009anolectivo_id']);
			if (!empty($this->data)) {
			
			
				$this->Session->write('temporaryData',$this->data);
				$this->Session->setFlash('Lancamento de Notas. ','flashok');
				//$temporaryData = 'Mundi';
	
			//$this->data['Avaliacaos']['t0010turma_id'],$this->data['Avaliacaos']['epocaavaliacao_id'],$this->data['Avaliacaos']['t0015tipoavaliacao_id']
               //var_dump($this->data['Avaliacaos']['t0003curso_id']);
				$this->redirect(array('action' => 'lancamento_de_notas',$this->data['Avaliacaos']['t0010turma_id'],$this->data['Avaliacaos']['epocaavaliacao_id'],$this->data['Avaliacaos']['t0015tipoavaliacao_id'],$this->data['Avaliacaos']['t0005planoestudo_id'],$this->data['Avaliacaos']['t0003curso_id'],$this->data['Avaliacaos']['t0009anolectivo_id']));
			} else {
				//$this->Session->setFlash('Accao nao Permitida. Por favor tente de novo.','flasherror');
			}
			
            $cursos = $curso->find('list');
            $turmas = $turma->find('list');	
			$epocaavaliacaos = $epocaavaliacao->find('list');				
			$tipoavaliacaos = $this->Avaliacao->Tipoavaliacao->find('list');
			$anolectivos = $turma->Anolectivo->find('list');
			$planoestudos = $turma->Planoestudo->find('list');    

			$this->set(compact('tipoavaliacaos','t0003cursos','t0010turmas','t0009anolectivos','t0005planoestudos','epocaavaliacaos'));
			
        }
		
		//,$planoestudo_id,$turma_id,$epocaavaliacao_id,$tipoavaliacao_id
		function lancamento_de_notas($turma_id,$epocadeavaliacao,$tipoavaliacao,$planoestudo_id,$curso_id,$t0009anolectivo_id){
		     
			 App::Import('Model','Inscricao');
			 App::Import('Model','Turma');
             App::Import('Model','Curso');
			 App::Import('Model','Epocaavaliacao');
			 App::Import('Model','T0017anolectivoepoca');
            //----------------------------------------------------------------------------
			 $curso = new Curso;
             $turma = new Turma;
			 $inscricao = new Inscricao;
			 $t0017anolectivoepoca = new T0017anolectivoepoca;
			 $this->Avaliacao->recursive = 0;
			//----------------------------------------------------------------------------
			 $estadoinscricao = $inscricao->Estadoinscricao->find('list');	
			 $epoca = $t0017anolectivoepoca->find('all',array('conditions'=>array('epocaavaliacao_id'=>$epocadeavaliacao)));
			 $controle_epoca = $epoca[0]["T0017anolectivoepoca"]["limite"];
			
			 //$logmv->logInsert(12,$this->Session->read('Auth.User.id'),$this->Avaliacao->getLastInsertID(),$turma_id);
			 $alunosByTurma = $this->Avaliacao->getAlunosByTurma($turma_id,$epocadeavaliacao);
			 
			  $datahora = date('Y-m-d'); 
			   
			 if (!empty($this->data)) 
			 {
			 $tipo_avaliacao = $this->data["Avaliacaos"]["tipo_avaliacao"];
			  
	//------------------------------------------------------------------------------------------------------------------------------------  
			//  if($tipo_avaliacao!=4 && $tipo_avaliacao!=5 )
			//  {
			
			
			//-----------------------------------------------------------------------------------------------------------------------------
			   $notas = $this->data['notas'];
			   $incriment = 0;
			   foreach($notas as $nota)
			   {
			  // var_dump($incriment);
			        $verifica = $this->Avaliacao->ifExist($nota['t0013inscricao_id']);
					//var_dump($verifica);
					//var_dump($verifica[0]["avaliacaos"]["t0013inscricao_id"]);
					//$incriment++;
					$avaliacao=array();
					$avaliacao['Avaliacao']['t0015tipoavaliacao_id'] = $this->data["Avaliacaos"]["tipo_avaliacao"];
					$avaliacao['Avaliacao']['t0013inscricao_id'] = $nota['t0013inscricao_id'];
					$avaliacao['Avaliacao']['nota']=$nota['nota'];
					$avaliacao['Avaliacao']['data']=$datahora;
					if($nota['nota']!=null)
					{
					$this->Avaliacao->create();
					if (!$this->Avaliacao->save($avaliacao))
					{
					 $this->Avaliacao->updateAll( array("nota" =>$nota['nota']), array( "t0013inscricao_id" => $nota['t0013inscricao_id'],"t0015tipoavaliacao_id " => $this->data["Avaliacaos"]["tipo_avaliacao"]));
					}
					}
				
					//Actualiza os dados do estudante na tabela de inscricoes
					$inscricao=array();
					$inscricao['Inscricao']['id'] = $nota['t0013inscricao_id'];
					$inscricao['Inscricao']['notafrequencia']  = $nota['nota'];
					// so actualiza a notafinal caso o estado da inscricao selecionado for aprovado/reprovado/excluido.
					if($nota['tg0020estadoinscricao_id'] == 2 || $nota['tg0020estadoinscricao_id'] == 3 || $nota['tg0020estadoinscricao_id'] == 6)
					{
					  $inscricao['Inscricao']['notafinal']  = $nota['nota'];
					}
					$inscricao['Inscricao']['tg0020estadoinscricao_id']=$nota['tg0020estadoinscricao_id'];
					$inscricao['Inscricao']['epocaavaliacao_id'] = $this->data["Avaliacaos"]["epoca_avaliacao"];
					//-- faz o update -----------------------------------------------------------------------------------------
					$this->Avaliacao->Inscricao->save($inscricao);
			       }
			       $this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
				   $this->redirect(array('action' => 'registo_de_notas'));
		
			 $avaliacao_base = $this->Avaliacao->find('all',array('conditions'=>array('Avaliacao.id'=>$this->data['Avaliacao'][             'avaliacao_id']),'recursive'=>-1));
		  }  
			 
			 //----------------Turma by id--------------
             $turma = $this->Avaliacao->getTurma($turma_id);
			 $turma_name=$turma[0]["t0010turmas"]["name"];
			 
			 //-----------------Plano by Id-------------
			
			 $plano = $this->Avaliacao->getPlano($planoestudo_id);
			 $plano_name=$plano[0]["t0005planoestudos"]["name"];
			 
			 //----------------Curso by Id-------------
			 
			 $curso = $this->Avaliacao->getCurso($curso_id);			 
			 $curso_name=$curso[0]["t0003cursos"]["name"]; 
			 
			 //--------------Ano Lectivo by ID---------
			  
			  $ano_lectivo = $this->Avaliacao->getAnoLectivo($t0009anolectivo_id);			 
			  $ano_lectivo_codigo=$ano_lectivo[0]["t0009anolectivos"]["codigo"]; 
			  
			  //------------ Epoca de avalicao by Id-----
			  $epoca_avalicao= $this->Avaliacao->getEpocaAvaliacaos($epocadeavaliacao);
			  $epoca_avalicao1 = $epoca_avalicao[0]["epocaavaliacaos"]["name"];
			 
			 //------------ Tipo de avalicao by Id-----
			  $tipoavaliacao1 = $this->Avaliacao->getTipoAvaliacaos($tipoavaliacao);			  
			  $tipoavaliacao2 = $tipoavaliacao1[0]["tipoavaliacaos"]["name"];
			  
			  
			 //var_dump($tipoavaliacao2);
			 $this->set('tipoavaliacao2',$tipoavaliacao2);
			 $this->set('epoca_avalicao1',$epoca_avalicao1);
			 $this->set('ano_lectivo_codigo',$ano_lectivo_codigo);
			 $this->set('curso_name',$curso_name);
			 $this->set('plano_name',$plano_name);
			 $this->set('turma_name',$turma_name);
			 $this->set('turma_id',$turma_id);
			 $this->set('tipo_avaliacao',$tipoavaliacao);
			 $this->set('epoca_avaliacao',$epocadeavaliacao);
			 $this->set(compact('alunosByTurma','tg0020estadoinscricao','$tipoavaliacao2'));
			 $this->set('avaliacao_id',$avaliacao_id);
			 $this->set('controle_epoca',$controle_epoca);
			 $this->set('datahora',$datahora);
		}
		
		
		function update_plano(){
			App::Import('Model','Planoestudo');
            $planoestudos = new Planoestudo;			
			$curso = $planoestudos->find('list',array('conditions'=>array('t0003curso_id'=>$this->data['Avaliacaos']['t0003curso_id'])));		
			$plano = $curso;	
			//var_dump($plano);
			$this->set('plano',$plano);
			$this->layout = 'ajax';
		}
		
		function update_turma(){
			App::Import('Model','Turma');
            $turma = new Turma;
			
			$turmas = $turma->find('list',array('conditions'=>array('t0009anolectivo_id'=> $this->data["Avaliacaos"][      "t0009anolectivo_id"]),'order'=> array ('name ASC'),'estado'=>1));
			
			$this->set('turmas',$turmas);
			$this->layout = 'ajax';
		}

		
		/*
		function update_turma(){
			App::Import('Model','Turma');
            $turma = new Turma;
			$turmas = $turma->find('list',array('conditions'=>array('t0005planoestudo_id'=>$this->data['Avaliacaos']['t0005planoestudo_id'], 'estado'=>1)));  //, 'order'=> array ('name ASC')
			$this->set('turmas',$turmas);
			$this->layout = 'ajax';
		}
		*/
		function update_turma_funcionario(){
		
			App::Import('Model','Turma');
            $turma = new Turma;
$turma11 = new Turma;			

			
			App::Import('Model','funcionario');
            $funcionario = new funcionario;
$turmas11 = $turma11->find('all');
		
	//var_dump($this->data);
	//var_dump($this->data["Avaliacaos"]["docente"]);
	
			$turmas = $turma->find('list',array('conditions'=>array('t0009anolectivo_id'=> $this->data["Avaliacaos"][      "t0009anolectivo_id"]),'order'=> array ('name ASC'),'estado'=>1));
	//var_dump('This data111: '.$turma['funcionario']['codigo']);	
			$this->set('turmas',$turmas);
			$this->layout = 'ajax';
		}
		
		
		function update_tipo_de_avaliacao(){
			App::Import('Model','Tipoavaliacao');
            $tipoavaliacao = new Tipoavaliacao;
			$tipoavaliacaos = $tipoavaliacao->find('list',array('conditions'=>array('epocaavaliacao_id'=>$this->data['Avaliacaos']['epocaavaliacao_id'])));  //, 'order'=> array ('name ASC')
			
			//var_dump($tipoavaliacaos);
			$this->set('tipoavaliacaos',$tipoavaliacaos);
			$this->layout = 'ajax';
		
		}
}
?>