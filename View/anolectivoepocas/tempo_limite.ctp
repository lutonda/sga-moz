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

<div class="projectos form" id="center-column">
<div class="top-bar">
	<?php echo $this->Html->link(sprintf(__('Lista de Tempo Limite', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php echo __('Avaliacoes - Tempo Limite');?></h1>

</div>
<div class="table">
    <img src="/sistema/img/ajax-loader.gif" style="display:none" id="ajax-loader">
	<?php echo $this->Form->create('T0017anolectivoepoca');?>
	<table class="listingform" cellpadding="0" cellspacing="0">
		<tr>
			<th class="full" colspan="2">Tempo Limite das Avaliacoes</th>
		</tr>
		<?php
			
			echo $this->Form->input('t0009anolectivo_id',array('empty'=>'--seleccione--','options'=>Anolectivos,'label'=>'Ano Lectivo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'anolectivoid'));
            echo $this->Form->input('epocaavaliacao_id',array('empty'=>'--seleccione--','label'=>'Epoca de Avaliacao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'align'=>'right'));
			echo $this->Form->input('limite',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Tempo Limite','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		
		
		
		?>
        <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
	</table>
	<br />
	<br />
	
</div>