<?php
class M4eb1b7f72e584008ba030b5000000000 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'acos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
					'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'alunos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'nomepai' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'nomemae' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'foto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'genero_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'paise_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'moradarua' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'moradalocal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'moradacpostal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'cidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'natcidade' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'telefone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'telemovel' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'documento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'numdocumento' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'datanascimento' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'dataingresso' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'proveniencianome' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'provenienciacidade' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'provenienciaprovincia' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'provenienciapais' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'etrabalhador' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'areatrabalho_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'empresanome' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'empresamorada' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'empresacontacto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'empresatelefone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'empresaemail' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'empresasite' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'docdataemissao' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'doclocalemissao' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'detalhes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'estadoentidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'escola_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'AreaTrabalho' => array('column' => 'areatrabalho_id', 'unique' => 0),
						'Cidade' => array('column' => 'cidade_id', 'unique' => 0),
						'Curso' => array('column' => 'curso_id', 'unique' => 0),
						'Entidade' => array('column' => 'entidade_id', 'unique' => 0),
						'Escola' => array('column' => 'escola_id', 'unique' => 0),
						'Estadoentidade' => array('column' => 'estadoentidade_id', 'unique' => 0),
						'Genero' => array('column' => 'genero_id', 'unique' => 0),
						'Pais' => array('column' => 'paise_id', 'unique' => 0),
						'Provincia' => array('column' => 'provincia_id', 'unique' => 0),
						'Tipodocumento' => array('column' => 'documento_id', 'unique' => 0),
						'Usuario' => array('column' => 'user_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'anolectivos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'ano' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'num_semestre' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'datainicio' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'datafim' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'regimelectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'areatrabalhos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'aros' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
					'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'aros_acos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'aro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'aco_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
					'_create' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'_read' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'_update' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'_delete' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'ARO_ACO_KEY' => array('column' => array('aro_id', 'aco_id'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'avaliacaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'tipoavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'inscricao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'nota' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'funcionario_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						't0015tipoavaliacao_id' => array('column' => array('tipoavaliacao_id', 'inscricao_id'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'cargos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'cidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'paise_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'configs' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'value' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'autoload' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'contas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'aluno_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'saldo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'cursos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'escola_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'grauacademico_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'tipocurso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'cursos_escolas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'escola_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'data_adicao' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'Curso' => array('column' => 'curso_id', 'unique' => 0),
						'Escola' => array('column' => 'escola_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'departamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'disciplinas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'grupodisciplinar_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'docente_categorias' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'docentes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'seccao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'docente_categoria_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'documentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'entidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'nomepai' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'nomemae' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'foto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'genero_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'paise_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'moradarua' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'moradalocal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'moradacpostal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'cidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'natcidade' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'telefone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'telemovel' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'documento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'numdocumento' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'datanascimento' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'docdataemissao' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'estadoentidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'user_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'biografia' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'epocaavaliacaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'escolas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'logo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'escolas_tipopagamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'escola_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'tipopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'valor' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'month_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data_limite' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'mes_limite' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'dia_limite' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'estadoentidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'estadoinscricaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'estadomatriculas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'estadomessages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'estadopagamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'faculdades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'feriados' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'cidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'dia' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'month_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'detalhes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'funcionarios' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'user_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'foto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'genero_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'grauacademico_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'paise_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'moradarua' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'moradalocal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'moradacpostal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'cidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'natcidade' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'natpais' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'telefone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'telemovel' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'documento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => 'Documento de Identificação'),
					'numdocid' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'cargo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'departamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'responsavel' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'datainicio' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'datanascimento' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'tipofuncionario_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'estadoentidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'generos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'grauacademicos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'groups' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'grupodisciplinars' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'grupodisciplinas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'planoestudo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'tipoprecedencia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'grupodisciplinasprec' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'i18n' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'locale' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 6, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
					'field' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'content' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'locale' => array('column' => 'locale', 'unique' => 0),
						'model' => array('column' => 'model', 'unique' => 0),
						'row_id' => array('column' => 'foreign_key', 'unique' => 0),
						'field' => array('column' => 'field', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'inscricaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'turma_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'estadoinscricao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'notafrequencia' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'notafinal' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'epocaavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'logmvs' => array(
					'logmv_uname' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'tipomovimento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'seqmovimento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'logmv_dtdia' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'id_tab' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'descricao_tab' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'matricularevisaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'revisao' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'datahora' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'datamatricula' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'estado' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'matriculas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'estadomatricula_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'turno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'nivel' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'mensalidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'valor' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data_pagamento' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'month_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'valor_multa' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'ano' => array('type' => 'text', 'null' => true, 'default' => NULL, 'length' => 4, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'messages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'recipient_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'assunto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'mensagem' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'datainicio' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'datafim' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'estado' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'months' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'movimentoentidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'tipomovimento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'detalhes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'pagamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'conta_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'valor' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data_pagamento' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'tipopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data_orcamento' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data_limite' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'estadopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 12, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'paises' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'nacionalidade' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'planoestudoanos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'planoestudo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'ano' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'semestre' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'cargahorariateoricas' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'cargahorariapraticas' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'creditos' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'ramo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'planoestudos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'duracao' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'semestresano' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'provincias' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'paise_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'ramos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'regimelectivos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'seccaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'departamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'faculdade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'semestrelectivos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'anolectivo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'semestre' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data_inicio' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data_fim' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'seqmovimentos' => array(
					'seqmovimento_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'seqmovimento_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'tipoavaliacaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'epocaavaliacao_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipocursos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipofuncionarios' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipomovimentos' => array(
					'tipomovimento_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'tipomovimento_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipopagamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'valor' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'month_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data_limite' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'mes_limite' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'dia_limite' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipoprecedencias' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'turmas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'anosemestrecurr' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'turno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'docente_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'assistente_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'nummaximo' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'numaprovados' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'mediaturma' => array('type' => 'float', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'estadoturma_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'numreprovados' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'escola_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'anocurricular' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'semestrecurricular' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'turmatipoavaliacaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'turma_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'tipoavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'data' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'scanpauta' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'estado' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'turnos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
					'username' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'codigocartao' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'group_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'acos', 'alunos', 'anolectivos', 'areatrabalhos', 'aros', 'aros_acos', 'avaliacaos', 'cargos', 'cidades', 'configs', 'contas', 'cursos', 'cursos_escolas', 'departamentos', 'disciplinas', 'docente_categorias', 'docentes', 'documentos', 'entidades', 'epocaavaliacaos', 'escolas', 'escolas_tipopagamentos', 'estadoentidades', 'estadoinscricaos', 'estadomatriculas', 'estadomessages', 'estadopagamentos', 'faculdades', 'feriados', 'funcionarios', 'generos', 'grauacademicos', 'groups', 'grupodisciplinars', 'grupodisciplinas', 'i18n', 'inscricaos', 'logmvs', 'matricularevisaos', 'matriculas', 'mensalidades', 'messages', 'months', 'movimentoentidades', 'pagamentos', 'paises', 'planoestudoanos', 'planoestudos', 'provincias', 'ramos', 'regimelectivos', 'seccaos', 'semestrelectivos', 'seqmovimentos', 'tipoavaliacaos', 'tipocursos', 'tipofuncionarios', 'tipomovimentos', 'tipopagamentos', 'tipoprecedencias', 'turmas', 'turmatipoavaliacaos', 'turnos', 'users'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
