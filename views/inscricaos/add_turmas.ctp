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
<?php echo $this->Form->create('T0013inscricao');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Adicionar Disciplinas as Turmas</th>
        </tr>
        <tr>
            <td>Disciplina</td>
            
        </tr>
	<?php

	//$k.'.T0013inscricao.turma'
        foreach($t0010turmas as $k=>$v){ 
		
           echo $this->Form->input($k.'.T0013inscricao.turma',array('hiddenField' => false,'value'=>$k,'type'=>'checkbox','label'=>$k.' - '.$v,'before'=>'<tr><td>','between'=>'','after'=>'</td>','div'=>false));            
        }
		
           echo $this->Form->input('inscricao_id',array('value'=>$inscricao_id,'type'=>'hidden','div'=>false));
		?>
 <tr><td colspan="2"><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>

</div>