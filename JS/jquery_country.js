$SHOW_DISEASE = 0;
$ORDER_NAME_OR_IMPACT = 0;
$(document).ready(function() {
		drawMap("Maps/genAll.php","mapcontainer_0","0");
		drawMap("Maps/genMalaria.php","mapcontainer_1","1");
		drawMap("Maps/genTB.php","mapcontainer_2","2");
		drawMap("Maps/genHIV.php","mapcontainer_3","3");
		$(".map_container").hide();
		$(".country_rank_list").hide();
       	$("#mapcontainer_0").fadeIn();
       	$("#list_all_impact").fadeIn();
       	$("#orderByImpact").addClass('chosen');
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
       	});
       	$("#showMalaria").click(function(){
       		$SHOW_DISEASE = 1;
       		$(".map_container").hide();
       		$("#mapcontainer_1").fadeIn();
       		$(".malaria_bar").fadeIn();
       		$(".TB_bar").hide();
       		$(".HIV_bar").hide();
       		if($ORDER_NAME_OR_IMPACT==0){
       			$(".country_rank_list").hide();
       			$("#list_malaria_impact").fadeIn();
       		}
       	});
       	$("#showTB").click(function(){
       		$SHOW_DISEASE = 2;
       		$(".map_container").hide();
       		$("#mapcontainer_2").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").fadeIn();
       		$(".HIV_bar").hide(); 
       		if($ORDER_NAME_OR_IMPACT==0){
       			$(".country_rank_list").hide();
       			$("#list_TB_impact").fadeIn();
       		}    		
       	});
       	$("#showHIV").click(function(){
       		$SHOW_DISEASE = 3;
       		$(".map_container").hide();
       		$("#mapcontainer_3").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").hide();
       		$(".HIV_bar").fadeIn();
       		if($ORDER_NAME_OR_IMPACT==0){
       			$(".country_rank_list").hide();
       			$("#list_HIV_impact").fadeIn();
       		}
       	});
       	$("#orderByName").click(function(){
       		$ORDER_NAME_OR_IMPACT = 1;
       		$(".country_rank_list").hide();
       		$("#list_all_name").fadeIn();
       		$("#country_by_rank").html("Country & Overall Impact By Rank");
       		$('#orderByImpact').removeClass('chosen');
       		$("#orderByName").addClass('chosen');
       	});
       	$("#orderByImpact").click(function(){
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
       	});
    });
    
function drawMap(source, div_id, map_id){
	var myMap = new FusionCharts ("Maps/FCMap_WorldwithCountries.swf", map_id, "706.912", "522.928", "0");
    myMap.setXMLUrl (source);//"Maps/genAll.php"
    myMap.render(div_id);//"mapcontainer"
}
function popupJS(vName, sc1, sc2, sc3, tsc, iso_code){
	
	document.getElementById('additional_statistic').innerHTML=vName;			
	if($SHOW_DISEASE==0){
		var str = "<br>Overall Impact: "+tsc;
    }
    else if($SHOW_DISEASE ==1){
		var str = "<br>Malaria Treatment Impact: "+sc1;
    }
    else if($SHOW_DISEASE ==2){
		var str = "<br>TB Treatment Impact: "+sc2;
    }
    else if($SHOW_DISEASE==3){
		var str = "<br>HIV Treatment Impact: "+sc3;
    }
	document.getElementById('country_iso').innerHTML=str;
	drawChart("bar_details", vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3),0);
}
google.load("visualization", "1", {packages: ["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart(div_name, countryName, imp1,imp2,imp3) {
	if($SHOW_DISEASE==0){
		var data = google.visualization.arrayToDataTable([
        	['Impact Name', 'Score', { role: 'style' }],
        	['Total Malaria Treatment Impact', imp1, 'color: #0083CA' ],
        	['Total TB Treatment Impact', imp2, 'color: #FFB31C' ],
        	['Total HIV Treatment Impact', imp3, 'color: #EF3E2E' ]
     	 	]);
     	var options = {
			title: countryName,
    		width: 337,
        	height: 180,
        	marginTop: 100,
        	legend: { position: "none" },//'top', maxLines: 1
			bar: { groupWidth: '50%' },
        	isStacked: true,
    	};
    }
    else if($SHOW_DISEASE ==1){
		var data = google.visualization.arrayToDataTable([
        	['Impact Name', 'Score', { role: 'style' }],
        	['Total Malaria Treatment Impact', imp1, 'color: #0083CA' ]
     	 	]);     	
     	var options = {
			title: countryName,
    		width: 337,
        	height: 180,
        	marginTop: 100,
        	legend: { position: "none" },//'top', maxLines: 1
			bar: { groupWidth: '20%' },
        	isStacked: true,
    	};
    }
    else if($SHOW_DISEASE ==2){
		var data = google.visualization.arrayToDataTable([
        	['Impact Name', 'Score', { role: 'style' }],
        	['Total TB Treatment Impact', imp2, 'color: #FFB31C' ]
     	 	]);
     	var options = {
			title: countryName,
    		width: 337,
        	height: 180,
        	marginTop: 100,
        	legend: { position: "none" },//'top', maxLines: 1
			bar: { groupWidth: '20%' },
        	isStacked: true,
    	};
    }
    else if($SHOW_DISEASE==3){
		var data = google.visualization.arrayToDataTable([
        	['Impact Name', 'Score', { role: 'style' }],
        	['Total HIV Treatment Impact', imp3, 'color: #EF3E2E' ]
     	 	]);
     	var options = {
			title: countryName,
    		width: 337,
        	height: 180,
        	marginTop: 100,
        	legend: { position: "none" },//'top', maxLines: 1
			bar: { groupWidth: '20%' },
        	isStacked: true,
    	};
    }


    var chart = new google.visualization.BarChart(document.getElementById(div_name));
    chart.draw(data, options);
}