
    <script type="text/javascript" src="FusionCharts.js"></script>
    <script LANGUAGE="JavaScript">
	<!--
		function myJS(vName, sc1, sc2, sc3, tsc, iso_code){
			var str = "<p>Name: "+vName+",<br>Overall Impact: "+tsc+",<br>ISO code: "+iso_code;		
			document.getElementById('dis').innerHTML=str;
			drawChart("dis", vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3));
			/*var r=confirm("Press a button");
			if (r==true){
  				window.location.href = "../country.php?q="+encodeURIComponent(vName);
  			}*/
		}
		var v1 = document.getElementById('mapContainer').getBoundingClientRect();
		var v2 = document.getElementById('coverBanner');
		v2.style.left = v1.left + "px";
		v2.style.top = v1.top + "px";
	//-->	
</script>
<style>
#coverbanner{color:white;position:absolute;width:130px;height:20px;font-size:12px;background:white;filter:alpha(opacity=50);}
#dis{font-size:12px;width:130px;height:60px;filter:alpha(opacity=50);}
#subtitle{border:0px;font-size:18px;}

#country:hover{
	background: grey;
	color:white;
}
</style>
   
    <table rules=cols width="76%"><tr><td align="center" width="45%">
     <div id="subtitle">Rank</div>
	<div id="rank">
	<table frame=hsides rules=rows width="100%">
	<?php
		$i = 1;
		include "../../con/con_ghi.php";
		$result = $con->query("call show_top_countries(10)");
		while($row = mysqli_fetch_array($result)){
			$q=urlencode($row[0]);
			echo "<tr><td>$i</td><td><div id='country' 
			onmouseover=\"myJS('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[6]');\"><a href='country?name=$q'>$row[0]</a></div></td></tr>";
  			if($i==11){
				echo "<div id='hide'>";
			}
			$i ++;
			
    	}
    	if($i>10){
    		echo "</div>";
    	}
    	mysqli_close($con);
	?>
	<tr><td>
	</td>
	<td style="font-size:13px;padding-left:13px;padding-top:10px;padding-bottom:10px;">
	<a href="#subnavi2">All List</a>
	</td></tr>
	</table>	
	</div>
	
	<table>
		<tr><td>
	     <div id="dis" height='100px'><p>Bar charts displayed here</div>
		</td></tr>
	</table>
	</td><td>
	<table rules=rows ><tr><td align="center">
	<div id="mapfs">
    <div id="coverbanner">By Nicole & Yi</div>


    <div id="mapContainer">XT will load here!</div> 
    <script type="text/javascript"><!--
         
    var myMap = new FusionCharts ("FCMap_WorldwithCountries.swf", "MyMapId", "702.912", "500.928", "0");
      myMap.setXMLUrl ("genr.php");//Maps/WorldwithCountriesData.xml
      myMap.render("mapContainer"); 
    // --> 
    </script>
	</div>
	</td></tr>
	</table>
	</td></tr></table>

