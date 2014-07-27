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
    				$l1 = "".($row[4]*250/15848987)."px";
					$l2 = "".($row[5]*250/15848987)."px";
					$l3 = "".($row[6]*250/15848987)."px";
    				echo "
    					<br>
    					<div class='malaria_bar' style='float:left;background:#0083CA;height:15px;width:$l1;'></div>
						<div class='TB_bar' style='float:left;background:#FFB31C;height:15px;width:$l2;'></div>
    					<div class='HIV_bar' style='float:left;background:#EF3E2E;height:15px;width:$l3;'></div>
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
					if($row[4]<1)break;
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
					if($row[5]<1)break;
    				echo "<tr onmouseover=\"popupPiGraph('$row[11]');\">
    					<td id=\"$row[6]\">$i</td><td align='left'>
    					<a href='#'>$row[0]</a>";	
    				
    				$i++;
    				$l1 = "".max(($row[5]*420/14041746),1)."px";
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
					if($row[6]<1)break;
    				echo "<tr onmouseover=\"popupPiGraph('$row[11]');\">
    					<td id=\"$row[6]\">$i</td><td align='left'><a href='#'>$row[0]</a>";
    				
    				$i++;	
    				$l1 = "".max(($row[6]*420/14041746),1)."px";
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
	<p class="speech">Important Notes About the Company Rankings <br />
	<em>Limitations: </em><br />
	The rankings on this website are meant to provide a metric of the impacts of pharmaceutical companies’ drugs on a few important global diseases. This index is not meant to measure how “good” a pharmaceutical company is in relation to its peers, or how effective it has been at ensuring access to its drugs. <br /><br />
	The impacts of the ranked companies’ drugs is only one of many measures of a company’s overall fulfillment of its social responsibilities. For instance, companies with high scores on this index may have poor access policies and those with lower scores better access policies. For a more complete picture, these rankings are best read in combination with other academic and civil society analyses of drug companies’ global impact.<br />
	<em>Purpose and Value: </em><br />
	
	While not intended to serve as a measure of good company behavior, we believe that this index can serve as a valuable tool. This ranking system serves as the first scientifically rigorous comparison of pharmaceutical companies by their drugs’ impacts on death and disability. A scientific model of this impact is a neglected, yet important, piece of the larger picture. <br />
	<br />
	While we endorse the vital importance of strong access policies, we believe this ranking can be an important piece in that puzzle. Companies’ scores will improve most if they: (1) develop drugs that will have the biggest impact on the global burden of disease and (2) change their access policies to ensure these drugs (along with their existing products) reach as many people as possible. We strongly believe that this is best achieved by working closely with civil society organizations. <br />
	<br />
	Of course, some companies may raise their scores by simply acquiring the most effective drugs for a particular disease (the first prong), and counting on governments and aid organizations to pay inflated prices for them (ignoring the second prong). Thus, for a complete picture, this ranking system must be read in conjunction with others (see Limitations, above).
	</p>
	<div id="items_text">
	<p>Company Index</p>Every year 9 million people are diagnosed with tuberculosis,
	 every day more than 13,400 people are infected with AIDS, every 30 seconds malaria
	kills a child. About a third of all deaths, 18 million a year, are poverty-related. 
	The Global Health Impact Index considers how companies measure up on the basis of 
	their drugs’ impact on these global health problems. It looks at three things:
		<ul>
		<li> The need for several important drugs for tuberculosis, HIV/AIDS, and malaria. </li>
		<li>The drugs’ effectiveness. </li>
		<li>The number of people who can access the drugs.</li>
		</ul>Each company’s score is the sum of its drugs’ impacts.
			For additional information, please see the <a href="reports.php">Reports</a>.
	</div><!-- #items_text end -->
		
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
