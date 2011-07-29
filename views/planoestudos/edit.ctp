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
																												<!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Nome do Plano:</label>
															<div class="inputs">
																<span class="input_wrapper"><?php echo $this->Form->input('name',array('label'=>false,'div'=>false,'class'=>'text'));?></span>
																
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
														<!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Curso:</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php  echo $this->Form->input('curso_id',array('label'=>false,'div'=>false));?>
																</span>
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>DuraÃ§Ã£o(anos):</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php echo $this->Form->input('duracao',array('options'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4),'label'=>false,'div'=>false));?>
																</span>
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                         <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Semestres por ano:</label>
															<div class="inputs">
																<span class="input_wrapper blank">
																	<?php echo $this->Form->input('semestresano',array('options'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4),'label'=>false,'div'=>false));?>
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

