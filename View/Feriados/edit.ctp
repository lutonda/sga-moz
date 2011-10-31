<div class="feriados form">
<?php echo $this->Form->create('Feriado');?>
	<fieldset>
		<legend><?php echo __('Edit Feriado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('provincia_id');
		echo $this->Form->input('cidade_id');
		echo $this->Form->input('dia');
<<<<<<< HEAD
		echo $this->Form->input('month_id');
=======
		echo $this->Form->input('mes');
>>>>>>> 35801335a86a2e7e00116c8036e9e34f553dacfe
		echo $this->Form->input('detalhes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Feriado.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Feriado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Feriados'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
<<<<<<< HEAD
		<li><?php echo $this->Html->link(__('List Months'), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month'), array('controller' => 'months', 'action' => 'add')); ?> </li>
=======
>>>>>>> 35801335a86a2e7e00116c8036e9e34f553dacfe
	</ul>
</div>
