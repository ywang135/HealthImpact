<?php
 	header('Content-type: text');
	$itv1=1000000;
	$itv2=100000;
	
	echo "<map animation='10' width='100%' height='100%' showShadow='0' showBevel='0' showLabels='0' showMarkerLabels='1' fillColor='F1f1f1' borderColor='999999' baseFont='Verdana' baseFontSize='10' markerBorderColor='000000' markerBgColor='' markerRadius='0' legendPosition='bottom' showMarkerToolTip='1' >
	<colorRange>
	<color minValue='$itv1' maxValue='16000000' color='#EF3E2E' />
	<color minValue='$itv2' maxValue='$itv1' color='#FFB31C' />
	<color minValue='1' maxValue='$itv2' color='#0083CA' />
	</colorRange>
	<data>";
	include "../../con_/con_ghi.php";
	$result = $con->query("call show_top_countries_by_TB_for_disease(-1)");
	$hover ="";
	$i = 1;
	while($row = mysqli_fetch_array($result)){
		if($row[2]==0){
			$hover = 'F1f1f1';
		}
		elseif($row[2]<$itv2){
			$hover = '639ACE';
		}
		elseif ($row[2]<$itv1) {
			$hover = '';
		}
		elseif ($row[2]>=$itv1) {
			$hover = 'FF6666';
		}
		echo "<entity id='$row[6]' value='$row[2]' hoverColor='$hover'/>";
		$i++;
    }
    mysqli_close($con);
    echo "
    	<entity id='24' value='0' hoverColor='F1f1f1' />
    	<entity id='31' value='0' hoverColor='F1f1f1' />
    	<entity id='32' value='0' hoverColor='F1f1f1'  />
    	<entity id='50' value='0' hoverColor='F1f1f1'  />
    	<entity id='87' value='0' hoverColor='F1f1f1'  />
    	<entity id='102' value='0' hoverColor='F1f1f1'  />
    	<entity id='126' value='0' hoverColor='F1f1f1'  />
    	<entity id='149' value='0' hoverColor='F1f1f1'  />
    	<entity id='171' value='0' hoverColor='F1f1f1'  />
    	<entity id='174' value='0' hoverColor='F1f1f1'  />
    	<entity id='204' value='0' hoverColor='F1f1f1'  />
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
