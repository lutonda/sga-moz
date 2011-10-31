<?php
App::uses('AppModel', 'Model');
/**
 * Month Model
 *
 * @property EscolasTipopagamento $EscolasTipopagamento
 * @property Feriado $Feriado
 * @property Mensalidade $Mensalidade
 * @property Tipopagamento $Tipopagamento
 */
class Month extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'EscolasTipopagamento' => array(
			'className' => 'EscolasTipopagamento',
			'foreignKey' => 'month_id',
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
		'Feriado' => array(
			'className' => 'Feriado',
			'foreignKey' => 'month_id',
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
		'Mensalidade' => array(
			'className' => 'Mensalidade',
			'foreignKey' => 'month_id',
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
		'Tipopagamento' => array(
			'className' => 'Tipopagamento',
			'foreignKey' => 'month_id',
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
