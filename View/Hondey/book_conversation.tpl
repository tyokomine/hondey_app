<header>
	<a href="http://wishalist.com/cake/hondey/home"><img id="hondey" src="http://wishalist.com/cake/img/Hondey_img.png"></a>
	<img id="person_header" src=https://graph.facebook.com/{$user["member_fb_id"]}/picture?type=square>
	<div id="hello">
		Hi, {$user["member_name"]}!
	</div>
</header>
<div class="section0">
	<div class="book">
		<img class="product_recommend" src="http://ec2.images-amazon.com/images/I/41VPCPBHRNL._SL500_AA300_.jpg">
	</div>
	<div class="book-info">
		<p id="book-title">
			フロー体験-喜びの現象学
		</p>
		<p class="book-info2">
			著者: M. チクセントミハイ
		</p>
		<p class="book-info2">
			発売日: 1996/08
		</p>
		<p class="book-info2">
			世界思想社
		</p>
		<p class="book-info2">
			363ページ
		</p>
		<img id="amazon" src="http://wishalist.com/cake/img/amazon.gif">
	</div>
</div>
<div class="section1">
	<span id="friend-conversation">会話している友だち</span>
	<a href="#"><img class="person-small" src=https://graph.facebook.com/{$user["member_fb_id"]}/picture?type=square></a>
	<a href="#"><img class="person-small" src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/41528_563648355_812517173_n.jpg"></a>
	<a href="#"><img class="person-small" src="http://profile.ak.fbcdn.net/hprofile-ak-ash2/371720_100000086823748_253983685_n.jpg"></a>
</div>
<div class="section2">
	<div class="balloon">
		<div class="person_box">
			<a href="#"><img class="person" src="https://graph.facebook.com/{$user["member_fb_id"]}/picture?type=square"></a>
			<div class="name">
				{$user["member_name"]}
			</div>
		</div>
		<div class="balloon-body">
			<div class="baloon-triangle1"></div>
			知り合いの人にこの本、すすめられたよ！どんな本ー？読んだほうがいい？笑
		</div>
	</div>
	<div class="balloon">
		<div class="person_box">
			<a href="#"><img class="person" src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/41528_563648355_812517173_n.jpg"></a>
			<div class="name">
				Taku Miyao
			</div>
		</div>
		<div class="balloon-body">
			<div class="baloon-triangle1"></div>
			フロー体験についてのブログあるから貼っとくねー。<a href="http://blogs.itmedia.co.jp/yasuyasu1976/2011/11/post-66a9.html">ここから</a>いけるよー。とりあえずこれ読んでみたら？
		</div>
	</div>
	<div class="balloon">
		<div class="person_box">
			<a href="#"><img class="person" src="http://profile.ak.fbcdn.net/hprofile-ak-ash2/371720_100000086823748_253983685_n.jpg"></a>
			<div class="name">
				Mai Miura
			</div>
		</div>
		<div class="balloon-body">
			<div class="baloon-triangle1"></div>
			ブログ読みましたー。これ、学生にとっても、めっちゃいい内容ですね～！拓さんはどこでこの本、知ったんですか？
		</div>
	</div>
	<div class="balloon">
		<div class="person_box">
			<a href="#"><img class="person" src="https://graph.facebook.com/{$user["member_fb_id"]}/picture?type=square"></a>
			<div class="name">
				{$user["member_name"]}
			</div>
		</div>
		<div id="comment_box">
			<div class="baloon-triangle2"></div>
			<form>
				<textarea id="comment" name="comment" cols="60" placeholder="コメントする"></textarea>
		</div>
			<input id="button-cancel" type="submit" value="Cancel">
			<input id="button-send" type="submit" value="Send">
		</form>
	</div>
</div>
