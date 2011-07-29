<?php
class T0018turmatipoavaliacao extends AppModel {
	var $name = 'T0018turmatipoavaliacao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 't0010turma_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipoavaliacao' => array(
			'className' => 'Tipoavaliacao',
			'foreignKey' => 't0015tipoavaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>