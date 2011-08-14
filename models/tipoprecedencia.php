<?php
class Tipoprecedencia extends AppModel {
	var $name = 'Tipoprecedencia';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Grupodisciplina' => array(
			'className' => 'Grupodisciplina',
			'foreignKey' => 'tipoprecedencia_id',
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
