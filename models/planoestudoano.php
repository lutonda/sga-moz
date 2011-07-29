<?php
class Planoestudoano extends AppModel {
	var $name = 'Planoestudoano';

    var $belongsTo = array(
		'Disciplina' => array(
			'className' => 'Disciplina',
			'foreignKey' => 'disciplina_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);

    

    function findDisciplinasByPrecendencia($plano,$ano=1,$semestre=1){
            $disciplinas_id = $this->find('list',array('conditions'=>array('Planoestudoano.ano <'=>$ano),'fields'=>array('Planoestudoano.disciplina_id')));
            App::Import('Model','Disciplina');
            $disciplina = new Disciplina;

            $disciplinas = array();
            foreach($disciplinas_id as $did){
                $disciplina = $disciplina->findById($did);
                $nome_disciplina = $disciplina["Disciplina"]["name"];
                $disciplinas[$did] = $nome_disciplina;
            }

            return $disciplinas;
        }
}
?>