<?php
class Avaliacao extends AppModel {
	var $name = 'Avaliacao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tipoavaliacao' => array(
			'className' => 'Tipoavaliacao',
			'foreignKey' => 't0015tipoavaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 't0013inscricao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	
		//Devolve o ano lectivo
        function getAnoLectivo($t0009anolectivo_id){
            $query = "select codigo from t0009anolectivos where id = {$t0009anolectivo_id}";
		//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
		
		//Devolve o Curso
        function getCurso($curso_id){
            $query = "select name from t0003cursos where id = {$curso_id}";		
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
            $query = "select name from t0010turmas where id = {$turma_id}";		
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;				
		}
		
		function getEpocaAvaliacaos($epocaavaliacao_id){
            $query = "select name from t0014epocaavaliacaos where id = {$epocaavaliacao_id}";		
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;				
		}		
		
		function getTipoAvaliacaos($tipoavaliacao_id){
            $query = "select name from t0015tipoavaliacaos where id = {$tipoavaliacao_id}";		
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;				
		}



		function getAlunosByTurma($turma_id,$epocadeavaliacao)
		{
		    if($epocadeavaliacao == 1)
			{
            $query = "select ti.id,ta.codigo, ta.name, ti.id,ti.notafinal,ti.notafrequencia,ti.tg0020estadoinscricao_id FROM Alunos ta, t0013inscricaos ti          where ti.Aluno_id = ta.id and ti.tg0020estadoinscricao_id = 1 and ti.t0010turma_id = {$turma_id}";	
			}
			if($epocadeavaliacao == 2)
			{
            $query = "select ti.id,ta.codigo, ta.name, ti.id,ti.notafinal,ti.notafrequencia,ti.tg0020estadoinscricao_id FROM Alunos ta, t0013inscricaos ti          where ti.Aluno_id = ta.id and (ti.tg0020estadoinscricao_id = 7 ) and ti.t0010turma_id = {$turma_id}";	
			}
			if($epocadeavaliacao == 3)
			{
            $query = "select ti.id,ta.codigo, ta.name, ti.id,ti.notafinal,ti.notafrequencia,ti.tg0020estadoinscricao_id FROM Alunos ta, t0013inscricaos ti          where ti.Aluno_id = ta.id and (ti.tg0020estadoinscricao_id = 3) and ti.t0010turma_id = {$turma_id}";	
			}
            $resultado = $this->query($query);
			//var_dump($query);
			return $resultado;				
		}
		
		function ifExist($inscricao_id)
		{
		    $query = "select t0013inscricao_id from t0016avaliacaos where  t0013inscricao_id = {$inscricao_id}";
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