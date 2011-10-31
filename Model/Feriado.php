<?php
App::uses('AppModel', 'Model');
/**
 * Feriado Model
 *
 * @property Provincia $Provincia
 * @property Cidade $Cidade
<<<<<<< HEAD
 * @property Month $Month
=======
>>>>>>> 35801335a86a2e7e00116c8036e9e34f553dacfe
 */
class Feriado extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_id',
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
<<<<<<< HEAD
		),
		'Month' => array(
			'className' => 'Month',
			'foreignKey' => 'month_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	function getFeriados(){
		$feriados = $this->find('list',array('conditions'=>array('month_id'=>date('m')),'fields'=>array('dia')));
		
		return $feriados;
	}
=======
		)
	);
>>>>>>> 35801335a86a2e7e00116c8036e9e34f553dacfe
}
