<?php
	include "header.php";
?>
<script type="text/javascript">
	$title = "The Global Health Impact";
    $(document).ready(function() {
        $(this).attr("title", $title);
       	$("#sub_menu").show();
       	$("#copyright").css( { "margin-top" : "60px"} );
    });
</script>
	<div class="main_body">
		<div id="line_1">
			<div id="sq_l_t" class="sq_index" onclick="location.href='company.php';"></div>
			<div id="sq_r_t" class="sq_index" onclick="location.href='disease.php';"></div>
		</div><!-- #line_1 end -->
		<div id="line_2">
			<div id="sq_l_b" class="sq_index" onclick="location.href='drug.php';"></div>
			<div id="sq_r_b" class="sq_index" onclick="location.href='country.php';"></div>
		</div><!-- #line_2 end -->
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
