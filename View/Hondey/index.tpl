<div id="main">
	<div id="people-all">
		<img class="people" src="http://wishalist.com/cake/img/people.png">
		<img class="people" src="http://wishalist.com/cake/img/people2.png">
		<img class="people2" src="http://wishalist.com/cake/img/people3.png">
	</div>
	<img id="hondey-top" src="http://wishalist.com/cake/img/Hondey_img.png">
	<div id="subtitle">
		Have a deep conversation.
	</div>
	<div id="subtitle2">
		Welcome to
	</div>
	<a href="{$Html->url('facebookAouth')}"><img id="facebook" src="http://wishalist.com/cake/img/facebook.jpg"></a>
</div>
<footer>
	<img id="footer" src="http://wishalist.com/cake/img/book-top7.jpg">
</footer>
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

</script>