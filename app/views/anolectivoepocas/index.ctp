<?php //include('menu.ctp');
$grupo = $session->read('Auth.User.group_id');
 ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
    <?php  if($grupo ==1)  echo $this->Html->link(sprintf(__('Novo Tempo Limite', true)), array('action' => 'tempo_limite'),array('class'=>'button')); ?>
	<h1><?php __('Avaliacao - Tempo Limite');?></h1>
    <div class="breadcrumbs"><?php ?></div>
</div>

	
<div class="table">
	<table id="alunos" cellpadding="0" cellspacing="0" class ="listing table-autopage:100">
	
	<tr>
			<th><?php echo $this->Paginator->sort('Codigo');?></th>
			<th><?php echo $this->Paginator->sort('Ano Lectivo');?></th>
			<th><?php echo $this->Paginator->sort('Epoca de Avaliacao');?></th>
			<th><?php echo $this->Paginator->sort('Tempo Limite');?></th>
			<th class="actions"><?php __('Accao');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($t0017anolectivoepocas as $t0017anolectivoepoca):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr <?php echo $class;?>>
		<td><?php echo $t0017anolectivoepoca['T0017anolectivoepoca']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($t0017anolectivoepoca['Anolectivo']['codigo'], array('controller' => 't0009anolectivos', 'action' => 'view', $t0017anolectivoepoca['Anolectivo']['codigo'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($t0017anolectivoepoca['Epocaavaliacao']['name'], array('controller' => 't0014epocaavaliacaos', 'action' => 'view', $t0017anolectivoepoca['Epocaavaliacao']['id'])); ?>
		</td>
		<td><?php echo $t0017anolectivoepoca['T0017anolectivoepoca']['limite']; ?>&nbsp;</td>
		
		
	
		<td class="accoes">
	        <?php if($grupo ==1) echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $t0017anolectivoepoca['T0017anolectivoepoca']['id']))); ?>
                <?php if($grupo ==1) echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'delete', $t0017anolectivoepoca['T0017anolectivoepoca']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $t0017anolectivoepoca['T0017anolectivoepoca']['id']))); ?>
	        		
		</td>
		
	</tr>
<?php endforeach; ?>
        </tbody>
	</table>

</div>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('proximo', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
</div>
