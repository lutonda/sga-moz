<?php $html->addCrumb('Administração', '/contas'); ?>
<?php $html->addCrumb('Utilizadores', '/contas'); ?>
<?php  echo $this->Html->script('OptionTransfer');?>

<?php include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Adicionar Nova Turma', true)), array('action' => 'add'),array('class'=>'button')); ?>
        <?php echo $this->Html->link(sprintf(__('Lista de Turmas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Turmas');?></h1>

    </div>
    <div class="table">
<?php echo $this->Form->create('T0010turma',array('action'=>'add_disciplinas/'.$turma_id));
//echo $this->Form->create('T0010turma');
?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Adicionar Disciplinas as Turmas</th>
        </tr>
        <tr>
            <td>Disciplina</td>
            <td>Num. Maximo</td>
            <td>Docente</td>
            <td>Assistente</td>
        </tr>
	<?php
        
		
        foreach($disciplinas as $disciplina){
		//var_dump($disciplina['T0004disciplina']['name']);           
            echo $this->Form->input($disciplina['T0004disciplina']['id'].'.T0010turma.t0004disciplina_id',array('hiddenField' => false,'value'=>$disciplina['T0004disciplina']['id'],'type'=>'checkbox','label'=>$disciplina['T0004disciplina']['name'],'before'=>'<tr><td>','between'=>'','after'=>'</td>','div'=>false));
            echo $this->Form->input($disciplina['T0004disciplina']['id'].'.T0010turma.nummaximo.',array('label'=>false,'before'=>'<td>','between'=>'','after'=>'</td>','div'=>false));
            echo $this->Form->input($disciplina['T0004disciplina']['id'].'.T0010turma.docente.',array('empty'=>'--seleccione--','options'=>$funcionarios,'label'=>false,'before'=>'<td>','between'=>'','after'=>'</td>','div'=>false));
            echo $this->Form->input('t0002funcionario_ass_id',array('empty'=>'--seleccione--','options'=>$funcionarios,'label'=>false,'before'=>'<td>','between'=>'','after'=>'</td></tr>','div'=>false));
            echo $this->Form->input('disc_id.'.$disciplina['T0004disciplina']['id'],array('value'=>$disciplina['T0004disciplina']['id'],'type'=>'hidden','div'=>false));
        }
        //echo $this->Form->input('plano_id',array('value'=>$plano_id,'type'=>'hidden','div'=>false));
		echo $this->Form->input('turma_id',array('value'=>$plano_id,'type'=>'hidden','div'=>false));
        
             
		?>
		<tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td><td></td><td></td></tr>
        </table>
</div>

</div>