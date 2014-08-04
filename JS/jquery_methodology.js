$malaria_clicked=0;
$tb_clicked=0;
$hiv_clicked=0;

$title = "The Global Health Impact Methodology";
$(document).ready(function() {
	$(this).attr("title", $title);
	$("#menu_the_index").click(function(){
		window.location.href = 'country.php';
    	return false;
	});
    $("#main_menu #menu_methodology a").css("background-color", "#FFB31C");
    $
    $("#copyright").css( { "margin-top" : "820px"} );
    $("#copyright").fadeIn();
    $("#malaria_ppt").bind('mousedown', function(){
	$(this).unbind('mousedown');
    	$(this).animate({height:'300',width:'360'});
    });
    $("#tb_ppt").bind('mousedown', function(){
	$(this).unbind('mousedown');
    	$(this).animate({height:'300',width:'360'});
    });
    $("#hiv_ppt").bind('mousedown', function(){
	$(this).unbind('mousedown');
    	$(this).animate({height:'300',width:'360'});
    });


});


