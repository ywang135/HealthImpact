<?php
	header('Content-type: text');
	include "../../con_/con_ghi.php";
	$itv1=2000000;
	$itv2=500000;
	echo "
	<map animation='10' showShadow='0' showBevel='0' showLabels='0' showMarkerLabels='1' fillColor='F1f1f1' borderColor='999999' baseFont='Verdana' baseFontSize='10'  markerBorderColor='000000' markerBgColor='' markerRadius='0' legendPosition='bottom' showMarkerToolTip='1' >
	<colorRange>
	<color minValue='$itv1' maxValue='12000000' color='#EF3E2E' />
	<color minValue='$itv2' maxValue='$itv1'  color='#FFB31C' />
		
	<color minValue='1' maxValue='$itv2' color='#0083CA' />
	</colorRange>
	<data>";
//useHoverColor='1'
//<entity id='174' value='174' link='JavaScript:myJS('R', 174);' />
	$result = $con->query("call show_top_countries(-1)");
	$hover ="";
	$i = 1;
	while($row = mysqli_fetch_array($result)){
		if($row[4]==0){
			$hover = 'F1f1f1';
		}
		elseif($row[4]<$itv2){
			$hover = '639ACE';
			
		}
		elseif ($row[4]<$itv1) {
			$hover = '';
		}
		else {
			//$hover = 'A9213A';
			//$hover = 'B42F23'; //darker one 75%
			$hover = 'FF6666';
		}
		echo "<entity id='$row[6]' value='$row[4]' hoverColor='$hover' link=\"JavaScript:popupJS('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]',0,$i);\" />
		";
		$i++;
    }
    mysqli_close($con);
    echo "
    	<entity id='24' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('Greenland','0','0','0','0',0,'');\" />
    	<entity id='31' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('','0','0','0','0',0,'');\" />
    	<entity id='32' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('','0','0','0','0',0,'');\" />
    	<entity id='50' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('','0','0','0','0',0,'');\" />
    	<entity id='87' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('','0','0','0','0',0,'');\" />
    	<entity id='102' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('','0','0','0','0',0,'');\" />
    	<entity id='126' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('','0','0','0','0',0,'');\" />
    	<entity id='149' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('','0','0','0','0',0,'');\" />
    	<entity id='171' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('','0','0','0','0',0,'');\" />
    	<entity id='174' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('','0','0','0','0',0,'');\" />
    	<entity id='204' value='0' hoverColor='F1f1f1' link=\"JavaScript:popupJS('South Sudan','0','0','0','0',0,'');\" />
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
