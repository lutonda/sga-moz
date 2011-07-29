<?php
class Seqmovimento extends AppModel {
	var $name = 'Seqmovimento';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Seqmovimentoentidade' => array(
			'className' => 'Seqmovimento',
			'foreignKey' => 'tg0023seqmovimento_id',
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