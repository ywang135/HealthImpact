$(document).ready(function() {
		drawMap("Maps/genAll.php","mapcontainer_0","0");
		drawMap("Maps/genMalaria.php","mapcontainer_1","1");
		drawMap("Maps/genTB.php","mapcontainer_2","2");
		drawMap("Maps/genHIV.php","mapcontainer_3","3");
		$(".map_container").hide();
       	$("#mapcontainer_0").fadeIn();
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
       		$(".map_container").hide();
       		$("#mapcontainer_0").fadeIn();
       	});
       	$("#showMalaria").click(function(){
       		$(".map_container").hide();
       		$("#mapcontainer_1").fadeIn();
       	});
       	$("#showTB").click(function(){
       		$(".map_container").hide();
       		$("#mapcontainer_2").fadeIn();
       	});
       	$("#showHIV").click(function(){
       		$(".map_container").hide();
       		$("#mapcontainer_3").fadeIn();
       	});
    });
    
function drawMap(source, div_id, map_id){
	var myMap = new FusionCharts ("Maps/FCMap_WorldwithCountries.swf", map_id, "706.912", "522.928", "0");
    myMap.setXMLUrl (source);//"Maps/genAll.php"
    myMap.render(div_id);//"mapcontainer"
}
function myJSAll(vName, sc1, sc2, sc3, tsc, iso_code){
	var str = "<br>Overall Impact: "+tsc+"<br>ISO code: "+iso_code;
	document.getElementById('additional_statistic').innerHTML=vName;			
	document.getElementById('country_iso').innerHTML=str;
	drawChart("bar_details", vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3),0);
}
function myJSMalaria(vName, sc1, sc2, sc3, tsc, iso_code){
	var str = "<br>Malaria Treatment Impact: "+sc1+"<br>ISO code: "+iso_code;
	document.getElementById('additional_statistic').innerHTML=vName;			
	document.getElementById('country_iso').innerHTML=str;
	drawChart("bar_details", vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3),1);
}
function myJSTB(vName, sc1, sc2, sc3, tsc, iso_code){
	var str = "<br>TB Treatment Impact: "+sc2+"<br>ISO code: "+iso_code;
	document.getElementById('additional_statistic').innerHTML=vName;			
	document.getElementById('country_iso').innerHTML=str;
	drawChart("bar_details", vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3),2);
}
function myJSHIV(vName, sc1, sc2, sc3, tsc, iso_code){
	var str = "<br>HIV Treatment Impact: "+sc3+"<br>ISO code: "+iso_code;
	document.getElementById('additional_statistic').innerHTML=vName;			
	document.getElementById('country_iso').innerHTML=str;
	drawChart("bar_details", vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3),3);
}
google.load("visualization", "1", {packages: ["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart(div_name, countryName, imp1,imp2,imp3,type) {
	if(type==0){
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
    else if(type==1){
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
    else if(type==2){
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
    else if(type==3){
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