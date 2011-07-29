<?php
class Grauacademico extends AppModel {
	var $name = 'Grauacademico';

        var $validar = array(
             'name' => array(
                 'minLength'=> array(
                     'rule'=> array('minLength',1),
                     'allowEmpty'=> false,
                     'message'=> 'Campo Obrigatorio'

                 )
             )
        );
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'funcionario' => array(
			'className' => 'funcionario',
			'foreignKey' => 'Grauacademico_id',
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
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'Grauacademico_id',
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