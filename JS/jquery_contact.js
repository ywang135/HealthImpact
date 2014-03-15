$title = "The Global Health Impact Contact";
$(document).ready(function() {
	$(this).attr("title", $title);
	$("#menu_contact_us").click(function(){
		window.location.href = 'country.php';
    	return false;
	});
    $("#main_menu #menu_contact_us a").css("background-color", "#FFB31C");
    $("#copyright").css( { "margin-top" : "1900px"} );
    $("#copyright").fadeIn();
});