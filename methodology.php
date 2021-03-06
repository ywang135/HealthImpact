<?php
	include "header.php";
?>
<link rel="stylesheet" href="css/methodology.css" type="text/css" media="screen">
<script type="text/javascript" src="JS/jquery_methodology.js"></script>
	<div class="main_body">
		<div id="left_bar">
		<subtitle>The Drug Index</subtitle>
		<p>To evaluate the impact of the major drugs for malaria, tuberculosis and HIV/AIDS, 
		we consider 1) the need for the drugs, 2) the drugs’ effectiveness, and 3) access 
		to the drug. Very roughly, we multiply the need for the drug - measured in Disability 
		Adjusted Life-Years (DALYS) lost to the diseases they treat -- times drug efficacy and 
		treatment percentages to get the final impact scores. </p>

		<subtitle>The Country Index</subtitle>
		<p>The Country Index sums all drugs’ impacts within the country. So, for instance, 
		if two drugs are used in some country and the first averts 1 million DALYS and the 
		second averts 2 million, the country score would be 3 million DALYS averted. We 
		also break down the scores so that it is possible to see the DALYS averted by drugs 
		for malaria, TB, and HIV/AIDS respectively. </p>

		<subtitle>The Company Index</subtitle>
		<p>The Company Index sums the impact of all of a company’s drugs. So, for instance, 
		if one company makes two drugs that avert 3 and 6 million DALYS respectively, 
		the Company Score would be 9 million DALYS averted. We also break down the scores so 
		that it is possible to see the DALYS averted 
		by company for malaria, TB, and HIV/AIDS respectively.</p>

		<subtitle>The Disease Index</subtitle>
		<p>The Disease Index sums the global impact of the drugs for each disease. 
		It displays the relative proportion of DALYS averted by disease. It is also 
		possible to see the breakdown of some information about need, access to, and 
		efficacy of key drugs for each disease.</p>

		</div><!-- #left_bar end -->
		<div id="middle_bar">
			<table cellpadding="5">
				<tr><td><div><a href="src/Extending Access Index.pdf">
				<img src="images/ExtendingAccessThumb.jpg" width="85px" height="130px"/></a></div></td>
				<td><subtitle>The Global Health Impact Index</subtitle><br>
				<p>
				 This report explains in detail how the Company Index is calculated. In doing so, 
				 it gives examples of how drug scores are calculated.
				</p>
				</td></tr>
				<tr><td><div><a href="src/over all rating spread sheet.pdf">
				<img src="images/OverallRatingThumb.jpg" width="85px" height="130px"/></a></div></td>
				<td><subtitle>Technical Guide to the Index</subtitle><br>
				<p>
				 This guidebook includes a data dictionary for the Company Index database, 
				 reviews the assumptions underlying model construction, 
				 and explains the score calculations and goes through an example.
				</p>
				</td></tr>
				<tr><td><div><a href="src/Country Paper 072214.pdf" title="download link">
				<img src="images/CountryIndexThumb.jpg" width="85px" height="130px"/></a></div></td>
				<td><subtitle>The Global Health Impact Country Index</subtitle><br>
				<p>
				 This paper provides a brief introduction to the Global Health Impact country index. You can learn how the index is constructed 
				 and see and example of how a company's score is calculated for one drug. </p>
				</td></tr>
			</table>			
		</div><!-- #middle_bar end -->
		<div id="right_bar">
			<table rules="rows"><tr><td>
			<div><embed id="malaria_ppt" src="slice/Malaria Drugs 0713.swf" type="application/x-shockwave-flash" allowscriptaccess="true"></object></div>
			<a href="slice/Malaria Drugs 0713.pptx" title="download link">Malaria Drugs</a>
			</td></tr><tr><td>
			<div><object><param name='wmode' value='transparent' /><embed id="tb_ppt" src="slice/TB Powerpoint 0708.swf" type="application/x-shockwave-flash"></embed></object></div>
			<a href="slice/TB Powerpoint 0708.pptx" title="download link">TB Powerpoint</a>
			</td></tr><tr><td>
			<div><embed id="hiv_ppt" src="slice/HIV Pres 0713.swf" type="application/x-shockwave-flash"></embed></div>
			<a href="slice/HIV Pres 0713.pptx" title="download link">HIV Drugs Spreadsheet</a>
			</td></tr></table>
		</div><!-- #right_bar end -->
	</div><!-- .main_body end -->
<?php
	include "footer.php";
?>
