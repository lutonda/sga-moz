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
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class Logmv extends AppModel {
	var $name = 'Logmv';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tipomovimento' => array(
			'className' => 'Tipomovimento',
			'foreignKey' => 'Tipomovimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Seqmovimento' => array(
			'className' => 'Seqmovimento',
			'foreignKey' => 'tg0023seqmovimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		
	);
	//---------------------------------- Metodos definidos por Rchongo-------------------------------------------
	//---------------------------------------function login---------------------------------------------------
	function loglogin($form,$user)
	{
	 App::Import('Model','Logmv');
	 $logmv = new Logmv;
            $logmv=array();
			$logmv['Logmv']['logmv_uname'] = $user;
			$logmv['Logmv']['Tipomovimento_id'] = '1';
			$logmv['Logmv']['tg0023seqmovimento_id'] = $form;
			$logmv['Logmv']['logmv_dtdia'] = date("Y-m-d H:i:s");
			$logmv['Logmv']['id_tab'] = 1;
			$logmv['Logmv']['descricao_tab'] =  'Sistema';
			//$logmv->save($logmv);
	}
	//---------------------------------------function logout---------------------------------------------------
     function loglogout($form,$user)
	{
	 App::Import('Model','Logmv');
	 $logmv = new Logmv;
            $logmv=array();
			$logmv['Logmv']['logmv_uname'] = $user;
			$logmv['Logmv']['Tipomovimento_id'] = '2';
			$logmv['Logmv']['tg0023seqmovimento_id'] = $form;
			$logmv['Logmv']['logmv_dtdia'] =date("Y-m-d H:i:s");
			//$logmv->save($logmv);
	}
	//---------------------------------------function logviw_pdf---------------------------------------------------
	//---------------------------------- function Insert --------------------------------------------------------
	
	function logInsert($form,$user,$id_tab,$descricao)
	{
	 App::Import('Model','Logmv');
	 $logmv = new Logmv;
            $logmv=array();
			$logmv['Logmv']['logmv_uname'] = $user;
			$logmv['Logmv']['Tipomovimento_id'] = '3';
			$logmv['Logmv']['tg0023seqmovimento_id'] = $form;
			$logmv['Logmv']['logmv_dtdia'] = date("Y-m-d H:i:s");
			$logmv['Logmv']['id_tab'] = $id_tab;
			$logmv['Logmv']['descricao_tab'] =  $descricao;
			//$logmv->save($logmv);
	}
	//------------------------------------ function Update----------------------------------------------------
	function logUpdate($form,$user,$id_tab,$descricao)
	{
	 App::Import('Model','Logmv');
	 $logmv = new Logmv;
            $logmv=array();
			$logmv['Logmv']['logmv_uname'] = $user;
			$logmv['Logmv']['Tipomovimento_id'] = '4';
			$logmv['Logmv']['tg0023seqmovimento_id'] = $form;
			$logmv['Logmv']['logmv_dtdia'] = date('Y-m-d');
			$logmv['Logmv']['id_tab'] = $id_tab;
			$logmv['Logmv']['descricao_tab'] =  $descricao;
			//$logmv->save($logmv);
	}
	//---------------------------------------function View ---------------------------------------------------
	function logview($form,$user,$id_tab,$descricao)
	{
	 App::Import('Model','Logmv');
	 $logmv = new Logmv;
            $logmv=array();
			$logmv['Logmv']['logmv_uname'] = $user;
			$logmv['Logmv']['Tipomovimento_id'] = '5';
			$logmv['Logmv']['tg0023seqmovimento_id'] = $form;
			$logmv['Logmv']['logmv_dtdia'] = date("Y-m-d H:i:s");
			$logmv['Logmv']['id_tab'] = $id_tab;
			$logmv['Logmv']['descricao_tab'] =  $descricao;
			//$logmv->save($logmv);
	}
	
	//------------------------------------ function Delete----------------------------------------------------
	function logDelete($form,$user,$id_tab,$descricao)
	{
	 App::Import('Model','Logmv');
	 $logmv = new Logmv;
            $logmv=array();
			$logmv['Logmv']['logmv_uname'] = $user;
			$logmv['Logmv']['Tipomovimento_id'] = '6';
			$logmv['Logmv']['tg0023seqmovimento_id'] = $form;
			$logmv['Logmv']['logmv_dtdia'] = date("Y-m-d H:i:s");
			$logmv['Logmv']['id_tab'] = $id_tab;
			$logmv['Logmv']['descricao_tab'] =  $descricao;
			//var_dump($logmv);
			//$logmv->save($logmv);
	}
	
    function logviw_pdf($form,$user)
	{
	 App::Import('Model','Logmv');
	 $logmv = new Logmv;
            $logmv=array();
			$logmv['Logmv']['logmv_uname'] = $user;
			$logmv['Logmv']['Tipomovimento_id'] = '7';
			$logmv['Logmv']['tg0023seqmovimento_id'] = $form;
			$logmv['Logmv']['logmv_dtdia'] = date("Y-m-d H:i:s");
			//$logmv->save($logmv);
	}
}
?>