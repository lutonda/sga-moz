<?php
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