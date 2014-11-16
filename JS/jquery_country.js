$SHOW_DISEASE = 0;
$ORDER_NAME_OR_IMPACT = 0;
$MAP_MALARIA = 0;
$MAP_TB = 0;
$MAP_HIV = 0;
$title = "The Global Health Impact Country Index";
$(document).ready(function() {
		$SHOW_DISEASE = 0;
        $(this).attr("title", $title);
        $("#main_menu #menu_the_index a").css("background-color", "#FFB31C");
        $("#sub_menu #sub_country a").css("background-color", "#0083CA");
       	$("#copyright").css( { "top" : "950px"} );
       	$("#copyright").fadeIn();
		drawMap("Maps/genAll.php","mapcontainer_0","Map0");
		$(".map_container").hide();
		$(".country_rank_list").hide();
       	$("#mapcontainer_0").fadeIn();
       	$("#list_all_impact").load("Maps/All.php");   
       	$("#list_all_name").load("Maps/Name.php");
       	$("#list_all_impact").fadeIn();
       	$("#popupwd").hide();
       	$("#emap").mouseover(function(){
       		$("#country_text").hide();
       		$("#popupwd").show();
       	});
       	$("#emap").mouseout(function(){
       		$("#country_text").show();
       		$("#popupwd").hide();
       	});
       	$("#rankls").mouseover(function(){
       		$("#country_text").hide();
       		$("#popupwd").show();
       	});
       	$("#rankls").mouseout(function(){
       		$("#country_text").show();
       		$("#popupwd").hide();
       	});
       	$("#popupwd").mouseover(function(){
       		$("#country_text").hide();
       		$("#popupwd").show();
       	});
       	$("#popupwd").mouseout(function(){
       		$("#country_text").show();
       		$("#popupwd").hide();
       	});      	
        $("#showAll").click(function(){
            if($SHOW_DISEASE == 1){
        		$("#showMalaria").removeClass("c_b_d_choose");
                $("#showMalaria").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 2){
                $("#showTB").removeClass("c_b_d_choose");
                $("#showTB").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 3){
                $("#showHIV").removeClass("c_b_d_choose");
                $("#showHIV").addClass("c_b_d");
        	}
        	$("#showAll").removeClass("c_b_d");
            $("#showAll").addClass("c_b_d_choose");
        	$SHOW_DISEASE = 0;        	
        	$(".map_container").hide();
       		$("#mapcontainer_0").fadeIn();
       		$(".malaria_bar").fadeIn();
       		$(".TB_bar").fadeIn();
       		$(".HIV_bar").fadeIn();
       		if($ORDER_NAME_OR_IMPACT==0){
       			$(".country_rank_list").hide();
       			$("#list_all_impact").fadeIn();
       		}
       		popupJS('Nigeria','8317430.00','710282.06','1524099.50','10551812.00',0,1);
       	});
        $("#showAll").click();
       	$("#showMalaria").click(function(){
       		$(".map_container").hide();
       		$("#mapcontainer_1").fadeIn();
       		if($SHOW_DISEASE == 0){
                $("#showAll").removeClass("c_b_d_choose");
                $("#showAll").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 2){
        		$("#showTB").removeClass("c_b_d_choose");
                $("#showTB").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 3){
        		$("#showHIV").removeClass("c_b_d_choose");
                $("#showHIV").addClass("c_b_d");
        	}
        	$("#showMalaria").removeClass("c_b_d");
            $("#showMalaria").addClass("c_b_d_choose");
       		$SHOW_DISEASE = 1;
       		
       		
       		if($MAP_MALARIA == 0){
       			$("#list_malaria_impact").load("Maps/Malaria.php");
       			drawMap("Maps/genMalaria.php","mapcontainer_1","Map1");
       			$MAP_MALARIA = 1;
       		}
       		$(".malaria_bar").fadeIn();
       		$(".TB_bar").hide();
       		$(".HIV_bar").hide();
       		if($ORDER_NAME_OR_IMPACT==0){
       			$(".country_rank_list").hide();
       			$("#list_malaria_impact").fadeIn();
       		}
       		popupJS('Nigeria','8317430.00','710282.06','1524099.50','10551812.00',1,1);
       	});
       	$("#showTB").click(function(){
       		if($SHOW_DISEASE == 0){
        		$("#showAll").removeClass("c_b_d_choose");
                $("#showAll").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 1){
        		$("#showMalaria").removeClass("c_b_d_choose");
                $("#showMalaria").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 3){
        		$("#showHIV").removeClass("c_b_d_choose");
                $("#showHIV").addClass("c_b_d");
        	}
        	$("#showTB").removeClass("c_b_d");
            $("#showTB").addClass("c_b_d_choose");
       		$SHOW_DISEASE = 2;
       		$(".map_container").hide();
			if($MAP_TB == 0){
       			$("#list_TB_impact").load("Maps/TB.php");
       			drawMap("Maps/genTB.php","mapcontainer_2","Map2");
       			$MAP_TB = 1;
       		}      		
       		$("#mapcontainer_2").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").fadeIn();
       		$(".HIV_bar").hide(); 
       		if($ORDER_NAME_OR_IMPACT==0){
       			$(".country_rank_list").hide();
       			$("#list_TB_impact").fadeIn();
       		}
       		popupJS('Indonesia','1534.06','2003327.38','138104.88','2142966.25',2,1);		
       	});
       	$("#showHIV").click(function(){
       		if($SHOW_DISEASE == 0){
        		$("#showAll").removeClass("c_b_d_choose");
                $("#showAll").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 2){
        		$("#showTB").removeClass("c_b_d_choose");
                $("#showTB").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 1){
        		$("#showMalaria").removeClass("c_b_d_choose");
                $("#showMalaria").addClass("c_b_d");
        	}
        	$("#showHIV").removeClass("c_b_d");
            $("#showHIV").addClass("c_b_d_choose");
       		$SHOW_DISEASE = 3;
       		$(".map_container").hide();
       		if($MAP_HIV == 0){
       			$("#list_HIV_impact").load("Maps/HIV.php");
       			drawMap("Maps/genHIV.php","mapcontainer_3","Map3");
       			$MAP_HIV = 1;
       		}      		
       		$("#mapcontainer_3").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").hide();
       		$(".HIV_bar").fadeIn();
       		if($ORDER_NAME_OR_IMPACT==0){
       			$(".country_rank_list").hide();
       			$("#list_HIV_impact").fadeIn();
       		}
       		popupJS('South Africa','910.47','487552.63','4932716.50','5421179.50',3,1);
       	});
       	$('#orderForm :checkbox').click(function() {
    		var $this = $(this);
    		if ($this.is(':checked')) {
       			$ORDER_NAME_OR_IMPACT = 1;
       			$(".country_rank_list").hide();
       			$("#list_all_name").fadeIn();
       			$("#country_by_rank").html("Country & Overall Impact By Rank");
       			$('#orderByImpact').removeClass('chosen');
       			$("#orderByName").addClass('chosen');
    		} else {
    			$ORDER_NAME_OR_IMPACT = 0;
    			$(".country_rank_list").hide();
       			$("#country_by_rank").html("Country Name By Rank");
       			$('#orderByName').removeClass('chosen');
       			$("#orderByImpact").addClass('chosen');
       			if($SHOW_DISEASE==0){
       				$("#list_all_impact").fadeIn();
       			}
       			else if($SHOW_DISEASE==1){
       				$("#list_malaria_impact").fadeIn();
       			}
       			else if($SHOW_DISEASE==2){
       				$("#list_TB_impact").fadeIn();
       			}
    		}
		});
		popupJS('Nigeria','8317430.00','710282.06','1524099.50','10551812.00',0,1);
    });
    
function drawMap(source, div_id, map_id){
	FusionCharts.ready(function(){
 		var myMap = new FusionCharts ("FCMap_WorldwithCountries", map_id, "706.912", "522.928", '0');
    	myMap.setXMLUrl (source);//"Maps/genAll.php"
    	myMap.render(div_id);//"mapcontainer"
    });
}
function popupJS(vName, sc1, sc2, sc3, tsc, disease, rank_id){
	document.getElementById('additional_statistic').innerHTML=vName;			
	if(disease==0){
		var str = "<br>Overall Impact: "+tsc.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		str = str+"<br>Rank: "+rank_id;
    }
    else if(disease ==1){
		var str = "<br>Malaria Treatment Impact: "+sc1.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		str = str+"<br>Rank: "+rank_id;
    }
    else if(disease ==2){
		var str = "<br>TB Treatment Impact: "+sc2.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		str = str+"<br>Rank: "+rank_id;
    }
    else if(disease==3){
		var str = "<br>HIV Treatment Impact: "+sc3.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		str = str+"<br>Rank: "+rank_id;
    }
	document.getElementById('country_info').innerHTML=str;
	drawChart("bar_details", vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3),$SHOW_DISEASE);
}
google.load("visualization", "1", {packages: ["corechart"]});
//google.setOnLoadCallback(drawChart);
function drawChart(div_name, countryName, imp1,imp2,imp3,disease) {
	var vColor="#0083CA";
	var hColor="#0083CA";
	if(disease==0){
		var data = google.visualization.arrayToDataTable([
        	['Impact Name', 'Score', { role: 'style' }],
        	['Malaria', parseFloat(imp1), 'color: #0083CA' ],
        	['TB', parseFloat(imp2), 'color: #FFB31C' ],
        	['HIV/AIDS', parseFloat(imp3), 'color: #EF3E2E' ]
     	 	]);
     	var options = {
     		width:337,
        	marginTop: 100,
        	fontName: 'Myriad pro Semibold',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},
        	vAxis:{ textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:80,top:0}
    	};
    }
    else if(disease ==1){
		var data = google.visualization.arrayToDataTable([
        	['Impact Name', 'Score', { role: 'style' }],
        	['Malaria', parseFloat(imp1), 'color: #0083CA' ]
     	 	]);     	
     	var options = {
    		width: 337,
        	height: 180,
        	marginTop: 100,
        	fontName: 'Myriad pro Semibold',
        	legend: { position: "none" },//'top', maxLines: 1
			bar: { groupWidth: '20%' },
        	isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},vAxis:{ textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:80,top:0}
    	};
    }
    else if(disease ==2){
		var data = google.visualization.arrayToDataTable([
        	['Impact Name', 'Score', { role: 'style' }],
        	['TB', parseFloat(imp2), 'color: #FFB31C' ]
     	 	]);
     	var options = {
    		width: 337,
        	height: 180,
        	marginTop: 100,
        	fontName: 'Myriad pro Semibold',
        	legend: { position: "none" },//'top', maxLines: 1
			bar: { groupWidth: '20%' },
        	isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},vAxis:{ textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:80,top:0}
    	};
    }
    else if(disease == 3){
		var data = google.visualization.arrayToDataTable([
        	['Impact Name', 'Score', { role: 'style' }],
        	['HIV/AIDS', parseFloat(imp3), 'color: #EF3E2E' ]
     	 	]);
     	var options = {
    		width: 337,
        	height: 180,
        	marginTop: 100,
        	fontName: 'Myriad pro Semibold',
        	legend: { position: "none" },//'top', maxLines: 1
			bar: { groupWidth: '20%' },
        	isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},vAxis:{ textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:80,top:0}
    	};
    }
    else{
    	return;
    }
    var formatter = new google.visualization.NumberFormat({pattern:'###,###,###.##'} );
  	formatter.format(data, 1);
    var chart = new google.visualization.BarChart(document.getElementById("bar_details"));
    chart.draw(data, options);
}