<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
?>
 <?php
                $grupo = $this->Session->read('Auth.User.group_id');
                $username = $this->Session ->read('Auth.User.username');
                $userid = $this->Session->read('Auth.User.id')
            ?>

<!--[if !IE]>start head<![endif]-->
		<div id="head">

			<!--[if !IE]>start logo and user details<![endif]-->
			<div id="logo_user_details">
				<h1 id="logo"><a href="#"><?php echo __('OpenSGA - Sistema de Gestão Académica')?></a></h1>
				<!--[if !IE]>start user details<![endif]-->
				<div id="user_details">
					<ul id="user_details_menu">
						<li><?php echo __('Bem Vindo')?> <strong><?php echo __($this->Session->read('Auth.User.name'));?></strong></li>
						<li>
							<ul id="user_access">
								<li class="first"><?php echo $this->Html->link('Minha Conta',array('controller'=>'users','action'=>'view',$userid))?></li>
								<li><span id="portuguese"><?php echo $this->Html->link('Português',array('controller'=>'configs','action'=>'language',1),array('class'=>'portuguese'))?></span></li>
								<li><span id="english"><?php echo $this->Html->link('English',array('controller'=>'configs','action'=>'language',2),array('class'=>'english'))?></span></li>
								<li class="last"><span id="sair"><?php echo $this->Html->link(__('Sair',true),array('controller'=>'users','action'=>'logout'))?></span></li>
							</ul>
						</li>
						<?php if(!isset($num_mensagens))$num_mensagens=0;?>
						<li><a class="new_messages" href="#"><?php echo sprintf(__('%s novas mensagens',true),$num_mensagens)?></a></li>
					</ul>
				</div>

				<!--[if !IE]>end user details<![endif]-->



			</div>

			<!--[if !IE]>end logo end user details<![endif]-->



			<!--[if !IE]>start menus_wrapper<![endif]-->
			<div id="menus_wrapper">





				<div id="main_menu">
					<ul>
						<li><?php echo $this->Html->link(sprintf('<span><span>'.__('HOME',true).'</span></span>'),"/",array('id'=>'homepage','escape'=>false));?></li>
                       
                        
                        <li><?php if($grupo == 1 || $grupo == 2) { echo $this->Html->link(sprintf('<span><span>'.__('PEDAGÓGICA',true).'</span></span>'), array('controller'=>'cursos','action' => 'index'),array('id'=>'pedagogica','escape'=>false));}?></li>

<li><?php 
     if($grupo == 1 || $grupo == 3) { 
       if ($grupo == 3)
          echo $this->Html->link(sprintf('<span><span>'.__('CONSULTAR FICHA',true).'</span></span>'), array('controller'=>'alunos','action' => 'view',$idAluno),array('id'=>'estudantes','escape'=>false));
       else
          echo $this->Html->link(sprintf('<span><span>'.__('ESTUDANTE',true).'</span></span>'), array('controller'=>'alunos','action' => 'index'),array('id'=>'estudantes','escape'=>false));
     } 
?></li>

<li><?php 
    if($grupo == 1 || $grupo == 2) { 
      echo $this->Html->link(sprintf('<span><span>'.__('MANUTENÇÃO',true).'</span></span>'), array('controller'=>'anolectivos','action' => 'index'),array('id'=>'manutencao','escape'=>false));
    }
    else
    if($grupo == 4) { 
      echo $this->Html->link(sprintf('<span><span>'.__('MANUTENÇÃO',true).'</span></span>'), array('controller'=>'turmas','action' => 'index'),array('id'=>'manutencao','escape'=>false));
    }
?></li>

<li><?php 
      if($grupo == 1 || $grupo == 2 || $grupo == 4) { 
        echo $this->Html->link(sprintf('<span><span>'.__('AVALIAÇÃO',true).'</span></span>'), array('controller'=>'avaliacaos','action' => 'index'),array('id'=>'avaliacao','escape'=>false));
      }
      else
      if($grupo == 3) { echo $this->Html->link(sprintf('<span><span>'.__('NOTAS DE AVALIAÇÕES',true).'</span></span>'), array('controller'=>'avaliacaos','action' => 'index'),array('id'=>'avaliacao'));}

?></li>

<li><?php 
    if(in_array($grupo,array(1,5,6))) {echo $this->Html->link(sprintf('<span><span>'.__('CONTABILIDADE',true).'</span></span>'), array('controller'=>'pagamentos','action' => 'index'),array('id'=>'contabilidade','escape'=>false));}
	?>
</li>
<li><?php  if($grupo == 1 || $grupo == 2) {echo $this->Html->link(sprintf('<span><span>'.__('RELATÓRIOS',true).'</span></span>'), array('controller'=>'listagens','action' => 'listagens'),array('id'=>'listagens','escape'=>false));}?></li>

<li>
<?php
    if($grupo == 1 || $grupo == 2) {echo $this->Html->link(sprintf('<span><span>'.__('ADMINISTRAÇÃO',true).'</span></span>'), array('controller'=>'funcionarios','action' => 'index'),array('id'=>'administracao','escape'=>false));}
    else
    if($grupo == 4) {echo $this->Html->link(sprintf('<span><span>'.__('CONSULTAR FICHA',true).'</span></span>'), array('controller'=>'funcionarios','action' => 'view',$userid),array('id'=>'administracao','escape'=>false));}
?></li>


<li></li>		
					</ul>
				</div>



				<div id="sec_menu">
                 <?php if(!isset($current_section))$current_section='homepage';?>   
                  <?php echo $this->element('menu_'.$current_section);?>
					
				</div>
			</div>
			<!--[if !IE]>end menus_wrapper<![endif]-->


		</div>
		<!--[if !IE]>end head<![endif]-->