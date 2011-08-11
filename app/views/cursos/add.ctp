<div  class="box box-100">
	<div class="boxin">
		<div class="header">
			<h3><?php __('Adicionar novo Curso')?></h3>
			<a href="#" class="button"><?php __('Lista de Cursos')?>&nbsp;»</a>
		</div>
		<?php echo $form->create('Curso',array('class'=>'fields'));?>
		<fieldset>
			<legend><?php __('Detalhes do Curso')?></legend>
			<table>
				<tr>
				<td width="50%">
					<table>
						<tr>
							<td>
								<label>Nome do Curso: <span class="hotspot" onmouseover="tooltip.show('Nome do Curso a Adicionar');" onmouseout="tooltip.hide();">?</span></label>
															
																<?php echo $this->Form->input('name',array('label'=>false,'div'=>false,'class'=>'txt','size'=>45));?>
							</td>
						</tr>
						<tr>
							<td>
								<label>Grau Academico:</label>
								<span class="input_wrapper blank">
									<?php  echo $this->Form->input('grauacademico_id',array('label'=>false,'div'=>false));?>
								<span class="input_wrapper blank">
							</td>
						</tr>
						<tr>
							<td>
								<label>Tipo de Curso:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('tipocurso_id',array('label'=>false,'div'=>false));?>
									</span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Escola:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('escola_id',array('label'=>false,'div'=>false));?>
									</span>
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
