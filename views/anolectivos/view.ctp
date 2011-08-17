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
        <?php echo $this->Html->link(sprintf(__('Lista de Anos Lectivos', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Visualizar Ano Lectivo');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
<div class="table">
<?php
    //O
    echo $form->create('Anolectivo');?>
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
