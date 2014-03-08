$title = "The Global Health Impact Methodology";
$(document).ready(function() {
	$(this).attr("title", $title);
	$("#menu_the_methodology").click(function(){
		window.location.href = 'country.php';
    	return false;
	});
    $("#copyright").css( { "margin-top" : "890px"} );
});