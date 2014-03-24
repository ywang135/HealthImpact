<html>
    <head></head>
<body>
<?php
 	$manufacturer = $_POST['manufacturer'];
 	$disease = $_POST['disease'];
 	$drugs = $_POST['drugs'];
	$impactscore = $_POST['impactscore'];
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
 	$percentage = 0;
 	if(!empty($_POST['percentage'])){
 		$percentage = $_POST['percentage'];
 	}

 	include "./../con_/con_ghi.php";
 	$con->query("call update_Company($disease,$drugs,$impactscore,$malariascore,$tbscore,$hivscore,$percentage,$manufacturer)");
	mysqli_close($con);
	//echo $sql;
 	//echo $pwd."<br>".$country."<br>".$malariadalys."<br>".$tbdalys."<br>".$hivadultdalys."<br>".$hivchildrendalys."<br>".$overallhivdalys."<br>".$overalldalys."<br>".$malariaoscore."<br>".$tbscore."<br>".$hivscore."<br>".$overallimpactscore;
	header("Location: success.php");
?>
</body>
</html>