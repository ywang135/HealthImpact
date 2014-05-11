<?php
	include "header.php";
?>
<link rel="stylesheet" href="css/aboutindex.css" type="text/css" media="screen">
<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
<script type="text/javascript" src="http://files.brightcove.com/bc-mapi.js"></script>
<script type="text/javascript" src="JS/jquery_aboutindex.js"></script>
	<div class="main_body">
		<div id="left_bar">
		<div id="video1">
		<!--<div id="thumbnail"><a href="#videoharvard"><img src="images/videothumbnail.png" width="100%" height="300" /></a></div>-->
		<div id="videoharvard">
        <video width="100%" height="300" controls>
            <source src="../src/shortPresentation.mp4" type="video/mp4">
                Your browser does not support the video tag.
        </video>
		</div>
		</div><!-- #video1 -->
		
		
			<subtitle>Learn about the Global Health Impact Index</subtitle>
			<p>Check out this video from a recent conference at Harvard University for a brief presentation on the Global Health Impact project. Professor Nicole Hassoun introduces the Index, some possible uses for it, and explains the insight behind it.</p>
			<p>To view whole video, go <a href="resources.php#video1">resource page</a></p>
		<p></p>	
		</div><!-- #left_bar end -->
		<div id="middle_bar">
			<table cellpadding="5">
				<tr>
				<td><subtitle>Global Health Impact</subtitle><br>
				<p>
				Imagine a world where people everywhere have access to the life-saving drugs they need to fight diseases like tuberculosis, malaria,
				and HIV/AIDS. To help extend access on essential medicines, we have to understand the problem. The Global Health Impact Index opens the 
				door to positive change by considering how essential medicines for TB, HIV/AIDS, and malaria are affecting global health.
				</p>
				<subtitle>Evaluating Drugs</subtitle><br>
				<p>
				There are three main considerations that go into evaluating each drug’s potential impact. These are 
				1) the need for the drug, 2) its effectiveness, and 3) how many people who need a drug can access it 
				around the world. In the Global Health Impact model, the drug impact scores feed into four Indexes that 
				provide essential information about the access to medicines problem.
				</p>
				<subtitle>The Indexes</subtitle><br>
				<p>The Drug Index ranks the drugs by their impact scores. The Disease Index looks at the size of the drugs’ impact on each of the diseases.
				The Country Index looks at the amount of need in each country that is alleviated by the drugs used in that country. 
				The Company Index ranks companies by the sum the impact of the drugs each company makes. For more general information on the construction of each Index, see 
				resources and for technical papers see methodology. For more information on the Company Index, in particular, see <a href="company.php">companies</a> and <a href="drug.php">drugs</a>.
				</p>
				<subtitle>Potential Uses</subtitle><br>
				<p>There are many ways Global Health Impact information might be useful to policy makers, researchers, companies investors, consumers, and 
				other people interested in global health. For some information about potential uses of the Index, see <a href="resources.php">resources</a> and <a href="news.php">news</a>. 
				Together we can leverage the Global Health Impact Index to save millions of lives.</p>
				
				</td></tr>
				
			</table>			
		</div><!-- #middle_bar end -->
		<div id="right_bar">
			<subtitle>Introduction to the Company Index</subtitle>
			<p>Check out this presentation for an introduction to the Company Index. Here you can see the company scores and some of the data that goes into the model. For more information check out our <a href="resources.php">resources</a>, <a href="reports.php">reports</a>, and <a href="methodology.php">methodology</a>.</p>
			<iframe src="http://prezi.com/embed/gehsmlelb8a1/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;features=undefined&amp;disabled_features=undefined" width="330" height="270" frameBorder="0" webkitAllowFullScreen mozAllowFullscreen allowfullscreen>
			</iframe>
			<p></p>
		</div><!-- #right_bar end -->
	</div><!-- .main_body end -->
<?php
	include "footer.php";
?>

