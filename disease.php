<?php
	include "header.php";
?>
<link rel="stylesheet" href="css/disease.css" type="text/css" media="screen">
<script type="text/javascript" src="Maps/FusionCharts.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="JS/jquery_disease.js"></script>
	<div class="main_body">
	<div id="control_by_disease">
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
	<div id="popupwd">
		<div id="popupwd1">
			<div id="additional_statistic_1" class="additional_statistic">ADDITIONAL STATISTICS
			</div><!-- #additional_statistic end -->
			<div id="disease_info_1" class="disease_info">
			</div><!-- #country_info end -->
			<div id="ColumnChart_details">
			</div><!-- #bar_details end -->
			<div id="Column_sub_title">Disability Adjusted Score Life years Averted
			</div>	
		</div><!-- #popupwd1 end -->
		
		<div id="popupwd2">
			<div id="additional_statistic_2" class="additional_statistic">
			</div><!-- #additional_statistic end -->
			<div id="disease_info_2" class="disease_info">
			</div><!-- #country_info end -->
			<div id="Pie_details">
			</div><!-- #bar_details end -->
			<div id="Pie_sub_title">
			</div>
		</div><!-- #popupwd2 end -->
	</div><!-- #popupwd end -->
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
