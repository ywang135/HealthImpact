$title = "The Global Health Impact Resources";
$(document).ready(function() {
	$(this).attr("title", $title);
	$("#menu_the_index").click(function(){
		window.location.href = 'country.php';
    	return false;
	});
    $("#main_menu #menu_resources a").css("background-color", "#FFB31C");
    $("#copyright").css( { "margin-top" : "680px"} );
    $("#copyright").fadeIn();
    $("#thumbnail").click(function(){
    	$("#thumbnail").hide();
    	$("#videoharvard").fadeIn();
    });
    
});