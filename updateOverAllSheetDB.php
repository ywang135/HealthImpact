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
 	$country = $_POST['countryName'];
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
 	if(!empty($_POST['overallimpactscore'])){
 		$overallimpactscore = cleanData($_POST['overallimpactscore']);
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