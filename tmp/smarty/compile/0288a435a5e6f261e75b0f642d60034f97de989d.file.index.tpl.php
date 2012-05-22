<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 08:32:32
         compiled from "/var/www/html/cake/app/View/Wish/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9900862764f994c041b5377-90217703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0288a435a5e6f261e75b0f642d60034f97de989d' => 
    array (
      0 => '/var/www/html/cake/app/View/Wish/index.tpl',
      1 => 1336144374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9900862764f994c041b5377-90217703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f994c042612e5_01302307',
  'variables' => 
  array (
    'Html' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f994c042612e5_01302307')) {function content_4f994c042612e5_01302307($_smarty_tpl) {?><a id="makeawish" href="<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('#');?>
"><?php echo $_smarty_tpl->tpl_vars['Html']->value->image('makeawish33.jpg');?>
</a>
	 <h2>sign up for makeAwish</h2> 
<a id="facebook" href="<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('facebookAouth');?>
"><?php echo $_smarty_tpl->tpl_vars['Html']->value->image('facebook.jpg');?>
</a>
<div class="container">
	<div class="content">
		<div class="row">
			<div class="login-form">
				<h2>Welcome back</h2>
				<form action="">
					<fieldset>
						<div class="clearfix">
							<input type="text" placeholder="Username" id = "hoge">
						</div>
						<div class="clearfix">
							<input type="password" placeholder="Password">
						</div>
						<input id="login" type="submit" value="Login">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>