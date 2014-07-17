<?php
	include "header.php";
?>
<link rel="stylesheet" href="css/country.css" type="text/css" media="screen">
<script type="text/javascript" src="Maps/FusionCharts.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="JS/jquery_country.js"></script>
	<div class="main_body">
	<div id="control_by_disease">
		<div id="showMalaria" class="c_b_d"><a href="#">Malaria</a></div>
		<div id="showTB" class="c_b_d"><a href="#">TB</a></div>	
		<div id="showHIV" class="c_b_d"><a href="#">HIV/AIDS</a></div>
		<div id="showAll" class="c_b_d"><a href="#">All</a></div>
	</div><!-- #control_by_disease end -->
	<div id="rankls">
		<div id="country_by_rank">
			Country & Overall Impact By Rank
		</div><!-- #country_by_rank end -->
		<div id="all_list">
		<div id="list_all_impact" class="country_rank_list">
		</div><!-- #list_all_impact end -->
		<div id="list_all_name" class="country_rank_list">
		</div><!-- #list_all_name end -->
		<div id="list_malaria_impact" class="country_rank_list">
		</div><!-- #list_malaria_impact end -->
		<div id="list_TB_impact" class="country_rank_list">
		</div><!-- #list_TB_impact end -->
		<div id="list_HIV_impact" class="country_rank_list">
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
	<div id="check_box">
		<form id="orderForm">
			<input type="checkbox" name="show_ranklist_order" value="by_name">Order by name<br>
			<!--<input type="radio" name="show_ranklist_order" value="by_impact" checked>Order by impact<p>
			
			<input type="radio" name="show_disease" value="All" checked>All<br>
			<input type="radio" name="show_disease" value="Malaria">Malaria<br>
			<input type="radio" name="show_disease" value="TB">TB<br>
			<input type="radio" name="show_disease" value="HIV">HIV/AIDS<br>	
			-->		
		</form>
	</div><!-- #check_box end -->
	<div id="country_text">
	<p>Country Index</p>About a third of all deaths, 18 million a year are poverty-related. 
 Access to essential medicines for these diseases varies widely around the world. 
 The Global Health Impact Country Index measures key drugs’ impact on these global health problems in each country. For additional information, please see the <a href="aboutindex.php">about page</a> and 
			<a href="methodology.php">methodology page</a>. 
	</div><!-- #country_text end -->
	<div id="popupwd">
		<div id="additional_statistic">ADDITIONAL STATISTICS
		</div><!-- #additional_statistic end -->
		<div id="country_info">
		</div><!-- #country_info end -->
		<div id="bar_details">
		</div><!-- #bar_details end -->
		<div id="bar_sub_title">Disability Adjusted Score Life years Averted
		</div>
	</div><!-- #popupwd end -->	
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
