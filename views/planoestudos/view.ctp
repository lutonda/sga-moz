<?php $html->addCrumb('Administra��o', '/contas'); ?>
<?php $html->addCrumb('Utilizadores', '/contas'); ?>

<?php include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Plano de Estudos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Visualizar Plano de Estudo');?></h1>
     
    </div>
    <div class="table">
<?php echo $this->Form->create('T0005planoestudo');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados do Plano de Estudo</th>
        </tr>
	<?php
		echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome do Plano','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('t0003curso_id',array('disabled'=>'true','label'=>'Nome do Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('duracao',array('options'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4),'disabled'=>'true','label'=>'Duracao(Anos)','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('semestresano',array('options'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4),'disabled'=>'true','label'=>'Semestres por ano','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
<tr><td></td><td><?php // echo $this->Form->end(__('Gravar', true));?></td></tr>
        </table>
</div>
 
 <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>

			<th><?php echo 'Codigo';?></th>
                        <th><?php echo 'Disciplina';?></th>
			<th><?php echo 'Ano';?></th>
			<th><?php echo 'Sem.';?></th>
			<th><?php echo 'Teoria';?></th>
                        <th><?php echo 'Pratica';?></th>
                        <th><?php echo 'Precedencias Obrigatórias';?></th>
                        <th><?php echo 'Precedencias Aconselhadas';?></th>
			
</tr>
		<?php
		foreach ($disciplinas as $disciplina):
		$class = null;
                $i=0;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
             <td><?php echo $disciplina['d']['codigo']; ?>&nbsp;</td>
		<td nowrap="true"><?php echo $disciplina['d']['name']; ?>&nbsp;</td>
                <td><?php echo $disciplina['p']['ano']; ?>&nbsp;</td>
                <td><?php echo $disciplina['p']['semestre']; ?>&nbsp;</td>
                <td><?php echo $disciplina['p']['cargahorariateoricas']; ?>&nbsp;</td>
                <td><?php echo $disciplina['p']['cargahorariapraticas']; ?>&nbsp;</td>
                <td>
                    <?php
                        if(!empty($disciplina['pr']['o'])){
                            echo "<table>";
                            foreach($disciplina['pr']['o'] as $d){
                                echo "<tr><td class='precedencias'>".$d."</td></tr>";
                            }
                            echo "</table>";
                        }

                                ?>&nbsp;</td>
                <td>                    <?php
                        if(!empty($disciplina['pr']['a'])){
                            echo "<table>";
                            foreach($disciplina['pr']['a'] as $d){
                                echo "<tr><td class='precedencias'>".$d."</td></tr>";
                            }
                            echo "</table>";
                        }

                                ?>&nbsp;</td>

	</tr>
<?php endforeach; ?>
	</table>

</div>
</div>