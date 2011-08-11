 <div class="table">
<?php echo $this->Form->create('Inscricao',array('url'=>array('controller'=>'inscricaos','action'=>'inscrever_aluno',$aluno_id)));?>
	
		<fieldset>
			<legend>Disciplinas por se Inscrever</legend>
			<table class="listingform" cellpadding="0" cellspacing="0">
	<?php
		$ii=0;
        foreach($turmas as $turma){ 
		
       ?>
       <tr><td><?php echo $this->Form->checkbox('Inscricao.'.$ii.'.turma_id',array('hiddenField' => false,'value'=>$turma['Turma']['id'],'div'=>false));?><label><?php echo $turma['Turma']['id'].' - '.$turma['Disciplina']['name']; ?></label></td></tr>    
		<?php	echo $this->Form->hidden('Inscricao.'.$ii.'.aluno_id',array('value'=>$aluno_id));
			echo $this->Form->hidden('Inscricao.'.$ii.'.estadoinscricao_id',array('value'=>1));
			$ii++;            
        }
		?>
        </table>
		</fieldset>
		<fieldset>
			<legend>Detalhes de Pagamento</legend>
			<table class="listingform" cellpadding="0" cellspacing="0">
	<?php

      
		
           echo $this->Form->input('Pagamento.talao',array('checked'=>'true','disabled'=>true,'hiddenField' => false,'type'=>'checkbox','label'=>'Registrar também o pagamento da inscrição','before'=>'<tr><td>','between'=>'','after'=>'</td></tr>','div'=>false));
		?>
 <tr><td colspan="2"></td></tr>
        </table>			
		</fieldset>
        <?php echo $this->Form->end(__('GRAVAR', true));?>
</div>
