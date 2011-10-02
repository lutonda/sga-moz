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
								<fieldset>
									<legend>Dados do Plano de estudos</legend>
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
								</fieldset>		
							</td>
						</tr>																		
					</table>
					</td>
					<td width="50%">
					<fieldset>
						<legend>Disciplinas e precedencias</legend>
					<table>
						<tr>
							<td>
									
                                                        
													<!--[if !IE]>start forms<![endif]-->
												<?php echo $this->Form->create('Planoestudoano',array('url'=>array('controller'=>'planoestudos','action'=>'add_grupodisciplinas',$plano_id),'class'=>'search_form general_form'));?>
                                                <!--<form class="search_form general_form" action="#">-->
													<!--[if !IE]>start fieldset<![endif]-->
													
														<tr>
															<td>
                                                        <!--[if !IE]>start row<![endif]-->
														<div class="row">
															
                                                            <div class="inputs">
															<ul>
															<li><label>Ano Curricular:</label></li>	
																	<li><span class="input_wrapper medium_input"><?php echo $this->Form->input('ano',array('options'=>$anos,'label'=>false,'div'=>false,'id'=>'ano_curricular'));?></li>
																	<li><label>Semestre Curricular:</label></li>
																	<li><span class="input_wrapper medium_input"><?php echo $this->Form->input('semestre',array('label'=>false,'div'=>false));?></span> </li>
																</ul>
															</div>
															</td>
														</tr>
														</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <tr>
                                                        	<td>
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
                                                         
                                                       </td>
                                                       </tr>

														
                                                        
														
														
														</div>
														<!--[if !IE]>end forms<![endif]-->
														
													</fieldset>
													<!--[if !IE]>end fieldset<![endif]-->	
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












<div class="box box-100 altbox" id="box1"><!-- box full-width -->
					<div class="boxin">
						<div class="header">
							<h3><?php echo __('Disciplinas adicionadas')?></h3>
							

						</div>
						<div class="content" id="box1-tabular"><!-- content box 1 for tab switching -->
							<form enctype="multipart/form-data" method="post" action="" class="plain">
								<fieldset>
									<?php echo $this->Form->create('Planoestudo',array('action'=>'index','id'=>'filters')); ?>  
									<table cellspacing="0">
										<thead><!-- universal table heading -->
											<tr>
												<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
											
														<th><?php echo 'Codigo';?></th>
                                                        <th><?php echo 'Nome da Disciplina';?></th>
                                                        <th><?php echo 'Ano';?></th>
                                                        <th><?php echo 'Sem.';?></th>
                                                        <th><?php echo 'Teoria';?></th>
                                                        <th><?php echo 'Pratica';?></th>
                                                        <th><?php echo 'Precedencias ObrigatÃ³rias';?></th>
                                                        <th><?php echo 'Precedencias Aconselhadas';?></th>
                                                        
                    							<td class="tc last"><?php echo __('Acção');?></td>
											</tr>
											<tr>
												<td></td>
											  
            								<td><?php echo $this->Form->input('codigo',array('label'=>false,'size'=>8)); ?></td>  
            								<td><?php echo $this->Form->input('name',array('label'=>false,'size'=>10)); ?></td>
            								<td><?php echo $this->Form->input('ano',array('label'=>false,'empty'=>true)); ?></td>
            								<td><?php echo $this->Form->input('semestre',array('label'=>false,'empty'=>true)); ?></td>  
            								<td></td>
            								<td></td>
            								<td></td>
            								<td></td>  
            								<td>  
                								<button type="submit" name="data[filter]" value="filter">Filtrar</button>  
                								<button type="submit" name="data[reset]" value="reset">Limpar</button>  
									            </td>  
									        </tr>  
										</thead>
										<tfoot><!-- table foot - what to do with selected items -->
											<tr>
												<td colspan="6" class="first last"><!-- do not forget to set appropriate colspan if you will edit this table -->
													<label>
														Com os seleccionados:
														<select name="data-1-groupaction">
															<option value="delete">remover</option>
															<option value="edit">editar</option>
														</select>
													</label>
													<input type="submit" value="OK" class="button altbutton">
												</td>
											</tr>
										</tfoot>
										<tbody>
		<?php
		$i=0;
		foreach ($disciplinas2 as $disciplina):
		$class = "first";
                
		if ($i++ % 2 == 0) {
			$class = ' class="even"';
		}
	?>
	<tr <?php echo $class;?>>
				<td class="tc first"><input type="checkbox" value="true" name="data-1-check-all" id="data-1-check-all"></td>
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
	            <?php //echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view',$disciplina['p']['id'],$disciplina['d']['id']))); ?>
                <?php //echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$disciplina['p']['id'],$disciplina['d']['id']))); ?>
                <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'remove_disc',$disciplina['p']['id'],$disciplina['d']['id'],$plano_id), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$disciplina['d']['id']))); ?>
		</td>

	</tr>
    <?php endforeach; ?>
										</tbody>
									</table>
								</fieldset>
							</form>
							<div class="pagination">
								<ul class="left">
									<li><?php
	//echo $this->Paginator->counter(array(
	//'format' => __('Mostrando %current% linhas. Total: %count% linhas retornadas')
	//));
	?>	</li>
								</ul>
								<ul class="pag_list">
									<li><?php //echo $this->Paginator->prev('<< '.__('ANTERIOR'), array(), null, array('class'=>'disabled'));?> </li>
									<?php //echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null,'class'=>'pagination'));?>
                                    
									<li><?php //echo $this->Paginator->next(__('PROXIMO').' >>', array(), null, array('class' => 'disabled'));?></li>
								</ul>
								
								
							</div>
						</div><!-- .content#box-1-holder -->

					</div>
				</div>

