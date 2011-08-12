<div  class="box box-100">
	<div class="boxin">
		<div class="header">
			<h3><?php __('Adicionar novo Curso')?></h3>
			<a href="#" class="button"><?php __('Lista de Cursos')?>&nbsp;»</a>
		</div>
		<?php echo $form->create('Disciplina',array('class'=>'fields'));?>
		<fieldset>
			<legend><?php __('Detalhes do Curso')?></legend>
			<table>
				<tr>
				<td width="50%">
					<table>
						<tr>
							<td>
								<label>Nome da Disciplina:</label>
									<span class="input_wrapper">
										<?php echo $this->Form->input('name',array('label'=>false,'div'=>false,'class'=>'txt','size'=>45));?></span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Codigo da Disciplina:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('codigo',array('label'=>false,'div'=>false,'class'=>'txt','size'=>45));?>
									</span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Secção:</label>
									<span class="input_wrapper blank">
										<?php  echo $this->Form->input('grupodisciplinar_id',array('label'=>false,'div'=>false));?>
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
