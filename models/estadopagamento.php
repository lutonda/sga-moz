<?php
class Estadopagamento extends AppModel {
	var $name = 'Estadopagamento';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Pagamento' => array(
			'className' => 'Pagamento',
			'foreignKey' => 'estadopagamento_id',
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
