<?php
class Grupodisciplinar extends AppModel {
	var $name = 'Grupodisciplinar';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Disciplina' => array(
			'className' => 'Disciplina',
			'foreignKey' => 'tg0008grupodisciplinar_id',
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