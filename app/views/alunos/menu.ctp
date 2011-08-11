<?php
/* ---------------------------------------------------------- */
/* OPCAO : Estudantes                                         */
/* menu lateral, incluir em todos os files                    */
/* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
/* ---------------------------------------------------------- */     
$grupo = $session->read('Auth.User.group_id');
$username = $session->read('Auth.User.username');    
$userid = $session->read('Auth.User.id');   

if ($grupo==3)
{
  App::Import('Model','user');
  $user = new User;
	   
  $id = $user->getAlunoIDByUser($userid);
}
            
?>

<div class="actions" id="left-column">
	<h3><?php __('Detalhes Adicionais'); ?></h3>
	<br />
		<?php if($grupo==1) 
                         echo $html->link(__('Estudantes', true), array('action' => 'index'),array('class'=>'linkselected')); 
                      else
                         echo $html->link(__('Ficha de Estudante', true), array('action' => 'view',$id),array('class'=>'linkselected'));
                 ?>
</div>