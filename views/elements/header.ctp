            <?php
                $grupo = $this->Session->read('Auth.User.group_id');
                $username = $this->Session ->read('Auth.User.username');
                $userid = $this->Session->read('Auth.User.id')
            ?>

<!--[if !IE]>start head<![endif]-->
		<div id="head">

			<!--[if !IE]>start logo and user details<![endif]-->
			<div id="logo_user_details">
				<h1 id="logo"><a href="#">websitename Administration Panel</a></h1>
				<!--[if !IE]>start user details<![endif]-->
				<div id="user_details">
					<ul id="user_details_menu">
						<li>Bem Vindo <strong><?php echo __($this->Session->read('Auth.User.name'));?></strong></li>
						<li>
							<ul id="user_access">
								<li class="first"><a href="#">My account</a></li>
								<li class="last"><a href="#">Log out</a></li>
							</ul>
						</li>
						<li><a class="new_messages" href="#">4 new messages</a></li>
					</ul>
					<div id="server_details">
						<dl>
							<dt>Server time :</dt>
							<dd>6:45 AM</dd>
						</dl>
						<dl>
							<dt>Last login ip :</dt>
							<dd>192.168.0.15</dd>
						</dl>
					</div>
					<!--[if !IE]>start search<![endif]-->
					<div id="search_wrapper">
						<form action="#">
							<fieldset>
								<label>
									<input class="text" name="" type="text" />
								</label>
								<span class="go"><input name="" type="submit" /></span>
							</fieldset>
						</form>
						<ul id="search_wrapper_menu">
							<li class="first"><a href="#">Advanced Search</a></li>
							<li class="last"><a href="#">Admin Map</a></li>
						</ul>
					</div>
				<!--[if !IE]>end search<![endif]-->
				</div>

				<!--[if !IE]>end user details<![endif]-->



			</div>

			<!--[if !IE]>end logo end user details<![endif]-->



			<!--[if !IE]>start menus_wrapper<![endif]-->
			<div id="menus_wrapper">





				<div id="main_menu">
					<ul>
						<li><?php echo $this->Html->link(sprintf('<span><span>HOME</span></span>'),"/",array('id'=>'homepage','escape'=>false));?></li>
                       
                        
                        <li><?php if($grupo == 1 || $grupo == 2) { echo $this->Html->link(sprintf('<span><span>PEDAGÓGICA</span></span>'), array('controller'=>'cursos','action' => 'index'),array('id'=>'pedagogica','escape'=>false));}?></li>

<li><?php 
     if($grupo == 1 || $grupo == 3) { 
       if ($grupo == 3)
          echo $this->Html->link(sprintf('<span><span>CONSULTAR FICHA</span></span>'), array('controller'=>'alunos','action' => 'view',$idAluno),array('id'=>'estudantes','escape'=>false));
       else
          echo $this->Html->link(sprintf('<span><span>ESTUDANTES</span></span>'), array('controller'=>'alunos','action' => 'index'),array('id'=>'estudantes','escape'=>false));
     } 
?></li>

<li><?php 
    if($grupo == 1 || $grupo == 2) { 
      echo $this->Html->link(sprintf('<span><span>MANUTENÇÃO</span></span>'), array('controller'=>'anolectivos','action' => 'index'),array('id'=>'manutencao','escape'=>false));
    }
    else
    if($grupo == 4) { 
      echo $this->Html->link(sprintf('<span><span>MANUTENÇÃO</span></span>'), array('controller'=>'turmas','action' => 'index'),array('id'=>'manutencao','escape'=>false));
    }
?></li>

<li><?php 
      if($grupo == 1 || $grupo == 2 || $grupo == 4) { 
        echo $this->Html->link(sprintf('<span><span>AVALIAÇÕES</span></span>'), array('controller'=>'avaliacaos','action' => 'registo_de_notas'),array('id'=>'avaliacao','escape'=>false));
      }
      else
      if($grupo == 3) { echo $this->Html->link(sprintf('<span><span>NOTAS DAS AVALIAÇÕES</span></span>'), array('controller'=>'avaliacaos','action' => 'index'),array('id'=>'avaliacao'));}

?></li>

<li><?php 
    if($grupo == 1 || $grupo == 2) {echo $this->Html->link(sprintf('<span><span>'.__('ACCOUNTING',true).'</span></span>'), array('controller'=>'pagamentos','action' => 'index'),array('id'=>'contabilidade','escape'=>false));}
    if($grupo == 1 || $grupo == 2) {echo $this->Html->link(sprintf('<span><span>ADMINISTRAÇÃO</span></span>'), array('controller'=>'funcionarios','action' => 'index'),array('id'=>'administracao','escape'=>false));}
    else
    if($grupo == 4) {echo $this->Html->link(sprintf('<span><span>CONSULTAR FICHA</span></span>'), array('controller'=>'funcionarios','action' => 'view',$idFunc),array('id'=>'administracao','escape'=>false));}
?></li>

<li><?php  if($grupo == 1 || $grupo == 2) {echo $this->Html->link(sprintf('<span><span>LISTAGENS</span></span>'), array('controller'=>'listagens','action' => 'listagens'),array('id'=>'listagens','escape'=>false));}?></li>

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