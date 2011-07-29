<?php
class Estadoinscricao extends AppModel {
	var $name = 'Estadoinscricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'tg0020estadoinscricao_id',
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