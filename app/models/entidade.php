<?php
class Entidade extends AppModel {
	var $name = 'Entidade';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Genero' => array(
			'className' => 'Genero',
			'foreignKey' => 'genero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Paise' => array(
			'className' => 'Paise',
			'foreignKey' => 'paise_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Documento' => array(
			'className' => 'Documento',
			'foreignKey' => 'documento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estadoentidade' => array(
			'className' => 'Estadoentidade',
			'foreignKey' => 'estadoentidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'entidade_id',
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
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'entidade_id',
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