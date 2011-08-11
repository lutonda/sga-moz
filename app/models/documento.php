<?php
class Documento extends AppModel {
	var $name = 'Documento';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'funcionario' => array(
			'className' => 'funcionario',
			'foreignKey' => 'documento_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'documento_id',
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