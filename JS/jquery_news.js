$title = "The Global Health Impact News";
$(document).ready(function() {
	$(this).attr("title", $title);
	$("#menu_the_index").click(function(){
		window.location.href = 'country.php';
    	return false;
	});
    $("#main_menu #menu_news a").css("background-color", "#FFB31C");
    $("#copyright").css( { "margin-top" : "680px"} );
    $("#copyright").fadeIn();
});