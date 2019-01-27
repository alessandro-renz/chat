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
	
	$.ajax({
		type:"POST",
		url:"home/getMsg",
		dataType:"json",
		data:{id:id_group},
		success:function(res){
			for(i=0;i<res.length;i++){
				$("#title_chat").html(res[i].name_group);
				
				var html = 	"<p class='name-user'><strong>"+res[i].name_user+"</strong></p>"+
				            "<p class='user-text'>"+res[i].msg+"</i></p>"+
				            "<p class='data-text'>"+res[i].date_msg+"</p>";
			}
			$(".group-text").append(html);
		}

	});
}