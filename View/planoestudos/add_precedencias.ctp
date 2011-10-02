<div  class="box box-100 altbox">
	<div class="boxin">
		<div class="header">
			<h3><?php echo __('Adicionar Plano de estudos')?></h3>
	        <?php echo $this->Html->link(sprintf(__('Adicionar Nova Disciplina', true)), array('action' => 'add_grupodisciplinas',$plano_id),array('class'=>'button')); ?>
        	<?php echo $this->Html->link(sprintf(__('Lista de Plano de Estudos', true)), array('action' => 'index'),array('class'=>'button')); ?>
		</div>
		<?php echo $this->Form->create('Planoestudo',array('class'=>'fields'));?>
			<table width="100%">
				<tr>
				<td width="50%">
					<?php
					/**
					 * @Todo Editar esta pagina para as precedencias ja seleccionadas aparecerem seleccionadas
					 */
					?>
					    <div class="table">
							<?php echo $this->Form->create('Planoestudo');?>
							          <fieldset>
							          <legend>Precedencias Obrigatorias</legend>
							        <table class="listingform" cellpadding="0" cellspacing="0">
							         
							          
							     
								<?php
									
							        foreach($precedencias as $precedencia){
							           
							            echo $this->Form->input('pobrigatorias.'.$precedencia['id'],array('hiddenField' => false,'value'=>$precedencia['id'],'type'=>'checkbox','label'=>$precedencia['name'],'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));;
							        }
							        echo $this->Form->input('plano_id',array('value'=>$plano_id,'type'=>'hidden','div'=>false));
							        echo $this->Form->input('disc_id',array('value'=>$disc_id,'type'=>'hidden','div'=>false));
									?>
							<tr><td></td><td></td></tr>
							        </table>
							        </fieldset>
							</div>
					</td>
					<td width="50%">
					        <div class="table">
					<?php echo $this->Form->create('Planoestudo');?>
					        <fieldset>
					        	<legend>Precedencias Aconselhadas</legend>
					        <table class="listingform" cellpadding="0" cellspacing="0">
						<?php
					
					        foreach($precedencias as $precedencia){
					           
					            echo $this->Form->input('paconselhadas.'.$precedencia['id'],array('hiddenField' => false,'value'=>$precedencia['id'],'type'=>'checkbox','label'=>$precedencia['name'],'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
					        }
					        echo $this->Form->input('plano_id',array('value'=>$plano_id,'type'=>'hidden','div'=>false));
					        echo $this->Form->input('disc_id',array('value'=>$disc_id,'type'=>'hidden','div'=>false));
							?>
					
					        </table>
					        </fieldset>
					</div>						
					</td>
				</tr>
			</table>	
		
        <table class="listingform" cellpadding="0" cellspacing="0">
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true),array('class'=>'button'));?></td></tr>
        </table>
	</div>
</div>
