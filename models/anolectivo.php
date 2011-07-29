<?php
class Anolectivo extends AppModel {
	var $name = 'Anolectivo';
        var $displayField = 'codigo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'anolectivo_id',
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