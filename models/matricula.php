<?php
class Matricula extends AppModel {
	var $name = 'Matricula';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'aluno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Planoestudo' => array(
			'className' => 'Planoestudo',
			'foreignKey' => 'planoestudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estadomatricula' => array(
			'className' => 'Estadomatricula',
			'foreignKey' => 'estadomatricula_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    var $validate = array(
        'Aluno_id' =>array(
            'rule'=>'validaMatricula',
            'message'=>'Este aluno ja possui uma matricula activa'
        )
    );

    function validaMatricula($check){
        $aluno = $check['aluno_id'];
        $alunos = $this->find('all',array('conditions'=>array('aluno_id'=>$aluno,'estadomatricula_id'=>4)));
       
        if(empty($alunos)){return true;}
        return false;
    }
	function verificaStatusAluno($id_aluno){
       $query = "SELECT estadomatricula_id FROM matriculas WHERE aluno_id ={$id_aluno}";
	   $resultado = $this->query($query);
	   //var_dump($resultado);
	   return $resultado;
    }

    function getAlunosForMatricula(){
        App::import('Model','Aluno');
        $aluno = new Aluno;

        $matriculados_f = $this->find('list',array('conditions'=>array('estadomatricula_id'=>4,'estadomatricula_id'=>3,'estadomatricula_id'=>1),'fields'=>'aluno_id'));
        $matriculados = array();
        foreach($matriculados_f as $f){
            $matriculados[] = $f;
        }
        $alunos = $aluno->find('list',array('conditions'=>array("NOT"=>array('Aluno.id'=>$matriculados)),'order'=>array('Aluno.name')));
       return $alunos;
    }
	
	
   function getAlunosForMatricula1(){
        App::import('Model','Aluno');
        $aluno = new Aluno;

        $matriculados_f = $this->find('list',array('conditions'=>array('estadomatricula_id'=>1),'fields'=>'aluno_id'));
        $matriculados = array();
        foreach($matriculados_f as $f){
            $matriculados[] = $f;
        }
        $alunos = $aluno->find('list',array('conditions'=>array(array('Aluno.id'=>$matriculados)),'order'=>array('Aluno.name')));
       return $alunos;
    }
	
}
?>