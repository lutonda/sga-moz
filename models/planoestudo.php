<?php
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
            $query = "Select p.id,planoestudo_id,ano,semestre,cargahorariateoricas,cargahorariapraticas,d.id,d.name,d.codigo ";
            $query .="from planoestudoanos p,disciplinas d ";
            $query .="where p.disciplina_id = d.id and p.planoestudo_id = {$plano_id} ";
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
            
            $o = $grupodisciplinas->find('all',array('conditions'=>array('planoestudo_id'=>$plano_id,'disciplina_id'=>$disciplina_id,'tipo'=>'O'),'fields'=>array('Grupodisciplina.id','Disciplina.name')));
            $obr=array();
            foreach($o as $ob){
                $obr[$ob['Grupodisciplina']['id']]=$ob['Disciplina']['name'];
            }
            $a = $grupodisciplinas->find('all',array('conditions'=>array('planoestudo_id'=>$plano_id,'disciplina_id'=>$disciplina_id,'tipo'=>'A'),'fields'=>array('Grupodisciplina.id','Disciplina.name')));
            $acs=array();
            foreach($a as $ac){
                
                $acs[$ac['Grupodisciplina']['id']]=$ac['Disciplina']['name'];
            }
            $precedencias = array('a'=>$acs,'o'=>$obr);
           

            return $precedencias;
        }
		
		

}
?>