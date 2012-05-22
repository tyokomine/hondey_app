<header>
	<a href="http://wishalist.com/cake/hondey/home"><img id="hondey" src="http://wishalist.com/cake/img/Hondey_img.png"></a>
	<img id="person_header" src=https://graph.facebook.com/{$user["member_fb_id"]}/picture?type=square>
	<div id="hello">
		Hi, {$user["member_name"]}!
	</div>
</header>
<div class="section1">
	<img id="person" src=https://graph.facebook.com/{$user["member_fb_id"]}/picture?type=large>
</div>
<div class="section2">
	<div class="box">
		<img class="x-button" src="http://wishalist.com/cake/img/x-button.png">
		<div class="book-box">
			<img class="book1" src="http://wishalist.com/cake/img/book.jpg">
			<div class="drop-here">
				drop here
			</div>
		</div>
	</div>
	<div class="box">
		<img class="x-button" src="http://wishalist.com/cake/img/x-button.png">
		<div class="book-box">
			<img class="book2" src="http://wishalist.com/cake/img/book.jpg">
			<div class="drop-here">
				drop here
			</div>
		</div>
	</div>
	<div class="box">
		<img class="x-button" src="http://wishalist.com/cake/img/x-button.png">
		<div class="book-box">
			<img class="book3" src="http://wishalist.com/cake/img/book.jpg">
			<div class="drop-here">
				drop here
			</div>
		</div>
	</div>
	<div class="box">
		<img class="x-button" src="http://wishalist.com/cake/img/x-button.png">
		<div class="book-box">
			<img class="book4" src="http://wishalist.com/cake/img/book.jpg">
			<div class="drop-here">
				drop here
			</div>
		</div>
	</div>
	<div class="box">
		<img class="x-button" src="http://wishalist.com/cake/img/x-button.png">
		<div class="book-box">
			<img class="book5" src="http://wishalist.com/cake/img/book.jpg">
			<div class="drop-here">
				drop here
			</div>
		</div>
	</div>
	<form id="finish-button" action="{$Html->url('home')}/{$sid}">
		<input class="home-button" type="submit" value="Finish">
	</form>
</div>
<div class="section3">
	<form id="search_form">
		<input result~"5" class="searchbox1" name="searchbox" placeholder="search" id="amazon_suggest">
	</form>
	<a href="#"><img class="product" src="http://ec2.images-amazon.com/images/I/41VPCPBHRNL._SL500_AA300_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41CK144784L._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/51ajKFc0AWL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/51f3OHIbX-L._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/311DUyWJtFL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41sP%2BYcBX%2BL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41%2Bu20pYeVL._SL500_SL135_.jpg"></a>
	<a href="#"><img class="product" src="http://ecx.images-amazon.com/images/I/41NEov1YACL._SL500_SL135_.jpg"></a>
</div>
<div id='glayLayer'></div>
<div id="section-x">
	はじめにお気に入りの本を5冊登録します。検索した後、本をドラッグして、ボックスにドロップしてください。
</div>
<!-- <img id="hondey-top" src="http://wishalist.com/cake/img/Hondey_img.png">
<div id="subtitle">
	Let's start!!
</div> -->
<script type="text/javascript">
	$("#glayLayer").show();
	$("#section-x").fadeIn(400).css({
		marginTop : "-" + $("#section-x").height() / 2 + "px",
		marginLeft : "-" + $("#section-x").width() / 2 + "px"
	});
	var product_flag = false;
	var person_flag = false;

	//サジェストサーチ用のscript
	$('#amazon_suggest').ajaxSuggestAmazon('http://wishalist.com/cake/hondey/amazonSuggest/');
	//ドラッグアンドドロップ関連のscript
	{literal}
	$('.product').draggable({
		revert : true
	});
	$('.book1').droppable({
		accept : '.product',
		tolerance : "intersect",
		drop : function(e, ui) {
			console.log("aaaaaaa");
			this.src = ui.draggable.context.src;
			this.style.width = '125px';
			this.style.height = '160px';
		}
	});
	$('.book2').droppable({
		accept : '.product',
		tolerance : "intersect",
		drop : function(e, ui) {
			console.log("aaaaaaa");
			this.src = ui.draggable.context.src;
			this.style.width = '125px';
			this.style.height = '160px';
		}
	});
	$('.book3').droppable({
		accept : '.product',
		tolerance : "intersect",
		drop : function(e, ui) {
			console.log("aaaaaaa");
			this.src = ui.draggable.context.src;
			this.style.width = '125px';
			this.style.height = '160px';
		}
	});
	$('.book4').droppable({
		accept : '.product',
		tolerance : "intersect",
		drop : function(e, ui) {
			console.log("aaaaaaa");
			this.src = ui.draggable.context.src;
			this.style.width = '125px';
			this.style.height = '160px';
		}
	});
	$('.book5').droppable({
		accept : '.product',
		tolerance : "intersect",
		drop : function(e, ui) {
			this.src = ui.draggable.context.src;
			this.style.width = '125px';
			this.style.height = '160px';
		}
	}); 
	{/literal}
</script>
