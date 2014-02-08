<?php
	include "header.php";
?>
<script type="text/javascript">
	$title = "The Global Health Impact";
    $(document).ready(function() {
        $(this).attr("title", $title);
       	$("#sub_menu").show();
       	$("#copyright").css( { "top" : "1160px"} );
       	$("#popupwd").hide();
       	$("#emap").mouseover(function(){
       		$("#popupwd").show();
       	});
       	$("#emap").mouseout(function(){
       		$("#popupwd").hide();
       	});
       	$("#popupwd").mouseover(function(){
       		$("#popupwd").show();
       	});
       	$("#popupwd").mouseout(function(){
       		$("#popupwd").hide();
       	});
    });
</script>
<script type="text/javascript" src="JS/jq.js"></script>
	<div class="main_body">
	<div id="controlchoi">
		<div id="orderByName"><a href="#listByName">Name</a></div>
		<div id="orderByImpact"><a href="#listByImpact">Impact</a></div>
	
	</div><!-- #controlchoi end -->
	<div id="rankls">
	
	</div><!-- #rankls end -->
	<div id="emap">
	
	</div><!-- #emap end -->
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
