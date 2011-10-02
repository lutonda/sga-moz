<div  class="box box-100 altbox">
	<div class="boxin">
		<div class="header">
			<h3><?php echo __('Adicionar Plano de estudos')?></h3>
			<?php echo $this->Html->link(__('Lista de Planos de estudos', true), array('action' => 'index'),array('class'=>'button add_new','escape'=>false)); ?>
		</div>
		<?php echo $this->Form->create('Planoestudo',array('class'=>'fields'));?>
		<fieldset>
			<legend><?php echo __('Detalhes do Plano')?></legend>
			<table>
				<tr>
				<td width="50%">
					<table>
						<tr>
							<td>
								<div class="row">
															<label>Nome do Plano:</label>
															<div class="inputs">
																<span class="input_wrapper"><?php echo $this->Form->input('name',array('label'=>false,'div'=>false,'class'=>'txt'));?></span>
																
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
															<label>Duração(anos):</label>
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
										
							</td>
						</tr>																		
					</table>
					</td>
					<td width="50%">
					<table>
						<tr>
							<td>

							</td>
						</tr>
					</table>						
					</td>
				</tr>
			</table>	
		</fieldset>
        <table class="listingform" cellpadding="0" cellspacing="0">
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true),array('class'=>'button'));?></td></tr>
        </table>
	</div>
</div>
