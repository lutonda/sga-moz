<?php
class Estadomatricula extends AppModel {
	var $name = 'Estadomatricula';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Matricula' => array(
			'className' => 'Matricula',
			'foreignKey' => 'tg0021estadomatricula_id',
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