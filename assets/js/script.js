$(function(){
	$(".nav-item").hover(function(){
		$(this).find(".nav-link").css("color", "orange");
	}, function(){
		$(this).find(".nav-link").css("color", "white");
	});
});