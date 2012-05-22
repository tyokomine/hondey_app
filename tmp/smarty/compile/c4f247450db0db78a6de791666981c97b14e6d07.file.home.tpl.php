<?php /* Smarty version Smarty-3.1.8, created on 2012-05-08 20:58:42
         compiled from "/var/www/html/cake/app/View/Hondey/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14530395044fa46583049528-37406937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4f247450db0db78a6de791666981c97b14e6d07' => 
    array (
      0 => '/var/www/html/cake/app/View/Hondey/home.tpl',
      1 => 1336477970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14530395044fa46583049528-37406937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa465830b71c2_83433962',
  'variables' => 
  array (
    'user' => 0,
    'friends' => 0,
    'friend' => 0,
    'sid' => 0,
    'Html' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa465830b71c2_83433962')) {function content_4fa465830b71c2_83433962($_smarty_tpl) {?><header>
	<img id="person_header" src=https://graph.facebook.com/<?php echo $_smarty_tpl->tpl_vars['user']->value["member_fb_id"];?>
/picture?type=square>
	<div id="hello">
		Hi, <?php echo $_smarty_tpl->tpl_vars['user']->value["member_name"];?>
!
	</div>
</header>
<div class="section1">
	<div class="book">
		<div class="order">
			1: Choose book!
		</div>
		<img class="product_recommend" src="http://ec2.images-amazon.com/images/I/51nTbZnShlL._SL500_AA300_.jpg">
		<form>
			<input class="searchbox1" name="searchbox" placeholder="seach" id="amazon_suggest">
		</form>
	</div>
	<div class="whom">
		<div class="order">
			2: To who?
		</div>
		<img class="person_recommend" src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/275754_830478655_2207282_n.jpg">
		<form>
			<input class="searchbox2" name="searchbox" placeholder="seach" id="fb_suggest">
		</form>
	</div>
</div>
<div class="section2">
	<div class="item_pic">
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41tFzlyY%2BgL._SL500_SL135_.jpg"></a> 
	<span>
		<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['namae']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value){
$_smarty_tpl->tpl_vars['friend']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['namae']['iteration']++;
?> <a href="#"><img src =https://graph.facebook.com/<?php echo $_smarty_tpl->tpl_vars['friend']->value["id"];?>
/picture	></a>
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['namae']['iteration']>5){?><?php break 1?><?php }?>
	<?php } ?>
	</span>
	</div>
	<a href="#"><img class="product" src="http://ec2.images-amazon.com/images/I/41Pt92sXiPL._SL500_AA300_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41nFie6UXnL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41FCPB7A3WL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41N453KNDRL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41VprtIHVfL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41CK144784L._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/51ajKFc0AWL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/51f3OHIbX-L._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/311DUyWJtFL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41sP%2BYcBX%2BL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41%2Bu20pYeVL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41NEov1YACL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/51dbHwNcUdL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/31x5r5hkA-L._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41bYJbCpdEL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/511P3H2VDAL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ec2.images-amazon.com/images/I/51Y3to-8q0L._BO2,204,203,200_PIsitb-sticker-arrow-click,TopRight,35,-76_AA300_SH20_OU09_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41F789WNPTL._SL500_SL135_.jpg"></a>
</div>
<div class="section3">
	<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['namae']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value){
$_smarty_tpl->tpl_vars['friend']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['namae']['iteration']++;
?>
	<div class="person_pic">
		<a href="#"><img class="person" src =https://graph.facebook.com/<?php echo $_smarty_tpl->tpl_vars['friend']->value["id"];?>
/picture></a>
		<span> <a href="#"> 
			<?php echo $_smarty_tpl->tpl_vars['friend']->value["name"];?>
<br>
			see book </a>
		</span>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['namae']['iteration']>10){?><?php break 1?><?php }?>
	</div>
	<?php } ?>
</div>
<script type="text/javascript">
	$('#amazon_suggest').ajaxSuggestAmazon('http://wishalist.com/cake/hondey/amazonSuggest/')
	console.log("ai");

	// $('#fb_suggest').ajaxSuggest('<?php echo $_smarty_tpl->tpl_vars['Html']->value->url('ajaxSuggest'/$_smarty_tpl->tpl_vars['sid']->value);?>
')
	$('#fb_suggest').ajaxSuggest('http://wishalist.com/cake/hondey/ajaxSuggest/<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
') 
	
	$('.product').draggable({
		revert : true,
		//containment : ".book"
	});
	$('.person').draggable({
		revert : true,
		//containment : ".book"
	});
	$('.product_recommend').droppable({
		accept : '.product',
		tolerance : "intersect",
		drop : function(e, ui) {
			this.src = ui.draggable.context.src;
		}
	});
	$('.person_recommend').droppable({
		accept : '.person',
		tolerance : "intersect",
		drop : function(e, ui) {
			//alert('ドロップされました');
			this.src = ui.draggable.context.src;
		}
	}); 
	
</script><?php }} ?>