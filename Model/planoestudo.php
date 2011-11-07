<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 * 
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 * 
 * Este software � distribuido sob a perspectiva de que possa ser �til para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 * 
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
 
class Planoestudo extends AppModel {
	var $name = 'Planoestudo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

        function getAllDisciplinasByPlanoEstudo($plano_id){
            App::import('Model','planoestudoano');
            $planoestudoano = new Planoestudoano;
            $query = "Select p.id,planoestudo_id,ano,semestre,cargahorariateoricas,cargahorariapraticas,d.id,d.name,d.codigo,pe.curso_id,pe.name ";
            $query .="from planoestudoanos p,disciplinas d,planoestudos pe ";
            $query .="where p.disciplina_id = d.id and p.planoestudo_id = {$plano_id} and p.planoestudo_id=pe.id ";
            $query .="order by ano, semestre, d.name ";
            $disciplinas = $this->query($query);
            for($i=0;$i<count($disciplinas);$i++){
                $disciplinas[$i]['pr']=$this->getAllPrecedenciasByDisciplina($disciplinas[$i]['d']['id'],$plano_id);
                
            }
            return $disciplinas;
        }

		
        function deleteAllDisciplinasByPlanoEstudo($plano_id){
            App::import('Model','planoestudoano');
            $planoestudoano = new Planoestudoano;
            $query = "delete from planoestudoanos  where planoestudo_id = {$plano_id} ";
            $resultado = $this->query($query);
			return $resultado;
        }	

        function deleteAllGrupoDiscByPlanoEstudo($plano_id){
            App::import('Model','Grupodisciplina');
            $planoestudogruposdisc = new Grupodisciplina;
            $query = "delete from grupodisciplinas where planoestudo_id = {$plano_id} ";
           	$resultado = $this->query($query);
			return $resultado;
        }			
		

       function getAllMatriculasByPlanoEstudo($plano_id){
            App::import('Model','planoestudoano');
            $planoestudoano = new Planoestudoano;
            $query = "select tm.id ";
            $query .="from planoestudos tp , matriculas tm ";
            $query .="where tm.planoestudo_id=tp.id and tm.planoestudo_id = {$plano_id} ";
            $resultado = $this->query($query);
			
			//var_dump($resultado);
			return $resultado;
        }		
		

        function getAllPrecedenciasByDisciplina($disciplina_id,$plano_id=null){
            App::Import('Model','Grupodisciplina');
            $grupodisciplinas = new Grupodisciplina;
            
            $o = $grupodisciplinas->find('all',array('conditions'=>array('planoestudo_id'=>$plano_id,'disciplina_id'=>$disciplina_id,'tipoprecedencia_id'=>'O'),'fields'=>array('Grupodisciplina.id','Disciplina.name')));
            $obr=array();
            foreach($o as $ob){
                $obr[$ob['Grupodisciplina']['id']]=$ob['Disciplina']['name'];
            }
            $a = $grupodisciplinas->find('all',array('conditions'=>array('planoestudo_id'=>$plano_id,'disciplina_id'=>$disciplina_id,'tipoprecedencia_id'=>'A'),'fields'=>array('Grupodisciplina.id','Disciplina.name')));
            $acs=array();
            foreach($a as $ac){
                
                $acs[$ac['Grupodisciplina']['id']]=$ac['Disciplina']['name'];
            }
            $precedencias = array('a'=>$acs,'o'=>$obr);
           

            return $precedencias;
        }
		
		

}
?>