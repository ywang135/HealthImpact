<?php
	include "header.php";
?>
<link rel="stylesheet" href="css/companyanddrug.css" type="text/css" media="screen">
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="JS/jquery_company.js.php"></script>
	<div class="main_body">
	
	<div id="control_by_disease_items">
		<div id="showMalaria" class="c_b_d"><a href="#">Malaria</a></div>
		<div id="showTB" class="c_b_d"><a href="#">TB</a></div>	
		<div id="showHIV" class="c_b_d"><a href="#">HIV/AIDS</a></div>
		<div id="showAll" class="c_b_d"><a href="#">All</a></div>
	</div><!-- #control_by_disease_items end -->
	<div id="rankls">
		<div id="items_by_rank">
			Company By Rank
		</div><!-- #items_by_rank end -->
		<div id="all_list">
		<div id="list_all_impact" class="items_rank_list">
			<table cellpadding="1">
			<?php 
				include "./../con_/con_ghi.php";
				$result = $con->query("call show_top_company(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupPiGraph('$row[11]');\">
    					<td id=\"$row[6]\">$i</td><td align='left'>
    					<a href='#'>$row[0]</a>";	
    				$i++;
    				if($row[3]<1){
    					$l1 = "0px";
    				}
    				else{
    					$l1 = "".max(($row[3]*420/15848987),1)."px";
    				}
    				echo "
    					<br>
    					<div style='float:left;background:#$row[10];height:15px;width:$l1;'></div>
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
				$result = $con->query("call show_top_company_by_Malaria(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupPiGraph('$row[11]');\">
    					<td id=\"$row[6]\">$i</td><td align='left'>
    					<a href='#'>$row[0]</a>";	
    				$i++;
    				$l1 = "".max(($row[4]*420/14041746),1)."px";
    				echo "
    					<br>
    					<div class='malaria_bar' style='float:left;background:#$row[10];height:15px;width:$l1;'></div>
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
				$result = $con->query("call show_top_company_by_TB(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupPiGraph('$row[11]');\">
    					<td id=\"$row[6]\">$i</td><td align='left'>
    					<a href='#'>$row[0]</a>";	
    				$i++;
    				$l1 = "".max(($row[5]*420/5803804),1)."px";
    				echo "
    					<br>
    					<div class='TB_bar' style='float:left;background:#$row[10];height:15px;width:$l1;'></div>
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
				$result = $con->query("call show_top_company_by_HIV(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
    				echo "<tr onmouseover=\"popupPiGraph('$row[11]');\">
    					<td id=\"$row[6]\">$i</td><td align='left'><a href='#'>$row[0]</a>";
    				$i++;	
    				$l1 = "".max(($row[6]*420/7494448),1)."px";
    				echo "
    					<br>
    					<div class='HIV_bar' style='float:left;background:#$row[10];height:15px;width:$l1;'></div>
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
			<div id="additional_statistic">Impact Score by Company
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
	<p>Company Index</p>Every year 9 million people are diagnosed with tuberculosis,
	 every day more than 13,400 people are infected with AIDS, every 30 seconds malaria
	kills a child. About a third of all deaths, 18 million a year are poverty-related. 
	The Global Health Impact Index considers how companies measure up on the basis of 
	their drugs’ impact on these global health problems. 
		<br>It looks at three things:
		<ul>
		<li> The need for several important drugs for tuberculosis, HIV/AIDS, and malaria. </li>
		<li>The drugs’ effectiveness. </li>
		<li>The number of people who can access the drugs.</li>
		</ul>Each company’s score is the sum of its drugs’ impacts.
			<br>Resources
			For additional information, please click here: <a href="reports.php">link to report page </a>
	</div><!-- #items_text end -->
		
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
