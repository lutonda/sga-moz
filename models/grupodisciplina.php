<?php
class Grupodisciplina extends AppModel {
	var $name = 'Grupodisciplina';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Disciplina' => array(
			'className' => 'Disciplina',
			'foreignKey' => 'disciplina_id',
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
        'Disciplina' => array(
			'className' => 'Disciplina',
			'foreignKey' => 'grupodisciplinasprec',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

        
}
?>