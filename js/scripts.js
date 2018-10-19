$(document).ready(function(){
	$("div.inicio-menu").hover(function(){
	$(this).find("i").attr("style","transform:rotate(45deg)");
	}, function(){
		$(this).find("i").attr("style", "");	
	})
});

$(document).ready(function() {
$('#tabla1').stacktable();
$('#tabla1').cardtable();
});