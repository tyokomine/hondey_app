<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 10:55:39
         compiled from "/var/www/html/cake/app/View/Hondey/facebook_aouth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12527649124fa4889b5c2ae8-62450379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b67aee769b567e926209b0b4c5339773e7913507' => 
    array (
      0 => '/var/www/html/cake/app/View/Hondey/facebook_aouth.tpl',
      1 => 1336046129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12527649124fa4889b5c2ae8-62450379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Html' => 0,
    'user_profile' => 0,
    'user_name' => 0,
    'friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa4889b65f5c8_17391843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa4889b65f5c8_17391843')) {function content_4fa4889b65f5c8_17391843($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('amazonList');?>
">amazon</a>
<?php echo $_smarty_tpl->tpl_vars['user_profile']->value["name"];?>
 
<img src =https://graph.facebook.com/<?php echo $_smarty_tpl->tpl_vars['user_profile']->value["id"];?>
/picture?type=square>
<?php echo $_smarty_tpl->tpl_vars['user_name']->value["member_name"];?>
<br>
<br>
Facebookのサジェストサーチ
<form action="">
	<input type="text" placeholder="Username" id = "fb_suggest">
</form>
amazonのサジェストサーチ
<form action="">
	<input type="text" placeholder="Username" id = "amazon_suggest">
</form>
<!-- <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value){
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['friend']->value["name"];?>

<img src =https://graph.facebook.com/<?php echo $_smarty_tpl->tpl_vars['friend']->value["id"];?>
/picture?type=square>
<?php } ?>-->
<?php }} ?>