<?php
class DocenteCategoria extends AppModel {
	var $name = 'DocenteCategoria';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Docente' => array(
			'className' => 'Docente',
			'foreignKey' => 'docente_categoria_id',
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
