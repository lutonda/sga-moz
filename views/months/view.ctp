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
 <div class="months view">
<h2><?php  __('Month');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Int'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $month['Month']['int']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $month['Month']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Month', true), array('action' => 'edit', $month['Month']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Month', true), array('action' => 'delete', $month['Month']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $month['Month']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Months', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensalidades', true), array('controller' => 'mensalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensalidade', true), array('controller' => 'mensalidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Mensalidades');?></h3>
	<?php if (!empty($month['Mensalidade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Aluno Id'); ?></th>
		<th><?php __('Valor'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Data Pagamento'); ?></th>
		<th><?php __('Month Id'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Valor Multa'); ?></th>
		<th><?php __('Ano'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($month['Mensalidade'] as $mensalidade):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $mensalidade['id'];?></td>
			<td><?php echo $mensalidade['aluno_id'];?></td>
			<td><?php echo $mensalidade['valor'];?></td>
			<td><?php echo $mensalidade['created'];?></td>
			<td><?php echo $mensalidade['data_pagamento'];?></td>
			<td><?php echo $mensalidade['month_id'];?></td>
			<td><?php echo $mensalidade['modified'];?></td>
			<td><?php echo $mensalidade['valor_multa'];?></td>
			<td><?php echo $mensalidade['ano'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'mensalidades', 'action' => 'view', $mensalidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'mensalidades', 'action' => 'edit', $mensalidade['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'mensalidades', 'action' => 'delete', $mensalidade['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mensalidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mensalidade', true), array('controller' => 'mensalidades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
