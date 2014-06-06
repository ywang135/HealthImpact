<html>
    <head></head>
<body>
<?php
function cleanData($a) {
     while(strpos($a, ',') !== FALSE) {
     	$a = str_replace( ',', '', $a );
     }
     return $a;
}
 	$malariadalys = 0;
 	if(!empty($_POST['malariadalys'])){
 		$malariadalys = cleanData($_POST['malariadalys']);
 	}
 	$tbdalys = 0;
 	if(!empty($_POST['tbdalys'])){
 		$tbdalys = cleanData($_POST['tbdalys']);
 	}
 	$hivadultdalys = 0;
 	if(!empty($_POST['hivadultdalys'])){
 		$hivadultdalys = cleanData($_POST['hivadultdalys']);
 	}
 	$hivchildrendalys = 0;
 	if(!empty($_POST['hivchildrendalys'])){
 		$hivchildrendalys = cleanData($_POST['hivchildrendalys']);
 	}
 	$overallhivdalys = 0;
 	if(!empty($_POST['overallhivdalys'])){
 		$overallhivdalys = cleanData($_POST['overallhivdalys']);
 	}
 	$overalldalys = 0;
 	if(!empty($_POST['overalldalys'])){
 		$overalldalys = cleanData($_POST['overalldalys']);
 	}
 	$malariascore = 0;
 	if(!empty($_POST['malariascore'])){
 		$malariascore = cleanData($_POST['malariascore']);
 	}
 	$tbscore = 0;
 	if(!empty($_POST['tbscore'])){
 		$tbscore = cleanData($_POST['tbscore']);
 	}
 	$hivscore = 0;
 	if(!empty($_POST['hivscore'])){
 		$hivscore = cleanData($_POST['hivscore']);
 	}
 	$overallimpactscore = -1;
 	if(!empty($_POST['overallimpactscore'])) {
 		$overallimpactscore = cleanData($_POST['overallimpactscore']);
 	}
 	include "./../con_/con_ghi.php";
 	$con->query("call update_sum(\"Malaria DALYs\", $malariadalys)");
 	$con->query("call update_sum(\"TB DALYs\", $tbdalys)");
 	$con->query("call update_sum(\"HIV Adult DALYs\", $hivadultdalys)");
 	$con->query("call update_sum(\"HIV Children DALYs\", $hivchildrendalys)");
 	$con->query("call update_sum(\"Overall HIV DALYs\", $overallhivdalys)");
 	$con->query("call update_sum(\"Overall DALYs\", $overalldalys)");
 	$con->query("call update_sum(\"Malaria Score\", $malariascore)");
 	$con->query("call update_sum(\"TB Score\", $tbscore)");
 	$con->query("call update_sum(\"HIV Score\", $hivscore)");
 	$con->query("call update_sum(\"Overall Impact Score\", $overallimpactscore)");
	mysqli_close($con);
	header("Location: success.php");
?>
</body>
</html>