<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
<?php echo $title_for_layout;?>
</title>
<?php echo $this->Html->charset();?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>js/ext-3.1.1/resources/css/ext-all.css" />

<script type="text/javascript" src="<?php echo $this->webroot;?>js/ext-3.1.1/adapter/ext/ext-base-debug.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>/app/webroot/js/ext-3.1.1/ext-all-debug.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/ext/Ext.ux.grid.RowActions.js"></script>    
<script type="text/javascript" src="<?php echo $this->webroot;?>js/ext/xcheckbox.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/ext/DDView.js"></script> 
<script type="text/javascript" src="<?php echo $this->webroot;?>js/ext/Multiselect.js"></script>  
<script type="text/javascript" src="<?php echo $this->webroot;?>js/ext/ext_ux_cakepanel.js"></script>    
<style>
	.icon-delete {
		background-image:url(<?php echo $this->webroot ?>img/delete.png) !important;
		width: 16px;
	}
	.icon-edit {
		background-image:url(<?php echo $this->webroot ?>img/file_edit.png) !important;
		width: 16px;
	}	
	.icon-add {
		background-image:url(<?php echo $this->webroot ?>img/add.png) !important;
		
	}	

	.ux-grid3-row-action-cell .x-grid3-cell-inner {
	    padding: 1px 0 0 0;
	}
	.ux-grid3-row-action-cell .x-grid3-cell-inner div {
	    background-repeat:no-repeat;
	    width:16px;
	    height:16px;
	    cursor:pointer;
	}
	.ux-row-action-item {
		background-repeat:no-repeat;
		cursor:pointer;
		float:left;
		height:16px;
		margin:0 0 0 0;
		min-width:16px;
		overflow:hidden;
	}
	.ux-mselect {
		background:white none repeat scroll 0 0;
		overflow:auto;
		position:relative;
	}
	.ux-mselect-selected {
		background:#DFE8F6 none repeat scroll 0 0;
		border:1px dotted #A3BAE9 !important;
		cursor:pointer;
	}
	.ux-mselect-item {
		-x-system-font:none;
		border:1px solid #FFFFFF;
		cursor:pointer;
		font-family:tahoma,arial,helvetica,sans-serif;
		font-size:12px;
		font-size-adjust:none;
		font-stretch:normal;
		font-style:normal;
		font-variant:normal;
		font-weight:normal;
		line-height:normal;
		padding:2px;
		white-space:nowrap;
	}
	.ux-mselect-item {
		-x-system-font:none;
		border:1px solid #FFFFFF;
		cursor:pointer;
		font-family:tahoma,arial,helvetica,sans-serif;
		font-size:12px;
		font-size-adjust:none;
		font-stretch:normal;
		font-style:normal;
		font-variant:normal;
		font-weight:normal;
		line-height:normal;
		padding:2px;
		white-space:nowrap;
	}
	.x-unselectable, .x-unselectable * {
		-moz-user-select:none;
	}
</style>
</head>
<body><?php echo $content_for_layout;?></body>
</html>
