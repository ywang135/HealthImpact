<table cellpadding="1">
			<?php 
				include "./../../con_/con_ghi.php";
				$result = $con->query("call show_top_countries_by_TB(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
					echo "<tr onmouseover=\"popupJS('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]',2,$i);\">
    					<td id=\"$row[6]\">$i</td><td align='left'>";
    				if(strlen($row[0])<15 || strlen($row[5])==0){
    					echo "<a href='#'>$row[0]</a>";	
    				}
    				else {
    					echo "<a href='#'>$row[5]</a>";
    				}
    				if($row[2]<1){
    					$l2 = "0px";
    				}
    				else{
    					$l2 = "".max(($row[2]*250/10551873),1)."px";
    				}
    				echo "
    					<br>
    					<div class='TB_bar' style='float:left;background:#FFB31C;height:15px;width:$l2;'></div>
    					</td></tr>";
    				$i++;
    			}
   		 		mysqli_close($con);
			?>
			</table>