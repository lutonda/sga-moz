        <table class="listingform" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="3">Semestres</th>
        </tr>
        <tr>
    <td>Semestre</td>
   <td>Data de Inicio</td>
   <td>Data do Fim</td>
</tr>

<?php
    $i=0;
    for($i=0;$i<$num;$i++){
        echo "<tr>";
        echo "<td>".$this->Form->input('T0019semestrelectivo.'.$i.'.codigo.',array('label'=>false,'before'=>'','between'=>'','after'=>'','div'=>false))."</td>";
        echo "<td>".$this->Form->input('T0019semestrelectivo.'.$i.'.data_inicio.',array('label'=>false,'before'=>'','between'=>'','after'=>'','div'=>false))."</td>";
        echo "<td>".$this->Form->input('T0019semestrelectivo.'.$i.'.data_fim.',array('label'=>false,'before'=>'','between'=>'','after'=>'','div'=>false))."</td>";
        echo "</tr>";

    }

?>
<tr><td></td><td colspan="2"><?php echo $this->Form->end(__('Gravar', true));?></td></tr>
        </table>