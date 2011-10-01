<?php
class Docente extends AppModel {
	var $name = 'Docente';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Seccao' => array(
			'className' => 'Seccao',
			'foreignKey' => 'seccao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DocenteCategoria' => array(
			'className' => 'DocenteCategoria',
			'foreignKey' => 'docente_categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
