$(function(){
	$(".nav-item").hover(function(){

		$(this).find(".nav-link").css("color", "orange");
	}, function(){
		
		$(this).find(".nav-link").css("color", "white");
	});

	$("#nick").bind("keyup", function(){
		var txt = $(this).val();
		var regex = /^[a-z0-9]+$/g;

		if(regex.test(txt) === false){
			$(this).css("border", "2px solid red");
		}else{
			$(this).css("border", "2px solid green");
		}
		
	});
});

function pushText(id_group){
	$.getJSON("");
}