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
 
 
class Listagen extends AppModel {
    var $name = 'Listagen';
    var $useTable = false;
    function getAllAlunosbysexo($genero_id)
    {
      App::Import('Model','Aluno');
      $lista = new Aluno();
      return $lista->find('list',array('conditions'=>array('genero_id'=>$genero_id)));
    }
    function getAllAlunosByCondition($genero_id=null,$curso_id=null,$turma_id=null,$cidade_id=null,$provincia=null)
    {
      App::import('Model','Aluno');
      App::import('Model','Curso');
      App::import('Model','Turma');
      $t0008aluno = new Aluno();
      $curso = new Curso();
      $turma = new Turma();
	  
     // var_dump($cidade_id);
       
	   if(isset($curso_id) and $curso_id!=null)
       {

		$query ="SELECT DISTINCT aluno.codigo, aluno.name, curso.name FROM matriculas AS matricula, alunos AS aluno,cursos AS curso, generos as genero WHERE aluno.id = matricula.aluno_id AND matricula.curso_id = curso.id AND matricula.curso_id ={$curso_id} ";
       }
       else
	   if(isset($cidade_id) and $cidade_id!=null)
       {

	  $query ="SELECT DISTINCT aluno.codigo, aluno.name, cidade.name FROM t0008alunos AS aluno, Cidades AS cidade, generos as genero WHERE aluno.Cidade_id = cidade.id AND cidade.id = {$cidade_id} ";
	  $query .=" and aluno.genero_id=genero.id";
	  
       }
	   else
	   if(isset($provincia) and $provincia!=null)
       {
	  
	  $query ="SELECT DISTINCT aluno.codigo, aluno.name, provincia.name FROM t0008alunos AS aluno, tg0003provincias as provincia , generos as genero WHERE aluno.tg0003provincia_id = provincia.id AND provincia.id = {$provincia} ";
	  $query .=" and aluno.genero_id=genero.id";
       }
	  else
	  //var_dump($turma_id);
	  if(isset($turma_id) and $turma_id!=null) 
      {

	  $query  = "SELECT DISTINCT aluno.codigo, aluno.name, turma.name FROM t0008alunos AS aluno, t0010turmas AS turma, generos as genero, t0013inscricaos as inscricao WHERE aluno.id = inscricao.t0008aluno_id AND turma.id = inscricao.t0010turma_id and turma.id = {$turma_id} ";
	 // $query .=" and aluno.genero_id=genero.id";
      }

      if(isset($genero_id) and $genero_id!=null)
      {
	      $query .=" and aluno.genero_id=genero.id";
          $query .=" and genero.id={$genero_id} ";
      }

	  $query .=" order by aluno.name";
       //var_dump($query);
      $resultado = $this->query($query);
      //var_dump($query);
      return $resultado;

    }
     function getAllFunctionaryByCondition($genero_id,$departament_id,$tipofunc_id,$grauc_id){
         
      $query = "SELECT funcionario.id,funcionario.codigo as codigo,funcionario.name as nome,grau.name as grau,departamento.name as departamento,genero.name as genero,tipo.name as tipo  ";
      $query .="FROM `funcionarios` funcionario,Grauacademicos grau,tg0006departamentos departamento,generos genero,tg0011tipofuncionarios tipo ";
      $query .="where funcionario.Grauacademico_id=grau.id and funcionario.tg0006departamento_id=departamento.id and funcionario.genero_id=genero.id and funcionario.tg0011tipofuncionario_id=tipo.id ";
      
      if(isset($departament_id) and $departament_id!=null){
          $query .="and funcionario.tg0006departamento_id={$departament_id} ";
      }
      if(isset($genero_id) and $genero_id!=null){
          $query .="and genero.id={$genero_id} ";
      }
      if(isset($grauc_id) and $grauc_id!=null){
          $query .="and funcionario.Grauacademico_id={$grauc_id} ";
      }
      if(isset($tipofunc_id) and $tipofunc_id!=null)
      {
          $query .="and funcionario.tg0011tipofuncionario_id={$tipofunc_id} ";
      }
	  
	   $query .= "order by nome";

    //var_dump($query);
      $resultado = $this->query($query);
    //var_dump($resultado);
       return $resultado;

   //  var_dump($resultado);
     }
     
     function getAllMatriculadosByCondition($curso_id,$ano)
     {
       $query =  " SELECT t0008alunos.id, t0003cursos.name AS nome_do_curso,t0011matriculas.data AS data, t0008alunos.codigo AS codigo_do_Aluno, t0008alunos.name, t0011matriculas.codigo AS codgo_da_Matricula,tg0021estadomatricula_id";
       $query.=  " FROM t0008alunos, t0011matriculas, t0003cursos ";
       $query.=  " WHERE t0008alunos.id = t0011matriculas.t0008aluno_id and t0003cursos.id = t0011matriculas.t0003curso_id and tg0021estadomatricula_id = 1 ";
       	   
       if(isset($curso_id) and $curso_id!=null)
       {
       $query .="  AND t0011matriculas.t0003curso_id ={$curso_id} ";
       }
       if(isset($ano) and $ano!=null)
       {
       $query .= "  AND DATA LIKE '%{$ano}%'  ";
       }
	   
	   $query .="  order by t0003cursos.name,t0008alunos.name ";
	   
	  // var_dump($query);
       $resultado = $this->query($query);
       
	   return $resultado;
      
     }
	 
	 
	 function getAllMatriculadosAnuladoSuspensa($ano)
     {
       $query =  " SELECT t0008alunos.id, t0003cursos.name AS nome_do_curso,t0011matriculas.data AS data, t0008alunos.codigo AS codigo_do_Aluno, t0008alunos.name, t0011matriculas.codigo AS codgo_da_Matricula,t0011matriculas.modified as data_anulada, t0011matriculas.tg0021estadomatricula_id as estado ";
       $query.=  " FROM t0008alunos, t0011matriculas, t0003cursos ";
       $query.=  " WHERE t0008alunos.id = t0011matriculas.t0008aluno_id and t0003cursos.id = t0011matriculas.t0003curso_id and (tg0021estadomatricula_id = 2 or tg0021estadomatricula_id =3)";

       if(isset($ano) and $ano!=null)
       {
       $query .= "  AND DATA LIKE '%{$ano}%'  ";
       }
	   
        $query .=" order by t0008alunos.name ";
       
       $resultado = $this->query($query);
       //var_dump($query);
       return $resultado;
      
     }
	 
	 
	 
	 
	 function getAllMatriculadosConcluida($ano)
     {
       $query =  " SELECT t0008alunos.id, t0003cursos.name AS nome_do_curso,t0011matriculas.data AS data, t0008alunos.codigo AS codigo_do_Aluno, t0008alunos.name, t0011matriculas.modified as data_anulada ";
       $query.=  " FROM t0008alunos, t0011matriculas, t0003cursos ";
       $query.=  " WHERE t0008alunos.id = t0011matriculas.t0008aluno_id and t0003cursos.id = t0011matriculas.t0003curso_id and tg0021estadomatricula_id = 4";

       if(isset($ano) and $ano!=null)
       {
       $query .= "  AND DATA LIKE '%{$ano}%'  ";
       }

        $query .=" order by t0008alunos.name ";
       
       $resultado = $this->query($query);
       //var_dump($query);
       return $resultado;
      
     }

     function getAllInscricaoByCondition($turma_id,$ano_lectivo)
     {
       $query =  " SELECT ta.codigo,ta.name,ti.codigo,tt.name, ti.tg0020estadoinscricao_id, ti.data,tal.codigo,tc.name ";
       $query.=  " FROM t0013inscricaos ti, t0008alunos ta, t0004disciplinas td, t0010turmas tt,t0009anolectivos tal,t0003cursos tc  ";
       $query.=  " WHERE ti.t0008aluno_id = ta.id and tt.t0004disciplina_id = td.id and ti.t0010turma_id = tt.id and tal.id = tt.t0009anolectivo_id and tt.t0003curso_id = tc.id and ti.tg0020estadoinscricao_id <> 4  and ti.tg0020estadoinscricao_id <> 5 ";

       if(isset($turma_id) and $turma_id!=null)
       {
            $query .=" AND ti.t0010turma_id ={$turma_id} ";
       }
		if(isset($ano_lectivo) and $ano_lectivo!=null)
       {
            $query .=" AND tt.t0009anolectivo_id ={$ano_lectivo} ";
       }

        $query .=" order by ta.name ";

       $resultado = $this->query($query);
      //var_dump($query);
       return $resultado;

     }
	 
	 
	 
	 
	 
	 function getAllInscricaoAnuladasCanceladas($disciplina_id,$ano_lectivo)
     {
       $query =  " SELECT ta.codigo,ta.name,ti.codigo,tt.name, ti.tg0020estadoinscricao_id, ti.data, tal.codigo, tt.modified, tc.name ";
       $query.=  " FROM t0013inscricaos ti, t0008alunos ta, t0004disciplinas td, t0010turmas tt, t0009anolectivos tal,t0003cursos tc ";
       $query.=  " WHERE ti.t0008aluno_id = ta.id and tt.t0004disciplina_id = td.id and ti.t0010turma_id = tt.id and tt.t0003curso_id = tc.id and tal.id = tt.t0009anolectivo_id and (ti.tg0020estadoinscricao_id = 4 or ti.tg0020estadoinscricao_id = 5 ) ";

       if(isset($disciplina_id) and $disciplina_id!=null)
       {
            $query .=" AND ti.t0010turma_id ={$disciplina_id} ";
       }
		if(isset($ano_lectivo) and $ano_lectivo!=null)
       {
            $query .=" AND tt.t0009anolectivo_id ={$ano_lectivo} ";
       }

        $query .=" order by ta.name ";

       $resultado = $this->query($query);
     //var_dump($query);
       return $resultado;

     }


     
///////////**************************************/////////////////////

    function getLabelsPauta($anolectivo_id,$curso_id,$plano_id,$turma_id) {
		   // ATENCAO, Acrescentar os restantes campos (anolectivo, disciplina, etc...) no where
		
			$labels = "Cod.Aluno, Nome do Aluno";
			$query = "select id, name from t0015tipoavaliacaos where id in ( SELECT distinct tav.t0015tipoavaliacao_id FROM t0008alunos ta, t0013inscricaos ti, t0016avaliacaos tav, t0015tipoavaliacaos tta, t0010turmas tt, funcionarios tf, t0003cursos tc, t0009anolectivos tal, t0005planoestudos tp WHERE ti.t0008aluno_id = ta.id AND tav.t0013inscricao_id = ti.id AND tav.t0015tipoavaliacao_id = tta.id AND tt.id = ti.t0010turma_id AND tf.id = tt.funcionario_id AND tal.id = tt.t0009anolectivo_id AND tt.t0003curso_id = tc.id AND tp.id = tt.t0005planoestudo_id AND tt.t0009anolectivo_id = {$anolectivo_id} AND tt.t0005planoestudo_id = {$plano_id} AND tt.t0003curso_id = {$curso_id} AND ti.t0010turma_id ={$turma_id} ) ";
			
				$resultado = $this->query($query);       
				for($i=0;$i<count($resultado);$i++){
				   if (strcmp($labels,"")!=0) {
					    $labels = $labels . ", ";
					 }		 
				   $labels = $labels . "" . $resultado[$i]["t0015tipoavaliacaos"]['name'] . "";
		    }
			//var_dump($labels);
				return ($labels);
		}
			

  function constroiQueryPauta($anolectivo_id,$curso_id,$plano_id,$turma_id) {
	  // ATENCAO, Acrescentar os restantes campos (anolectivo, disciplina, etc...) no where
		$query = "select id, name from t0015tipoavaliacaos where id in ( SELECT distinct tav.t0015tipoavaliacao_id FROM t0008alunos ta, t0013inscricaos ti, t0016avaliacaos tav, t0015tipoavaliacaos tta, t0010turmas tt, funcionarios tf, t0003cursos tc, t0009anolectivos tal, t0005planoestudos tp WHERE ti.t0008aluno_id = ta.id AND tav.t0013inscricao_id = ti.id AND tav.t0015tipoavaliacao_id = tta.id AND tt.id = ti.t0010turma_id AND tf.id = tt.funcionario_id AND tal.id = tt.t0009anolectivo_id AND tt.t0003curso_id = tc.id AND tp.id = tt.t0005planoestudo_id AND tt.t0009anolectivo_id = {$anolectivo_id} AND tt.t0005planoestudo_id = {$plano_id} AND tt.t0003curso_id = {$curso_id} AND ti.t0010turma_id ={$turma_id} ) ";
			
		$resultado = $this->query($query);       
    $camposSum1 = "";
		for($i=0;$i<count($resultado);$i++){
			 if (strcmp($camposSum1,"")!=0) {
					$camposSum1 = $camposSum1 . ", ";
			 }
			 $camposSum1 = $camposSum1 . "sum(aval" . sprintf("%d",$resultado[$i]["t0015tipoavaliacaos"]['id']) . ") as " . sprintf("c%d",$i);
		}
		// comeca a compor a queryPauta
		$queryPauta = "select codigo, name, " . $camposSum1 . " from ( ";

		// compoe as queries de cada parte da union		
		for($i=0;$i<count($resultado);$i++){
		   $camposSum0 = "";
			 for($j=0;$j<count($resultado);$j++){
					if (strcmp($camposSum0,"")!=0) {
						 $camposSum0 = $camposSum0 . ", ";
					}
					if ($i == $j) {
						 $camposSum0 = $camposSum0 . "tav.nota as aval" . $resultado[$j]["t0015tipoavaliacaos"]['id'];
					} else {
						 $camposSum0 = $camposSum0 . "null as aval" . $resultado[$j]["t0015tipoavaliacaos"]['id'];
					}
				}
				if ($i > 0) {
					 $queryPauta = $queryPauta . "union all ";
				}
				// ATENCAO, Acrescentar os restantes campos (anolectivo, disciplina, etc...) no where
				$queryPauta = $queryPauta . "SELECT ta.codigo, ta.name," . $camposSum0 . " FROM t0008alunos ta, t0013inscricaos ti, t0016avaliacaos tav, t0015tipoavaliacaos tta, t0010turmas tt, funcionarios tf, t0003cursos tc, t0009anolectivos tal, t0005planoestudos tp WHERE ti.t0008aluno_id = ta.id AND tav.t0013inscricao_id = ti.id AND tav.t0015tipoavaliacao_id = tta.id AND tt.id = ti.t0010turma_id AND tf.id = tt.funcionario_id AND tal.id = tt.t0009anolectivo_id AND tt.t0003curso_id = tc.id AND tp.id = tt.t0005planoestudo_id AND tt.t0009anolectivo_id = {$anolectivo_id} AND tt.t0005planoestudo_id = {$plano_id} AND tt.t0003curso_id = {$curso_id} AND ti.t0010turma_id ={$turma_id} and tta.id=" . $resultado[$i]["t0015tipoavaliacaos"]['id'] . " ";
		}
			   				
		// coloca a finalizaÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â§ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â£o da querie
		$queryPauta = $queryPauta . ") tbl group by codigo, name";		
		
		
		//var_dump($queryPauta);	
		return ($queryPauta);
  }		 
	
	
  function  getAllPautaByCondition($anolectivo_id,$curso_id,$plano_id,$turma_id){
	 
	 //var_dump("entra getAllPautaResultado....");	
	 $query = $this->constroiQueryPauta($anolectivo_id,$curso_id,$plano_id,$turma_id);
     //var_dump($query);
	 
	 $resultado = $this->query($query);
	 //var_dump($query);
	 return $resultado;
}	


///////////**************************************/////////////////////

     function  getAllPautaExameByCondition($anolectivo_id,$curso_id,$plano_id,$turma_id){
	 
	 // le todos os tipo de avaliacao com notas
	 $query = "SELECT distinct ta.codigo, ta.name,ti.notafrequencia, ti.notafinal FROM t0008alunos ta, t0013inscricaos ti, t0016avaliacaos tav, t0015tipoavaliacaos tta, t0010turmas tt, funcionarios tf, t0003cursos tc, t0009anolectivos tal, t0005planoestudos tp WHERE ti.t0008aluno_id = ta.id AND tav.t0013inscricao_id = ti.id AND tav.t0015tipoavaliacao_id = tta.id AND tt.id = ti.t0010turma_id AND tf.id = tt.funcionario_id AND tal.id = tt.t0009anolectivo_id AND tt.t0003curso_id = tc.id AND tp.id = tt.t0005planoestudo_id AND tt.t0009anolectivo_id = {$anolectivo_id} AND tt.t0005planoestudo_id = {$plano_id} AND tt.t0003curso_id = {$curso_id} AND ti.t0010turma_id ={$turma_id} and (tta.id=4 or tta.id=5) order by ta.name ";
  
	   
	   //var_dump($query);
       $resultado = $this->query($query);       
       return $resultado;
    }


	//*****************Busca Dados para o mapa de frequencias**********************//
	function getAllTurmaByCondition($turma_id){

	
	   $query = "SELECT tt.anocurricular, tt.semestrecurricular, tt.name,tf.name, tc.name, tal.codigo FROM t0003cursos tc, t0010turmas tt, funcionarios tf, t0009anolectivos tal WHERE tt.t0003curso_id= tc.id AND tt.funcionario_id=tf.id AND tt.t0009anolectivo_id = tal.id AND tt.id={$turma_id}";
	   //var_dump( $query);
	   $resultado = $this->query($query);       
       return $resultado;
	}
	
	
	
     function  getCertificadoByCondition($t0008aluno_id) {

	 
       $query =  "select ta.name, ta.codigo,ta.datanascimento,tgp.name,tc.name, tt.name,ti.notafrequencia,ti.notafinal ";
       $query.=  "from t0008alunos ta,t0013inscricaos ti, t0010turmas tt, tg0003provincias tgp, t0003cursos tc ";
       $query.=  "where ti.t0008aluno_id= ta.id and tt.id=ti.t0010turma_id and ti.tg0020estadoinscricao_id = 2 and tgp.id= ta.tg0003provincia_id and tc.id=tt.t0003curso_id and tt.t0003curso_id = tc.id and ta.id ={$t0008aluno_id} ";

//var_dump($query);
       $resultado = $this->query($query);
       
       return $resultado;
    }
	
	
	function  getDeclaracaoByCondition($t0008aluno_id) {

	 
       $query =  "select ta.name, ta.codigo,ta.datanascimento,tgp.name,tc.name, tt.name,ti.notafrequencia,ti.notafinal ";
       $query.=  "from t0008alunos ta,t0013inscricaos ti, t0010turmas tt, tg0003provincias tgp, t0003cursos tc ";
       $query.=  "where ti.t0008aluno_id= ta.id and tt.id=ti.t0010turma_id and ti.tg0020estadoinscricao_id = 2 and tgp.id= ta.tg0003provincia_id and tc.id=tt.t0003curso_id and ta.id ={$t0008aluno_id} ";

//var_dump($query);
       $resultado = $this->query($query);
       
       return $resultado;
    }
	
	
	function  getPlanoByCondition($t0008aluno_id) {

	 
       $query =  "select t0005planoestudo_id from t0011matriculas where t0008aluno_id = {$t0008aluno_id} ";
       
	   //var_dump($query);
	   $resultado = $this->query($query);
       
	   //var_dump($resultado);
       return $resultado;
    }	
	
	function  getComparacaoDisciplinas($t0005planoestudo_id,$t0008aluno_id) {

	 
       $query1 =  "select count(*) t0004disciplina_id from t0006planoestudoanos where t0005planoestudo_id = {$t0005planoestudo_id} ";
       $query2 =  "select count(*) t0010turma_id from t0013inscricaos where tg0020estadoinscricao_id = 2 and t0008aluno_id = {$t0008aluno_id} ";
       
	   $resultado1 = $this->query($query1);
	   $resultado2 = $this->query($query2);
	   if($resultado1 != $resultado2)
	   {$resultado = false;}
	   else {$resultado = true;}
       
	   //var_dump($resultado);
       return $resultado;
    }
	

		
}
?>
