					<!--[if !IE]>start section<![endif]-->
					<div class="section table_section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Turnos</h2>
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

			<th><?php echo $this->Paginator->sort('Id','id');?></th>
			<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			<th class="actions"><?php __('Accao');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($turnos as $turno):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $turno['Turno']['id']; ?>&nbsp;</td>
		<td><?php echo $turno['Turno']['name']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'view',$turno['Turno']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'edit',$turno['Turno']['id']))); ?>
					<?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies",'url' => array('action' => 'delete', $turno['Turno']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $turno['Turno']['id']))); ?>
		</td>
		
	</tr>
<?php endforeach; ?>
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
