		<!--[if !IE]>start sidebar<![endif]-->
			<div id="sidebar">
				<div class="inner">
					<?php echo $this->element('calendario', array(
    'year' => intval(date('Y')),
    'month' => date('m'),
    'month_link' => '/controller/showmonth/',
    'day_link' => '/controller/showday/'
));
?>

					<?php if(isset($relatorio))echo $this->element($relatorio);?>



					<!--[if !IE]>start quick info<![endif]-->
					<div class="quick_info">
						<div class="quick_info_top">
							<h2><?php __('Relatórios Rápidos')?></h2>
						</div>
						<div class="quick_info_content">
							<?php
							// Aqui incluimos o relatorio de acordo com a seccao em que nos encontramos
							//@TODO Completar esta funcionalidade
							
							
							
							?>
						</div>
						<span class="quick_info_bottom"></span>
					</div>
					<!--[if !IE]>end quick info<![endif]-->




				</div>
			</div>
			<!--[if !IE]>end sidebar<![endif]-->