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
 
<div class="actions" id="left-column">
	<h3><?php __('Detalhes Adicionais'); ?></h3>
        <br/>
	<?php  echo $this->Html->link(sprintf(__('Administração >>', true)), array('controller' =>'t0002funcionarios'),array('class'=>'link2')); ?>
	<?php  echo $this->Html->link(sprintf(__('Graus Academicos', true)), array('controller' => 'Tg0001grauacademicos'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Países', true)), array('controller' => 'tg0002paises'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Províncias', true)), array('controller' => 'tg0003provincias'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Cidades', true)), array('controller' => 'tg0004cidades'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Cargos', true)), array('controller' => 'tg0005cargos'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Departamentos', true)), array('controller' => 'tg0006departamentos'),array('class'=>'linkselected')); ?>
	<?php  echo $this->Html->link(sprintf(__('Tipos de Curso', true)), array('controller' => 'tg0007tipocursos'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Grupos Disciplinares', true)), array('controller' => 'tg0008grupodisciplinars'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Docs de Identificação', true)), array('controller' => 'tg0009documentos'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Áreas de Trabalho', true)), array('controller' => 'tg0010areatrabalhos'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Turnos', true)), array('controller' => 'tg0012turnos'),array('class'=>'link')); ?>
	<?php  echo $this->Html->link(sprintf(__('Escolas', true)), array('controller' => 'tg0016escolas'),array('class'=>'link')); ?>
        <?php  echo $this->Html->link(sprintf(__('Gêneros', true)), array('controller' => 'tg0019generos'),array('class'=>'link')); ?>

</div>