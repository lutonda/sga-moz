<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de GÃ©neros', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('GÃ©nero - adicionar');?></h1>

    </div>
    <div class="table">
<?php echo $this->Form->create('Tg0019genero');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados do GÃ©nero</th>
        </tr>
	<?php
		echo $this->Form->input('name',array('label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		?>
<tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>