<?php /* Smarty version Smarty-3.1.8, created on 2012-04-26 21:55:01
         compiled from "/var/www/html/cake/app/View/Test/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7860318674f990f79310eb3-80954992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '872094ca4798861ee1629d922fe50ad34acd08a0' => 
    array (
      0 => '/var/www/html/cake/app/View/Test/index.tpl',
      1 => 1335444893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7860318674f990f79310eb3-80954992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f990f793c8178_66693643',
  'variables' => 
  array (
    'Html' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f990f793c8178_66693643')) {function content_4f990f793c8178_66693643($_smarty_tpl) {?><a id="makeawish" href="#">
 <?php echo $_smarty_tpl->tpl_vars['Html']->value->image('MAKEAWISH.png');?>
 <!-- 	 <img id="site_logo" src="/img/MAKEAWISH.png"  height="50px" width="270px"/></a> -->
<div class="container">
	<div class="content">
		<div class="row">
			<div class="login-form">
				<h2>Login</h2>
				<form action="">
					<fieldset>
						<div class="clearfix">
							<input type="text" placeholder="Username">
						</div>
						<div class="clearfix">
							<input type="password" placeholder="Password">
						</div>
						<button class="btn primary" type="submit">
							Sign in
						</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<?php }} ?>