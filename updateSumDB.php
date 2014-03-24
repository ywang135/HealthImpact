<html>
    <head></head>
<body>
<?php
 	$malariadalys = 0;
 	if(!empty($_POST['malariadalys'])){
 		$malariadalys = $_POST['malariadalys'];
 	}
 	$tbdalys = 0;
 	if(!empty($_POST['tbdalys'])){
 		$tbdalys = $_POST['tbdalys'];
 	}
 	$hivadultdalys = 0;
 	if(!empty($_POST['hivadultdalys'])){
 		$hivadultdalys = $_POST['hivadultdalys'];
 	}
 	$hivchildrendalys = 0;
 	if(!empty($_POST['hivchildrendalys'])){
 		$hivchildrendalys = $_POST['hivchildrendalys'];
 	}
 	$overallhivdalys = 0;
 	if(!empty($_POST['overallhivdalys'])){
 		$overallhivdalys = $_POST['overallhivdalys'];
 	}
 	$overalldalys = 0;
 	if(!empty($_POST['overalldalys'])){
 		$overalldalys = $_POST['overalldalys'];
 	}
 	$malariascore = 0;
 	if(!empty($_POST['malariascore'])){
 		$malariascore = $_POST['malariascore'];
 	}
 	$tbscore = 0;
 	if(!empty($_POST['tbscore'])){
 		$tbscore = $_POST['tbscore'];
 	}
 	$hivscore = 0;
 	if(!empty($_POST['hivscore'])){
 		$hivscore = $_POST['hivscore'];
 	}
 	$overallimpactscore = -1;
 	if(!empty($_POST['overallimpactscore'])) {
 		$overallimpactscore = $_POST['overallimpactscore'];
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