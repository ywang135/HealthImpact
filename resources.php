<?php
	include "header.php";
?>
<link rel="stylesheet" href="css/resources.css" type="text/css" media="screen">
<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
<script type="text/javascript" src="http://files.brightcove.com/bc-mapi.js"></script>
<script type="text/javascript" src="JS/jquery_resources.js"></script>
	<div class="main_body">
		<div id="left_bar">
		
		<subtitle>Presentation at Harvard University</subtitle>
		<p>Check out this video with a presentation on the Global Health Impact Index 
		from a recent conference at Harvard University</p>
		<div id="video1">
		<div id="thumbnail"><a href="#videoharvard"><img src="images/videothumbnail.png" width="100%" height="300" /></a></div>
		<div id="videoharvard">
		<embed src="http://c.brightcove.com/services/viewer/federated_f8/271530229" bgcolor="#FFFFFF" 
		flashVars="videoId=3004310549001&playerId=271530229&viewerSecureGatewayURL=https://console.brightcove.com/services/amfgateway&servicesURL=http://services.brightcove.com/services&cdnURL=http://admin.brightcove.com&domain=embed&autoStart=true&" 
		base="http://admin.brightcove.com" name="flashObj" width="100%" height="300" 
		seamlesstabbing="false" type="application/x-shockwave-flash" swLiveConnect="true" 
		pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
		</div>
		</div><!-- #video1 -->
		<p>&nbsp;</p><p>&nbsp;</p>
			<subtitle>Global Justice and Global Health</subtitle>
			<p>An interview on New Books in Philosophy that discusses the Global Health Impact Proposal.</p>
			<audio controls>
  			<source src="horse.ogg" type="audio/ogg">
  			<source src="audio/030philosophyhassoun.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
			</audio>
		<p></p>	
		</div><!-- #left_bar end -->
		<div id="middle_bar">
			<table cellpadding="5">
				<tr><td><div><a href="http://harvey.binghamton.edu/%7Enhassoun/Disclaimer_GlobalHealthImpact.php">
				<img src="images/Paper_Global Health Impact.jpg" width="85px" height="130px"/></a></div></td>
				<td><subtitle>The Policy Proposal</subtitle><br>
				<p>
				 This paper explains how to leverage the Index to promote global health.
				</p>
				</td></tr>
				<tr><td><div><a href="http://academicsstand.org/wp-content/uploads/2013/03/WP_11_2012_Hassoun.pdf">
				<img src="images/WP_11_2012_Hassoun.jpg" width="85px" height="130px"/></a></div></td>
				<td><subtitle>The Global Health Impact Index</subtitle><br>
				<p>
				 This report explains in detail how the Company Index is calculated. In doing so, 
				 it gives examples of how drug scores are calculated.
				</p>
				</td></tr>
				<tr><td><div><a href="http://harvey.binghamton.edu/~nhassoun/Papers/Rating%20Efforts%20to%20Extend%20Access%20on%20Essential%20Medicines.pdf">
				<img src="images/Rating Efforts to Extend Access on Essential Medicines.jpg" width="85px" height="130px"/></a></div></td>
				<td><subtitle>Extending Access on Essential Medicines</subtitle><br>
				<p>
				Increasing Global Health Impact -- This paper considers some philosophical issues underlying 
				the construction of a good index for rating global health and advances a proposal along the 
				lines of the Global Health Impact Index
				</p>
				</td></tr>
			</table>			
		</div><!-- #middle_bar end -->
		<div id="right_bar">
			<subtitle>Podcast from Santa Clara University</subtitle>
			<p>A podcast from a lecture on the Global Health Impact Index at Santa Clara University</p>
			<audio controls>
  				<source src="audio/Ethics-at-noon-Nicole-hassoun.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
			
			<p>&nbsp;</p><p>&nbsp;</p>
			<subtitle>Introduction to the Index</subtitle>
			<p>A slide show for an introduction to the Company Index</p>
			<iframe src="http://prezi.com/embed/knupueeb_xwa/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;features=undefined&amp;disabled_features=undefined" width="330" height="270" frameBorder="0" webkitAllowFullScreen mozAllowFullscreen allowfullscreen></iframe>
			<p></p>
		</div><!-- #right_bar end -->
	</div><!-- .main_body end -->
<?php
	include "footer.php";
?>
