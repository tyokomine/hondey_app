<header>
	<a href="http://wishalist.com/cake/hondey/home"><img id="hondey" src="http://wishalist.com/cake/img/Hondey_img.png"></a>
	<img id="person_header" src=https://graph.facebook.com/{$user["member_fb_id"]}/picture?type=square>
	<div id="hello">
		Hi, {$user["member_name"]}!
	</div>
</header>
<div class="section0">
	<div id="myself">
		<a href="#">{$user["member_name"]}</a>
	</div>
	<div id="friend">
		<a id="myself" href="#">Friends</a>
	</div>
	<div id="book">
		<div id="book-box1">
			<img class="product_recommend" id="book-picture" src="http://wishalist.com/cake/img/book.jpg">
			<div class="book-drop-here">
				drop here
			</div>
		</div>
		<form>
			<input class="searchbox1" name="searchbox" placeholder="search" id="amazon_suggest">
		</form>
	</div>
	<div id="arrow">
		<img id="arrow1" src="http://wishalist.com/cake/img/arrow.png">
	</div>
	<div id="whom">
		<div id="whom-box1">
			<img class="person_recommend" id="person-picture" src="http://wishalist.com/cake/img/person.png">
			<div class="person-drop-here">
				drop here
			</div>
		</div>
		<form>
			<input class="searchbox2" name="searchbox" placeholder="search" id="fb_suggest">
		</form>
	</div>
</div>
<div class="section2">
	<div id="favorite-box">
		<img id="favorite" src="http://wishalist.com/cake/img/star.jpg">
		<div id="favorite2">
			fav
		</div>
	</div>
	<div class="item_pic">
		<a href="{$Html->url('bookConversation')}/{$sid}"><img class="product" src="http://ec2.images-amazon.com/images/I/41VPCPBHRNL._SL500_AA300_.jpg"></a>
		<span> {foreach from=$friends item=friend name=namae}
			 <a href="#"><img src =https://graph.facebook.com/{$friend["id"]}/picture?type=square></a>
			  {if $smarty.foreach.namae.iteration > 5}{break}{/if}
			{/foreach}
		</span>
	</div>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41N453KNDRL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ec2.images-amazon.com/images/I/41Pt92sXiPL._SL500_AA300_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41nFie6UXnL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41FCPB7A3WL._SL500_SL135_.jpg"></a>
	
	<!-- <div class="item_pic">
		<a href="#"><img class="product" src="http://ec2.images-amazon.com/images/I/41Pt92sXiPL._SL500_AA300_.jpg"></a>
		<span> {foreach from=$friends item=friend name=namae}
			 <a href="#"><img src =https://graph.facebook.com/{$friend["id"]}/picture?type=square></a>
			  {if $smarty.foreach.namae.iteration > 5}{break}{/if}
			{/foreach}
		</span>
	</div>
	<div class="item_pic">
		<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41nFie6UXnL._SL500_SL135_.jpg"></a>
		<span> {foreach from=$friends item=friend name=namae}
			<a href="#"><img src =https://graph.facebook.com/{$friend["id"]}/picture?type=square></a>
			{if $smarty.foreach.namae.iteration > 5}{break}{/if}
			{/foreach}
		</span>
	</div>
	<div class="item_pic">
		<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41FCPB7A3WL._SL500_SL135_.jpg"></a>
		<span> {foreach from=$friends item=friend name=namae} <a href="#"><img src =https://graph.facebook.com/{$friend["id"]}/picture?type=square></a> {if $smarty.foreach.namae.iteration > 5}{break}{/if}
			{/foreach} </span>
	</div>
	<div class="item_pic">
		<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41N453KNDRL._SL500_SL135_.jpg"></a>
		<span> {foreach from=$friends item=friend name=namae} <a href="#"><img src =https://graph.facebook.com/{$friend["id"]}/picture?type=square></a> {if $smarty.foreach.namae.iteration > 5}{break}{/if}
			{/foreach} </span>
	</div> -->
	</div>
<div class="section3">
	<div id="conversation-box">
		<img id="conversation" src="http://wishalist.com/cake/img/balloon.png">
		<div id="conversation2">
			talks
		</div>
	</div>
	<div class="item_pic">
		<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41VprtIHVfL._SL500_SL135_.jpg"></a> 
		<span>
			{foreach from=$friends item=friend name=namae}
			 <a href="#"><img src =https://graph.facebook.com/{$friend["id"]}/picture?type=square></a>
			{if $smarty.foreach.namae.iteration > 5}{break}{/if}
			{/foreach}
		</span>
	</div>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41CK144784L._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/51ajKFc0AWL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/51f3OHIbX-L._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/311DUyWJtFL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41sP%2BYcBX%2BL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41%2Bu20pYeVL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41NEov1YACL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/51dbHwNcUdL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/31x5r5hkA-L._SL500_SL135_.jpg"></a>
</div>
<div class="section4">
	<div>
		<img id="friend_list" src="http://wishalist.com/cake/img/friends.png">
		<div id="friend1">
			friends
		</div>
	</div>
	{foreach from=$friends item=friend name=namae}
	<div class="person_pic">
		<a href="#"><img class="person" src =https://graph.facebook.com/{$friend["id"]}/picture?type=large></a>
		<span> <a href="#"> 
			{$friend["name"]}<br>
			see book </a>
		</span>
	</div>
	{if $smarty.foreach.namae.iteration > 17}{break}{/if}
	{/foreach}
</div>
<div id='glayLayer'></div>
<div id='overLayer'>
	<div id="ShowContents"></div>
</div>
<script type="text/javascript">
	var product_flag=false;
	var person_flag=false;
	
	//サジェストサーチ用のscript
	$('#amazon_suggest').ajaxSuggestAmazon('http://wishalist.com/cake/hondey/amazonSuggest/');
	$('#fb_suggest').ajaxSuggest('http://wishalist.com/cake/hondey/ajaxSuggest/{$sid}');
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
			console.log("aaaaaaa");
			this.src = ui.draggable.context.src;
			product_flag=true;
			show();
		}
	});
	$('.person_recommend').droppable({
		accept : '.person',
		tolerance : "touch",
		drop : function(e, ui) {
			//alert('ドロップされました');
			this.src = ui.draggable.context.src;
			this.style.width='125px';
			this.style.height='125px';	
			this.style.marginLeft='3px';
			this.style.marginTop='3px';
			person_flag=true;
			show();
		}
	}); 
	{/literal}
</script>
