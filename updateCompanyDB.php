<html>
    <head></head>
<body>
<?php
function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}
function cleanData($a) {
     while(strpos($a, ',') !== FALSE) {
     	$a = str_replace( ',', '', $a );
     }
     return $a;
}
 	$manufacturer = $_POST['manufacturer'];
 	$disease = $_POST['disease'];
 	$drugs = $_POST['drugs'];
	$impactscore = cleanData( $_POST['impactscore']);
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
 	$percentage = 0;
 	if(!empty($_POST['percentage'])){
 		$percentage = $_POST['percentage'];
 		$percentage=str_replace("%", "", $percentage);
 	}

 	include "./../con_/con_ghi.php";
 	$sql = "call update_Company('$disease','$drugs',$malariascore,$tbscore,$hivscore,$impactscore,$percentage,'$manufacturer')";
 	//debug_to_console( $sql );
 	$con->query($sql);
	mysqli_close($con);
	header("Location: success.php");
?>
</body>
</html>