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
 	$abbreviation = $_POST['abbreviation'];
 	$name = $_POST['name'];
 	$impact_score = cleanData（$_POST['impact_score']）;
	$company = $_POST['company'];
	$disease = $_POST['disease'];

 	include "./../con_/con_ghi.php";
 	$con->query("call update_drug('$abbreviation','$name',$impact_score,'$company','$disease')");
	mysqli_close($con);
	//echo $sql;
 	//echo $pwd."<br>".$country."<br>".$malariadalys."<br>".$tbdalys."<br>".$hivadultdalys."<br>".$hivchildrendalys."<br>".$overallhivdalys."<br>".$overalldalys."<br>".$malariaoscore."<br>".$tbscore."<br>".$hivscore."<br>".$overallimpactscore;
	header("Location: success.php");
?>
</body>
</html>