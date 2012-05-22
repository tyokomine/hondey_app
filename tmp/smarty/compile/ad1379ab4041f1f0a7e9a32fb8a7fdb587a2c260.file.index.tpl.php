<?php /* Smarty version Smarty-3.1.8, created on 2012-05-08 21:17:34
         compiled from "/var/www/html/cake/app/View/Hondey/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5124224424fa3a6676fd9a0-31980941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad1379ab4041f1f0a7e9a32fb8a7fdb587a2c260' => 
    array (
      0 => '/var/www/html/cake/app/View/Hondey/index.tpl',
      1 => 1336459629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5124224424fa3a6676fd9a0-31980941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa3a667787d01_79704456',
  'variables' => 
  array (
    'Html' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3a667787d01_79704456')) {function content_4fa3a667787d01_79704456($_smarty_tpl) {?><div class="container">
	<div class="hukidashi">
		<p id="nakami">本でいいよね</p>
	</div>
	<a id="makeawish" href="<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('#');?>
"><?php echo $_smarty_tpl->tpl_vars['Html']->value->image('hondey.png');?>
</a>
	<h2>sign up for Hondey</h2>
	<a id="facebook" href="<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('facebookAouth');?>
"><?php echo $_smarty_tpl->tpl_vars['Html']->value->image('facebook.jpg');?>
</a>
</div>
<script type="text/javascript">
	/*ーーーーーーーーーーーーーーー*/
	var Move = 20;
	//ふきだしの移動量
	var EndP = -20;
	//ふしだしの初期y座標位置
	var Repeat = 10;
	//繰り返し回数
	var speed = 400;
	//アニメーションの速度/ms
	/*ーーーーーーーーーーーーーーー*/

	$(".container").hover(function() {
		console.log("aaa");
		for(var i = 0; i < Repeat; i++) {
			$(this).find(".hukidashi").show().animate({
				top : "+=" + Move + "px"
			}, speed);
			$(this).find(".hukidashi").animate({
				top : "-=" + Move + "px"
			}, speed);
		}
	}, function() {
		$(this).find(".hukidashi").css({
			display : "none",
			top : "" + EndP + "px"
		});

	});

</script><?php }} ?>