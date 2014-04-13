<?php
	header('Content-type: text/javascript');
?>
var disease={};
var drug={};
var impact_score={};
var malaria={};
var TB={};
var HIV={};
$title = "The Global Health Impact Reports";
$(document).ready(function() {
	setArray();
	$(this).attr("title", $title);
	$(".company_info").hide();
	$(".score_exp").hide();
	$("#bar_graph").hide()
	$(".drugs_info").hide();
	$("#menu_the_index").click(function(){
		window.location.href = 'country.php';
    	return false;
	});	
    $("#main_menu #menu_reports a").css("background-color", "#FFB31C");
    $("#copyright").css( { "margin-top" : "722px"} );
    $("#copyright").fadeIn();
    $("#info_detail #Sanofi").fadeIn(); 
    $("#score_explanation #Sanofi").fadeIn();
    $("#fhcn #Sanofi").fadeIn();
    $("#bar_graph").fadeIn();
    $("li").click(function(){
    	$(".company_info").hide();
    	$(".score_exp").hide();
    	$(".drugs_info").hide();
    	var str  = $(this).attr("id");
    	$("#info_detail #"+str).fadeIn();
    	$("#score_explanation #"+str).fadeIn();
    	$("#fhcn #"+str).fadeIn();
    	$("#bar_graph").fadeIn();
    	companyInfo(str);
    	
    }); 
    companyInfo("Sanofi");  
});

<?php
	header('Content-type: text/javascript');
	echo 
"function setArray(){";
	include "./../../con_/con_ghi.php";
	$result = $con->query("call show_top_company(-1)");
	while($row = mysqli_fetch_array($result)){
		echo "disease['$row[11]']=\"$row[1]\";
				drug['$row[11]']=\"$row[2]\";
				impact_score['$row[11]']=$row[3];
				malaria['$row[11]']=$row[4];
				TB['$row[11]']=$row[5];
				HIV['$row[11]']=$row[6];
			";
    }
   	mysqli_close($con);
	echo "}
	";
?>

function companyInfo(cName){
	cName = typeof cName !== 'undefined' ? cName : "Sanofi";
	var score = impact_score[cName].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
	document.getElementById('company_short_name').innerHTML=cName;
	document.getElementById('impact_score').innerHTML="Score: "+score;
	document.getElementById('company_drugs').innerHTML="Drugs: "+drug[cName];
	document.getElementById('company_disease').innerHTML="Diseases: "+disease[cName];
	drawChart(cName, parseFloat(malaria[cName]), parseFloat(TB[cName]), parseFloat(HIV[cName]));
}
google.load("visualization", "1", {packages: ["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart(cName, score1, score2, score3) {
	var vColor="#0083CA";
	var hColor="#0083CA";
	cName = typeof cName !== 'undefined' ? cName : "Sanofi";
	score1 = typeof score1 !== 'undefined' ? score1 : 13762452.39;
	score2 = typeof score2 !== 'undefined' ? score2 : 2742893.92;
	score3 = typeof score3 !== 'undefined' ? score3 : 0;
	var i = 0;
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Impact Name');
	data.addColumn('number', 'Score');
	data.addColumn({type: 'string', role: 'style'});
	if(score1>0){
		data.addRows([['Malaria', score1, 'color: #0083CA' ]]);
		i++;
	}
	if(score2>0){
		data.addRows([['TB', score2, 'color: #FFB31C' ]]);
		i++;
	}
	if(score3>0){
		data.addRows([['HIV/AIDS', score3, 'color: #EF3E2E' ]]);
		i++;
	}
	var width;
	if(i==1){
		width = '30%';
	}
	else if(i==2){
		width = '40%';
	}
    var options = {
     		width:267,
     		height:170,
        	marginTop: 20,
        	fontName: 'Myriad pro Regular',
        	legend: { position: "none"},
        	bar: { groupWidth: width },
			isStacked: true,
        	hAxis:{ textStyle:{color: vColor}},
        	vAxis:{ textStyle:{color: hColor,fontSize: 13}},
        	chartArea:{left:60,top:0,width:"80%"}
    };
    var formatter = new google.visualization.NumberFormat({pattern:'###,###.##'} );
  	formatter.format(data, 1);
    var chart = new google.visualization.BarChart(document.getElementById("bar_graph"));
    chart.draw(data, options);
}