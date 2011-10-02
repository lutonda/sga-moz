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
 
 
class JpgraphsController extends AppController {
        public  $name = 'Jpgraphs';     
        public  $uses = null;
         
         public function index(){
                $this->layout='jpgraph';
         }
		 
         public function alunos_por_provincia(){
                	
				App::import('Model','Aluno');
				$Aluno = new Aluno();
				
				$numero_alunos = $Aluno->query("select e.name,count(a.id) alunos from escolas e left join alunos a on e.id = a.escola_id group by e.id");
				$alunos = array();
				foreach($numero_alunos as $n){
					$alunos['provincia'][]=$n['e']['name'];
					$alunos['numeros'][] = $n[0]['alunos'];
				}
				
				$this->set('numero_alunos',$alunos);
               $this->layout='jpgraph';
         }		 
 }
?>