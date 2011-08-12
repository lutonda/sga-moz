<?php
class Tipoavaliacao extends AppModel {
	var $name = 'Tipoavaliacao';

    var $belongsTo = array(
		'Epocaavaliacao' => array(
			'className' => 'Epocaavaliacao',
			'foreignKey' => 't0014epocaavaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
    );

    var $validate = array(
        'name' => array(
            'rule1'=>array(
                'rule'=>'isUnique',
                'message'=>'Este tipo de avaliaÃƒÂ§ÃƒÂ£o jÃƒÂ¡ foi registrado'
            ),
            'rule2'=>array(
                'rule'=>'notEmpty',
                'message'=>'O nome do tipo de avaliaÃƒÂ§ÃƒÂ£o nÃƒÂ£o pode estar em branco'
            )
        )
    );
}
?>