<?php
class Avaliacao extends AppModel {
	var $name = 'Avaliacao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tipoavaliacao' => array(
			'className' => 'Tipoavaliacao',
			'foreignKey' => 'tipoavaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'inscricao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	
		//Devolve o ano lectivo
        function getAnoLectivo($anolectivo_id){
            $query = "select codigo from anolectivos where id = {$anolectivo_id}";
		//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
		
		//Devolve o Curso
        function getCurso($curso_id){
            $query = "select name from cursos where id = {$curso_id}";		
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;				
		}
		
				//Devolve o Plano
        function getPlano($planoestudo_id){
            $query = "select name from t0005planoestudos where id = {$planoestudo_id}";		
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;				
		}
		
		function getTurma($turma_id){
            $query = "select name from turmas where id = {$turma_id}";		
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;				
		}
		
		function getEpocaAvaliacaos($epocaavaliacao_id){
            $query = "select name from epocaavaliacaos where id = {$epocaavaliacao_id}";		
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;				
		}		
		
		function getTipoAvaliacaos($tipoavaliacao_id){
            $query = "select name from tipoavaliacaos where id = {$tipoavaliacao_id}";		
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;				
		}



		function getAlunosByTurma($turma_id,$epocadeavaliacao)
		{
		    if($epocadeavaliacao == 1)
			{
            $query = "select ti.id,ta.codigo, ta.name, ti.id,ti.notafinal,ti.notafrequencia,ti.estadoinscricao_id FROM Alunos ta, inscricaos ti          where ti.Aluno_id = ta.id and ti.estadoinscricao_id = 1 and ti.turma_id = {$turma_id}";	
			}
			if($epocadeavaliacao == 2)
			{
            $query = "select ti.id,ta.codigo, ta.name, ti.id,ti.notafinal,ti.notafrequencia,ti.estadoinscricao_id FROM Alunos ta, inscricaos ti          where ti.Aluno_id = ta.id and (ti.estadoinscricao_id = 7 ) and ti.turma_id = {$turma_id}";	
			}
			if($epocadeavaliacao == 3)
			{
            $query = "select ti.id,ta.codigo, ta.name, ti.id,ti.notafinal,ti.notafrequencia,ti.estadoinscricao_id FROM Alunos ta, inscricaos ti          where ti.Aluno_id = ta.id and (ti.estadoinscricao_id = 3) and ti.turma_id = {$turma_id}";	
			}
            $resultado = $this->query($query);
			//var_dump($query);
			return $resultado;				
		}
		
		function ifExist($inscricao_id)
		{
		    $query = "select inscricao_id from avaliacaos where  inscricao_id = {$inscricao_id}";
			$resultado = $this->query($query);
			//var_dump($query);
			return $resultado;	
		}
		
		function update_plano(){
			App::Import('Model','Planoestudo');
            $t005planoestudos = new Planoestudo;
			
			//select tp.name from t0005planoestudos tp,t0003cursos tc where tp.t0003curso_id = tc.id and tp.t0003curso_id = 1
			
			$planoestudo = $t005planoestudos->find('all',array('conditions'=>array('Aluno_id'=>$this->data['Inscricao']['Aluno_id'])));		
			$plano = $planoestudo[0]['Planoestudo'];		
			$this->set('plano',$plano);
			$this->layout = 'ajax';
		}

		function getCodigoName($aluno_id ){
            $query = "SELECT ta.codigo, ta.name FROM Alunos ta, t0013inscricaos ti WHERE ti.Aluno_id = ta.id AND ti.Aluno_id = {$aluno_id} ";		
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;				
		}
		
		
		
}
?>