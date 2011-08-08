
            <?php
                $grupo = $this->Session->read('Auth.User.group_id');
                $username = $this->Session ->read('Auth.User.username');
                $userid = $this->Session->read('Auth.User.id')
            ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
          echo $this->Html->script('funcoesjs');
                echo $this->Html->script('table');
                echo $this->Html->css('messages');
                echo $this->Html->css('sistema');

                echo $this->Html->script(array('prototype','scriptaculous.js?load=effects','modalbox'));
   				//echo $this->Html->script(array('jquery-1.6.2.min','jquery-ui-1.8.14.custom.min.js','date.js','jquery.datePicker.js'));
   				echo $this->Html->css(array('datePicker.css','modalbox'));

                    if($grupo==null){}
                    else{
            
		echo $this->Html->css('admin');
}


		echo $scripts_for_layout;
	?>
</head>
    <?php if(!isset($current_section))$current_section='homepage';?>
<body oncontextmenu="return false;" onLoad="(getCurrentPage('<?php echo $current_section;?>'))">
	<div id="wrapper">
                    <?php if($grupo==null){}
                    else{
            ?>
<?php echo $this->element('header');?>
        <div id="content">
            <!--[if !IE]>start page<![endif]-->
            			<div id="page">
				<div class="inner">
		<?php } ?>

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
	
                    <?php if($grupo==null){}
                    else{
            ?>

				</div>
			</div>
			<!--[if !IE]>end page<![endif]-->

<?php echo $this->element('sidebar');?>

		</div>
		<!--[if !IE]>end content<![endif]-->

	</div>
	<!--[if !IE]>end wrapper<![endif]-->
<?php echo $this->element('footer');?>

<?php } ?>

</body>
</html>