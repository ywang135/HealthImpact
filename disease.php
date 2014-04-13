<?php
	include "header.php";
?>
<link rel="stylesheet" href="css/disease.css" type="text/css" media="screen">
<script type="text/javascript" src="Maps/FusionCharts.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="/HealthImpact/JS/jquery_disease.js.php"></script>
	<div class="main_body">
	<div id="control_by_disease">
		<div id="showSummary" class="c_b_d"><a href="#">Summary</a></div>
		<div id="showMalaria" class="c_b_d"><a href="#">Malaria</a></div>
		<div id="showTB" class="c_b_d"><a href="#">TB</a></div>	
		<div id="showHIV" class="c_b_d"><a href="#">HIV/AIDS</a></div>
		<div id="showAll" class="c_b_d"><a href="#">All</a></div>
	</div><!-- #control_by_disease end -->
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
	<div id="disease_text">
 

	</div><!-- #disease_text end -->
	<div id="summary_pop" class="popupwd">
		<div id="popupwd0_summary">
			<div id="additional_statistic_summary_0" class="additional_statistic">Aggregated Impact Score
			</div><!-- #additional_statistic_summary_0 end -->
			<div id="summary_graph_0" class="ColumnChart_details">
			</div><!-- #summary_graph_0 end -->
		</div><!-- #popupwd0_summary end -->
		
		<div id="popupwd1_summary">
			<div id="additional_statistic_summary_1" class="additional_statistic">DALY
			</div><!-- #additional_statistic_summary_1 end -->
			<div id="summary_graph_1" class="ColumnChart_details">
			</div><!-- #summary_graph_1 end -->
			<div id="disease_summary_1" class="disease_info">
			</div><!-- #disease_summary_1 end -->
		</div><!-- #popupwd1_summary end -->
		
		<div id="popupwd2_summary">
			<div id="additional_statistic_summary_2" class="additional_statistic">Treatment Coverage
			</div><!-- #additional_statistic_summary_2 end -->
			<div id="summary_graph_2" class="disease_info">
			</div><!-- #summary_graph_2 end -->
			<div id="disease_summary_2">
			</div><!-- #disease_summary_2 end -->
		</div><!-- #popupwd2_summary end -->
		
		<div id="popupwd3_summary">
			<div id="additional_statistic_summary_3" class="additional_statistic">First-Line Efficacy
			</div><!-- #additional_statistic_summary_2 end -->
			<div id="summary_graph_3" class="disease_info">
			</div><!-- #summary_graph_3 end -->
			<div id="disease_summary_3">
			</div><!-- #disease_summary_3 end -->
		</div><!-- #popupwd3_summary end -->
	</div><!-- .popupwd end -->	
	
	<div id="All_pop" class="popupwd">
		<div id="popupwd1">
			<div id="additional_statistic_1" class="additional_statistic">ADDITIONAL STATISTICS
			</div><!-- #additional_statistic end -->
			<div id="disease_info_1" class="disease_info">
			</div><!-- #country_info end -->
			<div id="all_graph" class="ColumnChart_details">
			</div><!-- #bar_details end -->
		</div><!-- #popupwd1 end -->
		
		<div id="popupwd2">
			<div id="additional_statistic_2" class="additional_statistic">
			</div><!-- #additional_statistic end -->
			<div id="disease_info_2" class="disease_info">
			</div><!-- #country_info end -->
			<div id="Pie_details">
			</div>
		</div><!-- #popupwd2 end -->
	</div><!-- .popupwd end -->
	<div id="Malaria_pop" class="popupwd">
		<div id="popupwd1">
			<div id="additional_statistic_1" class="additional_statistic">Treatment Coverage for Malaria by Drug
			</div><!-- #additional_statistic end -->
			<div id="malaria_graph" class="Malaria_ColumnChart_details">
			</div><!-- #malaria_graph end -->
		</div><!-- #popupwd1 end -->
		
		<div id="popupwd2">
			<div id="additional_statistic_2" class="additional_statistic">Malaria Treatment Efficacy by Drug
			</div><!-- #additional_statistic end -->
			<div id="malaria_graph2">
			</div><!-- #malaria_graph2 end -->
		</div><!-- #popupwd2 end -->
	</div><!-- .popupwd end -->
	<div id="TB_pop" class="popupwd">
		<div id="popupwd1">
			<div id="additional_statistic_1" class="additional_statistic">Treatment Coverage By TB Type
			</div><!-- #additional_statistic end -->
			<div id="TB_graph">
			</div>	
		</div><!-- #popupwd1 end -->
		
		<div id="popupwd2">
			<div id="additional_statistic_2" class="additional_statistic">Treatment Efficacy By TB Type
			</div><!-- #additional_statistic end -->
			<div id="TB_graph2">
			</div>
		</div><!-- #TB_graph2 end -->
	</div><!-- .popupwd end -->
	<div id="HIV_pop" class="popupwd">
		<div id="popupwd1_hiv">
			<div id="additional_statistic_1" class="additional_statistic">HIV Treatment Coverage by Region
			</div><!-- #additional_statistic end -->
			
			<div id="HIV_graph">
			</div>	
			<div id="pop_info">click box to zoom bigger</div>
		</div><!-- #popupwd1 end -->
		<div id="popupwd2_hiv">
			<div id="additional_statistic_2" class="additional_statistic">Select First Line Drug Efficacy for Adults
			</div><!-- #additional_statistic end -->
			
			<div id="HIV_graph2">
			</div><!-- #HIV_graph2 end -->
			<div id="pop_info">click box to zoom bigger</div>
		</div><!-- #popupwd2 end -->
		
		<div id="popupwd1_hiv_big" class="zoombig">
			<div id="additional_statistic_1" class="additional_statistic">HIV Treatment Coverage by Region
			</div><!-- #additional_statistic end -->
			
			<div id="HIV_graph_big">
			</div>	
			<div id="pop_info">click box to zoom smaller</div>
		</div><!-- #popupwd1_hiv_big end -->
		<div id="popupwd2_hiv_big" class="zoombig">
			<div id="additional_statistic_2" class="additional_statistic">Group A First Line Efficacy for Adults by Drug
			</div><!-- #additional_statistic end -->
			
			<div id="HIV_graph2_big">
			</div><!-- #HIV_graph2_big end -->
			<div id="pop_info">click box to zoom smaller</div>
		</div><!-- #popupwd1 end -->
	</div><!-- .popupwd end -->
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
