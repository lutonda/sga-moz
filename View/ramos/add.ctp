<div class="ramos form">
<?php echo $this->Form->create('Ramo');?>
	<fieldset>
		<legend><?php echo __('Add Ramo'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('curso_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ramos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planoestudoanos', true), array('controller' => 'planoestudoanos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planoestudoano', true), array('controller' => 'planoestudoanos', 'action' => 'add')); ?> </li>
	</ul>
</div>