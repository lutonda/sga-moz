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
 
 
class Inscricao extends AppModel {
	var $name = 'Inscricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'Aluno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'turma_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estadoinscricao' => array(
			'className' => 'Estadoinscricao',
			'foreignKey' => 'estadoinscricao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Epocaavaliacao' => array(
			'className' => 'Epocaavaliacao',
			'foreignKey' => 'epocaavaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Avaliacao' => array(
			'className' => 'Avaliacao',
			'foreignKey' => 'inscricao_id',
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

        /**
         *Retorna a lista de todos os alunos que podem fazer inscricao
         * Podem fazer inscricao os alunos que tiverem a matricula activa
         * @return array()
         */
        function findAllAlunos(){
            App::import('Model','Matricula');
            $matriculas = new Matricula;
            //$matriculas->recursive=-1;
            $alunos = $matriculas->find('all',array('conditions'=>array('tg0021estadomatricula_id'=>1),'order'=> array ('name ASC')));
            $alunos2 = array();
            foreach($alunos as $aluno){
                $alunos2[$aluno['Aluno']['id']] = $aluno['Aluno']['name'];
            }
		    return $alunos2;
        }
		// Devolve o turno da Turma
		function getAnolectivo($turma_id){
            $query = "SELECT tal.codigo FROM turmas tt, anolectivos tal WHERE tt.anolectivo_id=tal.id and tt.id= {$turma_id}";
            //var_dump($query);
			$resultado = $this->query($query);
			return $resultado;				
		}
	

		

}
?>