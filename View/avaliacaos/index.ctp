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
 <?php //include('menu.ctp');
$grupo = $this->Session->read('Auth.User.group_id');
$username = $this->Session->read('Auth.User.username');
 ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php if($grupo == 1) echo $this->Html->link(sprintf(__('Novo Registo de Notas', true)), array('action' => 'registo_de_notas'),array('class'=>'button')); ?>
	<h1><?php echo __('Avaliacoes');?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>

            <th><?php echo $this->Paginator->sort('Codigo','codigo');?></th>
			<th><?php echo $this->Paginator->sort('Nome do Aluno','name');?></th>
			<th><?php echo $this->Paginator->sort('Tipo Avalicao','t0015tipoavaliacao_id');?></th>
			<th><?php echo $this->Paginator->sort('Nota','nota');?></th>
			<th><?php echo $this->Paginator->sort('Data','data');?></th>
			<th class="actions"><?php echo __('Accao');?></th>
	</tr>
	<?php
	$i = 0;
	
	foreach ($avaliacaos as $avaliacao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		
	if(($grupo !=3) || ($grupo ==3 && $username == $codigo)){;
	?>
	<tr<?php echo $class;?>>
			<td><?php echo $codigo; ?>&nbsp;</td>
			<td><?php echo $name; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($avaliacao['Tipoavaliacao']['name'], array('controller' => 'tipoavaliacaos', 'action' => 'view', $avaliacao['Tipoavaliacao']['id'])); ?>
		</td>

		<td><?php echo $avaliacao['Avaliacao']['nota']; ?>&nbsp;</td>
		<td><?php echo $avaliacao['Avaliacao']['data']; ?>&nbsp;</td>
		<td class="accoes">
	            <?php //echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'view', $avaliacao['Avaliacao']['id']))); ?>
                    <?php //echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies",'url' => array('action' => 'edit', $avaliacao['Avaliacao']['id']))); ?>
                    <?php if($grupo ==1) echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies",'url' => array('action' => 'delete',$avaliacao['Avaliacao']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $avaliacao['Avaliacao']['id']))); ?>
		</td>

	</tr>
<?php 
}
endforeach; ?>
	</table>

</div>
        <p>
<?php
//echo $this->Paginator->counter(array(
//'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%', true)
//));
?></p>

<div class="paging">
	<?php echo $this->Paginator->prev('<<', array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next('>>', array(), null, array('class' => 'disabled'));?>
</div>

</div>