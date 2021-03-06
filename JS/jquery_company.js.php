<?php
	header('Content-type: text/javascript');
?>
$SHOW_DISEASE = 0;
$title = "The Global Health Impact Company Index";
$(document).ready(function() {
       	$(this).attr("title", $title);
       	$("#main_menu #menu_the_index a").css("background-color", "#FFB31C");
       	$("#sub_menu #sub_company a").css("background-color", "#0083CA"); 
       	$("#copyright").css( { "top" : "1350px"} );
       	$("#copyright").fadeIn();
       	$("#rankls").mouseout(function(){
       		drawChart("bar_details_1", "", 0);
       		drawChart("bar_details_2", "", 1);
       	});
       	$(".items_rank_list").hide();
       	$("#list_all_impact").fadeIn();	
	$("#important_speech").click(function(){
		$("#important_speech").hide();
		$("#important_notes").fadeIn();
	});
	$("#important_notes").click(function(){
		$("#important_notes").hide();
		$("#important_speech").fadeIn();
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
       		$(".items_rank_list").hide();
       		$("#list_all_impact").fadeIn();
       		drawChart("bar_details_1", "", 0);
       		drawChart("bar_details_2", "", 1);
       	});
        $("#showAll").click();
       	$("#showMalaria").click(function(){
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
       		$(".items_rank_list").hide();
       		$("#list_malaria_impact").fadeIn();
       		drawChart("bar_details_1", "", 0);
       		drawChart("bar_details_2", "", 1);
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
       		$(".items_rank_list").hide();
       		$("#list_TB_impact").fadeIn(); 	
       		drawChart("bar_details_1", "", 0);
       		drawChart("bar_details_2", "", 1);	
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
	$result = $con->query("call show_top_company(-1)");
	$all = 0;
	$malaria = 0;
	$TB = 0;
	$HIV = 0;
	while($row = mysqli_fetch_array($result)){
		echo "AllImpact['$row[11]']=$row[3];
			ColorAll.push('#$row[10]');
			";
		if($row[4]>0){
			echo "MalariaImpact['$row[11]']=$row[4];
				ColorMalaria.push('#$row[10]');
				";
			$malaria = $malaria + floatval($row[4]);
		}
		if($row[5]>0){
			echo "TBImpact['$row[11]']=$row[5];
				ColorTB.push('#$row[10]');
				";
			$TB = $TB + floatval($row[5]);
		}
		if($row[6]>0){
			echo "HIVImpact['$row[11]']=$row[6];
				ColorHIV.push('#$row[10]');
				";
			$HIV = $HIV + floatval($row[6]);
    	}
    	$all = $all + floatval($row[3]);
    }
    echo "ColorAll.push('#3A96AA');ColorMalaria.push('#3A96AA');ColorTB.push('#3A96AA');ColorHIV.push('#3A96AA');";
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
    echo "AllImpact['Unalleviated Burden']=(-1*$all).toFixed(2);";
    echo "MalariaImpact['Unalleviated Burden']=(-1*$malaria).toFixed(2);";
    echo "TBImpact['Unalleviated Burden']=(-1*$TB).toFixed(2);";
    echo "HIVImpact['Unalleviated Burden']=(-1*$HIV).toFixed(2);";
   	mysqli_close($con);
	echo "}";
?>
function drawChart(div_name, companyName, showOther) {	
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Company Name');
	data.addColumn('number', 'Score');
	var row = 1;
	var isset = 0;
	var i = 0;
	if($SHOW_DISEASE == 0){
		for(var key in AllImpact){
			if(showOther==1 || key !== "Unalleviated Burden" ){
				data.addRows([[key, parseFloat(AllImpact[key])]]);
				if(key == companyName){
					row = i;
					isset = 1;
				}
				i++;
			}
		}
		document.getElementById('additional_statistic_1').innerHTML="Proportion of Global Disease Burden Alleviated by Each Company";
		var options = {
    	width: 367,
        height: 278,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        chartArea:{left:20,top:10,width:"80%",height:"90%"},
        colors: ColorAll,
        tooltip:{textStyle: {color: '#0083CA'}, showColorCode: true},
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 13}},
    	};
   	}
   	else if($SHOW_DISEASE == 1){
		for(var key in MalariaImpact){
			if(showOther==1 || key !== "Unalleviated Burden" ){
				data.addRows([[key, parseFloat(MalariaImpact[key])]]);
				if(key == companyName){
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
        chartArea:{left:20,top:10,width:"80%"},
        colors: ColorMalaria,
        tooltip:{textStyle: {color: '#0083CA'}, showColorCode: true},
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 13}},
    	};
   	}
   	else if($SHOW_DISEASE == 2){
		for(var key in TBImpact){
			if(showOther==1 || key !== "Unalleviated Burden" ){
				data.addRows([[key, parseFloat(TBImpact[key])]]);
				if(key == companyName){
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
        chartArea:{left:20,top:10,width:"80%",height:"98%"},
        colors: ColorTB,
        tooltip:{textStyle: {color: '#0083CA'}, showColorCode: true},
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 13}},
    	};
   	}
   	else if($SHOW_DISEASE == 3){
		for(var key in HIVImpact){
			if(showOther==1 || key !== "Unalleviated Burden" ){
				data.addRows([[key, parseFloat(HIVImpact[key])]]);
				if(key == companyName){
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
        chartArea:{left:20,top:10,width:"80%",height:"98%"},
        colors: ColorHIV,
        tooltip:{textStyle: {color: '#0083CA'}, showColorCode: true},
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 13}},
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