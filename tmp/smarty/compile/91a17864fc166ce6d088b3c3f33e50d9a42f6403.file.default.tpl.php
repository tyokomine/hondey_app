<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 23:10:09
         compiled from "/var/www/html/cake/app/View/Layouts/Hondey/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10028715704fa46539494512-54611299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91a17864fc166ce6d088b3c3f33e50d9a42f6403' => 
    array (
      0 => '/var/www/html/cake/app/View/Layouts/Hondey/default.tpl',
      1 => 1336399768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10028715704fa46539494512-54611299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa46539552e06_36881498',
  'variables' => 
  array (
    'Html' => 0,
    'content_for_layout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa46539552e06_36881498')) {function content_4fa46539552e06_36881498($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Hondey</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<?php echo $_smarty_tpl->tpl_vars['Html']->value->css('bootstrap');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->css('Login4');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->css('jquery.ajaxSuggest');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->css('suggest_book');?>


		<?php echo $_smarty_tpl->tpl_vars['Html']->value->script('jquery');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->script('jquery.ajaxSuggest.fb');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->script('jquery.ajaxSuggest.am');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->script('hover');?>

		
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> <!--
		<script type="text/javascript">

		jQuery(document).ready(function($){
		$('#amazon_suggest').ajaxSuggestAmazon('<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('amazonSuggest');?>
')
		console.log("ai");
		});
		jQuery(document).ready(function($){
		$('#fb_suggest').ajaxSuggest('<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('ajaxSuggest');?>
')
		});

		</script> -->
		<!-- 		<link href="/css/bootstrap.css" rel="stylesheet">
		<link href="/css/Login4.css" rel="stylesheet">
		<style type="text/css">
		/* Override some defaults */
		</style> -->
	</head>
	<body>
		<?php echo $_smarty_tpl->tpl_vars['content_for_layout']->value;?>

	</body>
</html>
<?php }} ?>