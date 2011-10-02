<?php
/**
 * Paging Element
 *
 */
?>
<div class="paging">
	<?php if ($this->Paginator->hasPrev()): ?>
		<?php echo $this->Paginator->prev('<< '.__d('api_generator', 'previous', true), array(), null, array('class'=>'disabled'));?> | 
	<?php endif; ?>
	
	<?php if ($this->Paginator->hasPage(null, 2)): ?>
 		<?php echo $this->Paginator->numbers(); ?>
	<?php endif; ?>

	<?php if ($this->Paginator->hasNext()): ?>
		<?php echo $this->Paginator->next(__d('api_generator', 'next', true).' >>', array(), null, array('class'=>'disabled'));?>
	<?php endif;?>
</div>