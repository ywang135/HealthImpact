<html>
    <head></head>
<body>
<?php
 	$country = $_POST['countryName'];
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
 	if(!empty($_POST['overallimpactscore'])){
 		$overallimpactscore = $_POST['overallimpactscore'];
 	}
 	include "./../con_/con_ghi.php";
 	$con->query("call update_over_all_sheet($malariascore,$tbscore,$hivscore,$overallimpactscore,$malariadalys,$tbdalys,$hivadultdalys,$hivchildrendalys,
 		$overallhivdalys,$overalldalys,\"$country\" )");
	mysqli_close($con);
	//echo $sql;
 	//echo $pwd."<br>".$country."<br>".$malariadalys."<br>".$tbdalys."<br>".$hivadultdalys."<br>".$hivchildrendalys."<br>".$overallhivdalys."<br>".$overalldalys."<br>".$malariaoscore."<br>".$tbscore."<br>".$hivscore."<br>".$overallimpactscore;
	header("Location: success.php");
?>
</body>
</html>