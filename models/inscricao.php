<?php
class Inscricao extends AppModel {
	var $name = 'Inscricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'Aluno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 't0010turma_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estadoinscricao' => array(
			'className' => 'Estadoinscricao',
			'foreignKey' => 'tg0020estadoinscricao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Epocaavaliacao' => array(
			'className' => 'Epocaavaliacao',
			'foreignKey' => 't0014epocaavaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Avaliacao' => array(
			'className' => 'Avaliacao',
			'foreignKey' => 't0013inscricao_id',
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

        /**
         *Retorna a lista de todos os alunos que podem fazer inscricao
         * Podem fazer inscricao os alunos que tiverem a matricula activa
         * @return array()
         */
        function findAllAlunos(){
            App::import('Model','Matricula');
            $matriculas = new Matricula;
            //$matriculas->recursive=-1;
            $alunos = $matriculas->find('all',array('conditions'=>array('tg0021estadomatricula_id'=>1),'order'=> array ('name ASC')));
            $alunos2 = array();
            foreach($alunos as $aluno){
                $alunos2[$aluno['Aluno']['id']] = $aluno['Aluno']['name'];
            }
		    return $alunos2;
        }
		// Devolve o turno da Turma
		function getAnolectivo($turma_id){
            $query = "SELECT tal.codigo FROM t0010turmas tt, t0009anolectivos tal WHERE tt.t0009anolectivo_id=tal.id and tt.id= {$turma_id}";
            //var_dump($query);
			$resultado = $this->query($query);
			return $resultado;				
		}
	

		

}
?>