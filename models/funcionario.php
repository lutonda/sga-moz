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
 
 
class funcionario extends AppModel {
	var $name = 'funcionario';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Grauacademico' => array(
			'className' => 'Grauacademico',
			'foreignKey' => 'grauacademico_id',
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
        'CidadeNascimento' => array(
			'className' => 'Cidade',
			'foreignKey' => 'natcidade',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'Provincia_id',
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
		'Cargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'cargo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'departamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Genero' => array(
			'className' => 'Genero',
			'foreignKey' => 'genero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipofuncionario' => array(
			'className' => 'Tipofuncionario',
			'foreignKey' => 'tipofuncionario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		
	);

	var $hasMany = array(
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'funcionario_id',
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

        function geraCodigo(){
            $id = $this->find('first', array('order' => array('funcionario.created DESC'),'fields'=>'id'));
            $ano=date('Y');
            $id_for=str_pad($id['funcionario']['id']+1, 5,"0",STR_PAD_LEFT);
            $codigo = $ano.$id_for;
            return $codigo;
        }

        function criaUsername($name){
            $nome_lw = strtolower($name);
            $nome_ex = explode(' ',$nome_lw);
            $nome_1 = substr($nome_ex[0], 0,1);
            $nome_2 = end($nome_ex);
            $nome = $nome_1.$nome_2;
            $numero = $this->User->find('count',array('conditions'=>array('username'=>$nome)));
            if($numero>0){
                //$numero=$numero+1;
                $nome = $nome.$numero;
            }
            
            return $nome;
        }
		

		function getTurmasByFuncionario($funcionario_id){
            $query = "SELECT tt.id FROM t0010turmas tt, funcionarios tf where (tf.id = tt.funcionario_id or tt.funcionario_ass_id = tf.id) and tf.id  = {$funcionario_id} ";
           	$resultado = $this->query($query);
			return $resultado;
        }



}
?>