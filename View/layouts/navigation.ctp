<?php 
$grupo = $this->Session->read('Auth.User.group_id');

if ($grupo==3 || $grupo==4) {
  $userid = $this->Session->read('Auth.User.id');   

  App::Import('Model','user');
  $user = new User;
  if ($grupo==3)
     $idAluno = $user->getAlunoIDByUser($userid);
  else
     $idFunc = $user->getFuncionarioIDByUser($userid);
}

?>

<li><?php if($grupo == 1 || $grupo == 2) { echo $this->Html->link(sprintf('PEDAGÓGICA'), array('controller'=>'t0003cursos','action' => 'index'),array('id'=>'pedagogica'));}?></li>

<li><?php 
     if($grupo == 1 || $grupo == 3) { 
       if ($grupo == 3)
          echo $this->Html->link(sprintf('CONSULTAR FICHA'), array('controller'=>'t0008alunos','action' => 'view',$idAluno),array('id'=>'estudantes'));
       else
          echo $this->Html->link(sprintf('ESTUDANTES'), array('controller'=>'t0008alunos','action' => 'index'),array('id'=>'estudantes'));
     } 
?></li>

<li><?php 
    if($grupo == 1 || $grupo == 2) { 
      echo $this->Html->link(sprintf('MANUTENÇÃO'), array('controller'=>'t0009anolectivos','action' => 'index'),array('id'=>'manutencao'));
    }
    else
    if($grupo == 4) { 
      echo $this->Html->link(sprintf('MANUTENÇÃO'), array('controller'=>'t0010turmas','action' => 'index'),array('id'=>'manutencao'));
    }
?></li>

<li><?php 
      if($grupo == 1 || $grupo == 2 || $grupo == 4) { 
        echo $this->Html->link(sprintf('AVALIAÇÕES'), array('controller'=>'avaliacaos','action' => 'registo_de_notas'),array('id'=>'avaliacao'));
      }
      else
      if($grupo == 3) { echo $this->Html->link(sprintf('NOTAS DAS AVALIAÇÕES'), array('controller'=>'avaliacaos','action' => 'index'),array('id'=>'avaliacao'));}

?></li>

<li><?php 
    if($grupo == 1 || $grupo == 2) {echo $this->Html->link(sprintf('ADMINISTRAÇÃO'), array('controller'=>'t0002funcionarios','action' => 'index'),array('id'=>'administracao'));}
    else
    if($grupo == 4) {echo $this->Html->link(sprintf('CONSULTAR FICHA'), array('controller'=>'t0002funcionarios','action' => 'view',$idFunc),array('id'=>'administracao'));}
?></li>

<li><?php  if($grupo == 1 || $grupo == 2) {echo $this->Html->link(sprintf('LISTAGENS'), array('controller'=>'listagens','action' => 'listagens'),array('id'=>'listagens'));}?></li>

<li></li>


