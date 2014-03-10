$SHOW_DISEASE = 0;
$title = "The Global Health Impact Drug Index";
$(document).ready(function() {		
      	$(this).attr("title", $title);
      	$("#main_menu #menu_the_index a").css("background-color", "#FFB31C");
       	$("#sub_menu #sub_drug a").css("background-color", "#0083CA"); 
       	$("#copyright").css( { "top" : "1250px"} );
       	$("#copyright").fadeIn();
       	$("#rankls").mouseout(function(){
       		drawChart("bar_details_1", "", 0);
       		drawChart("bar_details_2", "", 1);
       	});
       	$(".items_rank_list").hide();
       	$("#list_all_impact").fadeIn();
       	$("#showAll a").css("background-color", "#ef3e2e"); 		
        $("#showAll").click(function(){
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
       		$(".items_rank_list").hide();
       		$("#list_all_impact").fadeIn();
       		drawChart("bar_details_1", "", 0);
       		drawChart("bar_details_2", "", 1);
       	});
       	$("#showMalaria").click(function(){
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
       		$(".items_rank_list").hide();
       		$("#list_malaria_impact").fadeIn();
       		drawChart("bar_details_1", "", 0);
       		drawChart("bar_details_2", "", 1);
       	});
       	$("#showTB").click(function(){
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
       		$(".items_rank_list").hide();
       		$("#list_TB_impact").fadeIn(); 	
       		drawChart("bar_details_1", "", 0);
       		drawChart("bar_details_2", "", 1);	
       	});
       	$("#showHIV").click(function(){
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
       		$(".items_rank_list").hide();
       		$("#list_HIV_impact").fadeIn();
       		drawChart("bar_details_1", "", 0);
       		drawChart("bar_details_2", "", 1);
       	});
       	setArray();
       	drawChart("bar_details_1", "", 0);
       	drawChart("bar_details_2", "", 1);
    });
function popupPiGraph(vName){
	drawChart("bar_details_1", vName,0);
	drawChart("bar_details_2", vName,1);
}
google.load("visualization", "1", {packages: ["corechart"]});
google.setOnLoadCallback(drawChart);
var AllImpact={};
var MalariaImpact={};
var TBImpact={};
var HIVImpact={};
var ColorAll=[];
var ColorMalaria=[];
var ColorTB=[];
var ColorHIV=[];
<?php
	header('Content-type: text/javascript');
	echo 
"function setArray(){";
	include "./../../con_/con_ghi.php";
	$result = $con->query("call show_top_drug(-1)");
	$all = 0;
	$malaria = 0;
	$TB = 0;
	$HIV = 0;
	while($row = mysqli_fetch_array($result)){
		echo "AllImpact['$row[0]']=$row[2];
		ColorAll.push('#$row[5]');";
		if($row[4]=="Malaria"){
			echo "MalariaImpact['$row[0]']=$row[2];ColorMalaria.push('#$row[5]');";
			$malaria = $malaria + floatval($row[2]);
		}
		if($row[4]=="TB"){
			echo "TBImpact['$row[0]']=$row[2];ColorTB.push('#$row[5]');";
			$TB = $TB + floatval($row[2]);
		}
		if($row[4]=="HIV"){
			echo "HIVImpact['$row[0]']=$row[2];ColorHIV.push('#$row[5]');";
			$HIV = $HIV + floatval($row[2]);
    	}
    	$all = $all + floatval($row[2]);
    }
    echo "ColorAll.push('#815017');ColorMalaria.push('#815017');ColorTB.push('#815017');ColorHIV.push('#815017');";
    mysqli_close($con);
    include "./../../con_/con_ghi.php";
    $result = $con->query("call show_sum()");
    while($row = mysqli_fetch_array($result)){
    	$total = floatval($row[1]);
    	if(strcmp($row[0],'Overall DALYs')==0){
    		$all = $all - floatval($row[1]);
    	}
    	else if(strcmp($row[0],'Malaria DALYs')==0 && floatval($row[1])>1){    		
    		$malaria = $malaria - floatval($row[1]);
    	}
    	else if(strcmp($row[0],'TB DALYs')==0 && floatval($row[1])>1){
    		$TB = $TB - floatval($row[1]);   		
    	}
    	else if(strcmp($row[0],'HIV Adult DALYs')==0 && floatval($row[1])>1){
    		$HIV = $HIV - floatval($row[1]);    		
    	}
    	else if(strcmp($row[0],'HIV Children DALYs')==0 && floatval($row[1])>1){
    		$HIV = $HIV - floatval($row[1]);    		
    	}    	
    	
    }    
    echo "AllImpact['Burden Unalleviated']=(-1*$all).toFixed(2);";
    echo "MalariaImpact['Burden Unalleviated']=(-1*$malaria).toFixed(2);";
    echo "TBImpact['Burden Unalleviated']=(-1*$TB).toFixed(2);";
    echo "HIVImpact['Burden Unalleviated']=(-1*$HIV).toFixed(2);";
   	mysqli_close($con);
	echo "}";
?>
function drawChart(div_name, itemsName, showOther) {	
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Company Name');
	data.addColumn('number', 'Score');
	var row = 1;
	var changeRow = 0;
	var isset = 0;
	var i = 0;
	if($SHOW_DISEASE == 0){
		if(itemsName!=""){
			row = 0;
			isset = 1;
			data.addRows([[itemsName, parseFloat(AllImpact[itemsName])]]);
		}
		for(var key in AllImpact){
			if(showOther==1 || key !== "Burden Unalleviated" ){				
				if(key != itemsName){
					data.addRows([[key, parseFloat(AllImpact[key])]]);	
				}
				else {
					changeRow = i;
				}
				i++;
			}
		}
		document.getElementById('additional_statistic_1').innerHTML="Proportion of Global Disease Burden Alleviated by Each Company";
		var cloneArray = ColorAll.slice(0);
		if(isset == 1){
			var temp = cloneArray[0];
    		cloneArray[0] = cloneArray[changeRow];
    		cloneArray[changeRow] = temp;
    	}
		var options = {
    	width: 367,
        height: 278,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        colors: cloneArray,
        chartArea:{left:20,top:10,width:"80%",height:"90%"},
        tooltip:{textStyle: {color: '#0083CA'}, showColorCode: true},
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 13.5}},
    	};
   	}
   	else if($SHOW_DISEASE == 1){
		for(var key in MalariaImpact){
			if(showOther==1 || key !== "Burden Unalleviated" ){
				data.addRows([[key, parseFloat(MalariaImpact[key])]]);
				if(key == itemsName){
					row = i;
					isset = 1;
				}
				i++;
			}
		}
		document.getElementById('additional_statistic_1').innerHTML="Proportion of Global Malaria Burden Alleviated by Each Company";
		var options = {
    	width: 367,
        height: 278,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        colors: ColorMalaria,
        chartArea:{left:20,top:10,width:"80%"},
        tooltip:{textStyle: {color: '#0083CA'}, showColorCode: true},
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 13.5}},
    	};
   	}
   	else if($SHOW_DISEASE == 2){
		for(var key in TBImpact){
			if(showOther==1 || key !== "Burden Unalleviated" ){
				data.addRows([[key, parseFloat(TBImpact[key])]]);
				if(key == itemsName){
					row = i;
					isset = 1;
				}
				i++;
			}
		}
		document.getElementById('additional_statistic_1').innerHTML="Proportion of Global TB Burden Alleviated by Company";
		var options = {
    	width: 367,
        height: 278,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        colors: ColorTB,
        chartArea:{left:20,top:10,width:"80%",height:"98%"},
        tooltip:{textStyle: {color: '#0083CA'}, showColorCode: true},
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 13.5}},
    	};
   	}
   	else if($SHOW_DISEASE == 3){
		for(var key in HIVImpact){
			if(showOther==1 || key !== "Burden Unalleviated" ){
				data.addRows([[key, parseFloat(HIVImpact[key])]]);
				if(key == itemsName){
					row = i;
					isset = 1;
				}
				i++;
			}
		}
		document.getElementById('additional_statistic_1').innerHTML="Proportion of Global HIV Burden Alleviated by Company";
		var options = {
    	width: 367,
        height: 278,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        colors: ColorHIV,
        chartArea:{left:20,top:10,width:"80%",height:"98%"},
        tooltip:{textStyle: {color: '#0083CA'}, showColorCode: true},
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 13.5}},
    	};
   	}
   	var formatter = new google.visualization.NumberFormat({pattern:'###,###.##'} );
  	formatter.format(data, 1);
    var chart = new google.visualization.PieChart(document.getElementById(div_name));  
    chart.draw(data, options);
    if(isset == 1){
		options.slices = options.slices || {};
        // clear all slice offsets
		for (var x in options.slices) {
    	    options.slices[x].offset = 0;
   	 	}
    	options.slices[row] = options.slices[row] || {};
    	options.slices[row].offset = 0.2;
    	chart.draw(data, options);
    }
}
	