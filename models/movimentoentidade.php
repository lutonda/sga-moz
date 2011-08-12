<?php
class Movimentoentidade extends AppModel {
	var $name = 'Movimentoentidade';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipomovimento' => array(
			'className' => 'Tipomovimento',
			'foreignKey' => 'Tipomovimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>