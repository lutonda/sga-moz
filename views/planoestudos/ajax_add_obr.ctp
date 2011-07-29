<?php
foreach($precedencias as $precedencia){
    echo "<option value={$precedencia["Grupodisciplina"]["t0004disciplina_id"]}>{$precedencia["Disciplina"]["name"]}</option>";
}


?>