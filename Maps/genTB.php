

<?php

	include "../../con/con_ghi.php";
	echo "
	<map animation='10' showShadow='0' showBevel='0' showLabels='0' showMarkerLabels='1' fillColor='F1f1f1' borderColor='999999' baseFont='Verdana' baseFontSize='10' markerBorderColor='000000' markerBgColor='' markerRadius='0' legendPosition='bottom' showMarkerToolTip='1' >
	<colorRange>
	<color minValue='2000000' maxValue='10000000' displayValue='High' color='#EF3E2E' />
	<color minValue='500000' maxValue='2000000' displayValue='middle' color='#FFB31C' />
	<color minValue='0' maxValue='500000' displayValue='low' color='#0083CA' />
	</colorRange>
	<data>";
//useHoverColor='1'
//<entity id='174' value='174' link='JavaScript:myJS('R', 174);' />
	$result = $con->query("call show_countries_by_id()");
	$hover ="";
	while($row = mysqli_fetch_array($result)){
		if($row[4]<500000){
			$hover = '639ACE';
		}
		elseif ($row[4]<2000000) {
			$hover = 'DFE31D';
		}
		else {
			$hover = 'FF030C';
		}
		echo "<entity id='$row[5]' value='$row[2]' hoverColor='$hover' link=\"JavaScript:myJSTB('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[6]');\" />";
    }
    mysqli_close($con);
    echo "
    	</data>
	
	<markers>
	<shapes>
	     <shape id='myCustomShape' type='circle' fillcolor='FFFFFF,000099' fillPattern='radial' showBorder='1' radius='40'/>
		 <shape id='newCustomShape' type='circle' fillcolor='FFFFFF,000099' fillPattern='radial' showBorder='0' radius='3'/>
		 </shapes>
		<definition>
    </definition>
		<application>
		</application>
		</markers>
		</map>";
	
?>
