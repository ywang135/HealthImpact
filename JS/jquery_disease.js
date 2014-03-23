$SHOW_DISEASE = 0;
$MAP_MALARIA = 0;
$MAP_TB = 0;
$MAP_HIV = 0;
$title = "The Global Health Impact Disease Index";
$(document).ready(function() {
		$SHOW_DISEASE = 0;
        $(this).attr("title", $title);
        $("#main_menu #menu_the_index a").css("background-color", "#FFB31C");
        $("#sub_menu #sub_disease a").css("background-color", "#0083CA");
       	$("#copyright").css( { "top" : "1050px"} );
       	$("#copyright").fadeIn();
		drawMap("Maps/genDiseaseAll.php","mapcontainer_0","0");
		$("#showAll a").css("background-color", "#ef3e2e");
		$(".map_container").hide();
       	$("#mapcontainer_0").fadeIn();
       	$("#disease_text").html("<p>Breakdown of Disease Impact:</p> Every year 9 million people are diagnosed with tuberculosis, every day more than 13,400 people are infected with AIDS, every 30 seconds malaria kills a child. About a third of all deaths, 18 million a year are poverty-related. Essential medicines for these diseases together help us reduce the global burden of disease but we are having different degrees of success in combatting these different diseases. This graph illustrates the how much of the key drugs’ success in ameliorating the global burden of disease due to these causes is attributable to their success in combating each disease. For additional information, please click here: link to report page");  		       	
        $("#showAll").click(function(){
        	$("#disease_text").html("<p>Breakdown of Disease Impact:</p> Every year 9 million people are diagnosed with tuberculosis, every day more than 13,400 people are infected with AIDS, every 30 seconds malaria kills a child. About a third of all deaths, 18 million a year are poverty-related. Essential medicines for these diseases together help us reduce the global burden of disease but we are having different degrees of success in combatting these different diseases. This graph illustrates the how much of the key drugs’ success in ameliorating the global burden of disease due to these causes is attributable to their success in combating each disease. For additional information, please click here: link to report page");  		
        	if($SHOW_DISEASE == 1){
        		$("#showMalaria a").css("background-color", "#FFB31C");
        	}
        	else if($SHOW_DISEASE == 2){
        		$("#showTB a").css("background-color", "#FFB31C");
        	}
        	else if($SHOW_DISEASE == 3){
        		$("#showHIV a").css("background-color", "#FFB31C");
        	}
        	$("#showAll a").css("background-color", "#ef3e2e");
        	$SHOW_DISEASE = 0;        	
        	$(".map_container").hide();
       		$("#mapcontainer_0").fadeIn();
       		$(".malaria_bar").fadeIn();
       		$(".TB_bar").fadeIn();
       		$(".HIV_bar").fadeIn();
       		drawChart("", parseFloat(0.0), parseFloat(0.0), parseFloat(0.0),$SHOW_DISEASE);
       	});
       	$("#showMalaria").click(function(){
       		$("#disease_text").html("<p>Breakdown of Malaria Impact</p>Every 30 seconds malaria kills a child. Essential medicines for malaria help us reduce the global burden of disease. This graph illustrates the how much of the success in reducing the burden of disease due to malaria is attributable to the need for medicines to combat tuberculosis, access to these medicines, and their efficacy. For additional information, please click here: link to report page ");  	
       		if($SHOW_DISEASE == 0){
        		$("#showAll a").css("background-color", "#FFB31C");
        	}
        	else if($SHOW_DISEASE == 2){
        		$("#showTB a").css("background-color", "#FFB31C");
        	}
        	else if($SHOW_DISEASE == 3){
        		$("#showHIV a").css("background-color", "#FFB31C");
        	}
        	$("#showMalaria a").css("background-color", "#ef3e2e");
       		$SHOW_DISEASE = 1;
       		$(".map_container").hide();
       		$("#mapcontainer_1").fadeIn();
       		if($MAP_MALARIA == 0){
       			$("#list_malaria_impact").load("Maps/Malaria.php");
       			drawMap("Maps/genDiseaseMalaria.php","mapcontainer_1","1");
       			$MAP_MALARIA = 1;
       		}
       		$(".malaria_bar").fadeIn();
       		$(".TB_bar").hide();
       		$(".HIV_bar").hide();
       		drawChart( "", parseFloat(0.0), parseFloat(0.0), parseFloat(0.0),$SHOW_DISEASE);
       	});
       	$("#showTB").click(function(){
       		$("#disease_text").html("<p>Breakdown of Tuberculosis Impact</p> Every year 9 million people are diagnosed with tuberculosis. Essential medicines for tuberculosis help us reduce the global burden of disease. This graph illustrates the how much of the success in reducing the burden of disease due to tuberculosis is attributable to the need for medicines to combat tuberculosis, access to these medicines, and their efficacy. For additional information, please click here: link to report page");
        	
       		if($SHOW_DISEASE == 0){
        		$("#showAll a").css("background-color", "#FFB31C");
        	}
        	else if($SHOW_DISEASE == 1){
        		$("#showMalaria a").css("background-color", "#FFB31C");
        	}
        	else if($SHOW_DISEASE == 3){
        		$("#showHIV a").css("background-color", "#FFB31C");
        	}
        	$("#showTB a").css("background-color", "#ef3e2e");
       		$SHOW_DISEASE = 2;
       		$(".map_container").hide();
			if($MAP_TB == 0){
       			$("#list_TB_impact").load("Maps/TB.php");
       			drawMap("Maps/genDiseaseTB.php","mapcontainer_2","2");
       			$MAP_TB = 1;
       		}      		
       		$("#mapcontainer_2").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").fadeIn();
       		$(".HIV_bar").hide(); 
       		drawChart("", parseFloat(0.0), parseFloat(0.0), parseFloat(0.0),$SHOW_DISEASE);  		
       	});
       	$("#showHIV").click(function(){
       		$("#disease_text").html("<p>Breakdown of HIV/AIDS Impact</p>Every day more than 13,400 people are infected with AIDS. Essential medicines for HIV/AIDS help us reduce the global burden of disease. This graph illustrates the how much of the success in reducing the burden of disease due to HIV/AIDS is attributable to the need for medicines to combat tuberculosis, access to these medicines, and their efficacy. For additional information, please click here: link to report page");
        	
       		if($SHOW_DISEASE == 0){
        		$("#showAll a").css("background-color", "#FFB31C");
        	}
        	else if($SHOW_DISEASE == 2){
        		$("#showTB a").css("background-color", "#FFB31C");
        	}
        	else if($SHOW_DISEASE == 1){
        		$("#showMalaria a").css("background-color", "#FFB31C");
        	}
        	$("#showHIV a").css("background-color", "#ef3e2e");
       		$SHOW_DISEASE = 3;
       		$(".map_container").hide();
       		if($MAP_HIV == 0){
       			$("#list_HIV_impact").load("Maps/HIV.php");
       			drawMap("Maps/genDiseaseHIV.php","mapcontainer_3","3");
       			$MAP_HIV = 1;
       		}      		
       		$("#mapcontainer_3").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").hide();
       		$(".HIV_bar").fadeIn();
       		drawChart("", parseFloat(0.0), parseFloat(0.0), parseFloat(0.0),$SHOW_DISEASE);
       	});
    });
    
function drawMap(source, div_id, map_id){
	var myMap = new FusionCharts ("Maps/FCMap_WorldwithCountries.swf", map_id, "706.912", "522.928", "0");
    myMap.setXMLUrl (source);//"Maps/genAll.php"
    myMap.render(div_id);//"mapcontainer"
}
function popupJS(vName, sc1, sc2, sc3, tsc, disease, rank_id){
	document.getElementById('additional_statistic_1').innerHTML=vName;	
	document.getElementById('additional_statistic_2').innerHTML=vName;		
	if(disease==0){
		var str = "<br>Overall Dalys: "+tsc.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		str = str+"<br>Rank: "+rank_id;
    }
    else if(disease ==1){
		var str = "<br>Malaria Dalys: "+sc1.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		str = str+"<br>Rank: "+rank_id;
    }
    else if(disease ==2){
		var str = "<br>TB Dalys: "+sc2.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		str = str+"<br>Rank: "+rank_id;
    }
    else if(disease==3){
		var str = "<br>HIV Dalys: "+sc3.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		str = str+"<br>Rank: "+rank_id;
    }
	document.getElementById('disease_info_1').innerHTML=str;
	document.getElementById('disease_info_2').innerHTML=str;
	drawChart(vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3),$SHOW_DISEASE);
}
google.load("visualization", "1", {packages: ["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart(countryName, imp1,imp2,imp3,disease) {
	var vColor="#0083CA";
	var hColor="#0083CA";
	var formatter = new google.visualization.NumberFormat({pattern:'###,###,###.##'} );
	var data1 = google.visualization.arrayToDataTable([
        	['Impact Name', 'Score', { role: 'style' }],
        	['Malaria', parseFloat(imp1), '#0083CA' ],
        	['TB', parseFloat(imp2), '#FFB31C'],
        	['HIV/AIDS', parseFloat(imp3), '#EF3E2E']
     	 	]);
     	 	//, 'color: #0083CA', 'color: #FFB31C' , 'color: #EF3E2E' 
    var options1 = {
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
    
  	formatter.format(data1, 1);
    var chart1 = new google.visualization.ColumnChart(document.getElementById("ColumnChart_details"));
    chart1.draw(data1, options1);
    var data2 = google.visualization.arrayToDataTable([
          ['Disease', 'Dalys'],
          ['Malaria',     imp1],
          ['TB',      imp2],
          ['HIV/AIDS',  imp3]
        ]);
    
    var options2 = {
    	width: 337,
        height: 218,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        chartArea:{left:20,top:10,width:"80%",height:"90%"},
        colors: ["#0083CA","#FFB31C","#ef3e2e"],
        tooltip:{textStyle: {color: '#0083CA'}, showColorCode: true},
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 13}},
    	};
    formatter.format(data2, 1);
    var chart2 = new google.visualization.PieChart(document.getElementById("Pie_details"));
    chart2.draw(data2, options2);
}