<?php $html->addCrumb('Administração', '/contas'); ?>
<?php $html->addCrumb('Utilizadores', '/contas'); ?>
<?php  echo $this->Html->script('OptionTransfer');?>

<?php include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Adicionar Nova Disciplina', true)), array('action' => 'add_grupodisciplinas',$plano_id),array('class'=>'button')); ?>
        <?php echo $this->Html->link(sprintf(__('Lista de Plano de Estudos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Plano de Estudo');?></h1>

    </div>
    <div class="table">
<?php echo $this->Form->create('Planoestudo');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Precedencias Obrigatorias</th>
        </tr>
	<?php
		
        foreach($precedencias as $precedencia){
           
            echo $this->Form->input('pobrigatorias.'.$precedencia['id'],array('hiddenField' => false,'value'=>$precedencia['id'],'type'=>'checkbox','label'=>$precedencia['name'],'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));;
        }
        echo $this->Form->input('plano_id',array('value'=>$plano_id,'type'=>'hidden','div'=>false));
        echo $this->Form->input('disc_id',array('value'=>$disc_id,'type'=>'hidden','div'=>false));
		?>
<tr><td></td><td></td></tr>
        </table>
</div>


        <div class="table">
<?php echo $this->Form->create('Planoestudo');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Precedencias Aconselhadas</th>
        </tr>
	<?php

        foreach($precedencias as $precedencia){
           
            echo $this->Form->input('paconselhadas.'.$precedencia['id'],array('hiddenField' => false,'value'=>$precedencia['id'],'type'=>'checkbox','label'=>$precedencia['name'],'before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        }
        echo $this->Form->input('plano_id',array('value'=>$plano_id,'type'=>'hidden','div'=>false));
        echo $this->Form->input('disc_id',array('value'=>$disc_id,'type'=>'hidden','div'=>false));
		?>
<tr><td></td><td><?php echo $this->Form->end(__('Gravar', true));?></td></tr>
        </table>
</div>
</div>