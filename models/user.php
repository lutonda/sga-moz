<?php
class User extends AppModel {
	var $name = 'User';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'funcionario' => array(
			'className' => 'funcionario',
			'foreignKey' => 'user_id',
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
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'user_id',
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
	
	var $actsAs = array('Acl' => array('type' => 'requester'));
 
	 function parentNode() {
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['User']['group_id'])) {
			$groupId = $this->data['User']['group_id'];
		} else {
			$groupId = $this->field('group_id');
		}
		if (!$groupId) {
			return null;
		} else {
			return array('Group' => array('id' => $groupId));
		}
	}
	 
	function bindNode($user) {
		return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
	}
	
	
		function getUserByFuncionario($funcionario_id){
            $query = "SELECT us.id FROM users us, funcionarios tf WHERE tf.user_id = us.id AND tf.id = {$funcionario_id} ";
           	$resultado = $this->query($query);
			return $resultado;
        }
		
		function getAlunoIDByUser($user_id){
            $query = "SELECT ta.id FROM users us, Alunos ta WHERE ta.user_id = us.id AND us.id = {$user_id} ";		
           	$resultado = $this->query($query);			
			return $resultado[0]["ta"]["id"];
        }

		function getFuncionarioIDByUser($user_id){
            $query = "SELECT tf.id FROM users us, funcionarios tf WHERE tf.user_id = us.id AND us.id = {$user_id} ";
           	$resultado = $this->query($query);
			return $resultado[0]["tf"]["id"];
        }
		
		
		function deleteUser($user_id){
            $query = "delete from users where id = {$user_id} ";
           	$resultado = $this->query($query);
			//var_dump($query);
			return $resultado;
        }
}
?>