<?php
class Tipofuncionario extends AppModel {
	var $name = 'Tipofuncionario';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'funcionario' => array(
			'className' => 'funcionario',
			'foreignKey' => 'tg0011tipofuncionario_id',
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