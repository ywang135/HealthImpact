<?php
	include "header.php";
?>
<script type="text/javascript" src="Maps/FusionCharts.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="JS/jq.js"></script>
<script type="text/javascript">
	$title = "The Global Health Impact Country Index";
    $(document).ready(function() {
        $(this).attr("title", $title);
        $("#sub_menu").show();
       	$("#copyright").css( { "top" : "980px"} );
    });
 
</script>

	<div class="main_body">
	<div id="control_by_order">
		<div id="orderByName"><a href="#listByName">Name</a></div>
		<div id="orderByImpact"><a href="#listByImpact">Impact</a></div>	
	</div><!-- #control_by_order end -->
	<div id="control_by_disease">
		<div id="showMalaria"><a href="#Malaria">Malaria</a></div>
		<div id="showTB"><a href="#TB">TB</a></div>	
		<div id="showHIV"><a href="#HIV">HIV/ADIS</a></div>
	</div><!-- #control_by_disease end -->
	<div id="rankls">
	
	</div><!-- #rankls end -->
	<div id="emap">
		<div id="mapcontainer">
		</div><!-- #mapcontainer end -->
	</div><!-- #emap end -->
	<script type="text/javascript"><!--
    var myMap = new FusionCharts ("Maps/FCMap_WorldwithCountries.swf", "MyMapId", "706.912", "522.928", "0");
    myMap.setXMLUrl ("Maps/genr.php");//Maps/WorldwithCountriesData.xml
    myMap.render("mapcontainer");  
    // --> 
    </script>
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
