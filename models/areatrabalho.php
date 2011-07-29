<?php
class Areatrabalho extends AppModel {
	var $name = 'Areatrabalho';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'tg0010areatrabalho_id',
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