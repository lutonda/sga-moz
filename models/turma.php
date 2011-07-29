<?php
class Turma extends AppModel {
	var $name = 'Turma';
    var $recursive = 0;
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 't0009anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 't0003curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Planoestudo' => array(
			'className' => 'Planoestudo',
			'foreignKey' => 't0005planoestudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Turno' => array(
			'className' => 'Turno',
			'foreignKey' => 'tg0012turno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Disciplina' => array(
			'className' => 'Disciplina',
			'foreignKey' => 't0004disciplina_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'funcionario' => array(
			'className' => 'funcionario',
			'foreignKey' => 'funcionario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Escola' => array(
			'className' => 'Escola',
			'foreignKey' => 'tg0016escola_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 't0009anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Planoestudo' => array(
			'className' => 'Planoestudo',
			'foreignKey' => 't0005planoestudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 't0010turma_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


        function getAllTurmasActivasByPlanoEstudo($plano){

            return $this->find('list',array('conditions'=>array('t0005planoestudo_id'=>$plano,'estado'=>1),'fields'=>array('t0004disciplina_id')));

            
        }

	
		// Faz o update do estado da turma para fechada
		function upDateTurma($t0009anolectivo_id, $curso_id){
            $query = "update t0010turmas tt set tt.estado = 3 where tt.t0003curso_id = {$curso_id} and tt.t0009anolectivo_id = {$t0009anolectivo_id}";
            $resultado = $this->query($query);
			//var_dump($query);
			return $resultado;
		
        }

	
				// Contacta os alunos inscritos numa determinada turma
		function getAlunosInscritos($turma_id){
            $query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id}";
            $resultado = $this->query($query);
			//var_dump($resultado);
			return $resultado;		
        }

				// Devolve todos os estudante aprovados
		function getAlunosAprovados($turma_id){
            $query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.tg0020estadoinscricao_id =2 and ti.t0010turma_id = {$turma_id}";
            $resultado = $this->query($query);
			return $resultado;			

		}
		
		// Devolve todos os estudante reprovados
		function getAlunosReprovados($turma_id){
            $query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.tg0020estadoinscricao_id =3 and ti.t0010turma_id = {$turma_id}";
            $resultado = $this->query($query);
			return $resultado;			

		}
		
		// Devolve a media da turma
		function getSomaNotaFinal($turma_id){
            $query = "select sum(notafinal) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;	
			
		}

		
		// Devolve o nome do docente da turma
		function getDocente($turma_id){
            $query = "select tf.name from t0010turmas tt, t0013inscricaos ti, funcionarios tf where ti.t0010turma_id = tt.id and tt.funcionario_id = tf.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;	
			
		}	

		// Devolve o nome do assistente da turma
		function getAssistente($turma_id){
            $query = "select tf.name from t0010turmas tt, t0013inscricaos ti, funcionarios tf where ti.t0010turma_id = tt.id and tt.funcionario_ass_id = tf.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}	


		// Devolve o nome do plano
		function getPlanoEstudo($turma_id){
            $query = "select tp.name from t0010turmas tt, t0005planoestudos tp, t0013inscricaos ti where ti.t0010turma_id = tt.id and  tt.t0005planoestudo_id = tp.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
		// Devolve o nome da Turma
		function getTurma($turma_id){
            $query = "select tt.name from t0010turmas tt, t0013inscricaos ti where ti.t0010turma_id = tt.id  and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
		
		// Devolve o turno da Turma
		function getTurno($turma_id){
            $query = "select ttu.name from t0010turmas tt, t0013inscricaos ti, tg0012turnos ttu where ti.t0010turma_id = tt.id and tt.tg0012turno_id = ttu.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
				// Devolve o ano curricular
		function getAnoCurricular($turma_id){
			$query = "select tt.anocurricular from t0010turmas tt, t0013inscricaos ti where ti.t0010turma_id = tt.id  and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
				// Devolve o semestre curricular da turma
		function getSemestreCurricular($turma_id){
            $query = "select tt.semestrecurricular from t0010turmas tt, t0013inscricaos ti where ti.t0010turma_id = tt.id  and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
		// Devolve o ano lectivo
		function getAnoLectivo($turma_id){
            $query = "select tal.codigo from t0010turmas tt, t0013inscricaos ti, t0009anolectivos tal where ti.t0010turma_id = tt.id and tt.t0009anolectivo_id = tal.id and ti.t0010turma_id = {$turma_id}";
			//var_dump($query);
            $resultado = $this->query($query);
			return $resultado;				
		}
		
					// Devolve o nome do curso
	function getCursoAluno($aluno_id){
		$query = "select tc.name from t0010turmas tt, t0013inscricaos ti, t0003cursos tc where ti.t0010turma_id = tt.id and tt.t0003curso_id = tc.id and ti.t0010turma_id = {$aluno_id}";
		//var_dump($query);
		$resultado = $this->query($query);
		return $resultado;	
			
	}
	
	function getAluno($turma_id){
		$query = "select ta.name from t0010turmas tt, Alunos ta, t0013inscricaos ti, t0011matriculas tm where tm.Aluno_id = ta.id and tm.tg0021estadomatricula_id =1 and ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id} order by ta.name ";
		//var_dump($query);
		$resultado = $this->query($query);
		//var_dump($resultado);
		return $resultado;	
			
	}

	
	// Devolve a turma de um determinado aluno
	function getTurmaAluno($t0009anolectivo_id, $curso_id, $planoestudo_id, $aluno_id){
	$query = "select tt.name from t0010turmas tt, t0013inscricaos ti where tt.id=ti.t0010turma_id and tt.t0009anolectivo_id = {$t0009anolectivo_id} and tt.t0003curso_id ={$curso_id} and tt.t0005planoestudo_id = {$planoestudo_id} and ti.Aluno_id = {$aluno_id}";
	//var_dump($query);
	$resultado = $this->query($query);
	//var_dump($resultado);
	return $resultado;	
			
	}
	 
	// Devolve as turmas de um determinado ano Curricular
	/*function getTurmaAnoCurricular($t0009anolectivo_id){
		$query = "select tt.anocurricular from t0010turmas tt where tt.t0009anolectivo_id = {$t0009anolectivo_id}";
		$resultado = $this->query($query);
		var_dump($query);
		return $resultado;				
	}*/

        		// Devolve o turno da Turma
	function getTurnoTurma($turma_id){
            $query = "select ttu.name from t0010turmas tt, tg0012turnos ttu where  tt.tg0012turno_id = ttu.id and tt.id = {$turma_id}";
            
            $resultado = $this->query($query);
            //var_dump($resultado);
            return $resultado;
	}


		function getTurmasByFuncionario($funcionario_id){
            $query = "SELECT tt.id FROM t0010turmas tt, funcionarios tf where (tf.id = tt.funcionario_id or tt.funcionario_ass_id = tf.id) and tf.id  = {$funcionario_id} ";
           	$resultado = $this->query($query);
			return $resultado;
        }	
	
}
?>