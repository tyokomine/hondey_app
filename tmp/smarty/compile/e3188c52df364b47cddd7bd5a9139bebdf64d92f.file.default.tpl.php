<?php /* Smarty version Smarty-3.1.8, created on 2012-05-06 02:17:50
         compiled from "/var/www/html/cake/app/View/Layouts/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20408854634f990f794ff706-37866097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3188c52df364b47cddd7bd5a9139bebdf64d92f' => 
    array (
      0 => '/var/www/html/cake/app/View/Layouts/default.tpl',
      1 => 1336234180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20408854634f990f794ff706-37866097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f990f79508055_76063512',
  'variables' => 
  array (
    'Html' => 0,
    'content_for_layout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f990f79508055_76063512')) {function content_4f990f79508055_76063512($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>make A wish｜Login</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<?php echo $_smarty_tpl->tpl_vars['Html']->value->css('bootstrap');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->css('Login4');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->css('jquery.ajaxSuggest');?>


		<?php echo $_smarty_tpl->tpl_vars['Html']->value->script('jquery');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->script('jquery.ajaxSuggest.fb');?>

		<?php echo $_smarty_tpl->tpl_vars['Html']->value->script('jquery.ajaxSuggest.am');?>
 <!-- 		<link href="/css/bootstrap.css" rel="stylesheet">
		<link href="/css/Login4.css" rel="stylesheet">
		<style type="text/css">
		/* Override some defaults */
		</style> -->
	</head>
	<body>
		<?php echo $_smarty_tpl->tpl_vars['content_for_layout']->value;?>

		<script type="text/javascript">
			$('#amazon_suggest').ajaxSuggestAmazon('<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('amazonSuggest');?>
')
			console.log("ai");
			$('#fb_suggest').ajaxSuggest('<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('ajaxSuggest');?>
')
		</script>
	</body>
</html>
<?php }} ?>