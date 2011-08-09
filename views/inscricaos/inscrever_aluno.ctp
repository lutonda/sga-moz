 <div class="table">
<?php echo $this->Form->create('Inscricao');?>
	
		<fieldset>
			<legend>Disciplinas por se Inscrever</legend>
			<table class="listingform" cellpadding="0" cellspacing="0">
	<?php

        foreach($turmas as $turma){ 
		
           echo $this->Form->input($turma['Turma']['id'].'.Inscricao.turma',array('hiddenField' => false,'value'=>$turma['Turma']['id'],'type'=>'checkbox','label'=>$turma['Turma']['id'].' - '.$turma['Disciplina']['name'],'before'=>'<tr><td>','between'=>'','after'=>'</td></tr>','div'=>false));            
        }
		?>
 <tr><td colspan="2"><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
		</fieldset>
		<fieldset>
			<legend>Detalhes de Pagamento</legend>
			<table class="listingform" cellpadding="0" cellspacing="0">
	<?php

      
		
           echo $this->Form->input('Pagamento.talao',array('hiddenField' => false,'value'=>$k,'type'=>'checkbox','label'=>$k.' - '.$v,'before'=>'<tr><td>','between'=>'','after'=>'</td></tr>','div'=>false));
		?>
 <tr><td colspan="2"><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>			
			
		</fieldset>
        
</div>
