<?php
class T0017anolectivoepoca extends AppModel {
	var $name = 'T0017anolectivoepoca';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 't0009anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Epocaavaliacao' => array(
			'className' => 'Epocaavaliacao',
			'foreignKey' => 't0014epocaavaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>