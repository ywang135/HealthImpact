<?php
	header('Content-type: text/javascript');
?>
$SHOW_DISEASE = 0;
$MAP_ALL = 0;
$MAP_MALARIA = 0;
$MAP_TB = 0;
$MAP_HIV = 0;
$SUMMARY_GRAPH = 0;
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
		$(".map_container").hide();
       	setArray();
       	
       		document.getElementById('additional_statistic_1').innerHTML="Democratic Republic of the Congo";	
			document.getElementById('additional_statistic_2').innerHTML="Democratic Republic of the Congo";	
			var str = "<br>Overall Dalys: 12,732,860.00";
			str = str+"<br>Rank: 4";
			document.getElementById('disease_info_1').innerHTML=str;
			document.getElementById('disease_info_2').innerHTML=str;
       		
       	$("#disease_text").html("<p>Breakdown of Disease Impact:</p> Every year 9 million people are diagnosed with tuberculosis, every day more than 13,400 people are infected with AIDS, every 30 seconds malaria kills a child. About a third of all deaths, 18 million a year are poverty-related. Essential medicines for these diseases together help us reduce the global burden of disease but we are having different degrees of success in combatting these different diseases. This graph illustrates the how much of the key drugs’ success in ameliorating the global burden of disease due to these causes is attributable to their success in combating each disease. For additional information, please see the <a href=\"aboutindex.php\">about page</a> and <a href=\"methodology.php\">methodology page</a>");  		       	
        
        $("#popupwd1_hiv").click(function(){
        	$(".zoombig").hide();
        	$("#popupwd1_hiv_big").fadeIn();
       	});
       	$("#popupwd1_hiv_big").click(function(){
       		$(".zoombig").hide();
       	});
        $("#popupwd2_hiv").click(function(){
       		$(".zoombig").hide();
       		$("#popupwd2_hiv").hide();
        	$("#popupwd2_hiv_big").fadeIn();
       	});
       	$("#popupwd2_hiv_big").click(function(){
       		$(".zoombig").hide();
       		$("#popupwd2_hiv").fadeIn();
       	});
       	$("#showSummary").click(function(){
       		$("#disease_text").html("<p>Breakdown of Disease Impact:</p> Every year 9 million people are diagnosed with tuberculosis, every day more than 13,400 people are infected with AIDS, every 30 seconds malaria kills a child. About a third of all deaths, 18 million a year are poverty-related. Essential medicines for these diseases together help us reduce the global burden of disease but key drugs are having different degrees of success in combating these different diseases. The first graph illustrates the impact of key drugs on each of these diseases. Subsequent graphs illustrate the need for, access to, and effectiveness of these drugs. For additional information, please see the <a href=\"aboutindex.php\">About the Index</a> and <a href=\"methodology.php\">Methodology</a>."); 		
        	$("#dalys").fadeOut();
        	if($SHOW_DISEASE == 0){
                $("#showAll").removeClass("c_b_d_choose");
                $("#showAll").addClass("c_b_d");
        	}
            else if($SHOW_DISEASE == 1){
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
        	$SHOW_DISEASE = 4;           
        	$("#showSummary").removeClass("c_b_d");
            $("#showSummary").addClass("c_b_d_choose");
       		drawChart("",0,0,0);
       		$("#disease_text").css("width","1120px");
       		$("#control_by_disease").css("marginLeft","225px");
        	$(".popupwd").hide();   
       		$("#summary_pop").fadeIn();       	        	
        	$(".map_container").hide();
        	$("#emap").hide();
       	});
        drawMap("Maps/genDiseaseAll.php","mapcontainer_0","Map_0");
       	drawMap("Maps/genDiseaseMalaria.php","mapcontainer_1","Map_1");
       	drawMap("Maps/genDiseaseTB.php","mapcontainer_2","Map_2");
       	drawMap("Maps/genDiseaseHIV.php","mapcontainer_3","Map_3");
        $("#showAll").click(function(){
        	$("#disease_text").html("<p>Breakdown of Need for Drugs for Each Disease:</p> This map shows the need for drugs for all of the diseases together. Click on a country to see the need for drugs for each disease in each country separately.");  		
			$("#dalys").text("Disability Adjusted Life Years Lost to All Diseases");
        	$("#dalys").fadeIn();
            if($SHOW_DISEASE == 4){
                $("#showSummary").removeClass("c_b_d_choose");
                $("#showSummary").addClass("c_b_d");
                $("#emap").fadeIn();
        		$("#disease_text").css("width","712.912px");
        		$("#control_by_disease").css("marginLeft","0px");
        	}
            else if($SHOW_DISEASE == 1){
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
        	$SHOW_DISEASE = 0;           
        	$("#showAll").removeClass("c_b_d");
            $("#showAll").addClass("c_b_d_choose");
        	$(".popupwd").hide();   
       		$("#All_pop").fadeIn();
        	$SHOW_DISEASE = 0;   
        	drawChart("",0,0,0);     	
        	$(".map_container").hide();
       		$("#mapcontainer_0").fadeIn();
       		$(".malaria_bar").fadeIn();
       		$(".TB_bar").fadeIn();
       		$(".HIV_bar").fadeIn();
       	});
       	$("#showMalaria").click(function(){
       		$("#disease_text").html("<p>Breakdown of Malaria Impact</p>Every 30 seconds malaria kills a child. Essential medicines for malaria help us reduce the global burden of disease. These graphs illustrate the need for, access to, and effectiveness of medicines to combat malaria. For additional information, please see the <a href=\"aboutindex.php\">About the Index</a> and <a href=\"methodology.php\">Methodology</a>.");  	
       		$("#dalys").text("Disability Adjusted Life Years Lost to Malaria");
        	$("#dalys").fadeIn();
            if($SHOW_DISEASE == 4){
                $("#showSummary").removeClass("c_b_d_choose");
                $("#showSummary").addClass("c_b_d");
                $("#emap").fadeIn();
        		$("#disease_text").css("width","712.912px");
        		$("#control_by_disease").css("marginLeft","0px");
        	}
            else if($SHOW_DISEASE == 0){
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
        	$SHOW_DISEASE = 1;           
        	$("#showMalaria").removeClass("c_b_d");
            $("#showMalaria").addClass("c_b_d_choose");
       		$(".map_container").hide();
       		drawChart("",0,0,0);
       		$(".popupwd").hide();   
       		$("#Malaria_pop").fadeIn();
       		$(".malaria_bar").fadeIn();
       		$("#mapcontainer_1").fadeIn();
       		
       	});
       	$("#showTB").click(function(){
       		$("#disease_text").html("<p>Breakdown of Tuberculosis Impact</p> Every year 9 million people are diagnosed with tuberculosis. Essential medicines for tuberculosis help us reduce the global burden of disease. These graphs illustrate how much of the success in reducing the burden of disease due to tuberculosis is attributable to the need for medicines to combat tuberculosis, access to these medicines, and their efficacy. For additional information, please see the <a href=\"aboutindex.php\">About the Index</a> and <a href=\"methodology.php\">Methodology</a>.");
        	$("#dalys").text("Disability Adjusted Life Years Lost to TB");
        	$("#dalys").fadeIn();
            if($SHOW_DISEASE == 4){
                $("#showSummary").removeClass("c_b_d_choose");
                $("#showSummary").addClass("c_b_d");
                $("#emap").fadeIn();
        		$("#disease_text").css("width","712.912px");
        		$("#control_by_disease").css("marginLeft","0px");
        	}
            else if($SHOW_DISEASE == 0){
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
        	$SHOW_DISEASE = 2; 
        	$("#emap").fadeIn();        
        	$("#showTB").removeClass("c_b_d");
            $("#showTB").addClass("c_b_d_choose");
       		$(".map_container").hide();     		
       		$(".popupwd").hide();   
       		$("#TB_pop").fadeIn();
       		drawChart("",0,0,0);
       		$("#mapcontainer_2").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").fadeIn();
       		$(".HIV_bar").hide();  		
       	});
       	$("#showHIV").click(function(){
       		$("#disease_text").html("<p>Breakdown of HIV/AIDS Impact</p>Every day more than 13,400 people are infected with AIDS. Essential medicines for HIV/AIDS help us reduce the global burden of disease. These graphs illustrate how much of the success in reducing the burden of disease due to HIV/AIDS is attributable to the need for medicines to combat HIV/AIDS access to these medicines, and their efficacy. For additional information, please see the <a href=\"aboutindex.php\">About the Index</a> and <a href=\"methodology.php\">Methodology</a>.");
        	$("#dalys").text("Disability Adjusted Life Years Lost to HIV/AIDS");
        	$("#dalys").fadeIn();
            if($SHOW_DISEASE == 4){
                $("#showSummary").removeClass("c_b_d_choose");
                $("#showSummary").addClass("c_b_d");
                $("#emap").fadeIn();
        		$("#disease_text").css("width","712.912px");
        		$("#control_by_disease").css("marginLeft","0px");
        	}
            else if($SHOW_DISEASE == 0){
        		$("#showAll").removeClass("c_b_d_choose");
                $("#showAll").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 1){
                $("#showMalaria").removeClass("c_b_d_choose");
                $("#showMalaria").addClass("c_b_d");
        	}
        	else if($SHOW_DISEASE == 2){
                $("#showTB").removeClass("c_b_d_choose");
                $("#showTB").addClass("c_b_d");
        	}
        	$SHOW_DISEASE = 3;           
        	$("#showHIV").removeClass("c_b_d");
            $("#showHIV").addClass("c_b_d_choose");
       		$(".map_container").hide();
       		$(".popupwd").hide();   
       		$("#HIV_pop").fadeIn();
       		drawChart("",0,0,0); 		
       		$("#mapcontainer_3").fadeIn();
       		$(".malaria_bar").hide();
       		$(".TB_bar").hide();
       		$(".HIV_bar").fadeIn();
       	});
       	$("#showSummary").click();
    });

var Malaria_coverage={};
var Malaria_efficacy={};
var TB_coverage={};
var TB_efficacy={};
var HIV_children_coverage={};
var HIV_adults_coverage={};
var HIV_efficacy={};
var DALY={};
var Treatment_Coverage={};
var First_Line_Efficacy={};
var Aggregated_Impact_Score={};
function setArray(){
<?php
	include "../../con_/con_ghi.php";	
	$result = $con->query("call show_coverage_efficacy()");
	$str = "";
	while($row = mysqli_fetch_array($result)){
		if($row[0]<100){
			if($row[1]=="Malaria"){
				$str = $str."Malaria_coverage['$row[2]']=$row[3];Malaria_efficacy['$row[2]']=$row[4];";
			}
			if($row[1]=="TB"){
                if ($row[3]){
                    $str = $str."TB_coverage['$row[2]']=$row[3];";
                }
                if ($row[4]){
                    $str = $str."TB_efficacy['$row[2]']=$row[4];";
                }
				
			}
			if($row[1]=="HIV"){
				$str = $str."HIV_efficacy['$row[2]']=$row[4];";
			}
		}
		else if($row[0]<200){
			$str = $str."HIV_children_coverage['$row[2]']=$row[3];";
		}
		else{
			$str = $str."HIV_adults_coverage['$row[2]']=$row[3];";
		}
	}
	mysqli_close($con);
	include "../../con_/con_ghi.php";
	$result = $con->query("call show_disease()");
	while($row = mysqli_fetch_array($result)){
		$str = $str."DALY['$row[0]']=$row[1];Treatment_Coverage['$row[0]']=$row[2];First_Line_Efficacy['$row[0]']=$row[3];Aggregated_Impact_Score['$row[0]']=$row[4];";
	}
	mysqli_close($con);
	echo $str;
?>
}
function drawMap(source, div_id, map_id){
//	var myMap = new FusionCharts ("FCMap_WorldwithCountries", map_id, "706.912px", "522.928px", map_id);
	var myMap = new FusionCharts({
        "type": "WorldwithCountries",
        "dataFormat": "xmlurl",
        "dataSource": source,
        "width": "706.912px",
        "height": "522.928px"
        });	
    //myMap.setXMLUrl (source);//"Maps/genAll.php"
    myMap.render(div_id);
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
    	var options1 = {
     		width:387,
        	marginTop: 100,
        	fontName: 'Myriad pro Semibold',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},
        	vAxis:{ textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:80},
        	tooltip:{textStyle: {color: vColor}}
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
    	width: 387,
        height: 218,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        chartArea:{left:20,top:10,width:"80%",height:"90%"},
        colors: ["#0083CA","#FFB31C","#ef3e2e"],
        tooltip:{textStyle: {color: '#0083CA'}},
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
     		width:387,
        	marginTop: 180,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:70},
        	tooltip:{textStyle: {color: vColor}}
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
     		width:387,
        	marginTop: 180,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},
        	vAxis:{ format:'##.##%', textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:70},
        	tooltip:{textStyle: {color: vColor}}
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
			data1.addRows([[key, parseFloat(TB_coverage[key]),'color: #FFB31C']]);
		}
        for(var key in TB_efficacy){
			data2.addRows([[key, parseFloat(TB_efficacy[key]),'color: #FFB31C']]);
		}
		var options1 = {
     		width:397,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor,fontSize: 15}},
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 15}},
        	chartArea:{left:70},
        	tooltip:{textStyle: {color: vColor}}
    	};
		var options2 = {
     		width:397,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '40%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor,fontSize: 12},slantedText:true,slantedTextAngle:15,allowContainerBoundaryTextCufoff:false},
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 15}},
        	chartArea:{left:70},
        	tooltip:{textStyle: {color: vColor}}
    	};
    	formatter.format(data1, 1);
    	var chart1 = new google.visualization.ColumnChart(document.getElementById("TB_graph"));
    	chart1.draw(data1, options1);

    	formatter.format(data2, 1);
    	var chart2 = new google.visualization.ColumnChart(document.getElementById("TB_graph2"));
    	chart2.draw(data2, options2);
    }
    else if($SHOW_DISEASE == 3){
   		var formatter = new google.visualization.NumberFormat({pattern:'#,###.##%'});
    	var data1 = new google.visualization.DataTable();
    	data1.addColumn('string', 'Geographical Region');
		//data1.addColumn('number', 'Treatment Coverage for Children');	
		data1.addColumn('number', 'Treatment Coverage for Adults');	
		data1.addColumn({type: 'string', role: 'style'});
		
		var data2 = new google.visualization.DataTable();
    	data2.addColumn('string', 'Drug Regiment');
		data2.addColumn('number', 'Group A First Line Efficacy for Adults');		
		data2.addColumn({type: 'string', role: 'style'});
    	
    	for(var key in HIV_children_coverage){
			data1.addRows([[key, parseFloat(HIV_adults_coverage[key]),'color: #EF3E2E']]);
		}
		for(var key in HIV_efficacy){
			data2.addRows([[key, parseFloat(HIV_efficacy[key]),'color: #EF3E2E']]);
		}
		var options1 = {
     		width:387,
        	height: 230,
        	fontName: 'Myriad pro Regular',
			bar: { groupWidth: '50%' },
			legend: { position: "none"},
        	hAxis:{ textStyle:{color: vColor, minTextSpacing:2},slantedText:true, slantedTextAngle:20,allowContainerBoundaryTextCufoff:true},
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:75, height:400,top:40},
        	tooltip:{textStyle: {color: vColor}}
    	};
    	var options2 = {
     		width:387,
        	marginTop: 180,
        	height: 230,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '50%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor},slantedText:true },
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:70,height:100,top:40},
        	tooltip:{textStyle: {color: vColor}}
    	};
    	var options3 = {
     		width:580,
     		height: 430,
        	marginTop: 180,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},
			bar: { groupWidth: '50%' },
        	hAxis:{ textStyle:{color: vColor, minTextSpacing:2},slantedText:true, slantedTextAngle:20,allowContainerBoundaryTextCufoff:true},
        	vAxis:{ format:'##.##%',textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:130},
        	tooltip:{textStyle: {color: vColor}}
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
        	chartArea:{left:140},
        	tooltip:{textStyle: {color: vColor}, showColorCode: true}
    	};
    	formatter.format(data1, 1);
    	//formatter.format(data1, 2);
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
    else if($SHOW_DISEASE == 4){ 
    	var formatter = new google.visualization.NumberFormat({pattern:'###,###,###.##'} );
		var data0 = google.visualization.arrayToDataTable([
        	['Disease', 'Aggregated Impact Score', { role: 'style' }],
        	['Malaria', parseFloat(Aggregated_Impact_Score['Malaria']), '#0083CA' ],
        	['TB', parseFloat(Aggregated_Impact_Score['TB']), '#FFB31C'],
        	['HIV/AIDS', parseFloat(Aggregated_Impact_Score['HIV']), '#EF3E2E'],
        	
     	 	]);
    	var options0 = {
     		width:487,
     		height:400,
        	fontName: 'Myriad pro Regular',
        	//pieStartAngle: 100,
        	is3D: true,
        	legend: { position: 'right', textStyle: {color: '#0083CA', fontSize: 16}},
			isStacked: true,
			colors: ['#0083CA','#FFB31C','#EF3E2E'],
        	chartArea:{left:130,top:20,width:"360",height:"360"},
        	tooltip:{textStyle: {color: vColor}, showColorCode: true},
        	bar: { groupWidth: '100%' },
    	};
    
  		formatter.format(data0, 1);

    	var chart0 = new google.visualization.PieChart(document.getElementById("summary_graph_0"));
        function selectHandler() {
            var selectedItem = chart0.getSelection()[0];
            if (selectedItem) {
                var topping = data0.getValue(selectedItem.row, 0);
                if(topping == "Malaria"){
                    $("#showMalaria").click();
                }
                else if(topping == "TB"){
                    $("#showTB").click();
                }
                else if(topping == "HIV/AIDS"){
                    $("#showHIV").click();
                }
                else {
                    alert('The user selected ' + topping);
                }
            }
        }
	       google.visualization.events.addListener(chart0, 'select', selectHandler);     
		chart0.draw(data0, options0);
    	
    	var data1 = new google.visualization.DataTable();
    	data1.addColumn('string', 'Disease');
		data1.addColumn('number', 'DALY');
		data1.addColumn({type: 'string', role: 'style'});
    	
		data1.addRows([['Malaria', parseFloat(DALY['Malaria']), '#0083CA']]);
		data1.addRows([['TB', parseFloat(DALY['TB']), '#FFB31C']]);
		data1.addRows([['HIV', parseFloat(DALY['HIV']), '#EF3E2E']]);
    	var options1 = {
    		width: 187,
     		height:440,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '70%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor,fontSize: 15}},
        	vAxis:{ textStyle:{color: hColor,fontSize: 11}},
        	chartArea:{left:80},
        	tooltip:{textStyle: {color: vColor}}
    	};    	
    	formatter.format(data1, 1);
    	var chart1 = new google.visualization.ColumnChart(document.getElementById("summary_graph_1"));
    	chart1.draw(data1, options1);
    	
    	var formatter2 = new google.visualization.NumberFormat({pattern:'#,###.##%'});
    	var data2 = new google.visualization.DataTable();
    	data2.addColumn('string', 'Disease');
		data2.addColumn('number', 'Treatment Coverage');
		data2.addColumn({type: 'string', role: 'style'});
    	
		data2.addRows([['Malaria', parseFloat(Treatment_Coverage['Malaria']), '#0083CA']]);
		data2.addRows([['TB', parseFloat(Treatment_Coverage['TB']), '#FFB31C']]);
		data2.addRows([['HIV', parseFloat(Treatment_Coverage['HIV']), '#EF3E2E']]);
    	var options2 = {
    		width: 197,
     		height:440,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '70%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor,fontSize: 15}},
        	vAxis:{ format:'##.##%', textStyle:{color: hColor,fontSize: 11}},
        	chartArea:{left:60},
        	tooltip:{textStyle: {color: vColor}}
    	}; 
    	formatter2.format(data2, 1);   	
    	var chart2 = new google.visualization.ColumnChart(document.getElementById("summary_graph_2"));
    	chart2.draw(data2, options2);
    	
    	var data3 = new google.visualization.DataTable();
    	data3.addColumn('string', 'Disease');
		data3.addColumn('number', 'First-Line Efficacy');
		data3.addColumn({type: 'string', role: 'style'});
    	
		data3.addRows([['Malaria', parseFloat(First_Line_Efficacy['Malaria']), '#0083CA']]);
		data3.addRows([['TB', parseFloat(First_Line_Efficacy['TB']), '#FFB31C']]);
		data3.addRows([['HIV', parseFloat(First_Line_Efficacy['HIV']), '#EF3E2E']]);
    	var options3 = {
    		width: 197,
     		height:440,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},//'top', maxLines: 1
			bar: { groupWidth: '70%' },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor,fontSize: 15}},
        	vAxis:{ textStyle:{color: hColor,fontSize: 11}},
        	chartArea:{left:60},
        	tooltip:{textStyle: {color: vColor}}
    	}; 
    	formatter.format(data3, 1);   	
    	var chart3 = new google.visualization.ColumnChart(document.getElementById("summary_graph_3"));
    	chart3.draw(data3, options3);


    	
    }
}