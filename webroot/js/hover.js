$(function() {
	$(".section2 div").hover(function() {
		$(this).children("a").next("span").animate({
			opacity : "show",
			top : "-70",
			left : "-80"
		}, "slow");
	}, function() {
		$(this).children("a").next("span").animate({
			opacity : "hide",
			top : "-80",
			left : "-90"
		}, "fast");
	});
});
$(function() {
	$(".section3 div").hover(function() {
		$(this).children("a").next("span").animate({
			opacity : "show",
			top : "-70",
			left : "-80"
		}, "slow");
	}, function() {
		$(this).children("a").next("span").animate({
			opacity : "hide",
			top : "-80",
			left : "-90"
		}, "fast");
	});
});
$(function() {
	$(".section4 div").hover(function() {
		var off = $(this).offset();
		$(this).children("a").next("span").animate({
			opacity : "show",
			top : off.top - 370,
			left : off.left - 892
		}, "slow");
	}, function() {
		var off = $(this).offset();
		$(this).children("a").next("span").animate({
			opacity : "hide",
			top : off.top - 380,
			left : off.left - 892
		}, "fast");
	});
});
function show() {
	if(person_flag && product_flag) {
		$(function() {
			$("#glayLayer").click(function() {
				$(this).hide();
				$("#overLayer").hide();
			});
			$("#glayLayer").show();
			$("#overLayer").fadeIn(800).css({
				// marginTop : "-" + $("#overLayer").height() / 2 + "px",
				// marginLeft : "-" + $("#overLayer").width() / 2 + "px"
			});
			$("#ShowContents").html("<div id='comment_box'><form style='height:250px;width=200px' action='{$Html->url('home')}/{$sid}'><textarea style='style=margin-top: 0px; margin-bottom: 8.88889px; height: 200px; margin-left: 0px; margin-right: 0px; width: 296px; padding:10px' id='comment' name='comment' cols='60' placeholder='コメントする'></textarea></div><input id='button-cancel' type='submit' value='Cancel' onclick='hide()'><input onclick='hide()' id='button-send' type='submit' value='Send'></form>");
			console.log("yeah!!!!");
			person_flag = false;
			product_flag = false;
			//alert('やったね');
		});
	}
};	
function hide() {
	$("#glayLayer").hide();
	$("#overLayer").hide();
}

$(function() {
	$("#glayLayer").click(function() {
		$(this).hide();
		$("#section-x").hide();
		// $("#hondey-top").hide();
		// $("#subtitle").hide();
		//
	});
});
