<?php
class Cargo extends AppModel {
	var $name = 'Cargo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'funcionario' => array(
			'className' => 'funcionario',
			'foreignKey' => 'tg0005cargo_id',
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