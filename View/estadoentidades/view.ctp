<div class="tg0013estadoentidades view">
<h2><?php  __('Tg0013estadoentidade');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tg0013estadoentidade['Tg0013estadoentidade']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tg0013estadoentidade['Tg0013estadoentidade']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Tg0013estadoentidade', true)), array('action' => 'edit', $tg0013estadoentidade['Tg0013estadoentidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Tg0013estadoentidade', true)), array('action' => 'delete', $tg0013estadoentidade['Tg0013estadoentidade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tg0013estadoentidade['Tg0013estadoentidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tg0013estadoentidades', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tg0013estadoentidade', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('funcionarios', true)), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Funcionario', true)), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Alunos', true)), array('controller' => 'Alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Aluno', true)), array('controller' => 'Alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('funcionarios', true));?></h3>
	<?php if (!empty($tg0013estadoentidade['Funcionario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Genero'); ?></th>
		<th><?php echo __('Grauacademico Id'); ?></th>
		<th><?php echo __('Paise Id'); ?></th>
		<th><?php echo __('Moradarua'); ?></th>
		<th><?php echo __('Moradalocal'); ?></th>
		<th><?php echo __('Moradacpostal'); ?></th>
		<th><?php echo __('Cidade Id'); ?></th>
		<th><?php echo __('Natcidade'); ?></th>
		<th><?php echo __('Provincia Id'); ?></th>
		<th><?php echo __('Natpais'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Telemovel'); ?></th>
		<th><?php echo __('Documento Id'); ?></th>
		<th><?php echo __('Numdocid'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Responsavel'); ?></th>
		<th><?php echo __('Datainicio'); ?></th>
		<th><?php echo __('Datanascimento'); ?></th>
		<th><?php echo __('Tipofuncionario Id'); ?></th>
		<th><?php echo __('Tg0013estadoentidade Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tg0013estadoentidade['Funcionario'] as $funcionario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $funcionario['id'];?></td>
			<td><?php echo $funcionario['user_id'];?></td>
			<td><?php echo $funcionario['name'];?></td>
			<td><?php echo $funcionario['foto'];?></td>
			<td><?php echo $funcionario['genero'];?></td>
			<td><?php echo $funcionario['Grauacademico_id'];?></td>
			<td><?php echo $funcionario['Paise_id'];?></td>
			<td><?php echo $funcionario['moradarua'];?></td>
			<td><?php echo $funcionario['moradalocal'];?></td>
			<td><?php echo $funcionario['moradacpostal'];?></td>
			<td><?php echo $funcionario['Cidade_id'];?></td>
			<td><?php echo $funcionario['natcidade'];?></td>
			<td><?php echo $funcionario['Provincia_id'];?></td>
			<td><?php echo $funcionario['natpais'];?></td>
			<td><?php echo $funcionario['email'];?></td>
			<td><?php echo $funcionario['telefone'];?></td>
			<td><?php echo $funcionario['telemovel'];?></td>
			<td><?php echo $funcionario['tg0009documento_id'];?></td>
			<td><?php echo $funcionario['numdocid'];?></td>
			<td><?php echo $funcionario['tg0005cargo_id'];?></td>
			<td><?php echo $funcionario['tg0006departamento_id'];?></td>
			<td><?php echo $funcionario['responsavel'];?></td>
			<td><?php echo $funcionario['datainicio'];?></td>
			<td><?php echo $funcionario['datanascimento'];?></td>
			<td><?php echo $funcionario['tg0011tipofuncionario_id'];?></td>
			<td><?php echo $funcionario['tg0013estadoentidade_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'funcionarios', 'action' => 'view', $funcionario['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'funcionarios', 'action' => 'edit', $funcionario['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'funcionarios', 'action' => 'delete', $funcionario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $funcionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Funcionario', true)), array('controller' => 'funcionarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Alunos', true));?></h3>
	<?php if (!empty($tg0013estadoentidade['Aluno'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Genero'); ?></th>
		<th><?php echo __('Paise Id'); ?></th>
		<th><?php echo __('Moradarua'); ?></th>
		<th><?php echo __('Moradalocal'); ?></th>
		<th><?php echo __('Moradacpostal'); ?></th>
		<th><?php echo __('Cidade Id'); ?></th>
		<th><?php echo __('Natcidade'); ?></th>
		<th><?php echo __('Provincia Id'); ?></th>
		<th><?php echo __('Natpais'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Telemovel'); ?></th>
		<th><?php echo __('Documento Id'); ?></th>
		<th><?php echo __('Numdocumento'); ?></th>
		<th><?php echo __('Datanascimento'); ?></th>
		<th><?php echo __('Dataingresso'); ?></th>
		<th><?php echo __('Proveniencianome'); ?></th>
		<th><?php echo __('Provenienciacidade'); ?></th>
		<th><?php echo __('Provenienciaprovincia'); ?></th>
		<th><?php echo __('Provenienciapais'); ?></th>
		<th><?php echo __('Etrabalhador'); ?></th>
		<th><?php echo __('Areatrabalho Id'); ?></th>
		<th><?php echo __('Empresanome'); ?></th>
		<th><?php echo __('Empresamorada'); ?></th>
		<th><?php echo __('Empresacontacto'); ?></th>
		<th><?php echo __('Empresatelefone'); ?></th>
		<th><?php echo __('Empresaemail'); ?></th>
		<th><?php echo __('Empresasite'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Docdataemissao'); ?></th>
		<th><?php echo __('Doclocalemissao'); ?></th>
		<th><?php echo __('Detalhes'); ?></th>
		<th><?php echo __('Tg0013estadoentidade Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tg0013estadoentidade['Aluno'] as $aluno):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $aluno['id'];?></td>
			<td><?php echo $aluno['user_id'];?></td>
			<td><?php echo $aluno['name'];?></td>
			<td><?php echo $aluno['foto'];?></td>
			<td><?php echo $aluno['genero'];?></td>
			<td><?php echo $aluno['Paise_id'];?></td>
			<td><?php echo $aluno['moradarua'];?></td>
			<td><?php echo $aluno['moradalocal'];?></td>
			<td><?php echo $aluno['moradacpostal'];?></td>
			<td><?php echo $aluno['Cidade_id'];?></td>
			<td><?php echo $aluno['natcidade'];?></td>
			<td><?php echo $aluno['Provincia_id'];?></td>
			<td><?php echo $aluno['natpais'];?></td>
			<td><?php echo $aluno['email'];?></td>
			<td><?php echo $aluno['telefone'];?></td>
			<td><?php echo $aluno['telemovel'];?></td>
			<td><?php echo $aluno['tg0009documento_id'];?></td>
			<td><?php echo $aluno['numdocumento'];?></td>
			<td><?php echo $aluno['datanascimento'];?></td>
			<td><?php echo $aluno['dataingresso'];?></td>
			<td><?php echo $aluno['proveniencianome'];?></td>
			<td><?php echo $aluno['provenienciacidade'];?></td>
			<td><?php echo $aluno['provenienciaprovincia'];?></td>
			<td><?php echo $aluno['provenienciapais'];?></td>
			<td><?php echo $aluno['etrabalhador'];?></td>
			<td><?php echo $aluno['tg0010areatrabalho_id'];?></td>
			<td><?php echo $aluno['empresanome'];?></td>
			<td><?php echo $aluno['empresamorada'];?></td>
			<td><?php echo $aluno['empresacontacto'];?></td>
			<td><?php echo $aluno['empresatelefone'];?></td>
			<td><?php echo $aluno['empresaemail'];?></td>
			<td><?php echo $aluno['empresasite'];?></td>
			<td><?php echo $aluno['t0003curso_id'];?></td>
			<td><?php echo $aluno['docdataemissao'];?></td>
			<td><?php echo $aluno['doclocalemissao'];?></td>
			<td><?php echo $aluno['detalhes'];?></td>
			<td><?php echo $aluno['tg0013estadoentidade_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'Alunos', 'action' => 'view', $aluno['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'Alunos', 'action' => 'edit', $aluno['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'Alunos', 'action' => 'delete', $aluno['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aluno['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Aluno', true)), array('controller' => 'Alunos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
