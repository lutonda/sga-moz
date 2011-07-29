<?php
class Tipocurso extends AppModel {
	var $name = 'Tipocurso';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'tg0007tipocurso_id',
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