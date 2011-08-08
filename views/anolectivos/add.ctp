<div class="section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Novo Turno</h2>
							
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
												<?php echo $this->Form->create('Anolectivo',array('class'=>'search_form general_form'));?>
                                                <!--<form class="search_form general_form" action="#">-->
													<!--[if !IE]>start fieldset<![endif]-->
													<fieldset>
														<!--[if !IE]>start forms<![endif]-->
														<div class="forms">
														
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Ano:</label>
															<div class="inputs">
                                                                <?php
                                                                /**
																 * @TODO Esse campo eh inconsistente... os anos devem ser manipulados automaticamente */ $array_ano=array('2003'=>2003,'2004'=>2004,'2005'=>2005,'2006'=>2006,'2007'=>2007,'2008'=>2008,'2009'=>2009,'2010'=>2010,'2011'=>2011,'2012'=>2012,'2013'=>2013,'2014'=>2014,'2015'=>2015,'2016'=>2016,'2017'=>2017,'2018'=>2018,'2019'=>2019,'2020'=>2020); ?>
																<span class="input_wrapper"><?php echo $this->Form->input('ano',array('options'=> $array_ano,'label'=>false,'div'=>false,'class'=>'text'));?></span>
																
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Regime:</label>
															<div class="inputs">
																<span class="input_wrapper"><?php echo $this->Form->input('regime',array('options'=>array('FEVEREIRO'=>'FEVEREIRO','AGOSTO'=>'AGOSTO'),'label'=>false,'div'=>false,'class'=>'text'));?></span>
																
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Semestre Lectivo:</label>
															<div class="inputs">
																<span class="input_wrapper"><?php echo $this->Form->input('num_semestre',array('options'=>array(1=>'1',2=>'2',3=>'3',4=>'4'),'label'=>false,'div'=>false,'class'=>'text'));?></span>
																
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Data de Inicio:</label>
															<div class="inputs">
																<span class="input_wrapper"><?php echo $this->Form->input('datainicio',array('monthNames'=>array('','Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>false,'div'=>false,'class'=>'text'));?></span>
																
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															<label>Data do Fim:</label>
															<div class="inputs">
																<span class="input_wrapper"><?php echo $this->Form->input('datafim',array('monthNames'=>array('','Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>false,'div'=>false,'class'=>'text'));?></span>
																
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
                                                
	<?php
	    
	    
		
		echo $this->Form->input('num_semestre',array('label'=>'Semestre Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datainicio',array('label'=>'Data Inicio','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datafim',array('monthNames'=>array('','Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data Fim','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
<tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>