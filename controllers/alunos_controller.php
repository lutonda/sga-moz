<?php
class AlunosController extends AppController {

	var $name = 'Alunos';

	function index() {
		$this->Aluno->recursive = 0;
		$this->set('date_options_created', array_merge($this->_Form_options_datetime, array('selected'=>$this->process_datetime('Model.created'))));  
    $this->set('date_options_modified', array_merge($this->_Form_options_datetime, array('selected'=>$this->process_datetime('Model.modified'))));  
		$this->set('alunos', $this->paginate(null, $this->_Filter));
		
		$escolas = $this->Aluno->Escola->find('list');
		$cursos = $this->Aluno->Curso->find('list');
		
		$this->set(compact('escolas','cursos'));
		$this->set('relatorio','aluno_relatorio');
		//$this->layout='3_colunas';
		
	}

	function view($id = null){
	        App::Import('Model','Matricula');
	        $Matricula = new Matricula;			
		if (!$id) {
			//$this->Session->setFlash('Invalido %s', 'error');
			$this->redirect(array('action' => 'index'));
		}
			if (empty($this->data)) {
			$this->data = $this->Aluno->read(null, $id);
		}
          $extras = $this->data['Aluno']['foto'];

        $this->set('fotoaluno',$extras);
		$this->set('aluno',$this->data);
		$users = $this->Aluno->User->find('list');
		$paises = $this->Aluno->Paise->find('list');
		$cidades = $this->Aluno->Cidade->find('list');
		$provincias = $this->Aluno->Provincia->find('list');
        $provenienciacidades = $this->Aluno->Cidade->find('list');
		$proveniencianomes = $this->Aluno->Provincia->find('list');
		$documentos = $this->Aluno->Documento->find('list');
		$areatrabalhos = $this->Aluno->Areatrabalho->find('list');
		$generos = $this->Aluno->Genero->find('list');
        $cidadenascimentos = $this->Aluno->CidadeNascimento->find('list');
		$cursos = $this->Aluno->Curso->find('list');
		$planoestudos = $Matricula->Planoestudo->find('list');
		
		$this->set(compact('cursos','planoestudos','users', 'paises', 'cidades', 'provincias', 'documentos', 'areatrabalhos','generos','cidadenascimentos','proveniencianomes','provenienciacidades'));
	}


	function add() {
	        App::Import('Model','Matricula');
	        $Matricula = new Matricula;
			
			
		if (!empty($this->data)) {
				//die(var_dump($this->data));
			
			$data_matricula = array();
			
			$this->Aluno->create();
                        $this->data['Aluno']['codigo'] = $this->Aluno->geraCodigo();
                        $nome_foto = WWW_ROOT."\ffotos\\".$this->data['Aluno']['foto']['name'];
			$imagem=array($this->data['Aluno']['foto']);
			
			$fileOk = $this->uploadFiles('upload',$imagem);
			if(isset($fileOk['urls']) and $fileOk['urls']!=null){
			$this->data['Aluno']['foto']=$fileOk['urls'][0];}
			else{
				$this->data['Aluno']['foto']='';
			}
                        
                        $this->Aluno->User->create();
                        $this->data['User']['username'] = $this->data['Aluno']['codigo'];
                        $this->data['User']['password'] = md5($this->data['Aluno']['codigo']);
                        $this->data['User']['codigocartao'] = $this->data['Aluno']['codigo'];
                        $this->data['User']['group_id'] = 3;
                        $this->Aluno->User->save($this->data);
                        $this->data['Aluno']['user_id'] = $this->Aluno->User->getLastInsertID();
                        //$this->data['Aluno']['foto'] = $this->data['Aluno']['codigo'].".jpg";
              
			if ($this->Aluno->save($this->data)) {
				
            					/**
								 * Pega os dados da matricula e realiza a matricula
								 * @TODO Mudar o ano lectivo para algo mais serio :)
								 * @Todo O turno e o nivel tambem ainda esta weak
								 */                    
								 $data_matricula['aluno_id']= $this->Aluno->getInsertID();
								 $data_matricula['curso_id'] = $this->data['Aluno']['curso_id'];
								 $data_matricula['planoestudo_id'] = $this->data['Aluno']['planoestudo_id'];
								 $data_matricula['estadomatricula_id'] = 1;
								 $data_matricula['data'] = $this->data['Aluno']['dataingresso'];
								 $data_matricula['user_id'] = $this->Session->read('Auth.User.id');
								 $data_matricula['anolectivo_id'] = 4;
								 
								 $matricula_gravar=array('Matricula'=>$data_matricula);
								
								 if($Matricula->save($matricula_gravar)){
									  $this->Session->setFlash('** Dados Cadastrados com Sucesso **','sucesso');
									  $this->redirect(array('action' => 'index'));
								} else {
									  $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','error');
								}
					}
		}
		$cursos = $this->Aluno->Curso->find('list');
		
		$planoestudos = $Matricula->Planoestudo->find('list');
		$users = $this->Aluno->User->find('list');
		$paises = $this->Aluno->Paise->find('list');
		$cidades = $this->Aluno->Cidade->find('list');
		$provincias = $this->Aluno->Provincia->find('list');
        $provenienciacidades = $this->Aluno->ProvenienciaCidade->find('list');
		$proveniencianomes = $this->Aluno->ProvenienciaProvincia->find('list');
		$documentos = $this->Aluno->Documento->find('list');
		$areatrabalhos = $this->Aluno->Areatrabalho->find('list');
		$generos = $this->Aluno->Genero->find('list');
		$cidadenascimentos = $this->Aluno->CidadeNascimento->find('list');
		$this->set(compact('cursos','planoestudos','users', 'paises', 'cidades', 'provincias', 'documentos', 'areatrabalhos','generos','cidadenascimentos','proveniencianomes','provenienciacidades'));
	}

	function edit($id = null) {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'error');

			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			
			$imagem = array($this->data['Aluno']['foto']);
			
			$fileOk = $this->uploadFiles('upload',$imagem);
			
			$this->data['Aluno']['foto']=$fileOk['urls'][0];
			
			if ($this->Aluno->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','error');}
		}
		if (empty($this->data)) {
			$this->data = $this->Aluno->read(null, $id);
			$logmv->logUpdate(7,$this->Session->read('Auth.User.id'),$id,$this->data["Aluno"]["name"]);
		}
		$users = $this->Aluno->User->find('list');
		$paises = $this->Aluno->Paise->find('list');
		$cidades = $this->Aluno->Cidade->find('list');
		$provincias = $this->Aluno->Provincia->find('list');
        $provenienciacidades = $this->Aluno->ProvenienciaCidade->find('list');
		$proveniencianomes = $this->Aluno->ProvenienciaProvincia->find('list');
		$documentos = $this->Aluno->Documento->find('list');
		$areatrabalhos = $this->Aluno->Areatrabalho->find('list');
		$generos = $this->Aluno->Genero->find('list');
		$cidadenascimentos = $this->Aluno->CidadeNascimento->find('list');
		$this->set(compact('users', 'Paises', 'Cidades', 'Provincias', 'Documentos', 'tg0010areatrabalhos','generos','cidadenascimentos','proveniencianomes','provenienciacidades'));
	}

	function delete($id = null) {
	        App::Import('Model','Logmv');
	        $logmv = new Logmv;
		App::Import('Model','Matricula');
        $matricula = new Matricula;
		
		App::Import('Model','User');
        $users = new User;
		
		if (!$id) {
			$this->Session->setFlash('Invalido id para %s', 'error');
			$this->redirect(array('action'=>'index'));
		}
		$dados= $matricula->getMatriculaAluno($id);
        $user_id =	$dados[0]["ta"]["user_id"];	

		if(empty($dados)){
		$apagar = $users->deleteUser($user_id);	
		if ($this->Aluno->delete($id)) {
		$logmv->logDelete(4,$this->Session->read('Auth.User.id'),$id,$this->data["Aluno"]["name"]);
			$this->Session->setFlash('Dados deletedos com sucesso ','sucesso');
			$this->redirect(array('action'=>'index'));
		}
		}
		$this->Session->setFlash('Nao e possivel apagar. O aluno esta associado a uma matricula','error');
		$this->redirect(array('action' => 'index'));
	}


	function beforeRender(){
            $this->set('current_section','estudantes');
        }
		
        function pdf_index($id = null){
		    App::Import('Model','Logmv');
	        $logmv = new Logmv;
           Configure::write('debug',0); // Otherwise we cannot use this method while developing
             if (empty($this->data)) {
			$this->data = $this->Aluno->read(null, $id);
		}
		$users = $this->Aluno->User->find('list');
		$paises = $this->Aluno->Paise->find('list');
		$cidades = $this->Aluno->Cidade->find('list');
		$provincias = $this->Aluno->Provincia->find('list');
		$documentos = $this->Aluno->Documento->find('list');
		$areatrabalhos = $this->Aluno->Areatrabalho->find('list');
		//$generos = $this->Aluno->Generos->find('list');
		$generos = $this->Aluno->Genero->find('list');
		$this->set(compact('users', 'Paises', 'Cidades', 'Provincias', 'Documentos', 'tg0010areatrabalhos', 'generos'));
		  
		   $teste = array();
		   $teste[] = $id;
		   $teste[] = "Teste2";
           $this->set('teste1',$teste);
		   $this->layout = 'pdf'; //this will use the pdf.ctp layout
           //$this->render('/Alunos/pdf_teste');
		   $this->render();
        }
		
		function pdf_index_alunos(){
		      App::Import('Model','Logmv');
	          $logmv = new Logmv;
              Configure::write('debug',0); // Otherwise we cannot use this method while developing
		      $users = $this->Aluno->User->find('list');
			  $aluno = $this->Aluno->find('all');
		      $paises = $this->Aluno->Paise->find('list');
		      $cidades = $this->Aluno->Cidade->find('list');
		      $provincias = $this->Aluno->Provincia->find('list');
		      $documentos = $this->Aluno->Documento->find('list');
		      $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
              $cursos = $this->Aluno->Curso->find('list');
		      $this->set(compact('users', 'Paises', 't0003cursos','Cidades', 'Provincias', 'Documentos', 'tg0010areatrabalhos'));
            $listas = array();
             foreach ($aluno as $m){
                $lista = array();
                $lista[] =$m["Aluno"]["id"];
				$lista[] =$m["Aluno"]["codigo"];
				$lista[] =$m["Aluno"]["name"];
				
				  
				//   $lista[] =$m["Cursos"]["name"];
				//var_dump($m["Curso"]["name"]);
               // $listas[] =$m["Aluno"]["name"];
				//$listas[] =$m["Aluno"]["empresanome"];
				$listas[] =$lista;
                }
           // $this->set('cursos',$this->Curso->find('all'));
           $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
		 //  $this->render('/Alunos/pdf_teste');
        }

		function exportar_excel(){
			App::import('Vendor', 'Spreadsheet_Excel_Writer', array('file' => 'Spreadsheet/Excel/Writer.php'));
			
			// Creating a workbook
			$workbook = new Spreadsheet_Excel_Writer();
			$format_bold =& $workbook->addFormat();
			$format_bold->setBold();
			
			$format_escola =& $workbook->addFormat();
			$format_escola->setBold();
			$format_escola->setAlign('center');
			
			$format_titulo =& $workbook->addFormat();
			$format_titulo->setBold();
			$format_titulo->setAlign('center');

			// sending HTTP headers
			$workbook->send('alunos_por_curso.xls');
			
			$cursos = $this->Aluno->Curso->find('list');
			
			foreach($cursos as $k=>$v){
				$this->Aluno->Matricula->recursive = 1;
				$alunos = $this->Aluno->Matricula->find('all',array('conditions'=>array('Matricula.curso_id'=>$k),'fields'=>array('Aluno.codigo','Aluno.name','Curso.name','Curso.codigo')));
				// Creating a worksheet
				$worksheet =& $workbook->addWorksheet($alunos[0]['Curso']['codigo']);
				$worksheet->setInputEncoding('utf-8');
				$worksheet->setColumn(0,0,12);
				$worksheet->setColumn(1,1,15);
				$worksheet->setColumn(2,2,45);
				$worksheet->setColumn(3,3,45);
				//$worksheet->insertBitmap(1,1,'/sga/img/logo.bmp');
				// The actual data
				
				$worksheet->write(0, 0, iconv("UTF-8", "ISO-8859-1",'ESCOLA SUPERIOR DE ECONOMIA E GESTÃO'),$format_escola);
				$worksheet->write(1, 0, iconv("UTF-8", "ISO-8859-1",'Lista de Estudantes de '.$alunos[0]['Curso']['name']),$format_titulo);
				$worksheet->setMerge(0, 0, 0, 3);
				$worksheet->setMerge(1, 0, 1, 3);
				$sequencia = 3;
				$worksheet->write($sequencia, 0, 'Sequencia',$format_bold);
				$worksheet->write($sequencia, 1, 'Codigo',$format_bold);
				$worksheet->write($sequencia, 2, 'Nome',$format_bold);
				$worksheet->write($sequencia, 3, 'Curso',$format_bold);
				
				foreach($alunos as $aluno){
					$sequencia++;	
					$worksheet->write($sequencia, 0, $sequencia-3);
					$worksheet->write($sequencia, 1,$aluno['Aluno']['codigo']);
					$worksheet->write($sequencia, 2,iconv("UTF-8", "ISO-8859-1", $aluno['Aluno']['name']));
					$worksheet->write($sequencia, 3, iconv("UTF-8", "ISO-8859-1", $aluno['Curso']['name']));
				}
				
				//var_dump($alunos);
			}
			
			
			
			
			
			$worksheet->write(3, 0, 'Juan Herrera');
			$worksheet->write(3, 1, 32);
			
			// Let's send the file
			$workbook->close();
		}
}
?>
