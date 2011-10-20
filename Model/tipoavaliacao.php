<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class Tipoavaliacao extends AppModel {
	var $name = 'Tipoavaliacao';

    var $belongsTo = array(
		'Epocaavaliacao' => array(
			'className' => 'Epocaavaliacao',
			'foreignKey' => 'epocaavaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
    );

    var $validate = array(
        'name' => array(
            'rule1'=>array(
                'rule'=>'isUnique',
                'message'=>'Este tipo de Avaliação ja foi Registrado'
            ),
            'rule2'=>array(
                'rule'=>'notEmpty',
                'message'=>'O nome do tipo de avaliação não pode estar em branco'
            )
        )
    );
}
?>