$SHOW_DISEASE = 0;
$title = "The Global Health Impact Drug Index";
$(document).ready(function() {			
    	$(document).ready(function() {
        $(this).attr("title", $title);
        $("#sub_menu").show();
        $("#sub_menu #sub_drug a").css("background-color", "#0083CA");
       	$("#copyright").css( { "top" : "1100px"} );
    });
       	
       	$("#popupdrug1").hide();
		$("#popupdrug2").hide();
		
       	$("#rankls").mouseover(function(){
       		$("#drugs_text").hide();
       		$("#popupdrug1").show();
			$("#popupdrug2").show();
			
       	});
       	$("#rankls").mouseout(function(){
       		$("#drugs_text").show();
       		$("#popupdrug1").hide();
			$("#popupdrug2").hide();
       	});
       	
       	$("#popupdrug1").mouseout(function(){
       		$("#drugs_text").show();
       		$("#popupdrug1").hide();
			$("#popupdrug2").hide();
       	});
       	$("#popupdrug2").mouseout(function(){
       		$("#drugs_text").show();
       		$("#popupdrug1").hide();
			$("#popupdrug2").hide();
       	});
       
    });
    
