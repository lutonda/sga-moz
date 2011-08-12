<div class="section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Novo Curso</h2>
							
							<!--[if !IE]>start section menu<![endif]-->

							<!--[if !IE]>end section menu<![endif]-->
							
							
							<span class="title_wrapper_left"></span>
							
						<span class="title_wrapper_right" style="display: block;"></span></div>
						<!--[if !IE]>end title wrapper<![endif]-->
						<!--[if !IE]>start section content<![endif]-->
						<div class="section_content">
							<!--[if !IE]>start section content top<![endif]-->
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">

												
												<!--[if !IE]>start forms<![endif]-->
												<?php echo $this->Form->create('Planoestudo',array('class'=>'search_form general_form'));?>
                                                <!--<form class="search_form general_form" action="#">-->
													<!--[if !IE]>start fieldset<![endif]-->
													<fieldset>
														<!--[if !IE]>start forms<![endif]-->
														<div class="forms">
														<div class="row">
															<h3>Dados do Plano de Estudos</h3>
															
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Nome do Plano:</label>
															<div class="inputs">
																<span class="input_wrapper"><?php echo $this->Form->input('name',array('disabled'=>'true','label'=>false,'div'=>false,'class'=>'text'));?></span>
																
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
														<!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Curso:</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php  echo $this->Form->input('curso_id',array('disabled'=>'true','label'=>false,'div'=>false));?>
																</span>
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>DuraÃ§Ã£o(anos):</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php echo $this->Form->input('duracao',array('disabled'=>'true','options'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4),'label'=>false,'div'=>false));?>
																</span>
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                         <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Semestres por ano:</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php echo $this->Form->input('semestresano',array('disabled'=>'true','options'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4),'label'=>false,'div'=>false));?>
																</span>
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                         </form>
                                                       

														
                                                        
														
														
														</div>
														<!--[if !IE]>end forms<![endif]-->
														
													</fieldset>
													<!--[if !IE]>end fieldset<![endif]-->
													
													 <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<h3>Disciplinas e precedencias</h3>
															
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
													<!--[if !IE]>start forms<![endif]-->
												<?php echo $this->Form->create('Planoestudoano',array('url'=>array('controller'=>'planoestudos','action'=>'add_grupodisciplinas',$plano_id),'class'=>'search_form general_form'));?>
                                                <!--<form class="search_form general_form" action="#">-->
													<!--[if !IE]>start fieldset<![endif]-->
													<fieldset>
														<!--[if !IE]>start forms<![endif]-->
														<div class="forms">
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Ano Curricular:</label>
                                                            <div class="inputs">
																<ul>
																	<li><span class="input_wrapper medium_input"><?php echo $this->Form->input('ano',array('options'=>$anos,'label'=>false,'div'=>false,'id'=>'ano_curricular'));?></li>
																	<li><label>Semestre Curricular:</label></li>
																	<li><span class="input_wrapper medium_input"><?php echo $this->Form->input('semestre',array('label'=>false,'div'=>false));?></span> </li>
																</ul>
															</div>
					
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
														<!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Disciplina:</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php  echo $this->Form->input('disciplina_id',array('label'=>false,'div'=>false));?>
																</span>
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                         <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Carga Horaria Teoricas:</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php echo $this->Form->input('cargahorariateoricas',array('label'=>false,'div'=>false));?>
																</span>
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                         <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Carga Horaria Praticas:</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php echo $this->Form->input('cargahorariapraticas',array('label'=>false,'div'=>false));?>
																</span>
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                         <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Creditos:</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php echo $this->Form->input('creditos',array('label'=>false,'div'=>false));?>
																</span>
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->                                                        
                                                         
                                                       

														
                                                        
														
														
														</div>
														<!--[if !IE]>end forms<![endif]-->
														
													</fieldset>
													<!--[if !IE]>end fieldset<![endif]-->
													
												<?php echo $this->Form->end(__('GRAVAR', true));?>
												<!--[if !IE]>end forms<![endif]-->	
												

														
												
												
												
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


<div class="section table_section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Disciplinas adicionadas</h2>
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
												
												
												<div id="product_list">
												<!--[if !IE]>start table_wrapper<![endif]-->
												<div class="table_wrapper">
													<div class="table_wrapper_inner">
													<table width="100%" cellspacing="0" cellpadding="0">
														<tbody><tr>
														<th><?php echo 'Codigo';?></th>
                                                        <th><?php echo 'Nome da Disciplina';?></th>
                                                        <th><?php echo 'Ano';?></th>
                                                        <th><?php echo 'Sem.';?></th>
                                                        <th><?php echo 'Teoria';?></th>
                                                        <th><?php echo 'Pratica';?></th>
                                                        <th><?php echo 'Precedencias ObrigatÃ³rias';?></th>
                                                        <th><?php echo 'Precedencias Aconselhadas';?></th>
                                                        <th class="actions"><?php __('Accao');?></th>
															
														</tr>
														<?php
		foreach ($disciplinas2 as $disciplina):
		$class = "first";
                $i=0;
		if ($i++ % 2 == 0) {
			$class = ' class="second"';
		}
	?>
	<tr <?php echo $class;?>>
				<td><?php echo $disciplina['d']['codigo']; ?>&nbsp;</td>
				<td nowrap="true"><?php echo $disciplina['d']['name']; ?>&nbsp;</td>
                <td><?php echo $disciplina['p']['ano']; ?>&nbsp;</td>
                <td><?php echo $disciplina['p']['semestre']; ?>&nbsp;</td>
                <td><?php echo $disciplina['p']['cargahorariateoricas']; ?>&nbsp;</td>
                <td><?php echo $disciplina['p']['cargahorariapraticas']; ?>&nbsp;</td>
                <td>
                    <?php
                        if(!empty($disciplina['pr']['o'])){
                            echo "<table>";
                            foreach($disciplina['pr']['o'] as $d){
                                echo "<tr><td class='precedencias'>".$d."</td></tr>";
                            }
                            echo "</table>";
                        }

                                ?>&nbsp;</td>
                <td>                    <?php
                        if(!empty($disciplina['pr']['a'])){
                            echo "<table>";
                            foreach($disciplina['pr']['a'] as $d){
                                echo "<tr><td class='precedencias'>".$d."</td></tr>";
                            }
                            echo "</table>";
                        }

                                ?>&nbsp;</td>
		<td class="accoes">
	            <?php //echo $html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view',$disciplina['p']['id'],$disciplina['d']['id']))); ?>
                <?php //echo $html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$disciplina['p']['id'],$disciplina['d']['id']))); ?>
                <?php echo $html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'remove_disc',$disciplina['p']['id'],$disciplina['d']['id'],$plano_id), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$disciplina['d']['id']))); ?>
		</td>

	</tr>
    <?php endforeach; ?>

													</tbody></table>
													</div>
												</div>
												<!--[if !IE]>end table_wrapper<![endif]-->
												</div>
												
												
												
												<!--[if !IE]>start pagination<![endif]-->
												<div class="pagination">
													<span class="page_no">Page 1 of 217</span>
													
													<ul class="pag_list">
														<li><a class="button light_blue_btn" href="#"><span><span>PREVIOUS</span></span></a> </li>
														<li><a href="#">1</a></li>
														<li><a class="current_page" href="#"><span><span>2</span></span></a></li>
														<li><a href="#">3</a></li>
														<li><a href="#">4</a></li>
														<li><a href="#">5</a></li>
														<li>[...]</li>
														<li><a href="#">217</a></li>
														<li><a class="button light_blue_btn" href="#"><span><span>NEXT</span></span></a> </li>
													</ul>
													
													
												</div>
												<!--[if !IE]>end pagination<![endif]-->
												
												
												
												
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
