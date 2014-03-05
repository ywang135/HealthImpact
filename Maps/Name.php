<table cellpadding="1">
			<?php 
				include "./../../con_/con_ghi.php";
				$result = $con->query("call show_top_countries_by_name(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
					echo "<tr onmouseover=\"popupJS('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]',0,$i);\">
    					<td id=\"$row[6]\">$i</td><td align='left'>";
    				if(strlen($row[0])<15 || strlen($row[5])==0){
    					echo "<a href='#'>$row[0]</a>";	
    				}
    				else {
    					echo "<a href='#'>$row[5]</a>";
    				}
    				if($row[4]<1){
    					$l1 = "0px";$l2 = "0px";$l3 = "0px";
    				}
    				else{
    					$l1 = "".max(($row[1]*250/10551873),0.5)."px";
    					$l2 = "".max(($row[2]*250/10551873),0.5)."px";
    					$l3 = "".max(($row[3]*250/10551873),0.5)."px";
    				}
    				echo "
    					<br>
    					<div class='malaria_bar' style='float:left;background:#0083CA;height:15px;width:$l1;'></div>
    					<div class='TB_bar' style='float:left;background:#FFB31C;height:15px;width:$l2;'></div>
    					<div class='HIV_bar' style='float:left;background:#EF3E2E;height:15px;width:$l3;'></div>
    					</td></tr>";
    				$i++;
    			}
   		 		mysqli_close($con);
			?>
			</table>