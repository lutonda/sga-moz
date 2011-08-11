					<!--[if !IE]>start section<![endif]-->
					<div class="section table_section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Planos de Estudos</h2>
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
			<th><?php echo $this->Paginator->sort('Codigo','id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			<th><?php echo $this->Paginator->sort('Curso','t0003curso_id');?></th>
			<th><?php echo $this->Paginator->sort('Duracao','duracao');?></th>
			<th><?php echo $this->Paginator->sort('Semestre','semestresano');?></th>
			<th class="actions"><?php __('Accoes');?></th>
</tr>
		<?php
		foreach ($planoestudos as $planoestudo):
		$class = null;
                $i=0;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr <?php echo $class;?>>
             <td><?php echo $planoestudo['Planoestudo']['id']; ?>&nbsp;</td>
		<td><?php echo $planoestudo['Planoestudo']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($planoestudo['Curso']['name'], array('controller' => 't0003cursos', 'action' => 'view', $planoestudo['Curso']['id'])); ?>
		</td>
		<td><?php echo $planoestudo['Planoestudo']['duracao']; ?>&nbsp;</td>
		<td><?php echo $planoestudo['Planoestudo']['semestresano']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view',$planoestudo['Planoestudo']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$planoestudo['Planoestudo']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'delete',$planoestudo['Planoestudo']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$planoestudo['Planoestudo']['id']))); ?>
	            <?php echo $html->link($this->Html->image("/img/save-icon.gif"),  array('action' => 'pdf_index_planoestudo',$planoestudo['Planoestudo']['id']),array('target'=>'_blank','escape'=>false)); ?></td>

	</tr>
<?php endforeach; ?>
	</table>

													</div>
												</div>
												<!--[if !IE]>end table_wrapper<![endif]-->

												<!--[if !IE]>start table menu<![endif]-->
												<div class="table_menu">
													<ul class="left">
														<li><?php echo $this->Html->link(__('<span><span>NOVO PLANO DE ESTUDOS</span></span>', true), array('action' => 'add'),array('class'=>'button add_new','escape'=>false)); ?></li>
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
