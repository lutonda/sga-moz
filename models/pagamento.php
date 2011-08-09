<?php
class Pagamento extends AppModel {
	var $name = 'Pagamento';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'aluno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Conta' => array(
			'className' => 'Conta',
			'foreignKey' => 'conta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipopagamento' => array(
			'className' => 'Tipopagamento',
			'foreignKey' => 'tipopagamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 'anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estadopagamento' => array(
			'className' => 'Estadopagamento',
			'foreignKey' => 'estadopagamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)				
	);
	
	/**
	 * Gera todos os pagamentos de todos os alunos matriculados
	 * Nao duplica pagamentos para o mesmo plano de estudos
	 */
	function gerarPagamentos($anolectivo_id){
			
		$this->Tipopagamento->recursive = -1;
		
		/**
		 * Temos de gerar apenas para um semestre!
		 */
		$this->Anolectivo->recursive=-1;
		$semestre = $this->Anolectivo->findById($anolectivo_id);
		$num_semestre = $semestre['Anolectivo']['num_semestre'];
		
		if($num_semestre==1){
			$tipos = array(1,2,3,4,5,6,7);
		}
		else{
			$tipos = array(1,2,8,9,10,11,12);	
		}
		$tipopagamentos = $this->Tipopagamento->find('all',array('conditions'=>array('Tipopagamento.id'=>$tipos)));
		$alunos = $this->Aluno->Matricula->getAllAlunosMatriculados($anolectivo_id);
		
		
		foreach($alunos as $aluno){
			$aluno_id = $aluno['Matricula']['aluno_id'];
			
			foreach($tipopagamentos as $tp){
					
				$pagamento=array();
				$pagamento['aluno_id'] = $aluno_id;
				$pagamento['valor'] = $tp['Tipopagamento']['valor'];
				$pagamento['tipopagamento_id'] = $tp['Tipopagamento']['id'];
				$pagamento['anolectivo_id'] = $anolectivo_id;
				if($tp['Tipopagamento']['mes_limite']!=null){
					$data_limite = date('Y')."-".$tp['Tipopagamento']['mes_limite']."-".$tp['Tipopagamento']['dia_limite'];
					$pagamento['data_limite'] = $data_limite;
				}
				
				/**
				 * @Todo o digito numerico aqui deve ser automatizado antes do proximo semestre :-)
				 * FIXME O digito numerico deve ser mudado antes do proximo semestre :-)
				 */
				$codigo_pagamento = $aluno['Aluno']['codigo'].$tp['Tipopagamento']['codigo']."01";
				
				$pagamento['codigo'] = $codigo_pagamento;
				$pagamentos = array('Pagamento'=>$pagamento);
				
				if(!$this->evitaDuplicados($pagamento)){
					$this->create();
					$this->save($pagamentos);
					
				}
					
				}
				
				
			}
		}
		
		

	function evitaDuplicados($pagamento){
		$this->recursive=-1;	
		$pagamento = $this->find('first',array('conditions'=>array('Pagamento.aluno_id'=>$pagamento['aluno_id'],'anolectivo_id'=>$pagamento['anolectivo_id'],'tipopagamento_id'=>$pagamento['tipopagamento_id'])));
		
		return $pagamento;
	}
}
