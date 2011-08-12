 <img src="/sistema/img/ajax-loader.gif" style="display:none" id="ajax-loader">
<?php echo $this->Form->create('Planoestudoano',array('url'=>array('controller'=>'t0005planoestudos','action'=>'ajax_grupo_disciplinas'),'id'=>'grupo_disciplinasformdiv'));?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="3">Disciplinas e PrecedÃªncias</th>
        </tr>
	<?php

                $add_opt = array('url' => 'ajax_grupo_disciplinas/'.$plano_id.'/1','update' => 'grupo_disciplinasdiv','indicator'=>'ajax-loader','escape'=>false);
                $add_obr = array('url' => 'ajax_grupo_disciplinas/'.$plano_id.'/2/','update' => 'grupo_disciplinasdiv','indicator'=>'ajax-loader','escape'=>false,'div'=>false);
                $del_opt = array('url' => 'ajax_grupo_disciplinas/'.$plano_id.'/3','update' => 'grupo_disciplinasdiv','indicator'=>'ajax-loader','escape'=>false);
                $del_obr = array('url' => 'ajax_grupo_disciplinas/'.$plano_id.'/4/','update' => 'grupo_disciplinasdiv','indicator'=>'ajax-loader','escape'=>false);

                $imagem_obrigatorias = $ajax->submit('/img/add-icon.gif',$add_obr);
                $imagem_obrigatorias .= "&nbsp;&nbsp;&nbsp;".$ajax->submit(('/img/hr.gif'),$del_obr);
                $imagem_opcionais = $ajax->submit(('/img/add-icon.gif'),$add_opt);

                $imagem_opcionais .= "&nbsp;&nbsp;&nbsp;".$ajax->submit(('/img/hr.gif'),$del_opt);
                $precedencias = $this->Form->input('pdisciplina',array('options'=>$pdisciplina,'label'=>'Disciplinas Precedentes','before'=>'','between'=>'<br />','after'=>'<br />','div'=>false,'id'=>'p_disciplina'));
                $precedencias .= $this->Form->input('pobrigatorias',array('label'=>'Precedencias Obrigatorias'.$imagem_obrigatorias,'type'=>'select','multiple'=>true,'size'=>'8','before'=>'','between'=>'<br />','after'=>'<br />','div'=>false));
                $precedencias .= $this->Form->input('popcionais',array('label'=>'Precedencias Opcionais'.$imagem_opcionais,'type'=>'select','multiple'=>true,'size'=>'8','before'=>'','between'=>'<br />','after'=>'<br />','div'=>false));
                $semestrecurricular = $this->Form->input('semestre',array('label'=>'Semestre','before'=>'','between'=>'','after'=>'<br />','div'=>false));

                echo $this->Form->input('ano',array('options'=>$anos,'label'=>'Ano Curricular','before'=>'<tr><td colspan="2">','between'=>"",'after'=>"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $semestrecurricular</td><td  rowspan='6' valign='top'>{$precedencias}</td></tr>",'div'=>false,'id'=>'ano_curricular'));
                echo $this->Form->input('t0004disciplina_id',array('label'=>'Disciplina','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('cargahorariateoricas',array('label'=>'Carga Horaria Teorica','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('cargahorariapraticas',array('label'=>'Carga Horaria Pratica','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('creditos',array('label'=>'Creditos','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));

                //$options = array('url' => array('controller'=>'t0005planoestudos','action'=>'ajax_grupo_disciplinas',$plano_id),'update' => 'grupo_disciplinasdiv','indicator'=>'ajax-loader');
                //echo $ajax->observeForm('grupo_disciplinasformdiv', $options);


	?>
   <tr style="height:60px;"><td></td><td></td></tr>
<tr><td></td><td colspan="2"><?php echo $this->Form->end(__('Gravar', true));?></td></tr>
        </table>