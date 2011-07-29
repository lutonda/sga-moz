<?php 
$grupo = $session->read('Auth.User.group_id');
$username = $session->read('Auth.User.username');

?>
					<!--[if !IE]>start section<![endif]-->
					<div class="section table_section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Estudantes</h2>
							<span class="title_wrapper_left"></span>
							<span class="title_wrapper_right"></span>
						</div>
						<!--[if !IE]>end title wrapper<![endif]-->
						<!--[if !IE]>start section content<![endif]-->
						<div class="section_content">
							<!--[if !IE]>start section content top<![endif]-->
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">

												<form action="#">
												<fieldset>
												<!--[if !IE]>start table_wrapper<![endif]-->
												<div class="table_wrapper">
													<div class="table_wrapper_inner">
													<table cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
	<tr>
                    <th class="filterable"><?php echo $this->Paginator->sort('Codigo','codigo');?></th>
                    <th class="filterable" ><?php echo $this->Paginator->sort('Nome','name');?></th>


                    <th class="actions" rowspan="2"><?php __('Acção');?></th>
            </tr>
            <tr>
                    <th class=""><input onkeyup="Table.filter(this,this)" size="8" name="filter" value=""></th>
                    <th class=""><input onkeyup="Table.filter(this,this)" size="8" name="filter" value=""></th>


                    
            </tr>
        </thead>
        <tbody>
	<?php
	$i = 0;
	//var_dump($grupo.'User'.$username);
	foreach ($alunos as $aluno):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		
		if(($grupo !=3) || ($grupo ==3 && $username == $aluno['Aluno']['codigo'])){
		
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $aluno['Aluno']['codigo']; ?>&nbsp;</td>
		<td><?php echo $aluno['Aluno']['name']; ?>&nbsp;</td>
	
		
		
		<td class="accoes">
	        <?php echo $html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $aluno['Aluno']['id']))); ?>
                <?php  if($grupo ==1) echo $html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $aluno['Aluno']['id']))); ?>
                <?php  if($grupo ==1) echo $html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'delete', $aluno['Aluno']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $aluno['Aluno']['id']))); ?>
	        <?php  echo $html->link($html->image("/img/save-icon.gif"),  array('action' => 'pdf_index', $aluno['Aluno']['id']),array('target'=>'_blank','escape'=>false)); ?>
		
		</td>
		
	</tr>
	
<?php
 } endforeach; ?>
	</table>


													</div>
												</div>
												<!--[if !IE]>end table_wrapper<![endif]-->

												<!--[if !IE]>start table menu<![endif]-->
												<div class="table_menu">
													<ul class="left">
														<li><?php echo $this->Html->link(__('<span><span>NOVO CURSO</span></span>', true), array('action' => 'add'),array('class'=>'button add_new','escape'=>false)); ?></li>
													</ul>
													<ul class="right">
														<li><a href="#" class="button check_all"><span><span>MARCAR TODAS</span></span></a></li>
														<li><a href="#" class="button uncheck_all"><span><span>DESMARCAR TODAS</span></span></a></li>
														<li><span class="button approve"><span><span>REMOVER</span></span></span></li>
													</ul>
												</div>
												<!--[if !IE]>end table menu<![endif]-->


												</fieldset>
												</form>


											</div>
										</div>
									</div>
								</div>
							</div>
							<!--[if !IE]>end section content top<![endif]-->
							<!--[if !IE]>start section content bottom<![endif]-->
							<span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
							<!--[if !IE]>end section content bottom<![endif]-->

						</div>
						<!--[if !IE]>end section content<![endif]-->
					</div>
					<!--[if !IE]>end section<![endif]-->
