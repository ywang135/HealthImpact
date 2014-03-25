<?php
	header('Content-type: text/javascript');
?>
$SHOW_DISEASE = 0;
$MAP_MALARIA = 0;
$MAP_TB = 0;
$MAP_HIV = 0;
$title = "The Global Health Impact Disease Index";
$(document).ready(function() {
		$SHOW_DISEASE = 0;
        $(this).attr("title", $title);
        $(".popupwd").hide(); 
        $(".zoombig").hide();
        $("#main_menu #menu_the_index a").css("background-color", "#FFB31C");
        $("#sub_menu #sub_disease a").css("background-color", "#0083CA");
       	$("#copyright").css( { "top" : "1050px"} );
       	$("#copyright").fadeIn();
		drawMap("Maps/genDiseaseAll.php","mapcontainer_0","0");
		$("#showAll a").css("background-color", "#ef3e2e");
		$(".map_container").hide();
       	$("#mapcontainer_0").fadeIn();
       	  
       	$("#All_pop").fadeIn();
       	setArray();
       	
       		document.getElementById('additional_statistic_1').innerHTML="Democratic Republic of the Congo";	
			document.getElementById('additional_statistic_2').innerHTML="Democratic Republic of the Congo";	
			var str = "<br>Overall Dalys: 12,732,860.00";
			str = str+"<br>Rank: 4";
			document.getElementById('disease_info_1').innerHTML=str;
			document.getElementById('disease_info_2').innerHTML=str;
       		
       	$("#disease_text").html("<p>Breakdown of Disease Impact:</p> Every year 9 million people are diagnosed with tuberculosis, every day more than 13,400 people are infected with AIDS, every 30 seconds malaria kills a child. About a third of all deaths, 18 million a year are poverty-related. Essential medicines for these diseases together help us reduce the global burden of disease but we are having different degrees of success in combatting these different diseases. This graph illustrates the how much of the key drugs’ success in ameliorating the global burden of disease due to these causes is attributable to their success in combating each disease. For additional information, please click here: link to report page");  		       	
        
        $("#popupwd1_hiv").click(function(){
        	$(".zoombig").hide();
        	$("#popupwd1_hiv_big").fadeIn();
       	});
       	$("#popupwd1_hiv_big").click(function(){
       		$(".zoombig").hide();
       	});
        $("#popupwd2_hiv").click(function(){
       		$(".zoombig").hide();
        	$("#popupwd2_hiv_big").fadeIn();
       	});
       	$("#popupwd2_hiv_big").click(function(){
       		$(".zoombig").hide();
       	});
       	
        
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
        	$(".popupwd").hide();   
       		$("#All_pop").fadeIn();
        	$("#showAll a").css("background-color", "#ef3e2e");
        	$SHOW_DISEASE = 0;        	
        	$(".map_container").hide();
       		$("#mapcontainer_0").fadeIn();
       		$(".malaria_bar").fadeIn();
       		$(".TB_bar").fadeIn();
       		$(".HIV_bar").fadeIn();
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
       			drawChart("",0,0,0);
       		}
       		$(".popupwd").hide();   
       		$("#Malaria_pop").fadeIn();
       		$(".malaria_bar").fadeIn();
       		$(".TB_bar").hide();
       		$(".HIV_bar").hide();
       		
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
       			drawChart("",0,0,0);
       		}      		
       		$(".popupwd").hide();   
       		$("#TB_pop").fadeIn();
       		$("#mapcontainer_2").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").fadeIn();
       		$(".HIV_bar").hide();  		
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
       			drawChart("",0,0,0);
       		} 
       		$(".popupwd").hide();   
       		$("#HIV_pop").fadeIn(); 		
       		$("#mapcontainer_3").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").hide();
       		$(".HIV_bar").fadeIn();
       	});
    });

var Malaria_coverage={};
var Malaria_efficacy={};
var TB_coverage={};
var TB_efficacy={};
var HIV_children_coverage={};
var HIV_adults_coverage={};
var HIV_efficacy={};

<?php
	header('Content-type: text/javascript');
	include "../../con_/con_ghi.php";
	echo "function setArray(){";	
	$result = $con->query("call show_coverage_efficacy()");
	while($row = mysqli_fetch_array($result)){
		if($row[0]<100){
			if($row[1]=="Malaria"){
				echo "Malaria_coverage['$row[2]']=$row[3];Malaria_efficacy['$row[2]']=$row[4];";
			}
			if($row[1]=="TB"){
				echo "TB_coverage['$row[2]']=$row[3];TB_efficacy['$row[2]']=$row[4];";
			}
			if($row[1]=="HIV"){
				echo "HIV_efficacy['$row[2]']=$row[4];";
			}
		}
		else if($row[0]<200){
			echo "HIV_children_coverage['$row[2]']=$row[3];";
		}
		else{
			echo "HIV_adults_coverage['$row[2]']=$row[3];";
		}
	}
	mysqli_close($con);
	echo "}";
?>
function drawMap(source, div_id, map_id){
	var myMap = new FusionCharts ("Maps/FCMap_WorldwithCountries.swf", map_id, "706.912", "522.928", "0");
    myMap.setXMLUrl (source);//"Maps/genAll.php"
    myMap.render(div_id);//"mapcontainer"
}

function popupJS(vName, sc1, sc2, sc3, tsc, disease, rank_id){
	vName = typeof vName !== 'undefined' ? vName : "Democratic Republic of the Congo";
   	sc1 = typeof sc1 !== 'undefined' ? sc1 : 8244140;
   	sc2 = typeof sc2 !== 'undefined' ? sc2 : 1754630;
   	sc3 = typeof sc3 !== 'undefined' ? sc3 : 2734090.25;
   	tsc = typeof tsc !== 'undefined' ? tsc : cs1+sc2+sc3;
   	rank_id = typeof rank_id !== 'undefined' ? rank_id : 4;
	document.getElementById('additional_statistic_1').innerHTML=vName;	
	document.getElementById('additional_statistic_2').innerHTML=vName;		
	if(disease==0){
		var str = "<br>Overall Dalys: "+tsc.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		str = str+"<br>Rank: "+rank_id;
    }
	document.getElementById('disease_info_1').innerHTML=str;
	document.getElementById('disease_info_2').innerHTML=str;
	drawChart(vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3),$SHOW_DISEASE);
}
google.load("visualization", "1", {packages: ["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart(countryName, imp1,imp2,imp3) {
	countryName = typeof countryName !== 'undefined' ? countryName : "Democratic Republic of the Congo";
	imp1 = typeof imp1 !== 'undefined' ? imp1 : 8244140;
   	imp2 = typeof imp2 !== 'undefined' ? imp2 : 1754630;
   	imp3 = typeof imp3 !== 'undefined' ? imp3 : 2734090.25;
	var vColor="#0083CA";
	var hColor="#0083CA";
	if($SHOW_DISEASE == 0){
			
	
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
        	chartArea:{left:80}
    	};
    
  	formatter.format(data1, 1);
    var chart1 = new google.visualization.ColumnChart(document.getElementById("all_graph"));
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
    else if($SHOW_DISEASE == 1){
   		var formatter = new google.visualization.NumberFormat({pattern:'#,###.##%'});
    	var data1 = new google.visualization.DataTable();
    	data1.addColumn('string', 'Drug Type');
		data1.addColumn('number', 'Treatment Coverage');		
		data1.addColumn({type: 'string', role: 'style'});
    	for(var key in Malaria_coverage){
			data1.addRows([[key, parseFloat(Malaria_coverage[key]),'color: #0083CA']]);
		}
		var options1 = {
     		width:337,
        	marginTop: 180,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:70}
    	};
    	formatter.format(data1, 1);
    	var chart1 = new google.visualization.ColumnChart(document.getElementById("malaria_graph"));
    	chart1.draw(data1, options1);
    	
    	var data2 = new google.visualization.DataTable();
    	data2.addColumn('string', 'Drug Type');
		data2.addColumn('number', 'Efficacy');		
		data2.addColumn({type: 'string', role: 'style'});
    	for(var key in Malaria_coverage){
			data2.addRows([[key, parseFloat(Malaria_efficacy[key]),'color: #0083CA']]);
		}
		var options2 = {
     		width:337,
        	marginTop: 180,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},
        	vAxis:{ format:'##.##%', textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:70}
    	};
    	formatter.format(data2, 1);
    	var chart2 = new google.visualization.ColumnChart(document.getElementById("malaria_graph2"));
    	chart2.draw(data2, options2);
    }
    else if($SHOW_DISEASE == 2){
   		var formatter = new google.visualization.NumberFormat({pattern:'#,###.##%'});
    	var data1 = new google.visualization.DataTable();
    	data1.addColumn('string', 'TB Type');
		data1.addColumn('number', 'Treatment Coverage');		
		data1.addColumn({type: 'string', role: 'style'});
		
		var data2 = new google.visualization.DataTable();
    	data2.addColumn('string', 'TB Type');
		data2.addColumn('number', 'Efficacy');		
		data2.addColumn({type: 'string', role: 'style'});
		for(var key in TB_coverage){
			data1.addRows([[key, parseFloat(TB_coverage[key]),'color: #EF3E2E']]);
			data2.addRows([[key, parseFloat(TB_efficacy[key]),'color: #EF3E2E']]);
		}
		var options = {
     		width:337,
        	marginTop: 180,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:70}
    	};
    	
    	formatter.format(data1, 1);
    	var chart1 = new google.visualization.ColumnChart(document.getElementById("TB_graph"));
    	chart1.draw(data1, options);

    	formatter.format(data2, 1);
    	var chart2 = new google.visualization.ColumnChart(document.getElementById("TB_graph2"));
    	chart2.draw(data2, options);
    }
    else if($SHOW_DISEASE == 3){
   		var formatter = new google.visualization.NumberFormat({pattern:'#,###.##%'});
    	var data1 = new google.visualization.DataTable();
    	data1.addColumn('string', 'Geographical Region');
		data1.addColumn('number', 'Treatment Coverage for Children');	
		data1.addColumn('number', 'Treatment Coverage for Adults');	
		
		var data2 = new google.visualization.DataTable();
    	data2.addColumn('string', 'Drug Regiment');
		data2.addColumn('number', 'Group A First Line Efficacy for Adults');		
		data2.addColumn({type: 'string', role: 'style'});
    	
    	for(var key in HIV_children_coverage){
			data1.addRows([[key, parseFloat(HIV_children_coverage[key]),parseFloat(HIV_adults_coverage[key])]]);
		}
		for(var key in HIV_efficacy){
			data2.addRows([[key, parseFloat(HIV_efficacy[key]),'color: #FFB31C']]);
		}
		var options1 = {
     		width:337,
        	height: 240,
        	fontName: 'Myriad pro Regular',
			bar: { groupWidth: '50%' },
        	hAxis:{ textStyle:{color: vColor, minTextSpacing:2},slantedText:true, slantedTextAngle:20,allowContainerBoundaryTextCufoff:true},
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:70, height:100,top:80}
    	};
    	var options2 = {
     		width:337,
        	marginTop: 180,
        	height: 230,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor},slantedText:true },
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:70}
    	};
    	var options3 = {
     		width:580,
     		height: 430,
        	marginTop: 180,
        	fontName: 'Myriad pro Regular',
			bar: { groupWidth: '50%' },
        	hAxis:{ textStyle:{color: vColor, minTextSpacing:2},slantedText:true, slantedTextAngle:20,allowContainerBoundaryTextCufoff:true},
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:130}
    	};
    	var options4 = {
     		width:580,
     		height: 400,
        	marginTop: 180,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor},slantedText:true },
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:140}
    	};
    	formatter.format(data1, 1);
    	var chart1 = new google.visualization.ColumnChart(document.getElementById("HIV_graph"));
    	chart1.draw(data1, options1);

    	formatter.format(data2, 1);
    	var chart2 = new google.visualization.ColumnChart(document.getElementById("HIV_graph2"));
    	chart2.draw(data2, options2);
    	
    	var chart3 = new google.visualization.ColumnChart(document.getElementById("HIV_graph_big"));
    	chart3.draw(data1, options3);
    	
    	var chart4 = new google.visualization.ColumnChart(document.getElementById("HIV_graph2_big"));
    	chart4.draw(data2, options4);
    }
    
}