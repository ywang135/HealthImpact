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
 	$disease = $_POST['disease'];
 	$DALY = cleanData($_POST['DALY']);
 	$Treatment_Coverage = str_replace("%", "", $_POST['Treatment_Coverage']);
	$fle = $_POST['First-Line_Efficacy'];
	$Aggregated_Impact_Score = cleanData($_POST['Aggregated_Impact_Score']);

 	include "./../con_/con_ghi.php";
 	$sql = "call update_disease('$disease', $DALY, $Treatment_Coverage, $fle, $Aggregated_Impact_Score)";
 	$con->query($sql);
	mysqli_close($con);
	header("Location: success.php");
?>
</body>
</html>