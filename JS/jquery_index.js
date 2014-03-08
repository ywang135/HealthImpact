$title = "The Global Health Impact";
$(document).ready(function() {
	$(this).attr("title", $title);
	$("#menu_the_index").click(function(){
		window.location.href = 'country.php';
    	return false;
	});
    $("#copyright").css( { "margin-top" : "60px"} );
    
    $("#sq_l_t").mouseover(function(){
       	$("#sub_menu #sub_country a").css("background-color", "#0083CA"); 
    });
    $("#sq_l_t").mouseout(function(){
       	$("#sub_menu #sub_country a").css("background-color", "#EF3E2E"); 
    });
    
    $("#sq_r_t").mouseover(function(){
       	$("#sub_menu #sub_company a").css("background-color", "#0083CA"); 
    });
    $("#sq_r_t").mouseout(function(){
       	$("#sub_menu #sub_company a").css("background-color", "#EF3E2E"); 
    });
    
    $("#sq_l_b").mouseover(function(){
       	$("#sub_menu #sub_disease a").css("background-color", "#0083CA"); 
    });
    $("#sq_l_b").mouseout(function(){
       	$("#sub_menu #sub_disease a").css("background-color", "#EF3E2E"); 
    });
    
    $("#sq_r_b").mouseover(function(){
       	$("#sub_menu #sub_drug a").css("background-color", "#0083CA"); 
    });
    $("#sq_r_b").mouseout(function(){
       	$("#sub_menu #sub_drug a").css("background-color", "#EF3E2E"); 
    });
});