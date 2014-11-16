$title = "The Global Health Impact Organization";
$(document).ready(function() {
	$(this).attr("title", $title);
	$("#menu_the_index").click(function(){
		window.location.href = 'country.php';
    	return false;
	});
    $("#main_menu #menu_contact_us a").css("background-color", "#FFB31C");
    $("#copyright").css( { "margin-top" : "3500px"} );
    $("#copyright").fadeIn();
});