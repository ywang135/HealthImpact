<?php
	header('Content-type: text/javascript');
?>
$SHOW_DISEASE = 0;
$ORDER_NAME_OR_IMPACT = 0;
$title = "The Global Health Impact Company Index";
$(document).ready(function() {		
       	//drawChart("bar_details", "", parseFloat(0), parseFloat(0), parseFloat(0));
       	//popupJS("", 0, 0, 0, 0, "", 0);
       	$(this).attr("title", $title);
       	$("#copyright").css( { "top" : "1200px"} );
       	$("#popupwd").hide();
       	$(".company_rank_list").hide();
       	$("#list_all_impact").fadeIn();
       	$("#showAll a").css("background-color", "#ef3e2e");
       	$("#rankls").mouseover(function(){
       		$("#company_text").hide();
       		$("#popupwd").show();
       	});
       	$("#rankls").mouseout(function(){
       		$("#company_text").show();
       		$("#popupwd").hide();
       	});
       	$("#popupwd").mouseover(function(){
       		$("#company_text").hide();
       		$("#popupwd").show();
       	});
       	$("#popupwd").mouseout(function(){
       		$("#company_text").show();
       		$("#popupwd").hide();
       	});    	
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
       		$(".company_rank_list").hide();
       		$("#list_all_impact").fadeIn();
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
       		$(".company_rank_list").hide();
       		$("#list_malaria_impact").fadeIn();
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
       		$(".company_rank_list").hide();
       		$("#list_TB_impact").fadeIn(); 		
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
       		$(".company_rank_list").hide();
       		$("#list_HIV_impact").fadeIn();
       	});
       	setArray();
       	drawChart("bar_details_1", "", 0);
    });
function popupPiGraph(vName){
	drawChart("bar_details_1", vName,0);
	drawChart("bar_details_2", vName,$SHOW_DISEASE);
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
	include "./../../con/con_ghi.php";
	$result = $con->query("call show_top_company(-1)");
	$all = 0;
	$malaria = 0;
	$TB = 0;
	$HIV = 0;
	while($row = mysqli_fetch_array($result)){
		echo "AllImpact['$row[0]']=$row[3];
			ColorAll.push('#$row[10]');
			";
		if($row[4]>0){
			echo "MalariaImpact['$row[0]']=$row[4];
				ColorMalaria.push('#$row[10]');
				";
			$malaria = $malaria + floatval($row[4]);
		}
		if($row[5]>0){
			echo "TBImpact['$row[0]']=$row[5];
				ColorTB.push('#$row[10]');
				";
			$TB = $TB + floatval($row[5]);
		}
		if($row[6]>0){
			echo "HIVImpact['$row[0]']=$row[6];
				ColorHIV.push('#$row[10]');
				";
			$HIV = $HIV + floatval($row[6]);
    	}
    	$all = $all + floatval($row[3]);
    }
    echo "ColorAll.push('#b1b1b1');ColorMalaria.push('#b1b1b1');ColorTB.push('#b1b1b1');ColorHIV.push('#b1b1b1');";
    mysqli_close($con);
    include "./../../con/con_ghi.php";
    $result = $con->query("call show_sum()");
    while($row = mysqli_fetch_array($result)){
    	$total = floatval($row[1]);
    	if(strcmp($row[0],'Overall Impact Score')==0){
    		echo "AllImpact['Other']=($total-$all).toFixed(2);";
    	}
    	else if(strcmp($row[0],'Malaria Score')==0 && floatval($row[1])>0){
    		echo "MalariaImpact['Other']=($total-$malaria).toFixed(2);";
    	}
    	else if(strcmp($row[0],'TB Score')==0 && floatval($row[1])>0){
    		echo "TBImpact['Other']=($total-$TB).toFixed(2);";
    	}
    	else if(strcmp($row[0],'HIV Score')==0 && floatval($row[1])>0){
    		echo "HIVImpact['Other']=($total-$HIV).toFixed(2);";
    	}
    }    
   	mysqli_close($con);
	echo "}";
?>
function drawChart(div_name, companyName, disease) {	
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Company Name');
	data.addColumn('number', 'Score');
	var row = 1;
	var i = 0;
	if(disease == 0){
		for(var key in AllImpact){
			data.addRows([[key, parseFloat(AllImpact[key])]]);
			if(key == companyName){
				row = i;
			}
			i++;
		}
		var options = {
    	width: 337,
        height: 304,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        chartArea:{left:20,top:10,width:"80%",height:"100%"},
        colors: ColorAll,
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 10.5}},
    	};
   	}
   	else if(disease == 1){
		for(var key in MalariaImpact){
			data.addRows([[key, parseFloat(MalariaImpact[key])]]);
			if(key == companyName){
				row = i;
			}
			i++;
		}
		document.getElementById('additional_statistic_1').innerHTML="Proportion of Global Malaria Burden by Company";
		var options = {
    	width: 337,
        height: 304,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        chartArea:{left:20,top:10,width:"80%"},
        colors: ColorMalaria,
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 10.5}},
    	};
   	}
   	else if(disease == 2){
		for(var key in TBImpact){
			data.addRows([[key, parseFloat(TBImpact[key])]]);
			if(key == companyName){
				row = i;
			}
			i++;
		}
		document.getElementById('additional_statistic_1').innerHTML="Proportion of Global TB Burden by Company";
		var options = {
    	width: 337,
        height: 304,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        chartArea:{left:20,top:10,width:"80%",height:"98%"},
        colors: ColorTB,
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 10.5}},
    	};
   	}
   	else if(disease == 3){
		for(var key in HIVImpact){
			data.addRows([[key, parseFloat(HIVImpact[key])]]);
			if(key == companyName){
				row = i;
			}
			i++;
		}
		document.getElementById('additional_statistic_1').innerHTML="Proportion of Global HIV Burden by Company";
		var options = {
    	width: 337,
        height: 304,
        fontName: 'Myriad pro Semibold',
        is3D: true,
        sliceVisibilityThreshold:0,
        chartArea:{left:20,top:10,width:"80%",height:"98%"},
        colors: ColorHIV,
        legend:{position: 'right', textStyle: {color: '#0083CA', fontSize: 10.5}},
    	};
   	}
    var chart = new google.visualization.PieChart(document.getElementById(div_name));  
    chart.draw(data, options);
	options.slices = options.slices || {};
        // clear all slice offsets
	for (var x in options.slices) {
        options.slices[x].offset = 0;
    }
    // set the offset of the slice associated with the hovered over legend entry
    options.slices[row] = options.slices[row] || {};
    options.slices[row].offset = 0.2;
    chart.draw(data, options);
}
// data.setCell(v_id,1,data.getValue(v_id,1),{color: 'black'});	