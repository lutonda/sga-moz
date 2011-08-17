<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 ?>


<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Cursos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Visualizar Curso');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
<div class="table">

<?php
    //O
    echo $form->create('Curso');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados do Curso</th>
         </tr>
         <tr>
            <?php
		echo $this->Form->input('id',array('disabled'=>'true','label'=>'Codigo do Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('name',array('disabled'=>'true','label'=>'Nome do Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'size'=>'45'));
		echo $this->Form->input('Grauacademico_id',array('disabled'=>'true','label'=>'Grau Academico','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
		echo $this->Form->input('tg0007tipocurso_id',array('disabled'=>'true','label'=>'Tipo de Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'style'=> 'width:100px'));
        echo $this->Form->input('tg0016escola_id',array('disabled'=>'true','label'=>'Escola','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
         
		 ?>
    <tr><td></td><td><?php //echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
    </div>
</div>