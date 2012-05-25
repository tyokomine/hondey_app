<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Hondey</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->

		<?php echo $this->Html->css('bootstrap')?>
		<?php echo $this->Html->css('Login4')?>
		<?php echo $this->Html->css('jquery.ajaxSuggest')?>
		<?php echo $this->Html->css('book_conversation')?>

		<?php echo $this->Html->script('jquery')?>
		<?php echo $this->Html->script('jquery.ajaxSuggest.fb')?>
		<?php echo $this->Html->script('jquery.ajaxSuggest.am')?>
		<?php echo $this->Html->script('hover')?>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> <!--
		<script type="text/javascript">

		jQuery(document).ready(function($){
		$('#amazon_suggest').ajaxSuggestAmazon('{$Html->url(amazonSuggest)}')
		console.log("ai");
		});
		jQuery(document).ready(function($){
		$('#fb_suggest').ajaxSuggest('{$Html->url(ajaxSuggest)}')
		});

		</script> -->
		<!-- 		<link href="/css/bootstrap.css" rel="stylesheet">
		<link href="/css/Login4.css" rel="stylesheet">
		<style type="text/css">
		/* Override some defaults */
		</style> -->
	</head>
	<body>
		<?php echo $content_for_layout?>
	</body>
</html>