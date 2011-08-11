<?php
class Provincia extends AppModel {
	var $name = 'Provincia';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Paise' => array(
			'className' => 'Paise',
			'foreignKey' => 'Paise_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>