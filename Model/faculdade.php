<?php
class Faculdade extends AppModel {
	var $name = 'Faculdade';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Seccao' => array(
			'className' => 'Seccao',
			'foreignKey' => 'faculdade_id',
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
