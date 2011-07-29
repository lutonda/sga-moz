<div class="section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Painel</h2>
							<span class="title_wrapper_left"></span>
							<span class="title_wrapper_right"></span>
						</div>
						<!--[if !IE]>end title wrapper<![endif]-->
						<!--[if !IE]>start section content<![endif]-->
						<div class="section_content">
							<!--[if !IE]>start section content top<![endif]-->
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">
												<!--[if !IE]>start dashboard menu<![endif]-->
												<div class="dashboard_menu_wrapper">
												<ul class="dashboard_menu">
													<li><?php echo $this->Html->link('<span class="d1" href="#">Estudantes</span>',array('controller'=>'alunos','action'=>'index'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d2" href="#">Registrar Estudante</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d3" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d4" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d5" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d6" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d7" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d8" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d9" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d10" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d11" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d12" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d13" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d14" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d15" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													<li><?php echo $this->Html->link('<span class="d16" href="#">Reportar Erros</span>',array('controller'=>'alunos','action'=>'add'),array('escape'=>false))?></li>
													
												</ul>
												</div>
												<!--[if !IE]>end dashboard menu<![endif]-->
												
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--[if !IE]>end section content top<![endif]-->
							<!--[if !IE]>start section content bottom<![endif]-->
							<span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
							<!--[if !IE]>end section content bottom<![endif]-->
							
						</div>
						<!--[if !IE]>end section content<![endif]-->
					</div>
<!--
<div class="actions" id="left-column">
</div>
<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php //echo $this->Html->link(sprintf(__('Novo Funcionario', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Alertas');?></h1>

    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
			<th><?php echo 'Código';?></th>
			<th><?php echo 'Usuário';?></th>
			<th><?php echo 'Assunto';?></th>
			<th><?php echo 'Data';?></th>
			
	</tr>
	<?php
	$i = 0;
	foreach ($alertas as $alerta):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $alerta['Tg0017message']['id']; ?>&nbsp;</td>
		<td><?php echo $alerta['User']['username']; ?>&nbsp;</td>
        <td><?php echo $this->Html->link($alerta['Tg0017message']['assunto'], array('controller' => 'tg0017messages', 'action' => 'view', $alerta['Tg0017message']['id'])); ?>&nbsp;</td>
		<td><?php echo  $alerta['Tg0017message']['datainicio']; ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</table>

</div>

</div>-->