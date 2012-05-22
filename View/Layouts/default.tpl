<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>make A wish｜Login</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		{$Html->css('bootstrap')}
		{$Html->css('Login4')}
		{$Html->css('jquery.ajaxSuggest')}

		{$Html->script('jquery')}
		{$Html->script('jquery.ajaxSuggest.fb')}
		{$Html->script('jquery.ajaxSuggest.am')} <!-- 		<link href="/css/bootstrap.css" rel="stylesheet">
		<link href="/css/Login4.css" rel="stylesheet">
		<style type="text/css">
		/* Override some defaults */
		</style> -->
	</head>
	<body>
		{$content_for_layout}
		<script type="text/javascript">
			$('#amazon_suggest').ajaxSuggestAmazon('{$Html->url(amazonSuggest)}')
			console.log("ai");
			$('#fb_suggest').ajaxSuggest('{$Html->url(ajaxSuggest)}')
		</script>
	</body>
</html>
