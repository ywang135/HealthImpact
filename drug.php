<?php
	include "header.php";
?>

<link rel="stylesheet" href="css/companyanddrug.css" type="text/css" media="screen">
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="JS/jquery_drug.js.php"></script>

	<div class="main_body">
	
	<div id="control_by_disease_items">
		<div id="showMalaria" class="c_b_d"><a href="#">Malaria</a></div>
		<div id="showTB" class="c_b_d"><a href="#">TB</a></div>	
		<div id="showHIV" class="c_b_d"><a href="#">HIV/AIDS</a></div>
		<div id="showAll" class="c_b_d"><a href="#">All</a></div>
	</div><!-- #control_by_disease end -->
	<div id="rankls">
		<div id="items_by_rank">
			Drugs By Rank
		</div><!-- #items_by_rank end -->
		<div id="all_list">
			<div id="list_all_impact" class="items_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con_/con_ghi.php";
				$result = $con->query("call show_top_drug(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupPiGraph('$row[0]');\">
    				<td id=\"$row[2]\">$i</td><td align='left'>
    					<a href='#'>$row[1] ($row[0])</a>"; 	
    				$i++;						
    				$l1 = "".max(($row[2]*420/14710476),1)."px";
    				$color;
    				if($row[4]=="Malaria"){
    					$color="#0083CA";
    				}
    				else if($row[4]=="TB"){
    					$color="#FFB31C";
    				}
    				else if($row[4]=="HIV"){
    					$color="#EF3E2E";
    				}
    				echo "<br>
    					<div style='float:left;background:$color;height:15px;width:$l1;'></div>
    					</td></tr>";
    			}
   		 		mysqli_close($con);
			?>
			</table>
		</div><!-- #list_all_impact end -->
		
		<div id="list_malaria_impact" class="items_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con_/con_ghi.php";
				$result = $con->query("call show_top_drug_by_Malaria(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupPiGraph('$row[0]');\">
    				<td id=\"$row[2]\">$i</td><td align='left'>
    					<a href='#'>$row[1] ($row[0])</a>";	
    				$i++;
    				$l1 = "".max(($row[2]*420/14710476),1)."px";
    				echo "
    					<br>
    					<div class='malaria_bar' style='float:left;background:#0083CA;height:15px;width:$l1;'></div>
    					</td></tr>";
    			}
   		 		mysqli_close($con);
			?>
			</table>
		</div><!-- #list_malaria_impact end -->
		
		<div id="list_TB_impact" class="items_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con_/con_ghi.php";
				$result = $con->query("call show_top_drug_by_TB(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupPiGraph('$row[0]');\">
    				<td id=\"$row[2]\">$i</td><td align='left'>
    					<a href='#'>$row[1] ($row[0])</a>";	
    				$i++;
    				$l1 = "".max(($row[2]*420/2848482),1)."px";
    				echo "
    					<br>
    					<div class='TB_bar' style='float:left;background:#FFB31C;height:15px;width:$l1;'></div>
    					</td></tr>";
    			}
   		 		mysqli_close($con);
			?>
			</table>
		</div><!-- #list_TB_impact end -->
		
		<div id="list_HIV_impact" class="items_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con_/con_ghi.php";
				$result = $con->query("call show_top_drug_by_HIV(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupPiGraph('$row[0]');\">
    				<td id=\"$row[2]\">$i</td><td align='left'>
					<a href='#'>$row[1] ($row[0])</a>";
    				$i++;	
    				$l1 = "".max(($row[2]*420/7494448),1)."px";
    				echo "
    					<br>
    					<div class='HIV_bar' style='float:left;background:#EF3E2E;height:15px;width:$l1;'></div>
    					</td></tr>";
    			}
   		 		mysqli_close($con);
			?>
			</table>
		</div><!-- #list_HIV_impact end -->
		</div><!-- #all_list end -->
	</div><!-- #rankls end -->
	<div id="popupwd">
		<div id="popupwd1">
			<div id="additional_statistic">Impact Score by Drug
			</div><!--#additional_statistic end -->
			<div id="bar_details_1">
			</div><!-- #bar_details end -->
			<div id="bar_sub_title">
			</div>
		</div><!-- #popupwd1 end -->	
		<div id="popupwd2">
			<div id="additional_statistic_1">
			</div><!-- #additional_statistic end -->
			<div id="bar_details_2">
			</div><!-- #bar_details end -->
			<div id="bar_sub_title">
			</div>
		</div><!-- #popupwd2 end -->
	</div><!-- #popupwd end -->	
	<div id="items_text">
	<p>Breakdown of Disease Scores</p>
	The Global Health Impact Drug Index measures key malaria, TB, and HIV drugs’ impacts.
	<br> To do so, it looks at three things:
	<ul>
	<li>The need for several important drugs for tuberculosis, HIV/AIDS, and malaria.</li>
	<li>The drugs’ effectiveness.</li>
	<li>The number of people who can access the drugs.</li>
	</ul>
	Here you see the proportional impact of drugs for each disease. Click <a href="#">here </a> to see the proportional impact by drug.
	<br>Resources
			For additional information, please click here: <a href="reports.php">link to report page </a>

	</div><!-- items_text end -->

	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
