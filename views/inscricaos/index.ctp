<?php //include('menu.ctp'); ?>
<div class="projectos index" id="center-column">
    <div class="top-bar">
	<?php echo $this->Html->link(sprintf(__('Imprimir PDF', true)), array('action' => 'pdf_index'),array('class'=>'button','target'=>'_blank')); ?>
        <?php echo $this->Html->link(sprintf(__('Nova Inscricao', true)), array('action' => 'add'),array('class'=>'button')); ?>
		
	<h1><?php __('Inscricao');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
			<th><?php echo $this->Paginator->sort('Codigo','id');?></th>
			<th><?php echo $this->Paginator->sort('Ano Lectivo','t0009anolectivo_id');?></th>
			<th><?php echo $this->Paginator->sort('Nome do Aluno','Aluno_id');?></th>
			<th><?php echo $this->Paginator->sort('Nome da Disciplina','t0010turma_id');?></th>
			<th><?php echo $this->Paginator->sort('A/S','semestrecurricular');?></th>	
			<th><?php echo $this->Paginator->sort('Turno','tg0012turno_id');?></th>			
		    <th><?php echo $this->Paginator->sort('Estado','tg0020estadoinscricao_id');?></th>
			<th class="actions"><?php __('Accao');?></th>
		
	</tr>
	<?php
	$i = 0;
   
$k=0;
	foreach ($inscricaos as $inscricao):
		$class = null;
		
		
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
			
		}
		
		   	//$anolectivo = $codigo;
			//if(count($anolectivo)>0){
			
			//for($k=0; $k<1; $k++){
			//var_dump(count($anolectivo)-$k);
	?>
	<tr <?php echo $class; ?>>
		<td><?php echo $inscricao['Inscricao']['id']; ?>&nbsp;</td>
		
		<td>	
			<?php 
			//var_dump($codigo);


			
        
			
			//echo $this->Html->link('2011-1'.$inscricao['Turma']['Anolectivo']['codigo'], array('controller' => 't0009anolectivos', 'action' => 'view', $inscricao['Turma']['t0009anolectivo_id']));
			echo $this->Html->link($codigo[$k], array('controller' => 't0009anolectivos', 'action' => 'view', $inscricao['Turma']['t0009anolectivo_id']));

			?>
		</td>
		
		<td>
			<?php echo $this->Html->link($inscricao['Aluno']['name'], array('controller' => 'Alunos', 'action' => 'view', $inscricao['Aluno']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($inscricao['Turma']['name'], array('controller' => 't0010turmas', 'action' => 'view', $inscricao['Turma']['id'])); ?>
		</td>
		
		<td>
			<?php echo $inscricao['Turma']['anocurricular'].' / '.$inscricao['Turma']['anocurricular']; ?>&nbsp;
		</td>
		
		<td>
			<?php 
			//var_dump($inscricao['Turma']['tg0012turno_id']);
				if($inscricao['Turma']['tg0012turno_id'] == 1)
				{ $turno = "Diurno";}
				if($inscricao['Turma']['tg0012turno_id'] == 2)
				{ $turno = "Pos-Laboral";}
				if($inscricao['Turma']['tg0012turno_id'] == null)
				{ $turno = "Sem turno";}
			echo $this->Html->link($turno, array('controller' => 'tg0012turnos', 'action' => 'view', $turma['Turno']['id'])); ?>
		</td>
		
		<td>
            <?php 
			
				if($inscricao['Inscricao']['tg0020estadoinscricao_id'] == 1)
				{ $estado1 = "Inscrito";}
				if($inscricao['Inscricao']['tg0020estadoinscricao_id'] == 2)
				{ $estado1 = "Aprovado";}
				if($inscricao['Inscricao']['tg0020estadoinscricao_id'] == 3)
				{ $estado1 = "Reprovado";}
                if($inscricao['Inscricao']['tg0020estadoinscricao_id'] == 4)
				{ $estado1 = "Cancelada";}
				if($inscricao['Inscricao']['tg0020estadoinscricao_id'] == 5)
				{ $estado1 = "Anulada";}
				if($inscricao['Inscricao']['tg0020estadoinscricao_id'] == 6)
				{ $estado1 = "Excluido";}
                if($inscricao['Inscricao']['tg0020estadoinscricao_id'] == 7)
				{ $estado1 = "Admitido";}
				if($inscricao['Inscricao']['tg0020estadoinscricao_id'] == 8)
				{ $estado1 = "Dispensado";}
				if($inscricao['Inscricao']['tg0020estadoinscricao_id'] == null)
				{ $estado1 = "Sem estado";}
				echo $this->Html->link($estado1, array('controller' => 't0013inscricao', 'action' => 'view', $inscricao['Inscricao']['tg0020estadoinscricao_id'])); 
			?>
		</td>
		
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'view', $inscricao['Inscricao']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'edit', $inscricao['Inscricao']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies",'url' => array('action' => 'delete', $inscricao['Inscricao']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true),$inscricao['Inscricao']['id']))); ?>
		</td>
		
	</tr>
	
	
<?php 

		  // }
			
	$k++;	//  }	
endforeach; 


?>
	</table>

</div>
        <p>
<?php
//echo $this->Paginator->counter(array(
//'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
//));
?></p>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('proximo', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

</div>
