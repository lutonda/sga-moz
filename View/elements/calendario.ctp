<?php

	$first_of_month = mktime(0, 0, 0, $month, 1, $year);
	$num_days = cal_days_in_month(0, $month, $year);
	$offset = date('w', $first_of_month);
	$rows = 1;
?>
<?php
/* Define o local para Holandês(usar pt_BR para o Português(Brasil) ) */
//setlocale (LC_ALL, 'ptb');

/* Mostra: vrijdag 22 december 1978 */


?>
			<!--[if !IE]>start calendar<![endif]-->
					<div class="calendar">
						<div class="calendar_top">
							<span> 
								<?php echo iconv('ISO-8859-2','UTF-8',strftime ("%A, %d  de %B de %Y", mktime()));?> </span>
						</div>
						<div class="calendar_middle">
							<div class="calendar_data">



							<!--[if !IE]>start calendar data<![endif]-->

										<div class="cmonth">
										<div class="ctrl">
											<table cellspacing="0" cellpadding="0">
												<tr>
													<td align="left" style="width: 15px;"><a class="calendar_prev" href="#">&laquo; </a></td>
													<td align="center"><span><strong><?php echo iconv('ISO-8859-2','UTF-8',strftime ("%B de %Y", $first_of_month)); ?> </strong></span></td>
													<td align="right" style="width: 15px;"><a class="calendar_next" href="#">&raquo;</a></td>
												</tr>

											</table>
										</div>


										</div>



										<div class="cont">
											<ul class="chead">
												<li><span>sun</span></li>

												<li><span>mon</span></li>
												<li><span>tue</span></li>
												<li><span>wed</span></li>
												<li><span>thu</span></li>
												<li><span>fri</span></li>
												<li><span>sat</span></li>

											</ul>

												
											
											<ul class="cdays">
													<?php for( $i = 1; $i < $offset + 1; ++$i ): ?>
														<li><span></span></li>
													<?php endfor; ?>
												<?php for( $day = 1; $day <= $num_days; ++$day ): ?>
												
												<li><a href="#"><?php echo $day?></a></li>
												<?php endfor;?>
													<?php for( $day; ($day + $offset) <= $rows * 7; ++$day ): ?>
														<li><span></span></li>
													<?php endfor; ?>
											</ul>

										</div>




							<!--[if !IE]>end calendar data<![endif]-->





							</div>
						</div>
						<div class="calendar_bottom"></div>
						<!--[if !IE]>start section content footer<![endif]-->
						<div class="section_content_footer">
							<ul>
								<li><a href="#" class="plus">Add new event</a></li>
								<li><a href="#" class="next">Next Event</a></li>
							</ul>
							<span class="scf"></span>
						</div>
						<!--[if !IE]>end section content footer<![endif]-->
					</div>
					<!--[if !IE]>end calendar<![endif]-->
