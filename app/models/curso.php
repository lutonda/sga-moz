<?php
class Curso extends AppModel {
	var $name = 'Curso';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Grauacademico' => array(
			'className' => 'Grauacademico',
			'foreignKey' => 'grauacademico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Escola' => array(
			'className' => 'Escola',
			'foreignKey' => 'escola_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipocurso' => array(
			'className' => 'Tipocurso',
			'foreignKey' => 'tipocurso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Planoestudo' => array(
			'className' => 'Planoestudo',
			'foreignKey' => 'curso_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'curso_id',
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

    var $validate = array(
    'codigo' => array(
        'rule' => 'isUnique',
        'message' => 'Este codigo ja foi usado por outro curso.'
    ),
    'name' => array(
        'rule' => 'isUnique',
        'message' => 'Ja existe um curso com este nome.'
    )
        
);

    function geraCodigo(){
            $id = $this->find('first', array('order' => array('Curso.created DESC'),'fields'=>'id'));
            $ano=date('Y');
            $id_for=str_pad($id['Curso']['id']+1, 4,"0",STR_PAD_LEFT);
            $codigo = "C".$id_for;
            return $codigo;
        }

}
?>