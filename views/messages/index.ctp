<?php include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Novo Alerta', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Alertas');?></h1>

    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('recipient_id');?></th>
			<th><?php echo $this->Paginator->sort('assunto');?></th>
			<th><?php echo $this->Paginator->sort('mensagem');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tg0017messages as $tg0017message):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tg0017message['Tg0017message']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tg0017message['User']['id'], array('controller' => 'users', 'action' => 'view', $tg0017message['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tg0017message['Recipient']['id'], array('controller' => 'users', 'action' => 'view', $tg0017message['Recipient']['id'])); ?>
		</td>
		<td><?php echo $tg0017message['Tg0017message']['assunto']; ?>&nbsp;</td>
		<td><?php echo $tg0017message['Tg0017message']['mensagem']; ?>&nbsp;</td>
		<td><?php echo $tg0017message['Tg0017message']['datainicio']; ?>&nbsp;</td>
		<td class="accoes">
	        <?php echo $html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' =>'view',$tg0017message['Tg0017message']['id']))); ?>
            <?php echo $html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit',$tg0017message['Tg0017message']['id']))); ?>
            <?php echo $html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminar",'url' => array('action' => 'delete', $tg0017message['Tg0017message']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $tg0017message['Tg0017message']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
        <p>
<?php
//echo $paginator->counter(array(
//'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%', true)
//));
?></p>

<div class="paging">
	<?php echo $paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('proximo', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
</div>