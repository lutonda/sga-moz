
<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Turmas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Nova Turma');?></h1>

    </div>
    <div class="table">
<?php echo $this->Form->create('Turma');?>
        <table class="listing form" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados da Turma</th>
        </tr>
	<?php
		//echo $this->Form->input('t0009anolectivo_id');
		echo $this->Form->input('t0003curso_id',array('disabled'=>'true','label'=>'Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid','align'=>'right'));
        $options = array('url' => 'update_plano_estudos/','update' => 'planoestudoid');
        echo $ajax->observeField('cursoid', $options);
		echo $this->Form->input('t0005planoestudos_id',array('disabled'=>'true','label'=>'Plano de Estudos','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'planoestudoid'));
		echo $this->Form->input('anosemestrecurr',array('disabled'=>'true','label'=>'Semestre Curricular','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
		echo $this->Form->input('tg0012turno_id',array('disabled'=>'true','label'=>'Turno','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
        ?>
        </table>
        <br />
        <br />
      <div id="disciplinasdiv">
                    <table class="listing form" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="5">Disciplinas</th>
        </tr>
        <tr>
            <td>Disciplina</td>
            <td>Numero Maximo</td>
            <td>Docente</td>

        </tr>
        <?php        foreach($disciplinas as $disciplina){
		                
                        echo "<tr>";
                         echo "<td>".$disciplina['d']['name']."</td>";
                         echo "<td>".$this->Form->input('max',array('empty'=>'--Seleccione--','label'=>''))."</td>";
						//echo "<td>".$this->Form->input('max',array('disabled'=>'false','options'=>''))."</td>";
                        echo "<td>".$this->Form->input('docente',array('options'=>array('teste'),'label'=>''))."</td>";
                         echo "</tr>";
					   
					
                }

                //echo $this->Form->input('t0004disciplina_id');
		//echo $this->Form->input('funcionario_id');
		//echo $this->Form->input('nummaximo');
		//echo $this->Form->input('numaprovados');
		//echo $this->Form->input('mediaturma');
		//echo $this->Form->input('estado');
		//echo $this->Form->input('numreprovados');
		//echo $this->Form->input('tg0016escola_id');
	?>
<tr><td></td><td colspan="2"><?php echo $this->Form->end(__('Gravar', true));?></td></tr>
        </table>
</div>
</div>