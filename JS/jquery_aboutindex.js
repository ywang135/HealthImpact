
$title = "The Global Health Impact About the Index";
$(document).ready(function() {
	$(this).attr("title", $title);
	$("#menu_the_index").click(function(){
		window.location.href = 'country.php';
    	return false;
	});
    $("#main_menu #menu_about_the_index a").css("background-color", "#FFB31C");
    $("#copyright").css( { "margin-top" : "800px"} );
    $("#copyright").fadeIn();
    $("#thumbnail").click(function(){
    	$("#thumbnail").hide();
    	$("#videoharvard").fadeIn(); 
        $("#videoharvard").html("<video width=\"100%\" height=\"300\" controls autoplay> <source src=\"../src/shortPresentation.mp4\" type=\"video/mp4\"></video>");
    });
});