

<ul>
	<li>
							<span class="drop"><span><span><a class="sm8" href="#">Estudantes</a></span></span></span>
							<ul>
								<li><?php echo $this->Html->link(sprintf(__('Listagem de Estudantes', true)), array('action' => 'listagens'),array('class'=>'linkselected')); ?></li>
								<li><?php echo $this->Html->link(sprintf(__('Alunos Matriculados', true)), array('action' => 'matriculados'),array('class'=>'link')); ?></li>
								<li><?php echo $this->Html->link(sprintf(__('Alunos Inscritos',  true)), array('action' => 'inscricao'),array('class'=>'link'));?></li>
							</ul>
						</li>
                        <li></li>
    <li><?php echo $this->Html->link(sprintf(__('Listagem Funcionarios',  true)), array('action' => 'listagens_funcionario'),array('class'=>'link'));?></li>
	<li></li>
    <li></li>
     <li><?php echo $this->Html->link(sprintf(__('Listagem de Pautas',  true)), array('action' => 'listagem_de_pautas'),array('class'=>'link'));?></li>
     <li><?php //echo $this->Html->link(sprintf(__('Pauta de Resultados',  true)), array('action' => 'listagem_de_pauta_resultados'),array('class'=>'link'));?></li>
    <li><?php echo $this->Html->link(sprintf(__('Declaracao',  true)), array('action' => 'declaracao'),array('class'=>'link'));?></li>
    <li><?php echo $this->Html->link(sprintf(__('Certificado',  true)), array('action' => 'certificado'),array('class'=>'link'));?></li>
    <li><?php echo $this->Html->link(sprintf(__('Log Transaccoes',  true)), array('action' => 'certificado'),array('class'=>'link'));?></li>
</ul>