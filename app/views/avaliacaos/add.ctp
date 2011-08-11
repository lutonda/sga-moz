<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Avaliacoes', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Avaliacao - Adicionar');?></h1>
        <div class="breadcrumbs"><?php echo $html->getCrumbs(' > ','Home'); ?></div>
    </div>
    
    <div class="table">


<?php echo $form->create('Avaliacao',array('id'=>'avaliacaoForm'));?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados da avalicao</th>
         </tr>
         <tr>
            <?php
                echo $this->Form->input('t0003curso_id',array('label'=>'Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('t0010turma',array('label'=>'Disciplina','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('t0015tipoavaliacao_id',array('label'=>'Tipo de AvaliaÃƒÂ§ÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	    ?>
        </tr>
        </table>
         <br/>
         <br/>
       <div id="estudantesDivId">
                    <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Disciplinas</th>
        </tr>
        <tr>
            <td>Nome do Aluno</td>
            <td>Nota</td>

        </tr>
<tr><td></td><td class ="full" colspan="4"><?php echo $this->Form->end(__('Gravar', true));?></td></tr>
        </table>
</div>
</div>
    </div>
<?php
    $options = array('url' => 'add/','update' => 'estudantesDivId','indicator'=>'ajax-loader');
    echo $ajax->observeForm('avaliacaoFormId', $options);
?>