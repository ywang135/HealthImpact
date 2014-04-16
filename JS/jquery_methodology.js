$title = "The Global Health Impact Methodology";
$(document).ready(function() {
	$(this).attr("title", $title);
	$("#menu_the_index").click(function(){
		window.location.href = 'country.php';
    	return false;
	});
    $("#main_menu #menu_methodology a").css("background-color", "#FFB31C");
    $("#copyright").css( { "margin-top" : "820px"} );
    $("#copyright").fadeIn();
});