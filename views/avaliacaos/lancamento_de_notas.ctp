<?php //include('menu.ctp'); $grupo = $session->read('Auth.User.group_id');?>

<div class="projectos form" id="center-column">
<div class="top-bar">
	<?php echo $this->Html->link(sprintf(__('Lancamento de Notas', true)), array('action' => 'registo_de_notas'),array('class'=>'button')); ?>
	<h1><?php __('Avaliacoes - Lancamento de Notas');?></h1>

</div>
<div class="table">
    <img src="/sistema/img/ajax-loader.gif" style="display:none" id="ajax-loader">
	<?php echo $this->Form->create('Avaliacaos');?>
	<table class="listingform" cellpadding="0" cellspacing="0">
		<tr>
			<th class="full" colspan="2">Lancamento de Notas das Avaliacoes</th>
		</tr>
		<?php
			
			echo $this->Form->input('tal',array('disabled'=>'true','value'=>$ano_lectivo_codigo,'label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'anolectivoid'));
			
			 echo $this->Form->input('tc',array('disabled'=>'true','value'=>$curso_name,'size'=>'50','label'=>'Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));			 

			echo $this->Form->input('tp',array('disabled'=>'true','value'=>$plano_name,'label'=>'Plano de estudo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','id'=>'planoid','div'=>false));

			echo $this->Form->input('tt',array('disabled'=>'true','value'=>$turma_name,'size'=>'50','label'=>'Turma','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'turma'));
		
		
            echo $this->Form->input('tea',array('disabled'=>'true','value'=>$epoca_avalicao1,'label'=>'Epoca de Avaliacao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
			
            echo $this->Form->input('tea',array('disabled'=>'true','value'=>$tipoavaliacao2,'label'=>'Epoca de Avaliacao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));			
			
		?>
        <tr><td></td><td><?php //echo $this->Form->end(__('SEGUINTE', true));?></form></td></tr>
	</table>
	<br />
	<br />
	
</div>


<div class="table">
	<img src="/sistema/img/ajax-loader.gif" style="display:none" id="ajax-loader">
	<?php echo $this->Form->create('Avaliacaos');?>
	<table cellpadding="0" cellspacing="0" class ="listing" >
	<tr>
			
			<th><?php echo 'Codigo do aluno';?></th>			
            <th><?php echo 'Nome do Aluno';?></th>
			<th><?php echo 'Nota de '.$tipoavaliacao2;?></th>
			<th><?php echo 'Estado da Inscricao';?></th>
</tr>
		<?php
		$estado = "";
		foreach ($alunosByTurma as $alunos):
		//var_dump($alunos);
		$class = null;
                $i=0;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		if($alunos['ti']['tg0020estadoinscricao_id']==1)
		          $estado = "inscrito";
	    if($alunos['ti']['tg0020estadoinscricao_id']==2)
		          $estado = "Aprovado";
		if($alunos['ti']['tg0020estadoinscricao_id']==3)
		          $estado = "Reprovado";
        if($alunos['ti']['tg0020estadoinscricao_id']==4)
		          $estado = "Cancelada";
        if($alunos['ti']['tg0020estadoinscricao_id']==5)
		          $estado = "Anulada";
                 // var_dump($controle_epoca);
			      //var_dump($datahora);
            if($controle_epoca<$datahora || $grupo == 3 )	
                      $status = 1;
	?>
	    <tr <?php echo $class; ?>>
	    <td><?php echo $alunos['ta']['codigo']; ?>&nbsp;</td>
		<td><?php echo $alunos['ta']['name']; ?>&nbsp;</td>
		<?php echo $this->Form->input('notas.'.$alunos['ta']['codigo'].'.t0013inscricao_id',array('value'=>$alunos['ti']['id'],'type'=>'hidden','div'=>false));?> 
		<td><?php   if($status == 1 && $grupo != 1 && $grupo != 2) { echo $this->Form->input('notas.'.$alunos['ta']['codigo'].'.nota',array('disabled'=>'true','label'=>false,'value'=>$alunos['ti']['notafrequencia'])); }
		            else {echo $this->Form->input('notas.'.$alunos['ta']['codigo'].'.nota',array('label'=>false,'value'=>$alunos['ti']['notafrequencia']));}
	?>&nbsp;</td>
	  <td><?php if($status == 1 && $grupo != 1) { echo $this->Form->input('notas.'.$alunos['ta']['codigo'].'.tg0020estadoinscricao_id',array('disabled'=>'true','empty'=>'--seleccione--','value'=>$estado,'options'=>$estadoinscricao,'label'=>false,'div'=>false));}
                   else { echo $this->Form->input('notas.'.$alunos['ta']['codigo'].'.tg0020estadoinscricao_id',array('empty'=>'--seleccione--','value'=>$estado,'options'=>$estadoinscricao,'label'=>false,'div'=>false));}?>&nbsp;</td>
         
	  </tr>
<?php endforeach;?>
	<?php
	echo $this->Form->input('turma_id',array('value'=>$turma_id,'type'=>'hidden','div'=>false));
	echo $this->Form->input('tipo_avaliacao',array('value'=>$tipo_avaliacao,'type'=>'hidden','div'=>false));
	echo $this->Form->input('epoca_avaliacao',array('value'=>$epoca_avaliacao,'type'=>'hidden','div'=>false));
	?>
	<tr><td></td><td></td><td><?php  if($status != 1 || $grupo == 1) 
	                                 if($alunos!=null)
									 {
									 echo $this->Form->end(__('GRAVAR', true));
									 }
									 ?></td><td></td><td></td></tr>
	</table>
    
</div>
</div>







