<div  class="box box-100">
	<div class="boxin">
		<div class="header">
			<h3>Geração Automática de Turmas</h3>
			<a href="#" class="button">Lista de Turmas&nbsp;»</a>
		</div>
		<?php echo $form->create('Pagamento');?>
		<fieldset class="last">
			<legend>Informações da Turma</legend>
			<table>
				<tr>
			<?php echo $this->Form->input('ano_lectivo',array('options'=>$anolectivos,'label'=>'Ano Lectivo:','before'=>'<td class="label">','between'=>'</td><td>','after'=>'</td>','div'=>false,'class'=>'txt'));?>

						
			</tr>
			
			<?php //echo $datePicker->picker('start_date')?>
			</table>
			
		</fieldset>
			

        <table class="listingform" cellpadding="0" cellspacing="0">
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true),array('class'=>'button'));?></td></tr>
        </table>
	</div>
</div>