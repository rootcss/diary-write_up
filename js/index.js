$(document).ready(function(){
	$("#submit").click(function(){
			$.post(
				'submit.php',
				{ 
					main : $("#main").val(),
					dd : $("#day").val(),
					mm : $("#month").val(),
					yy : $("#year").val(),
					post : $("#post").val(),
				},
				function(data){
					alert(data);					
					window.parent.location.reload();
				});
	});

});