<a href="{$Html->url('amazonList')}">amazon</a>
{$user_profile["name"]} 
<img src =https://graph.facebook.com/{$user_profile["id"]}/picture?type=square>
{$user_name["member_name"]}<br>
<br>
Facebookのサジェストサーチ
<form action="">
	<input type="text" placeholder="Username" id = "fb_suggest">
</form>
amazonのサジェストサーチ
<form action="">
	<input type="text" placeholder="Username" id = "amazon_suggest">
</form>
<!-- {foreach from=$friends item=friend}
{$friend["name"]}
<img src =https://graph.facebook.com/{$friend["id"]}/picture?type=square>
{/foreach}-->
