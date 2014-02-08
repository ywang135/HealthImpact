<?php
	include "header.php";
?>
<script type="text/javascript" src="Maps/FusionCharts.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="JS/jq.js"></script>
<script type="text/javascript">
	$title = "The Global Health Impact";
    $(document).ready(function() {
        $(this).attr("title", $title);
    });
 
</script>

	<div class="main_body">
	<div id="controlchoi">
		<div id="orderByName"><a href="#listByName">Name</a></div>
		<div id="orderByImpact"><a href="#listByImpact">Impact</a></div>
	
	</div><!-- #controlchoi end -->
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
	
	</div><!-- #country_text end -->
	<div id="popupwd">
		<div id="additional_statistic">ADDITIONAL STATISTICS
		</div><!-- #additional_statistic end -->
		<div id="bar_details" height='100px'><p>Bar charts displayed here
		</div><!-- #bar_details end -->
	</div><!-- #popupwd end -->	
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
