<?php
class M4e4a4fd49ef8438b8fc116ac00000000 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	var $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	var $migration = array(
		'up' => array(
			'create_table' => array(
				'anolectivoepocas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'epocaavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'limite' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'api_classes' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'api_package_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'file_name' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'method_index' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'property_index' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'flags' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 5),
					'coverage_cache' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '4,4'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'api_package_id' => array('column' => 'api_package_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'api_packages' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'parent_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'parent_id' => array('column' => 'parent_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'estadomessages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'grupodisciplinasprecedentes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'grupodisciplina_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'grupodisciplinaprecedente_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'tipoprecedencia_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'curso_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'matricularevisaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'revisao' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'datahora' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'datamatricula' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'estado' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'schema_migrations' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'version' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'semestrelectivos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'anolectivo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'semestre' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'data_inicio' => array('type' => 'date', 'null' => false, 'default' => NULL),
					'data_fim' => array('type' => 'date', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'turmatipoavaliacaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'turma_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'tipoavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'data' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'scanpauta' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
			),
			'drop_field' => array(
				'configs' => array('autoload',),
			),
			'drop_table' => array(
				'acos', 'alunos', 'anolectivos', 'areatrabalhos', 'aros', 'aros_acos', 'avaliacaos', 'cargos', 'cidades', 'contas', 'cursos', 'cursos_escolas', 'departamentos', 'disciplinas', 'documentos', 'entidades', 'epocaavaliacaos', 'escolas', 'escolas_tipopagamentos', 'estadoentidades', 'estadoinscricaos', 'estadomatriculas', 'estadopagamentos', 'funcionarios', 'generos', 'grauacademicos', 'groups', 'grupodisciplinars', 'grupodisciplinas', 'i18n', 'inscricaos', 'logmvs', 'matriculas', 'mensalidades', 'messages', 'months', 'movimentoentidades', 'pagamentos', 'paises', 'planoestudoanos', 'planoestudos', 'provincias', 'ramos', 'regimelectivos', 'seqmovimentos', 'tipoavaliacaos', 'tipocursos', 'tipofuncionarios', 'tipomovimentos', 'tipopagamentos', 'tipoprecedencias', 'turmas', 'turnos', 'users'
			),
		),
		'down' => array(
			'drop_table' => array(
				'anolectivoepocas', 'api_classes', 'api_packages', 'estadomessages', 'grupodisciplinasprecedentes', 'matricularevisaos', 'schema_migrations', 'semestrelectivos', 'turmatipoavaliacaos'
			),
			'add_field' => array(
				'configs' => array(
					'autoload' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
				),
			),
			'create_table' => array(
				'acos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'alunos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'nomepai' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'nomemae' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'foto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'genero_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'paise_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'moradarua' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'moradalocal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'moradacpostal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'cidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'natcidade' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'telefone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'telemovel' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'documento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'numdocumento' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'datanascimento' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'dataingresso' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'proveniencianome' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'provenienciacidade' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'provenienciaprovincia' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'provenienciapais' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'etrabalhador' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'areatrabalho_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'empresanome' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'empresamorada' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'empresacontacto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'empresatelefone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'empresaemail' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'empresasite' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'docdataemissao' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'doclocalemissao' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'detalhes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'estadoentidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'escola_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'anolectivos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'ano' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'num_semestre' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'datainicio' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'datafim' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'regimelectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'areatrabalhos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'aros' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'aros_acos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'aro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
					'aco_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
					'_create' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'_read' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'_update' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'_delete' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'ARO_ACO_KEY' => array('column' => array('aro_id', 'aco_id'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'avaliacaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'tipoavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
					'inscricao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'nota' => array('type' => 'float', 'null' => true, 'default' => NULL),
					'data' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'funcionario_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						't0015tipoavaliacao_id' => array('column' => array('tipoavaliacao_id', 'inscricao_id'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'cargos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'cidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'paise_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'contas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'aluno_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'saldo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'cursos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'escola_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'grauacademico_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'tipocurso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'cursos_escolas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'escola_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'data_adicao' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'departamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'disciplinas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'grupodisciplinar_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'documentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'entidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'nomepai' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'nomemae' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'foto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'genero_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'paise_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'moradarua' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'moradalocal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'moradacpostal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'cidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'natcidade' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'telefone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'telemovel' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'documento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'numdocumento' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'datanascimento' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'docdataemissao' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'estadoentidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'user_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'epocaavaliacaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'escolas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'logo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'escolas_tipopagamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'escola_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'tipopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'valor' => array('type' => 'float', 'null' => true, 'default' => NULL),
					'month_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'data_limite' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'mes_limite' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'dia_limite' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'estadoentidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'estadoinscricaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'estadomatriculas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'estadopagamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'funcionarios' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'user_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'foto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'genero_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'grauacademico_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'paise_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'moradarua' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'moradalocal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'moradacpostal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'cidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'natcidade' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'natpais' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'telefone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'telemovel' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'documento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Documento de Identificação'),
					'numdocid' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'cargo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'departamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'responsavel' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'datainicio' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'datanascimento' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'tipofuncionario_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'estadoentidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'generos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'grauacademicos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'groups' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'grupodisciplinars' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'grupodisciplinas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'planoestudo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'tipoprecedencia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'grupodisciplinasprec' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'i18n' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
					'locale' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 6, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
					'field' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'content' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'turma_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'estadoinscricao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'notafrequencia' => array('type' => 'float', 'null' => true, 'default' => NULL),
					'notafinal' => array('type' => 'float', 'null' => true, 'default' => NULL),
					'epocaavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'data' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'logmvs' => array(
					'logmv_uname' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'tipomovimento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'seqmovimento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'logmv_dtdia' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'id_tab' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'descricao_tab' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'matriculas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'data' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'estadomatricula_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'turno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'nivel' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'mensalidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'valor' => array('type' => 'float', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'data_pagamento' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'month_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'valor_multa' => array('type' => 'float', 'null' => true, 'default' => NULL),
					'ano' => array('type' => 'text', 'null' => true, 'default' => NULL, 'length' => 4),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'messages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'recipient_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'assunto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'mensagem' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'datainicio' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'datafim' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'estado' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'months' => array(
					'int' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'int', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'movimentoentidades' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'tipomovimento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'data' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'detalhes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'pagamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'conta_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'valor' => array('type' => 'float', 'null' => true, 'default' => NULL),
					'data_pagamento' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'tipopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'data_orcamento' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'data_limite' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'estadopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 12, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'paises' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'nacionalidade' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'planoestudoanos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'planoestudo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'ano' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'semestre' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'cargahorariateoricas' => array('type' => 'integer', 'null' => true, 'default' => '0'),
					'cargahorariapraticas' => array('type' => 'integer', 'null' => true, 'default' => '0'),
					'creditos' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'ramo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'planoestudos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'duracao' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'semestresano' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'provincias' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'paise_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'ramos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'regimelectivos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'seqmovimentos' => array(
					'seqmovimento_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'seqmovimento_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
				'tipoavaliacaos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'epocaavaliacao_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipocursos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipofuncionarios' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipomovimentos' => array(
					'tipomovimento_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'tipomovimento_id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipopagamentos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'valor' => array('type' => 'float', 'null' => true, 'default' => NULL),
					'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'month_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'data_limite' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'mes_limite' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'dia_limite' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'tipoprecedencias' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'turmas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'anosemestrecurr' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'turno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'funcionario_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'funcionario_ass_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'nummaximo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'numaprovados' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'mediaturma' => array('type' => 'float', 'null' => true, 'default' => NULL),
					'estado' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'numreprovados' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'escola_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'anocurricular' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'semestrecurricular' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'turnos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'username' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'codigocartao' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'group_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
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
	function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function after($direction) {
		return true;
	}
}
?>