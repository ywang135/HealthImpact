<?php
	include "header.php";
?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="JS/jquery_drug.js"></script>
<link rel="stylesheet" href="css/drug.css" type="text/css" media="screen">

	<div class="main_body_drug">
	
	<div id="control_by_disease_drug">
		<div id="showMalaria" class="c_b_d"><a href="#Malaria">Malaria</a></div>
		<div id="showTB" class="c_b_d"><a href="#TB">TB</a></div>	
		<div id="showHIV" class="c_b_d"><a href="#HIV">HIV/AIDS</a></div>
		<div id="showAll" class="c_b_d"><a href="#All">All</a></div>
	</div><!-- #control_by_disease end -->
	<div id="rankls">
		<div id="drugs_by_rank">
			Drugs By Rank
		</div><!-- #drugs_by_rank end -->
		<div id="all_list">
		</div><!-- #all_list end -->
	</div><!-- #rankls end -->
	<div id="check_box">
		<form id="orderForm">
			<input type="checkbox" name="show_ranklist_order" value="by_name">Order by name<br>
			
		</form>
	</div><!-- #check_box end -->
	
	<div id="drugs_text">
	<p>Breakdown of Disease Scores</p>
	The Global Health Impact Drug Index measures key malaria, TB, and HIV drugs’ impacts.
	<br> To do so, it looks at three things:
	<ul>
	<li>The need for several important drugs for tuberculosis, HIV/AIDS, and malaria.</li>
	<li>The drugs’ effectiveness.</li>
	<li>The number of people who can access the drugs.</li>
	</ul>
	<br>Here you see the proportional impact of drugs for each disease. Click <a href="#">here </a> to see the proportional impact by drug.
	<br>Resources
			For additional information, please click here: <a href="#">link to report page </a>

	</div><!-- #drug_text end -->
	<div id="popupdrug1">
		<div id="additional_statistic">ADDITIONAL STATISTICS
		</div><!-- #additional_statistic end -->
		<div id="drug_info">
		</div><!-- #drug_info end -->
		<div id="bar_details">
		</div><!-- #bar_details end -->
		<div id="bar_sub_title">PI graph here
		</div>
	</div><!-- #popupdrug1 end -->	
	<div id="popupdrug2">
		<div id="additional_statistic">ADDITIONAL STATISTICS
		</div><!-- #additional_statistic end -->
		<div id="drug_info">
		</div><!-- #drug_info end -->
		<div id="bar_details">
		</div><!-- #bar_details end -->
		<div id="bar_sub_title">PI graph here
		</div>
	</div><!-- #popupdrug2 end -->	
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
