<?php
class T0012matricularevisao extends AppModel {
	var $name = 'T0012matricularevisao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'Aluno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 't0003curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Planoestudo' => array(
			'className' => 'Planoestudo',
			'foreignKey' => 't0005planoestudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>