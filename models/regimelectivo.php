<?php
class Regimelectivo extends AppModel {
	var $name = 'Regimelectivo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 'regimelectivo_id',
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
