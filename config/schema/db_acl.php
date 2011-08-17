<?php
/**
 * OpenSGA - Sistema de Gestуo Acadщmica
 *   Copyright (C) 2010-2011  INFOmoz (Informсtica-Moчambique)
 * 
 * Este programa щ um software livre: Vocъ pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licenчa por nele
 * estabelecidos. Grande parte do cѓdigo deste programa estс sob a licenчa 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versуo original desta licenчa estс disponэvel na pasta raiz deste software.
 * 
 * Este software щ distribuido sob a perspectiva de que possa ser њtil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licenчa GNU Affero General Public License para mais detalhes
 * 
 * As redistribuiчѕes deste software, mesmo quando o cѓdigo-fonte for modificado significativamente,
 * devem manter estс informaчуo legal, assim como a licenчa original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informсtica-Moчambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.config
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
/*
 *
 * Using the Schema command line utility
 * cake schema run create DbAcl
 *
 */
class DbAclSchema extends CakeSchema {

	var $name = 'DbAcl';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $acos = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'parent_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'model' => array('type'=>'string', 'null' => true),
			'foreign_key' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'alias' => array('type'=>'string', 'null' => true),
			'lft' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'rght' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);

	var $aros = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'parent_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'model' => array('type'=>'string', 'null' => true),
			'foreign_key' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'alias' => array('type'=>'string', 'null' => true),
			'lft' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'rght' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);

	var $aros_acos = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'aro_id' => array('type'=>'integer', 'null' => false, 'length' => 10, 'key' => 'index'),
			'aco_id' => array('type'=>'integer', 'null' => false, 'length' => 10),
			'_create' => array('type'=>'string', 'null' => false, 'default' => '0', 'length' => 2),
			'_read' => array('type'=>'string', 'null' => false, 'default' => '0', 'length' => 2),
			'_update' => array('type'=>'string', 'null' => false, 'default' => '0', 'length' => 2),
			'_delete' => array('type'=>'string', 'null' => false, 'default' => '0', 'length' => 2),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'ARO_ACO_KEY' => array('column' => array('aro_id', 'aco_id'), 'unique' => 1))
		);

}
?>