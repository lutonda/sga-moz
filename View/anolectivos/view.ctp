<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 * 
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 * 
 * Este software � distribuido sob a perspectiva de que possa ser �til para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 * 
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
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
        <?php echo $this->Html->link(sprintf(__('Lista de Anos Lectivos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Visualizar Ano Lectivo');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
<div class="table">
<?php
    //O
    echo $this->Form->create('Anolectivo');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
		<tr>
            <th class="full" colspan="2">Dados do Ano Lectivo</th>
         </tr>
		
        <?php
        echo $this->Form->input('id',array('disabled'=>'true','label'=>'ID','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		/*
	    echo $this->Form->input('codigo',array('disabled'=>'true','label'=>'Codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('tipo',array('disabled'=>'true','label'=>'Tipo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('datainicio',array('disabled'=>'true','label'=>'Data Inicial','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('datafim',array('disabled'=>'true','label'=>'Data Final','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		*/
		
		echo $this->Form->input('ano',array('disabled'=> 'true','label'=>'Ano','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('num_semestre',array('disabled'=> 'true','label'=>'Semestre Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datainicio',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','disabled'=> 'true','label'=>'Data Inicio','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('datafim',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','disabled'=> 'true','label'=>'Data Fim','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
    <tr><td></td><td></td></tr>
        </table>
</div>
    </div>
</div>
