$(document).ready(function() {
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
    });
function myJS(vName, sc1, sc2, sc3, tsc, iso_code){
	var str = "<br>Overall Impact: "+tsc+"<br>ISO code: "+iso_code;
	document.getElementById('additional_statistic').innerHTML=vName;			
	document.getElementById('country_iso').innerHTML=str;
	drawChart("bar_details", vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3));
	/*var r=confirm("Press a button");
	if (r==true){
  		window.location.href = "../country.php?q="+encodeURIComponent(vName);
  	}*/
}
google.load("visualization", "1", {packages: ["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart(div_name, countryName, imp1,imp2,imp3) {
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

    var chart = new google.visualization.BarChart(document.getElementById(div_name));
    chart.draw(data, options);
}