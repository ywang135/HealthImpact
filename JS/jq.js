$(document).ready(function() {
       	$("#sub_menu").show();
       	$("#copyright").css( { "top" : "1160px"} );
       	$("#popupwd").hide();
       	$("#emap").mouseover(function(){
       		$("#popupwd").show();
       	});
       	$("#emap").mouseout(function(){
       		$("#popupwd").hide();
       	});
       	$("#rankls").mouseover(function(){
       		$("#popupwd").show();
       	});
       	$("#rankls").mouseout(function(){
       		$("#popupwd").hide();
       	});
       	$("#popupwd").mouseover(function(){
       		$("#popupwd").show();
       	});
       	$("#popupwd").mouseout(function(){
       		$("#popupwd").hide();
       	});
    });
function myJS(vName, sc1, sc2, sc3, tsc, iso_code){
	var str = "<p>Name: "+vName+",<br>Overall Impact: "+tsc+",<br>ISO code: "+iso_code;		
	document.getElementById('bar_details').innerHTML=str;
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
    	width: 337,
        height: 180,
        marginTop: 100,
        legend: { position: 'top', maxLines: 1 },
		bar: { groupWidth: '50%' },
        isStacked: true,
    };

    var chart = new google.visualization.BarChart(document.getElementById(div_name));
    chart.draw(data, options);
}