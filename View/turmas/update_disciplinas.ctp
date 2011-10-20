     <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Disciplinas</th>
        </tr>
        <tr>
            <td>Disciplina</td>
            <td>Numero Maximo</td>
            <td>Docente</td>

        </tr>
        <?php        foreach($disciplinas as $k => $v){
                    echo "<tr>";
                    echo "<td>".$v."</td>";
                    echo "<td>".$this->Form->input('Turma.disciplina.'.$k.".nummaximo",array('label'=>false,'before'=>'','between'=>'','after'=>'','div'=>false))."</td>";
                    echo "<td>".$this->Form->input('Turma.disciplina.'.$k.".funcionario_id",array('options'=>$funcionarios,'label'=>false,'before'=>'','between'=>'','after'=>'','div'=>false))."</td>";
                    echo "</tr>";
                }

                //echo $this->Form->input('t0004disciplina_id');
		//echo $this->Form->input('funcionario_id');
		//echo $this->Form->input('nummaximo');
		//echo $this->Form->input('numaprovados');
		//echo $this->Form->input('mediaturma');
		//echo $this->Form->input('estado');
		//echo $this->Form->input('numreprovados');
		//echo $this->Form->input('escola_id');
	?>

<tr><td></td><td colspan="2"><?php echo $this->Form->end(__('Gravar', true));?></td></tr>
        </table>