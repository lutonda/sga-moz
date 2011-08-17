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
 
 <?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Avaliacoes', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Avaliacao - Adicionar');?></h1>
        <div class="breadcrumbs"><?php echo $html->getCrumbs(' > ','Home'); ?></div>
    </div>
    
    <div class="table">


<?php echo $form->create('Avaliacao',array('id'=>'avaliacaoForm'));?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Dados da avalicao</th>
         </tr>
         <tr>
            <?php
                echo $this->Form->input('t0003curso_id',array('label'=>'Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('t0010turma',array('label'=>'Disciplina','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                echo $this->Form->input('t0015tipoavaliacao_id',array('label'=>'Tipo de AvaliaÃƒÂ§ÃƒÂ£o','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	    ?>
        </tr>
        </table>
         <br/>
         <br/>
       <div id="estudantesDivId">
                    <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Disciplinas</th>
        </tr>
        <tr>
            <td>Nome do Aluno</td>
            <td>Nota</td>

        </tr>
<tr><td></td><td class ="full" colspan="4"><?php echo $this->Form->end(__('Gravar', true));?></td></tr>
        </table>
</div>
</div>
    </div>
<?php
    $options = array('url' => 'add/','update' => 'estudantesDivId','indicator'=>'ajax-loader');
    echo $ajax->observeForm('avaliacaoFormId', $options);
?>