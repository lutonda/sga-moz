<?php
class Tipomovimento extends AppModel {
	var $name = 'Tipomovimento';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Movimentoentidade' => array(
			'className' => 'Movimentoentidade',
			'foreignKey' => 'Tipomovimento_id',
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