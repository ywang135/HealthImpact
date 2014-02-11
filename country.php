<?php
	include "header.php";
?>
<script type="text/javascript" src="Maps/FusionCharts.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="JS/jquery_country.js"></script>
<script type="text/javascript">
	$title = "The Global Health Impact Country Index";
    $(document).ready(function() {
        $(this).attr("title", $title);
        $("#sub_menu").show();
       	$("#copyright").css( { "top" : "950px"} );
    });
 
</script>

	<div class="main_body">
	<div id="control_by_order">
		<div id="orderByName"><a href="#listByName">Name</a></div>
		<div id="orderByImpact"><a href="#listByImpact">Impact</a></div>	
	</div><!-- #control_by_order end -->
	<div id="control_by_disease">
		<div id="showMalaria" class="c_b_d"><a href="#Malaria">Malaria</a></div>
		<div id="showTB" class="c_b_d"><a href="#TB">TB</a></div>	
		<div id="showHIV" class="c_b_d"><a href="#HIV">HIV/AIDS</a></div>
		<div id="showAll" class="c_b_d"><a href="#All">All</a></div>
	</div><!-- #control_by_disease end -->
	<div id="rankls">
		<div id="country_by_rank">
		Country & Overall Impact By Rank
		</div><!-- #country_by_rank end -->
		<div id="all_list">
		<div id="list_all_impact" class="country_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con/con_ghi.php";
				$result = $con->query("call show_top_countries(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupJS('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[6]');\">
    					<td>$i</td><td align='left'>
    					<a href='#'>$row[0]</a>";
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
		</div><!-- #list_all_impact end -->
		<div id="list_all_name" class="country_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con/con_ghi.php";
				$result = $con->query("call show_top_countries_by_name(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupJS('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[6]');\">
    					<td>$i</td><td align='left'>
    					<a href='#'>$row[0]</a>";
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
		</div><!-- #list_all_name end -->
		<div id="list_malaria_impact" class="country_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con/con_ghi.php";
				$result = $con->query("call show_top_countries_by_malaria(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupJS('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[6]');\">
    					<td>$i</td><td align='left'>
    					<a href='#'>$row[0]</a>";
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
		</div><!-- #list_malaria_impact end -->
		<div id="list_TB_impact" class="country_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con/con_ghi.php";
				$result = $con->query("call show_top_countries_by_TB(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupJS('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[6]');\">
    					<td>$i</td><td align='left'>
    					<a href='#'>$row[0]</a>";
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
		</div><!-- #list_TB_impact end -->
		<div id="list_HIV_impact" class="country_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con/con_ghi.php";
				$result = $con->query("call show_top_countries_by_HIV(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupJS('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[6]');\">
    					<td>$i</td><td align='left'>
    					<a href='#'>$row[0]</a>";
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
		</div><!-- #list_HIV_impact end -->
		</div><!-- #all_list end -->
	</div><!-- #rankls end -->
	<div id="emap">
		<div id="mapcontainer_0" class="map_container">
		</div><!-- #mapcontainer_0 end -->
		<div id="mapcontainer_1" class="map_container">
		</div><!-- #mapcontainer_1 end -->
		<div id="mapcontainer_2" class="map_container">
		</div><!-- #mapcontainer_2 end -->
		<div id="mapcontainer_3" class="map_container">
		</div><!-- #mapcontainer_3 end -->		
	</div><!-- #emap end -->
	<div id="check_radio">
		<form>
			<input type="radio" name="show_ranklist_order" value="by_name">Order by name<br>
			<input type="radio" name="show_ranklist_order" value="by_impact" checked>Order by impact<p>
			
			<input type="radio" name="show_disease" value="All" checked>All<br>
			<input type="radio" name="show_disease" value="Malaria">Malaria<br>
			<input type="radio" name="show_disease" value="TB">TB<br>
			<input type="radio" name="show_disease" value="HIV">HIV/AIDS<br>			
		</form>
	</div><!-- #emap end -->
	<div id="country_text">
	<p>Every year</p> 9 million people are diagnosed with tuberculosis, every day more than 13,400 people are infected with AIDs,
 every 30 seconds malaria kills a child. About a third of all deaths, 18 million a year are poverty-related. 
 Access to essential medicines for these diseases varies widely around the world. 
 The Global Health Impact Country Index measures key drugs’ impact on these global health problems in each country. 
	</div><!-- #country_text end -->
	<div id="popupwd">
		<div id="additional_statistic">ADDITIONAL STATISTICS
		</div><!-- #additional_statistic end -->
		<div id="country_iso">
		</div><!-- #country_name end -->
		<div id="bar_details" height='100px'>
		</div><!-- #bar_details end -->
	</div><!-- #popupwd end -->	
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
