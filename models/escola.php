<?php
class Escola extends AppModel {
	var $name = 'Escola';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'tg0016escola_id',
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