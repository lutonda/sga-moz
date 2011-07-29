<?php
class funcionario extends AppModel {
	var $name = 'funcionario';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Grauacademico' => array(
			'className' => 'Grauacademico',
			'foreignKey' => 'grauacademico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Paise' => array(
			'className' => 'Paise',
			'foreignKey' => 'paise_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'CidadeNascimento' => array(
			'className' => 'Cidade',
			'foreignKey' => 'natcidade',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'Provincia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Documento' => array(
			'className' => 'Documento',
			'foreignKey' => 'documento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'cargo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'departamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Genero' => array(
			'className' => 'Genero',
			'foreignKey' => 'genero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipofuncionario' => array(
			'className' => 'Tipofuncionario',
			'foreignKey' => 'tipofuncionario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		
	);

	var $hasMany = array(
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'funcionario_id',
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

        function geraCodigo(){
            $id = $this->find('first', array('order' => array('funcionario.created DESC'),'fields'=>'id'));
            $ano=date('Y');
            $id_for=str_pad($id['funcionario']['id']+1, 5,"0",STR_PAD_LEFT);
            $codigo = $ano.$id_for;
            return $codigo;
        }

        function criaUsername($name){
            $nome_lw = strtolower($name);
            $nome_ex = explode(' ',$nome_lw);
            $nome_1 = substr($nome_ex[0], 0,1);
            $nome_2 = end($nome_ex);
            $nome = $nome_1.$nome_2;
            $numero = $this->User->find('count',array('conditions'=>array('username'=>$nome)));
            if($numero>0){
                //$numero=$numero+1;
                $nome = $nome.$numero;
            }
            
            return $nome;
        }
		

		function getTurmasByFuncionario($funcionario_id){
            $query = "SELECT tt.id FROM t0010turmas tt, funcionarios tf where (tf.id = tt.funcionario_id or tt.funcionario_ass_id = tf.id) and tf.id  = {$funcionario_id} ";
           	$resultado = $this->query($query);
			return $resultado;
        }



}
?>