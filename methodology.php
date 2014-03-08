<?php
	include "header.php";
?>
<link rel="stylesheet" href="css/methodology.css" type="text/css" media="screen">
<script type="text/javascript" src="JS/jquery_methodology.js"></script>
	<div class="main_body">
		<div id="left_bar">
		<subtitle>The Drug Index</subtitle>
		<p>To evaluate the impact of the major drugs for malaria, tuberculosis and HIV/AIDS, 
		we consider three things:
		<ul>
		<li>The need for the drugs.</li>
		<li>The drugs’ effectiveness.</li>
		<li>The number of people who can access the drugs.</li></ul>
		</p>
		<p>Consider a simple hypothetical example. We measure the need for the drugs in 
		terms of the death and disability lost to the diseases they treat (disability 
		adjusted life years or DALYS). If, in some area, 10 DALYS were lost to a disease 
		and 50% of people who needed a drug for a disease had access to it, it could at 
		best save 5 DALYS. If the drug were only 20% effective, however, we estimate it 
		would save 1 DALY. The drug’s score is its total global impact. For real examples 
		see <a href="http://academicsstand.org/wp-content/uploads/2013/03/WP_11_2012_Hassoun.pdf">
		The Global Health Impact Index<a> and <a href="https://docs.google.com/document/d/1AhyFdLHW4xjRmmREFQe9rKSnUdtPjnj--schuEQr--w/edit">
		Technical Guide to the Index</a></p>

		<subtitle>The Country Index</subtitle>
		<p>The Country Index sums all drugs’ impacts within the country. 
		So, for instance, if two drugs are used in some country and the 
		first averts 1 million DALYS and the second averts 2 million. 
		The country score would be 3 million DALYS averted. If 4 million 
		DALYS are averted in one country and 2 million are averted in a 
		second country, the first is ranked higher than the second.</p>
		<p>We also break down the scores so that it is possible to see the DALYS averted 
		by drugs for malaria, TB, and HIV/AIDS respectively. </p>

		<subtitle>The Company Index</subtitle>
		<p>The Company Index sums the impact of all of a company’s drugs. So, for instance, 
		if one company makes two drugs that avert 3 and 6 million DALYS respectively, 
		the Company Score would be 9 million DALYS averted. If one company averts 9 million 
		DALYS and another averts only 7 million DALYS, the first company is ranked higher 
		than the second. </p>
		<p>We also break down the scores so that it is possible to see the DALYS averted 
		by company for malaria, TB, and HIV/AIDS respectively.</p>

		<subtitle>The Disease Index</subtitle>
		<p>The Disease Index sums the global impact of the drugs for each disease. 
		It displays the relative proportion of DALYS averted by disease. It is also 
		possible to see the breakdown of some information about need, access to, and 
		efficacy of key drugs for each disease. Also see: 
		<a href="http://academicsstand.org/wp-content/uploads/2013/03/WP_11_2012_Hassoun.pdf">The Global Health Impact 
		Index</a> and <a href="https://docs.google.com/document/d/1AhyFdLHW4xjRmmREFQe9rKSnUdtPjnj--schuEQr--w/edit">
		Technical Guide to the Index<a>.</p>

		</div><!-- #left_bar end -->
		<div id="middle_bar">
			<table cellpadding="5">
				<tr><td><div><a href="http://academicsstand.org/wp-content/uploads/2013/03/WP_11_2012_Hassoun.pdf">
				<img src="" width="85px" height="130px"/></a></div></td>
				<td><subtitle>The Global Health Impact Index: Promoting Global Health</subtitle><br>
				<p>
				 This report explains in detail how the Company Index is calculated. In doing so, 
				 it gives examples of how drug scores are calculated.
				</p>
				</td></tr>
				<tr><td><div><a href="https://docs.google.com/document/d/1AhyFdLHW4xjRmmREFQe9rKSnUdtPjnj--schuEQr--w/edit">
				<img src="" width="85px" height="130px"/></a></div></td>
				<td><subtitle>Technical Guide to the Index</subtitle><br>
				<p>
				 This guidebook includes a data dictionary for the Company Index database, 
				 reviews the assumptions underlying model construction, 
				 explains the score calculations and goes through an example.
				</p>
				</td></tr>
				<tr><td><div><a href="https://drive.google.com/?authuser=0#folders/0Bx_3ii8A4GX5YmJlMWZiNDAtOGUxNy00MDNlLTg5ZjItMTY0MGUyODc5MzVj">
				<img src="" width="85px" height="130px"/></a></div></td>
				<td><subtitle>Explanation of Data Collection Methodology for Malaria Drug Efficacy Information</subtitle><br>
				<p>
				 This report explains our search methodology for finding missing efficacy information for malaria, 
				a similar search strategy was employed for fall-back data for HIV/AIDS medicines.
				</p>
				</td></tr>
			</table>			
		</div><!-- #middle_bar end -->
		<div id="right_bar">
			<object width="100%" height="50" data="bookmark.swf"></object>
			<object width="100%" height="50" data="bookmark.swf"></object>
		</div><!-- #right_bar end -->
	</div><!-- .main_body end -->
<?php
	include "footer.php";
?>
