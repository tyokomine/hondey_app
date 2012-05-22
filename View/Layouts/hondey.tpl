<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Hondey</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		{$Html->css('bootstrap')}
		{$Html->css('Login4')}
		{$Html->css('jquery.ajaxSuggest')}
		{$Html->css('suggest_book')}
		
		
		{$Html->script('jquery')}
		{$Html->script('jquery.ajaxSuggest.fb')}
		{$Html->script('jquery.ajaxSuggest.am')}
		<script type="text/javascript">
			
			jQuery(document).ready(function($){
				$('#amazon_suggest').ajaxSuggestAmazon('{$Html->url(amazonSuggest)}')
				console.log("ai");
			});
			jQuery(document).ready(function($){
				$('#fb_suggest').ajaxSuggest('{$Html->url(ajaxSuggest)}')
			});
			
		</script>
		<!-- 		<link href="/css/bootstrap.css" rel="stylesheet">
		<link href="/css/Login4.css" rel="stylesheet">
		<style type="text/css">
		/* Override some defaults */
		</style> -->
	</head>
	<body>
		{$content_for_layout}
	</body>
</html>	