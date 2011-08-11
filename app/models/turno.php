<?php
class Turno extends AppModel {
	var $name = 'Turno';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'tg0012turno_id',
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

}
?>