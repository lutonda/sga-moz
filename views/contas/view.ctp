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
 
 <div class="contas view">
<h2><?php  __('Conta');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $conta['Conta']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aluno'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($conta['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $conta['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Saldo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $conta['Conta']['saldo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $conta['Conta']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $conta['Conta']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conta', true), array('action' => 'edit', $conta['Conta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Conta', true), array('action' => 'delete', $conta['Conta']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $conta['Conta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conta', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos', true), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno', true), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('controller' => 'pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Pagamentos');?></h3>
	<?php if (!empty($conta['Pagamento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Aluno Id'); ?></th>
		<th><?php __('Conta Id'); ?></th>
		<th><?php __('Valor'); ?></th>
		<th><?php __('Data Pagamento'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($conta['Pagamento'] as $pagamento):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $pagamento['id'];?></td>
			<td><?php echo $pagamento['aluno_id'];?></td>
			<td><?php echo $pagamento['conta_id'];?></td>
			<td><?php echo $pagamento['valor'];?></td>
			<td><?php echo $pagamento['data_pagamento'];?></td>
			<td><?php echo $pagamento['created'];?></td>
			<td><?php echo $pagamento['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'pagamentos', 'action' => 'view', $pagamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'pagamentos', 'action' => 'edit', $pagamento['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'pagamentos', 'action' => 'delete', $pagamento['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pagamento', true), array('controller' => 'pagamentos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
