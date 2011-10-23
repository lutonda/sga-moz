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
 
 
class ListagensController extends AppController {


	var $name = 'Listagens';
	var $helpers = array('Html', 'Session');
	var $uses = array();

	function beforeRender(){
            $this->set('current_section','listagens');
    }
	
	
	/*************Listagem dos estudantes****************/
	
        function listagens() {
         //importa o modelo
         App::Import('Model','Turma');
         App::Import('Model','Curso');
         App::Import('Model','Disciplina');
         App::Import('Model','Provincia');
         App::Import('Model','Cidade');
        // App::Import('Model','Listagen');
         //App::Import('Model','');
         // cria objecto
         $curso = new Curso;
         $turma = new Turma;
         $provincia = new Provincia;
         $disciplina = new Disciplina;
         $cidade = new Cidade;
         //$listagens = new Listagen;
         //busca lista de dados
         $cursos = $curso->find('list' ,array('order'=> array ('name ASC')));
         $turmas = $turma->find('list',array('conditions'=>array('estado'=> 1),'order'=> array ('name ASC')));
         $provincias = $provincia->find('list' ,array('order'=> array ('name ASC')));
         $disciplinas = $disciplina->find('list',array('order'=> array ('name ASC')));
		 
         $cidades = $cidade->find('list' ,array('order'=> array ('name ASC')));
         $this->set(compact('cursos','turmas','disciplinas','provincias','cidades'));
	}
	
	
	/*************PDF dos estudantes****************/
	
        function print_pdf()
        {
           
           Configure::write('debug',0);
           App::Import('Model','Listagen');
           $listagens = new Listagen;
           $titulo = "";
           $listas = array();
           //var_dump($this->data['Listagens']['select'] );
            if(array_key_exists('select',$this->data['Listagens']))
         {
          if($this->data['Listagens']['gender']=='1' || $this->data['Listagens']['gender']=='2' )
            {
            $sexo = $this->data['Listagens']['gender'];
            }
            else {  $sexo = null;}
             
            if($this->data['Listagens']['select']=='3')
            {
               $curso = $this->data['Listagens']['curso_id'];
               $titulo = " Por Curso ";
            // var_dump($curso);
            }
            else{ $curso = null;}
			
            if($this->data['Listagens']['select'] == '4')
            {
			   // RA 2011.04.02 - como pode ser id se o nome nao era esse no form ?????
               // $cidade = $this->data['Listagens']['id'];
			    $cidade = $this->data['Listagens']['cidade'];
                $titulo = " Por Cidade";
				//var_dump($this->data['Listagens']);
            }
            else {$cidade = null;}
			
             if($this->data['Listagens']['select'] == '5')
            {
			 // RA 2011.04.02 - como pode ser prov se o nome nao era esse no form ?????
             // $provincia = $this->data['Listagens']['prov'];
			    $provincia = $this->data['Listagens']['provincia'];
                $titulo = " Por Provincia";
				
            }
            else {$provincia = null;}
            if($this->data['Listagens']['select'] == '6')
            {
                $turma = $this->data['Listagens']['turma'];
                $titulo = " Por Turma";
            }
            else {$turma = null;}
     
	 //var_dump($this->data['Listagens']['select']);
	
          
            $dados = $listagens->getAllAlunosByCondition($sexo,$curso,$turma,$cidade,$provincia);
          // var_dump($dados);
         // var_dump($titulo);
          $z=1;
           foreach ($dados as $k)
            {
               $lista = array();
               
			 //  var_dump($k);
			   
               switch($this->data['Listagens']['select'])
               {
                   case '3': $lista[] =$titulo." : ".$k['curso']['name'];$titulot = $titulo." : ".$k['curso']['name'];break;
                   case '4': $lista[] =$titulo." : ".$k['cidade']['name'];$titulo = $titulo." : ".$k['cidade']['name'];break;
                   case '5': $lista[] =$titulo." : ".$k['provincia']['name'];$titulo = $titulo." : ".$k['provincia']['name'];break;
                   case '6': $lista[] =$titulo." : ".$k['disciplina']['name'];$titulo = $titulo." : ".$k['disciplina']['name'];break;

               }
			   $lista[] =$z;
               $lista[] =$k['aluno']['codigo'];
               $lista[] =$k['aluno']['name'];
			   //$lista[] =$k['turma']['name'];
			   //$lista[] =$k['cidade']['name'];
			   
			   $z++;
	       $listas[] =$lista;
             //  $id++;
            }
              }
  // var_dump($listas[0]);
	//var_dump($titulo);
           $this->set('lista',$listas);
		   $this->set('titulos',$titulot);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();

        }
		
		
		/*************PDF dos funcionarios****************/
		
        function  print_pdf_funcionarios()
        {
            Configure::write('debug',0);
            App::Import('Model','Listagen');
            $listagens = new Listagen;

            $listas = array();
               if(array_key_exists('select',$this->data['Listagens']))
         {
         if($this->data['Listagens']['gender']=='1' || $this->data['Listagens']['gender']=='2' )
            {
            $sexo = $this->data['Listagens']['gender'];
            }
            else {  $sexo = null;}
	      if($this->data['Listagens']['select']=='3')
            {
                $departamento = $this->data['Listagens']['departamento'];
                $titulo = " Por Deparamento";
            }
           else {$departamento = null;}
           if($this->data['Listagens']['select']=='4')
            {
                $tipofunc = $this->data['Listagens']['tipo_func_id'];
                $titulo = " Por Tipo de Funcionario";
            }
            else {$tipofunc = null;}
         if($this->data['Listagens']['select']=='5')
            {
                $grauacadmico = $this->data['Listagens']['grau'];
                $titulo = " Por Grau Academico";
            }
           else {$grauacadmico = null;}
        
			
           $dados = $listagens->getAllFunctionaryByCondition($sexo,$departamento,$tipofunc,$grauacadmico);
          
           // var_dump( $sexo);
           // var_dump( $departamento);
           // var_dump( $tipofunc);
           // var_dump($dados);
           $id = 1;
           foreach ($dados as $k)
              {
               $lista = array();
                switch($this->data['Listagens']['select'])
               {
                   case '3': $lista[] =$titulo." : ".$k['departamento']['departamento'];break;
                   case '4': $lista[] =$titulo." : ".$k['tipo']['tipo'];break;
                   case '5': $lista[] =$titulo." : ".$k['grau']['grau'];break;
                //   case '6': $lista[] =$titulo." : ".$k['disciplina']['disciplina'];break;

               }
               
               $lista[] =$id;
               $lista[] =$k['Funcionario']['codigo'];
               $lista[] =$k['Funcionario']['nome'];
	       $listas[] =$lista;
               $id++;
              }
         }

           $this->set('lista',$listas);
		   
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();

        }
		
		
		
      /*************Listagem dos funcionarios***************/
	  
       function listagens_funcionario()
       {
         App::Import('Model','Departamento');
         App::Import('Model','Tipofuncionario');
         App::Import('Model','Grauacademico');
       //  App::Import('Model','Listagen');
         //cria objecto
         $departamento = new Departamento;
         $tipofuncionarios = new Tipofuncionario;
          $grauacademico = new Grauacademico;
         //busca lista de dados
          $grauacademico = $grauacademico->find('list' ,array('order'=> array ('name ASC')));
          $departamento = $departamento->find('list' ,array('order'=> array ('name ASC')));
          $tipofuncionarios =$tipofuncionarios->find('list' ,array('order'=> array ('name ASC')));
         // var_dump($tipofuncionarios);
        // var_dump($grauacademico);
        // var_dump($listagens->getAllAlunosbysexo(1));
         // lanca para o view
         $this->set(compact('tg0006departamento','tg0011tipofuncionarios','Grauacademico'));
       }
	   
	   
	/*************Listagem dos matriculados****************/
	
       function matriculados()
       {
           App::Import('Model','Curso');

           $curso = new Curso;

           $cursos = $curso->find('list' ,array('order'=> array ('name ASC')));

           $this->set(compact('t0003cursos'));
       }

	   
	   
	/*************PDF dos matriculados****************/
	
   function print_pdf_matriculados()
   {
         Configure::write('debug',0);
         App::Import('Model','Listagen');
         $listagens = new Listagen;

         $listas = array();
		 
         if(array_key_exists('select',$this->data['Listagens']))
         {
		 //-------------------------------------------------------
		// var_dump($this->data['Listagens']['data']);
		$ano = $this->data['Listagens']['data'];
		 if($this->data['Listagens']['select']=='1')
            {		    
			$dados = $listagens->getAllMatriculadosByCondition(null,$ano);
			$titulo = ": Todos";
			$verifica = 1;
            }
			
		//------------------------------------------------------------
		if($this->data['Listagens']['select']=='2')
        {
            $curso = $this->data['Listagens']['t0003curso_id'];
			$dados = $listagens->getAllMatriculadosByCondition($curso,$ano);			
			$titulo = "Em: ".$dados[0]['t0003cursos']['nome_do_curso'];
			$verifica = 2;
        }
		//-------------------------------------------------------------	
			
         if($this->data['Listagens']['select']=='3')
            {
			
            $dados = $listagens->getAllMatriculadosAnuladoSuspensa($ano);
			$titulo = " Anuladas / Suspensas";
			$verifica = 3;
            }
		//------------------------------------------------------------------
		if($this->data['Listagens']['select']=='4')
        {
			  $dados = $listagens->getAllMatriculadosConcluida($ano);
			  $titulo = " Concluidos";
			  $verifica = 4;
		}
         
         $id = 1;
		 $estado='Normal';
		// var_dump($dados);
           foreach ($dados as $k)
           {
		   
             $lista = array();
        
			
              $lista[] =$id;
              $lista[] =$k['Alunos']['codigo_do_Aluno'];
              $lista[] =$k['Alunos']['name'];
              $lista[] =$k['t0003cursos']['nome_do_curso'];
			  $lista[] =$k['t0011matriculas']['data'];
     		  $lista[]= $k['t0011matriculas']['data_anulada'];
			  
			 if($k["t0011matriculas"]["estado"]==1)
			  {	$estado='Normal';}
			  
			  if($k["t0011matriculas"]["estado"]==2)
			  {	$estado='Anulada';}
	
			  if($k["t0011matriculas"]["estado"]==3)
			  {	$estado='Suspensa';}
			  
			  if($k["t0011matriculas"]["estado"]==4)
			  {	$estado='Concluida';}
			  $lista[] =$estado;
			  
			  //var_dump($lista);
			  
			  
			  
              $id++;
	      $listas[] =$lista;
              }
         }
           $this->set('lista',$listas);
		    $this->set('verifica',$verifica);
		   $this->set('titulos',$titulo);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
   }
   
   
  	/*************Listagem das Inscricoes****************/
	
       function inscricao()
       {
           App::Import('Model','Curso');
           App::Import('Model','Turma');
            App::Import('Model','Anolectivo');
           $curso = new Curso;
           $turma = new Turma;
		   $t0009anolectivo = new Anolectivo;
		   
           $cursos = $curso->find('list',array('order'=> array ('name ASC')));

		  $turmas = $turma->find('list',array('conditions'=>array('estado'=> 1),'order'=> array ('name ASC')));
		   
			
		   $Anolectivos = $t0009anolectivo->find('list');
           $this->set(compact('t0003cursos','t0010turmas','t0009anolectivos'));
       }
	   

	   /***************************************/
		function update_turma(){
         Configure::write('debug',0);
         App::Import('Model','Listagen');
         $listagens = new Listagen;		
		
			App::Import('Model','Turma');
            $turma = new Turma;

			//var_dump($turma);	
			$turmas = $turma->find('list',array('conditions'=>array('t0009anolectivo_id'=> $this->data["Listagens"]["t0009anolectivos"], 'estado'=> 1),'order'=> array ('name ASC')));
		    		
			$this->set('turmas_ano',$turmas);		
			$this->layout = 'ajax';
		}
		
		/***************************************/
		function update_turma1(){
         Configure::write('debug',0);
         App::Import('Model','Listagen');
         $listagens = new Listagen;		
		
			App::Import('Model','Turma');
            $turma = new Turma;

			//var_dump($this->data["Listagens"]["t0009anolectivos2"]);	
			//$turmas1 = $turma->find('list',array('conditions'=>array('t0009anolectivo_id'=> $this->data["Listagens"]["t0009anolectivos2"], 'estado'=> 1),'order'=> array ('name ASC')));
			
			$turmas1 = $turma->find('list',array('conditions'=>array('t0009anolectivo_id'=> $this->data["Listagens"]["t0009anolectivos2"]),'order'=> array ('name ASC')));
		    		
			$this->set('turmas_ano',$turmas1);		
			$this->layout = 'ajax';
		}
		
     /*************PDF das Inscricoes****************/
	 
  function print_pdf_inscricao()
   {
         Configure::write('debug',0);
         App::Import('Model','Listagen');
         $listagens = new Listagen;

         $listas = array();
         if(array_key_exists('select',$this->data['Listagens']))
         {
		 if($this->data['Listagens']['select']=='1')
            {
			
           $turma = $this->data['Listagens']['turma'];
		   $t0009anolectivo = $this->data['Listagens']['t0009anolectivos'];
		   
		   $dados = $listagens->getAllInscricaoByCondition($turma,$t0009anolectivo);
		   //var_dump($dados[0]['tc']['name']);
		   if($turma==null && $t0009anolectivo == null )
		   { $titulo = ": Todas ";}
		   if($turma==null && $t0009anolectivo != null )
		   { 
			$titulo = " ".$dados[0]['tal']['codigo'];
			//$titulo = ": Do Ano Lectivo ".$dados[0]['tal']['codigo'];
		   }
		   if($turma!=null && $t0009anolectivo == null )
		   { 
		    $titulo = " ".$dados[0]['tt']['name'];
			//$titulo = " Na Turma :".$dados[0]['tt']['name'];
		   }
		   if($turma!=null && $t0009anolectivo != null )
		   {
			 $titulo = "     ".$dados[0]['tal']['codigo'];
		     $titulo .= "     ".$dados[0]['tc']['name'];			 
			 $titulo .= "     ".$dados[0]['tt']['name'];
			 //$titulo = $dados[0]['tc']['name'].'  ';  $titulo .= ": Do Ano Lectivo ".$dados[0]['tal']['codigo']. " na turma ".$dados[0]['tt']['name'];
		   }
		   
		   $verifica = 1;
            }
			
		
		 if($this->data['Listagens']['select']=='2')
            {
           $turma = $this->data['Listagens']['turma2'];
		   $t0009anolectivo = $this->data['Listagens']['t0009anolectivos2'];
		   $dados = $listagens->getAllInscricaoAnuladasCanceladas($turma,$t0009anolectivo);
		    if($turma==null && $t0009anolectivo == null )
		   { $titulo = ": Todas Anuladas/ Canceladas ";}
		   if($turma==null && $t0009anolectivo != null )
		   { $titulo = ": Todas Anuladas/ Canceladas do Ano Lectivo ".$dados[0]['tal']['codigo'];}
		   if($turma!=null && $t0009anolectivo == null )
		   { $titulo = " Todas Anuladas/ Canceladas da Turma :".$dados[0]['tt']['name'];}
		   if($turma!=null && $t0009anolectivo != null )
		   { 
		     $titulo = "Anuladas/ Canceladas";
			  $titulo .= "     ".$dados[0]['tal']['codigo'];
			 $titulo .= "     ".$dados[0]['tc']['name'];		    
			 $titulo .= "     ".$dados[0]['tt']['name'];
		   }
            
			$verifica = 2;
		}
	
         if($this->data['Listagens']['select']=='3')
            {
           $turma = $this->data['Listagens']['turmas'];
		   $dados = $listagens->getAllInscricaoByCondition($turma,null);
		    if($turma==null  )
		   { $titulo = ": Todas Turmas ";}
		   if($turma!=null  )
		   { $titulo = ": da Turma ".$dados[0]['tt']['name'];}
            
		   $verifica = 3;
		   }
		 
			
         $id = 1;
           foreach ($dados as $k)
           {
             $lista = array();

              $lista[] =$id;
              $lista[] =$k['ta']['codigo'];
              $lista[] =$k['ta']['name'];              
              $lista[] =$k['tt']['name'];

			  
			  if($k['ti']['tg0020estadoinscricao_id']==1)
			  {	$estado='Inscrito';}
			  
			  if($k['ti']['tg0020estadoinscricao_id']==2)
			  {	$estado='Aprovado';}
	
			  if($k['ti']['tg0020estadoinscricao_id']==3)
			  {	$estado='Reprovado';}
			  
			  if($k['ti']['tg0020estadoinscricao_id']==4)
			  {	$estado='Cancelada';}
			  
			  if($k['ti']['tg0020estadoinscricao_id']==5)
			  {	$estado='Anulada';}
			  
			  if($k['ti']['tg0020estadoinscricao_id']==6)
			  {	$estado='Excluido';}

			  if($k['ti']['tg0020estadoinscricao_id']==7)
			  {	$estado='Admitido';}
			  
			  if($k['ti']['tg0020estadoinscricao_id']==8)
			  {	$estado='Dispensado';}
			  
			  $lista[] =$estado;
			  
			  $lista[] =$k['ti']['data'];
			  $lista[] =$k['tc']['name'];
			  $lista[] =$k['tt']['modified'];
			  
              $id++;
	      $listas[] =$lista;

              }
         }

		   $this->set('verifica',$verifica);
           $this->set('lista',$listas);
		   $this->set('titulos',$titulo);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
   }

   
   /***********************************************/
   
   
		function update_plano(){
		
	     Configure::write('debug',2);
         App::Import('Model','Listagen');
         $listagens = new Listagen;
			App::Import('Model','Planoestudo');
            $planoestudos = new Planoestudo;			
			$plano = $planoestudos->find('list',array('conditions'=>array('t0003curso_id'=>$this->data['Listagens']['t0003curso_id'])));		
			//$plano = $curso;	
			var_dump($plano);
			$this->set('plano',$plano);
			$this->layout = 'ajax';
		}
		
   /***************************************/
   		function update_turma_pauta(){
         Configure::write('debug',0);
         App::Import('Model','Listagen');
         $listagens = new Listagen;		
		
			App::Import('Model','Turma');
            $turma = new Turma;

			//var_dump($turma);	
			$turmas = $turma->find('list',array('conditions'=>array('t0005planoestudo_id'=> $this->data["Listagens"]["t0005planoestudo_id"], 'estado'=> 1),'order'=> array ('name ASC')));
		    		
			$this->set('turmas_ano',$turmas);		
			$this->layout = 'ajax';
		}
		
		
   	/*************Listagem das Pautas****************/
	
        function listagem_de_Pautas()
        {
           App::Import('Model','Curso');
           App::Import('Model','Turma');
            App::Import('Model','Anolectivo');
			App::Import('Model','Planoestudo');
            $planoestudo = new Planoestudo;
           $curso = new Curso;
           $turma = new Turma;
		   $t0009anolectivo = new Anolectivo;
		   
           $cursos = $curso->find('list',array('order'=> array ('name ASC')));

		  $turmas = $turma->find('list',array('conditions'=>array('estado'=> 1),'order'=> array ('name ASC')));
		   
		  $planoestudos = $planoestudo->find('list',array('order'=> array ('name ASC')));
		   $Anolectivos = $t0009anolectivo->find('list');
           $this->set(compact('t0003cursos','t0010turmas','t0009anolectivos','t0005planoestudos'));

        }

		
		
	/*************PDF das Pautas(Mapa de frequencias)***************/

  function print_pdf_pauta()
   {
         Configure::write('debug',0);
         App::Import('Model','Listagen');
         $listagens = new Listagen;

         $listas = array();
         if(array_key_exists('select',$this->data['Listagens']))
         {
		  
		  //---------------------------------------Mapa de Frequencias-------------------------------------------------------------------
		  
         if($this->data['Listagens']['select']=='1')
         {	
		 
           $anolectivo_id = $this->data['Listagens']['t0009anolectivo_id'];
		   $curso_id = $this->data['Listagens']['t0003curso_id'];
		   $plano_id = $this->data['Listagens']['t0005planoestudo_id'];
		   $turma_id = $this->data['Listagens']['t0010turma_id'];
		   
		   $verifica = 1;
		   $titulo = 'de Mapa de Frequencias';
		 $dados_pauta = $listagens->getAllPautaByCondition($anolectivo_id,$curso_id,$plano_id,$turma_id);		 
		 $dados_turma =  $listagens->getAllTurmaByCondition($turma_id);

		 }
         else {$turma = null;$anolectivo = null; $curso = null; $turma = null;}

		 
		 //-----------------------------------------------Pauta de Resultados------------------------------------------------------------------
		 
         if($this->data['Listagens']['select']=='2')
         {	
		 
           $anolectivo_id = $this->data['Listagens']['t0009anolectivo_id'];
		   $curso_id = $this->data['Listagens']['t0003curso_id'];
		   $plano_id = $this->data['Listagens']['t0005planoestudo_id'];
		   $turma_id = $this->data['Listagens']['t0010turma_id'];
		   
		   $verifica = 2;
		   $titulo = 'de Pauta de Resultados';
         
		   $dados_exame = $listagens->getAllPautaExameByCondition($anolectivo_id,$curso_id,$plano_id,$turma_id);
		   //var_dump($dados_exame);		   
           $dados_turma =  $listagens->getAllTurmaByCondition($turma_id);
		 }
         else {$turma = null;$anolectivo = null; $curso = null; $turma = null;}        
		 
	 }
		 
		//----------------------------------------------Preenche tabela de Mapa de frequencias--------------------------------------------
         $cont = 0;
           foreach ($dados_pauta as $k)
           {
            
			  $lista_pauta = array();
              $lista_pauta[] =$k['tbl']['codigo'];			  
              $lista_pauta[] =$k['tbl']['name'];
			  	
			  for($i=0;$i<count($k[0]);$i++){
					$lista_pauta[] =$k[0][sprintf("c%d", $i)];
			  }		  
			  
			  $listas_pauta[] =$lista_pauta;
          }
		  
		  
		  foreach($dados_exame as $y){
			  $lista_exame = array();
              $lista_exame[] =$y['ta']['codigo'];			  
              $lista_exame[] =$y['ta']['name'];
			  $lista_exame[] =$y['ti']['notafrequencia'];			  
              $lista_exame[] =$y['ti']['notafinal'];
			  $listas_exame[] =$lista_exame;
			  
			  
		  }
				
		  foreach ($dados_turma as $z)
           {
			  $lista_turma = array();
              $lista_turma[] =$z['tt']['anocurricular'];
              $lista_turma[] =$z['tt']['semestrecurricular'];
              $lista_turma[] =$z['tt']['name'];			  
			  $lista_turma[] =$z['tc']['name'];
			  $lista_turma[] =$z['tf']['name'];
			  $lista_turma[] =$listagens->getLabelsPauta($anolectivo_id,$curso_id,$plano_id,$turma_id);
			  $lista_turma[] =$z['tal']['codigo'];
			  $listas_turma[] =$lista_turma;
			  
			}
			//var_dump($listas_exame);
		
		//-----------------------------------Manda os dados para o PDF-------------------------------
		   $this->set('verifica',$verifica);
           $this->set('titulos',$titulo);
		   $this->set('lista_turma',$listas_turma);
           $this->set('lista_pauta',$listas_pauta);
		   $this->set('lista_exame',$listas_exame);

           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
   }

   
   
   	/*************Listagem dos certificado****************/  
	
	function certificado()
        {
			App::Import('Model','Matricula');
            $matriculas = new Matricula;
          
	 
		  $t000alunos = $matriculas->getAlunosForMatricula1();	

          $this->set(compact('t000alunos'));
        }

		
	/*************PDF dos certificado****************/ 
		
	function print_pdf_certificado()
	{
         Configure::write('debug',0);
         App::Import('Model','Listagen');
         $listagens = new Listagen;

         $listas = array(); 

			$aluno = $this->data["Listagens"]["name"];			
			$plano = $listagens->getPlanoByCondition($this->data["Listagens"]["al"]);			
			$aluno_id =$this->data["Listagens"]["al"];
			$plano_id =$plano[0]["t0011matriculas"]["t0005planoestudo_id"];						
			$verfica = $listagens->getComparacaoDisciplinas($plano_id,$aluno_id);
			
			
			$dados = $listagens->getCertificadoByCondition($aluno_id);
			
			//var_dump($dados);
			//$id = 1;
           foreach ($dados as $k)
           {
             $lista = array();

              //$lista[] =$id;
              $lista[] =$k['ta']['codigo'];
			  $lista[] =$k['ta']['name'];
			  $lista[] =$k['ta']['datanascimento'];
			  $lista[] =$k['tgp']['name'];
			  $lista[] =$k['tc']['name']; 
			  
			  $lista[] =$k['tt']['name'];
			  $lista[] =$k['ti']['notafrequencia'];
			  $lista[] =$k['ti']['notafinal'];
			  
			  //var_dump($k['ti']['notafrequencia']);
			  
                         
              //$id++;
			  $listas[] =$lista;
              
           }
		   
		   $this->set('verifica',$verfica);
           $this->set('lista',$listas);
           $this->layout = 'pdf';
           $this->render();		 
	}
	

	/*************Listagem das Declaracoes****************/ 
	
	function declaracao()
        {
			App::Import('Model','Matricula');
            $matriculas = new Matricula;
		  $t000alunos = $matriculas->getAlunosForMatricula1();	

          $this->set(compact('t000alunos'));
        }
	
	
	/*************PDF das Declaracoes****************/ 
	
	function print_pdf_declaracao_frequencia(){
		 Configure::write('debug',0);
         App::Import('Model','Listagen');
         $listagens = new Listagen;
         $listas = array(); 
			
		$aluno = $this->data["Listagens"]["name"];
		$dados = $listagens->getDeclaracaoByCondition($aluno);
		
		 foreach ($dados as $k)
           {
             $lista = array();

          
              $lista[] =$k['ta']['codigo'];
			  $lista[] =$k['ta']['name'];
			  $lista[] =$k['ta']['datanascimento'];
			  $lista[] =$k['tgp']['name'];
			  $lista[] =$k['tc']['name']; 
			  
			  $lista[] =$k['tt']['name'];
			  $lista[] =$k['ti']['notafrequencia'];
			  $lista[] =$k['ti']['notafinal'];

			  $listas[] =$lista;
              
           }
		  
		   $this->set('lista',$listas);
           $this->layout = 'pdf';
           $this->render();	
		
	}
	
}

?>