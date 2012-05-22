<?php /* Smarty version Smarty-3.1.8, created on 2012-05-03 20:49:19
         compiled from "/var/www/html/cake/app/View/Wish/facebook_aouth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20478597344f99fc011d8431-13206981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0829b43b2db60c47e4620aad79bc3021f0e74974' => 
    array (
      0 => '/var/www/html/cake/app/View/Wish/facebook_aouth.tpl',
      1 => 1336046129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20478597344f99fc011d8431-13206981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f99fc0127aff4_91970861',
  'variables' => 
  array (
    'Html' => 0,
    'user_profile' => 0,
    'user_name' => 0,
    'friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f99fc0127aff4_91970861')) {function content_4f99fc0127aff4_91970861($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('amazonList');?>
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