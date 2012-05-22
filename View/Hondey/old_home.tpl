<header>
	<a href="top_page.html">{$Html->image('Hondey_img.png')}</a>
	<img id="person_header" src=https://graph.facebook.com/{$user["member_fb_id"]}/picture?type=square>
	<div id="hello">
		Hi, {$user["member_name"]}!
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
			{foreach from=$friends item=friend name=namae}
			 <a href="#"><img src =https://graph.facebook.com/{$friend["id"]}/picture?type=square></a>
			{if $smarty.foreach.namae.iteration > 5}{break}{/if}
			{/foreach}
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
	{foreach from=$friends item=friend name=namae}
	<div class="person_pic">
		<a href="#"><img class="person" src =https://graph.facebook.com/{$friend["id"]}/picture?type=large></a>
		<span> <a href="#"> 
			{$friend["name"]}<br>
			see book </a>
		</span>
	</div>
	{if $smarty.foreach.namae.iteration > 10}{break}{/if}
	{/foreach}
</div>
<script type="text/javascript">
	var product_flag=false;
	var person_flag=false;
	
	//サジェストサーチ用のscript
	$('#amazon_suggest').ajaxSuggestAmazon('http://wishalist.com/cake/hondey/amazonSuggest/')
	$('#fb_suggest').ajaxSuggest('http://wishalist.com/cake/hondey/ajaxSuggest/{$sid}') 
	//ドラッグアンドドロップ関連のscript
	{literal}
	$('.product').draggable({
		revert : true
	});
	$('.person').draggable({
		revert : true
	});
	$('.product_recommend').droppable({
		accept : '.product',
		tolerance : "intersect",
		drop : function(e, ui) {
			this.src = ui.draggable.context.src;
			product_flag=true;
			show();
		}
	});
	$('.person_recommend').droppable({
		accept : '.person',
		tolerance : "intersect",
		drop : function(e, ui) {
			//alert('ドロップされました');
			this.src = ui.draggable.context.src;
			person_flag=true;
			$("#glayLayer").show();
			show();
		}
	}); 
	{/literal}
</script>