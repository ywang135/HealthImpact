<?php
	include "header.php";
?>
<link rel="stylesheet" href="css/reports.css" type="text/css" media="screen">
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="JS/jquery_reports.js.php"></script>
	<div class="main_body">
	<div id="list_company">
		<ul>
			<?php 
				include "./../con_/con_ghi.php";
				$result = $con->query("call show_top_company(-1)");
				$i=1;
				while($row = mysqli_fetch_array($result)){
					$name = str_replace("Pharmaceuticals","",$row[0]);
					$name = str_replace("Pharmaceutical","",$name);
					$name = str_replace(" Inc","",$name);
					$name = str_replace(" Co. Ltd.","",$name);
    				echo "<li id='$row[11]' class='rankls'><a href=\"#$row[11]\">
    					<number>$i</number> &nbsp; $name</a>
    					</li>";
    					$i++;
    			}
   		 		mysqli_close($con);
			?>
		</ul>
	</div><!-- #list_company end -->
	<div id="company_info_box">		
		<div id="info_detail">
			<div id="Daichii" class="company_info">
			<div id="subtitle">Daiichi Sankyo</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2012, Daiichi Sankyo reported revenue of 9 Billion.  
		They are an international pharmaceutical company and are the second largest pharmaceutical company in Japan. 
		The company is currently ranked number 17 in world sales. They hold the German biotechnology company U3, 
		the American biotechnology company Plexxikon, and have a 35 percent stake in Ranbaxy Laboratories 
		(a majority share). Daiichi focuses on prescription drug manufacturing and research and development. 
		One of their key drugs is effient. Daiichi Sankyo was founded in 2005 (by merger of Sankyo Co and Daiichi 
		Pharmaceutical).
			</div>
			</div>  
			<div id="Sanofi" class="company_info">
			<div id="subtitle">Sanofi-Aventis</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2011, Sanofi-Aventis reported revenue of 47.5 billion dollars. A few of their key 
		products include Ambien, Plavix and Renagel, as well as vaccines Fluzone and Menactra. 
		They focus on products for cardiovascular disease, the central nervous system, internal medicine, 
		oncology, ophthalmology, and vaccines (subsidiary Sanofi Pasteur makes vaccines while its 
		Genzyme unit makes biopharmaceuticals).  They are a French company, which operates out of 
		over 100 countries, and were founded in 2004 (by a merger of Aventis and Sanofi-Synthelabo).
			</div> 
			</div> 
			<div id="Shire" class="company_info">
			<div id="subtitle">Shire Pharmaceuticals</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2012, Shire reported revenue of 5 million.  The company focuses on behavioral health, 
		regenerative medicine, rare diseases, and gastrointestinal conditions. Shire was founded 
		in 1986.  Its first major products were calcium supplements for the treatment of osteoporosis. 
		Since then, it has acquired several companies such as Biochem Canada and Pharavene. Its 
		major products include Vyvanse and Adderall XR but it also makes an important HIV medication.
			</div> 
			</div> 
			<div id="Boehringer" class="company_info">
			<div id="subtitle">Boehringer Ingelheim</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2012, Boehringer Ingelheim Pharmaceuticals reported revenue of 18.8 Billion. 
		The company's main fields of focus are cardiovascular disease, hepatitis, Parkinson's disease, 
		respiratory disease, HIV, oncology, cerebrovascular disease, and diabetes. Some of their key 
		products include Phenylephrine, Epinephrine, and Ketoprofen.  They were founded in 1885 when 
		Boehringer was established as a tartaric acid plant and supplied materials for dyeing and 
		cooking purposes. In 1893, with the discovery of chemical synthesis of lactic acid, the 
		company merged as a major biotech firm and expanded exponentially. Various drugs were then 
		launched up until the end of the Second World War, many utilizing lactic and tartaric acid 
		for use in the food industry. By the 1950’s, the company transitioned from its previous base 
		to treatments of respiratory, cardiovascular, and gastrointestinal diseases. During this 
		time Boehringer also established a number of new plants, notably a subsidiary one in Vienna.
			</div>
			</div> 
			<div id="Pfizer" class="company_info">
			<div id="subtitle">Pfizer</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2012, Pfizer reported revenue of 59 billion. They are currently the world's largest 
		research-based biopharmaceutical company. They focus on immunology, inflammation, oncology, 
		cardiovascular, metabolic diseases, neuroscience, pain, and vaccines. Some key Pfizer 
		products include Aspirin, Lipitor, Lyrica, Zithromax, and Celebra.  Pfizer is an American 
		company and was founded in 1849.  In 1950, Pfizer's discovery of Terramycin (oxytetracycline) 
		marked a trend for Pfizer as it became increasingly a research oriented pharmaceutical 
		company and, in 2006, Pfizer sold its consumer healthcare unit to Johnson and Johnson. 
			</div>
			</div>  		
			<div id="Bristol-Myers" class="company_info">
			<div id="subtitle">Bristol-Myers Squibb</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2012, Bristol-Myers Squibb reported revenue of 17.6 billion. The company 
		manufactures prescription pharmaceuticals in several areas including, HIV/AIDS, cardiovascular 
		disease, cancer, hepatitis, and diabetes. A few key products include Abilify, Yervoy, and 
		Sustiva. Edward Robinson Squibb founded Bristol-Myers, a United States based company, in 1858. 
		In 1938, Bristol-Meyers (mainly a consumer product manufacturer) and the Squibb institute 
		(mainly concerned with pharmaceuticals) separated. Squibb then became one of the largest 
		manufacturers of Penicillin by 1940.   In the 1960’s and 1970’s, Bristol-Myers-Squibb expanded 
		into cancer and oncological research. In 1989, Bristol Meyers merged back with Squibb to become 
		the second largest pharmaceutical company in the world. Recently, Bristol-Myers Squibb launched 
		a 100 million dollar “secure the future fund” to commit to HIV/AIDS research in African communities. 
			</div> 
			</div> 			
			<div id="Viiv" class="company_info">
			<div id="subtitle">Viiv Healthcare</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2011, Viiv manufactured 10 major medicines and made a profit of more than two billion. 
		They are an independent company, which focuses on HIV medication. Viiv is based out of the 
		UK with headquarters in North America (United States, Puerto Rico, Canada, Mexico), Europe 
		(Belgium, France, Germany, Italy, Netherlands, Switzerland) as well as Japan, Russia, and 
		Singapore.  A few of their key products include Combivir, Ziagen, and Trizivir. ViiV was 
		created in 2009 as a joint venture between GlaxoSmithKline and Pfizer to take over their HIV 
		operations. GlaxoSmithKline owns 85 percent of the company while Pfizer owns the remaining 
		15 percent.
			</div> 	
			</div> 		
			<div id="Merck" class="company_info">
			<div id="subtitle">Merck</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2011, Merck reported revenue of 48 billion  It is currently one of the world’s largest 
		seven pharmaceutical companies by market capitalization and revenue. Some key products 
		include Claritin, MiraLax, Zegrid, Coppertone, Dr. Scholl’s, and Lotrimin. Merck also 
		manufactures the vaccine Gardasil. Friedrich Jacob Merck founded Merck in 1668 as a small 
		drug store.  It has since expanded, and Merck moved to New York in 1891. 
			</div> 
			</div> 
			<div id="Hoffman-LaRoche" class="company_info">
			<div id="subtitle">Hoffman-LaRoche</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2011, Hoffman LaRoche reported revenue of 43 billion U.S Dollars.  Hoffman-LaRoche focuses 
		primarily on HIV and cancer medication. Some of their key products include Tamiflu and Valium. 
		Fritz Hoffmann-La Roche founded the company in 1896. At its start, the company mainly produced 
		various vitamin preparations and derivatives. In 1934, it became the first company to mass-produce 
		synthetic vitamin (which was branded as Redoxon). By the early 1990s, Roche Biomedical had one 
		of the biggest clinical lab networks in the United States.  Currently the Swiss firm Novartis 
		owns a third of its shares.
			</div>
			</div>  			
			<div id="Gilead" class="company_info">
			<div id="subtitle">Gilead Science</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2010, Gilead Science reported revenue of approximately 8.4 billion dollars. They are 
		an American biotechnology company that develops and sells pharmaceuticals. Currently the 
		company is highly invested in drugs for HIV/AIDS as well as serious respiratory ailments, 
		cardiovascular, and metabolic conditions. Some of their key products include Truvada and 
		Atripla. Gilead was founded in 1987 and is based in California. 
			</div>
			</div> 
			<div id="Abbot" class="company_info">
			<div id="subtitle">Abbott Labs</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2011, Abbott reported revenue of 38.8 billion.  It is currently a world leader in blood 
		screening and immunoassay tests and diagnostics. A few of its major products include Valium, 
		Tamiflu, and Ensure (meal replacement shakes). Abbott is an US company founded in 1888 
		(as Abbott Alkaloidal Company). They expanded their markets internationally in 1935 (to Canada) 
		and in 1962 (to Japan). In 1985, Abbott developed the first HIV blood-screening test. 
			</div>
			</div> 			
			<div id="Tonghe" class="company_info">
			<div id="subtitle">Chongqing Tonghe</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2011, Chongqing Tonghe's revenue was estimated to be five-hundred thousand to a million 
		dollars. The company mostly focuses on anti-malarial drugs. They were established in 1998 
		and are based in China. 
			</div>
			</div> 
			<div id="Novartis" class="company_info">
			<div id="subtitle">Novartis</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2012, Novartis reported revenue of 56 billion.  The company mainly focuses on prescription 
		medications and features key products such as Lamisil and Ritalin. In 1996, Novartis was created 
		from the merger of Ciba-Geigy and Sandoz Laboratories. Both companies have long histories 
		(Ciba Geigy came about from a merger in 1975 and Sandoz was founded in 1886). In 1998, Novartis 
		made headlines with a biotechnology licensing agreement with University of California at Berkley. 
		Currently the company has global headquarters in Basel, Switzerland and research headquarters in 
		Cambridge, Massachusetts. 
			</div>
			</div> 		
			<div id="Lilly" class="company_info">
			<div id="subtitle">Eli Lilly</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2010, Eli Lilly reported revenue of over 24 billion.  Currently their products are sold 
		in over 125 countries. Lilly was the first company to mass-produce penicillin, the Salk polio 
		vaccine, insulin, methadone, and Prozac. Some of its key products include Cialis and Evista. 
		Colonel Eli Lilly in Indianapolis founded the company in 1876.  The company has continued to 
		expand, building plants in three cities (Waluj, Roha, and Goa) all in India. 
			</div>
			</div>  		
			<div id="Bayer" class="company_info">
			<div id="subtitle">Bayer AG</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2011, Bayer reported revenue of over 48 Billion dollars. Bayer focuses primarily on 
		pharmaceutical, and veterinary products. Much of its profit comes from Aspirin. The company 
		was founded in 1863 in Germany. In 1888, the company launched its pharmaceutical department. 
		In 1897, Bayer was the first company to utilize the main ingredient found in Aspirin and began 
		selling it worldwide. In 1940, Bayer launched the first multi-vitamin to be sold in the United 
		States. In 1950, Bayer launched one of the first globally successful anti-malarials in Resochin. 
		Bayer purchased Miles laboratories Inc. in 1978, and thus gained a major stake in the US 
		pharmaceutical market. In 1989, Bayer bought Cooper Technicon to become one of the world’s 
		largest suppliers of diagnostics systems and chemical reagents.
			</div> 
			</div> 
			<div id="Kyorin" class="company_info">
			<div id="subtitle">Kyorin</div><!-- #subtitle end -->
			<div id="company_explanation">
		In 2012, Kyorin reported revenue of 11.8 billion dollars.  It is primarily engaged in the 
		manufacture and sale of prescription medicines. The company also emphasizes respiratory, urinary, 
		and ear, nose, and throat drugs as well as synthetic antibacterial agents. Some of its key products 
		include Mucodyne and Kipres. Kyorin Pharmaceutical is a Japanese company founded in 1923.
			</div>
			</div> 
		</div><!-- #info_detail end -->	
		<div id="report_src">
			<br><br>
			<div id="subtitle">
			Company Report
			</div>
			<table cellpadding="1">
				<tr><td><div><a href="src/Consumer and ranking edit 6-28.pdf">
				<img src="images/CompanyReportThumb.jpg" width="120px" height="180px"/></a></div></td>
				<td>
				 Learn more about the companies and drugs.
				</td></tr>
			</table>	
		</div><!-- #report_src end -->		
	</div><!-- #company_info end -->
	<div id="tdcn">
		<div id="info_detail_box">
			<div id="subtitle"><div id="company_short_name" class="box_info"></div></div>
			<div id="impact_score" class="box_info"></div>
			<div id="company_drugs" class="box_info"></div>
			<div id="company_disease" class="box_info"></div><br>
			<div id="bar_graph"></div>
	
		</div><!-- #info_detail end -->
		<div id="score_explanation">
		<p>&nbsp;</p>
		<div id="subtitle">
			Company Information
		</div>
			<div id="Daichii" class="score_exp">
<p>Daichii Sankyo has a total impact score of 15,978.61. Its entire score comes from treating TB. </p> Daichii Sankyo produces two anti-TB treatments: Lfx and Ofx. Lfx is an essential drug for treating multiple drug resistant TB (MDR-TB). All three regimens for MDR-TB include Lfx. On the other hand, Ofx is included in the treatment regimen for extensively drug resistant TB (XDR-TB).</p><p>
Combining the impact of its two drugs, Daichii Sankyo accounts for 0.06% of total DALYs alleviated by any company lost to TB in the world of 2010. Its total impact score ranks Daichii Sankyo at the thirteenth place in our index.</p>

			</div> 
			<div id="Sanofi" class="score_exp">	
Sanofi has a Total Impact Score of 20,180,440.57. Of that score, 67.29%, or 13,579,865.04, comes from treating malaria and 32.71%, or 6,600,575.53, comes from treating TB.  </p><p>
Sanofi produces two widely-used first-line treatments against malaria, AS+AQ and AS+AP. Through the production of these two anti-malaria drugs, Sanofi is responsible for 50.07% of the total DALYs alleviated that would have been lost to malaria in the world in 2010. Sanofi placed first in terms of total DALYs lost to malaria alleviated by any company.</p><p>

Sanofi also produces two anti-TB drugs, Eto and R. Eto is especially important in treating Multiple drug-resistant TB (MDR-TB) because it is included in all three Anti MDR-TB treatment regimens. R is also important because it is one of the standard 6-month first-line regimens against TB. For its TB drugs, Sanofi helped to alleviate 24.97% of the DALYs that would have been lost to TB in the world of 2010. Sanofi placed second in terms of total DALYs lost to TB alleviated by any company. </p><p>

Although Sanofi’s drugs do not top other drugs companies make in every aspect that we measured, its consistently good performance in helping to alleviate the global burden of malaria and TB put it in first place in our index.  </p>
			</div> 
			<div id="Shire" class="score_exp">
Shire Pharmaceuticals has a total impact score of 7,431,422.84. All of its score comes from treating HIV/AIDS. </p><p>

Shire’s 3TC is the most-used first-line anti-HIV regimen. 3TC is included in 87.5% of first-line treatments against HIV of adults and 85.7% first-line treatments against HIV in children. 3TC is especially essential in treating children in Group A countries as part of a first-line regimen. 8 out of 9 treatments for children in these countries include 3TC, which accounts for 98.5% of the treatment coverage. In 2010, 3TC helped to alleviate the most DALYs lost to HIV, 31.19% of all the DALYs alleviated in the world in 2010.</p><p>  
Although Shire Pharmaceuticals manufactures only 3TC, its total impact score puts Shire Pharmaceuticals in fourth place in our index. 
</p>
			</div> 
			<div id="Boehringer" class="score_exp">
<p>Boehringer Ingelheim Pharmaceuticals has a total impact score of 4,459,685.33. All of its score comes from treating HIV. </p><p>
Boehringer Ingelheim’s NVP is used in many first-line regimens treating HIV. Most of NVP’s score came from treating adults in Group A countries. Combined with other drugs, NVP accounts for 59.7% of adult first-line treatment in Group A countries. In 2010, NVP helped to alleviate 4,459,685.33 DALYs lost to HIV in the world, which accounts for 18.72% of the total alleviated DALYs lost to HIV. In terms of total alleviated DALYs, NVP ranks second among all other anti-HIV drugs.
</p><p>
Overall, Boehringer Ingelheim Pharmaceuticals ranks sixth in our index. </p>
			</div>
			<div id="Pfizer" class="score_exp">
Pfizer Inc has a total impact score of 13,209,904.58. All of its score comes from treating TB. Pfizer’s four anti-TB drugs helped to alleviate more of the DALYs lost to TB than any other company in the world in 2010, which accounts for 49.97% of the total TB DALYs averted in 2010.  </p><p>
Pfizer’s E and Z are two of the four standard 6-month first-line regimens against TB. Its Cs and PAS are essential regimens in treatments of multiple drug-resistant TB (MDR-TB). All three MDR-TB treatment regimens include Cs and PAS. </p><p>
Although Pfizer’s four anti-TB drugs perform the best among all other anti-TB drugs, the total DALYs averted is not as high as the two companies above, and it thus ranks third in our index. </p>
			</div> 		
			<div id="Bristol-Myers" class="score_exp">
<p>Bristol-Myers Squibb has a total impact score of 3,268,276.09. Of its score, 99.57%, or 3,254,227.49, comes from treating HIV and 0.43%, or 14,048.60, comes from treating TB.</p><p>
Bristol-Myers Squibb produces two anti-HIV drugs, ddl and d4T. Ddl, as a first-line treatment, is used only for children in Group B countries while, as a second-line treatment, ddl is used by adults in Group A countries and by children in both group A and B countries.  Most of ddl’s score came from its treatment for children in Group A countries (as a second-line treatment). When combined with other drugs, ddl is included in 39.60% of second-line treatment regimens for children in Group A countries. Most of the score of d4T came from its use in first-line treatment for children in Group A countries. In combinations with other drugs, d4T is part of 56.4% of first-line treatment regimens for children in Group A countries. </p><p>
Bristol-Myers Squibb also produces two anti-TB drugs, Amk and Km. Km is used to treat both multiple drug-resistant TB (MDR-TB) and extensively drug-resistant TB (XDR-TB) while Amk is used only to treat XDR-TB. Most of Km’s score came from its use in a treatment against MDR-TB. The treatment  regimen Km + Lfx + Eto + Cs + PAS receives credit for 74% of the total impact of MDR-TB treatment; Km receives 1/5 of the impact of this treatment regimen.  </p><p>
Bristol-Myers Squibb’s HIV drugs helped to alleviate 13.66% of the total global burden of HIV alleviated in the world in 2010, while its TB drugs helped to alleviate 0.05% of the total TB DALYs alleviated. With its TB and HIV scores combined, Bristol-Myers Squibb ranks seventh in our index. </p>
			</div> 			
			<div id="Viiv" class="score_exp">
<p>Viiv Healthcare has a total impact score of 3,255,005.01.</p><p>
Viiv Healthcare produces three drugs for HIV: ABC, AZT and NFV. Most of ABC’s score came from treating children in Group A countries as a second-line treatment. ABC is included in 42.6% of second-line treatment regimens for children in Group A countries. AZT is an important regimen for first-line treatment of children in Group B countries. All six first-line treatments in these countries include AZT. In addition, AZT is especially effective when combined with 3TC and EFV to treat HIV in adults in Group B countries. Their combined effectiveness achieved 82.00%, which tops all other first-line regimens for Adults in Group B countries. Lastly, NFV is used as a regimen in both first-line and second-line treatments of children in Group B countries. All of NFV’s score came from the treatments for children in these countries. </p><p>
Combining the impact scores of its three drugs, Viiv Healthcare helped to alleviate 3,227,206.05 DALYs lost to HIV, 13.54% of the total HIV DALYs alleviated in the world in 2010. Viiv Healthcare ranks eighth in our index. 
</p>

			</div> 			
			<div id="Merck" class="score_exp">
<p>Merck has a total impact score of 3,113,020.28. Of its score, 99.90%, or 3,110,048.90, comes from treating HIV and 0.10%, or 2,971.38, came from treating TB. </p><p> Merck’s sole anti-HIV drug, EFV, accounts for most of its score. EFV serves as a regimen in both first-line and second-line treatments for HIV. EFV receives most of its score from its inclusion in first-line treatment regimens for adults in Group B countries. EFV is included in 53.1% first-line treatment regimens for adults in Group B countries. EFV is especially effective when combined with AZT and 3TC.  </p><p>
Merck’s anti-TB drug, S, is used as a regimen to treat multiple drug-resistant TB (MDR-TB). S is included in two out of three treatments against MDR-TB. </p><p>
With the two drugs, Merck helped to avert 13.05% of total DALYs alleviated by any company for HIV and 0.011% of total for TB. Combing the total impact of both drugs, we rank Merck ninth in our index. </p>
			</div> 
			<div id="Hoffman-LaRoche" class="score_exp">
<p>Hoffman-LaRoche has a total impact score of 6,587,721.05. All of its score comes from treating TB. </p><p>

Hoffman-LaRoche’s sole anti-TB drug, H, served as one out of four standard 6-month first-line regimens. H performs the third best in alleviating DALYs lost to TB among all anti-TB drugs. It alone alleviated 6,587,721.05 DALYs in 2010 — 24.92% of the total DALYs alleviated that would have been lost to TB in the world of 2010. </p><p> 
Hoffman-LaRoche is ranked fifth in our index.</p>
			</div> 			
			<div id="Gilead" class="score_exp">
Gilead Science has a total impact score of 1,989,941.39. All of its score comes from treating HIV/AIDS. Gilead Science produces two drugs for treating HIV/AIDS: FTC and TDF. FTC serves as a regimen in treating adults in both Group A and B countries. Most of FTC’s score came from its inclusion in second-line treatment regimens for adults in Group A countries. FTC is included in 10.70% of second-line treatment regimens for adults in group A countries. </p><p>
Gilead Science’s second drug treating HIV/AIDS is TDF, which is included in regimens for adults in both Group A and Group B countries. TDF is also part of a second-line regimen to treat children in Group A countries, though this treatment regimen only accounts for 2% of second-line treatments for children in group A countries. Most of TDF’s score came from treating adults in Group B countries as a second-line regimen. TDF is included in 6 out of 10 second-line treatments against HIV for adults in Group B countries. Combined with other regimens, TDF is part of 54.2% of second-line treatment regimens for adults in Group B countries. </p><p>
Combing the impact of its two drugs, Gilead Science accounts for 8.35% of the total DALYs alleviated that would have been lost to HIV in the world of 2010. Its total impact score puts Gilead Science in tenth place in our index. 
</p>


			</div>
			<div id="Abbot" class="score_exp">
<p>Abbot Laboratories has a total impact score of 335,233.33. Its entire score comes from treating HIV/AIDS. </p><p> 
Abbot Laboratories receives credit for two anti-HIV drugs: LPV/r and half of the credit for ATV/r. LPV/r is included in regimens for treating adults and children in both Group A and Group B countries. Most of LPV/r’s score came from its inclusion in second-line treatment for adults in Group A countries. All second-line treatments of adults in Group A countries include LPV/r. LPV/r is most effective when combined with TDF and 3TC. ATV/r, the second of Abbot Laboratories’ treatments against HIV, is used only to treat adults in Group B countries. Most of ATV/r’s score came from treating these adults as a second-line regimen. ATV/r is included in 14.80% of second-line treatments for adults in Group B countries. </p><p>
Combining the impact of its two drugs, Abbot Laboratories accounted for 1.41% of total DALYs alleviated that would have been lost to HIV in the world of 2010. The total impact score of Abbot Laboratories ranks eleventh in our index. </p>


			</div>			
			<div id="Tonghe" class="score_exp">
<p>Chongqing Tonghe Pharmaceutical Co. Ltd. has a total impact score of 6,730.11. Its entire score comes from treating malaria. </p><p>Chongqing Tonghe produces DHA-PPQ, which serves as a first-line treatment against malaria. Most of DHA-PPQ’s score came from its average treatment efficacy, which ranks second (97.50%) in all malaria drugs. Additionally, DHA-PPQ is only used as a first-line drug for malaria in five countries. </p><p>In 2010, Chongqing Tonghe’s DHA-PPQ helped to alleviate 0.02% of the total DALYs that would have been lost to malaria. Its total impact score ranks Chongqing Tonghe Pharmaceutical Co. Ltd. thirteenth in our index. </p>

			</div>
			<div id="Novartis" class="score_exp">
 Novartis has a total impact score of 13,555,410.12. Of that score, 99.85%, or 13,534,956.85, comes from treating malaria and 0.15%, or 20,453.27, comes from treating HIV/AIDS.  </p><p> 
Novartis’s malaria drug, AL, performs the second best in almost every aspect among all anti-malaria drugs. It alleviated the second most—49.90% of the total DALYs that would have been lost to malaria in the world of 2010. It is also the most used anti-malarial drug among countries. </p><p>

Out of 104 countries that specify a first-line treatment for p. falciparum malaria, 53 used AL as the only, or a primary part of, their first-line drug treatments. Moreover, AL ranks as the second most effective anti-malaria drug, with an average efficacy of 98.10%.  </p><p>
Novartis also shares credit for an HIV drug, ATV/r, which accounts for the alleviation of 0.17% of the total avoided DALYs lost to HIV/AIDS. It is included in 2 out of 8 treatments in low-and-middle-income countries in Latin America.</p><p>
Due to the impressive performance of AL, Novartis ranks second in our index.</p>
			</div>		
			<div id="Lilly" class="score_exp">
Eli Lilly has a total impact score of 2,082.75. Its entire score comes from treating TB. Eli Lilly’s anti-TB drug, Cm, serves to treat extensively drug-resistant TB (XDR-TB). It helps to alleviate 0.008% of the total DALYs that would have been lost to TB in the world of 2010. Eli Lilly is ranked fourteenth in our index. </p>
			</div> 		
			<div id="Bayer" class="score_exp">
Bayer Healthcare has a total impact score of 1,562.06. Its entire score comes from treating TB. Bayer Healthcare’s anti-TB drug, Mfx, is part of the treatment regimen for extensively-drug resistant TB (XDR-TB). In 2010, Mfx helped to alleviate 0.006% of the total DALYs that would have been lost to TB in the world. Its total impact score ranks Bayer Healthcare at the fifteenth place in our index. </p>

			</div> 
			<div id="Kyorin" class="score_exp">
Kyorin Pharmaceutical Co., Ltd has a total impact score of 1,562.06. Its entire score comes from treating TB. Kyorin’s anti-TB drug, Gfx is part of the treatment regimen for extensively drug-resistant TB (XDR-TB). In 2010, Gfx helped to alleviate 0.006% of the total DALYs that would have been lost to TB in the world. Its total impact score ranks Kyorin Pharmaceutical Co., Ltd. sixteenth in our index.</p>
			</div>		
		</div><!-- #score_explanation end -->
	</div><!-- #tdcn end -->
	<div id="fhcn">
		<div id="key_drug">
			<div id="subtitle">
			Key Drugs
			</div>
			<br>
			<div id="Daichii" class="drugs_info">
			<drug_name>Artemether Lumefantrine (AL)</drug_name> is a fixed combination therapy of artemisinin and 
			lumefantrine and is mainly used in the treatment in Malaria.  AL is one of the most common 
			first line combination therapies for malaria globally. This is largely because of its high cure rates against 
			drug-resistant malaria.  Side effects such as headaches, anorexia, and sleep disorders 
			have been associated with AL.  AL was patented by the Indian company Ranbaxy Laboratories in 
			2009, which was bought by Daiichi Sankyo in 2008.<br><br>
			<drug_name>Levofloxacin</drug_name> is used to treat tuberculosis and other bacterial pathogens responsible 
			for respiratory, gastrointestinal, urinary tract, and abdominal infections. In 2011, the U.S. Food 
			and Drug Administration (FDA) added two black box warnings for this drug because of its relation 
			to tendon ruptures, muscle weakness and breathing problems. However, Levofloxacin is about twice 
			as potent as ofloxacin against mycobacterium tuberculosis. 
			The FDA approved the drug on December 20th, 1996. <br> <br>
			<drug_name>Ofloxacin</drug_name> is a flurorquinolone synthetic antibiotic. It is used in combination with other 
			drugs as treatment for multi-drug-resistant TB. Daiichi first patented the drug in 1980. Daiichi has since 
			merged with Sankyo  to form Daiichi Sankyo
			</div> 
			<div id="Sanofi" class="drugs_info">
			<drug_name>Artesunate/Amodiaquine</drug_name> is an artemisinin-based combination therapy (ACT) used 
			to treat acute uncomplicated plasmodium falciparum malaria. This anti-malarial combination treatment 
			was launched in 2007 by the Drugs for Neglected Disease Initiative in partnership with Sanofi-Aventis.<br><br> 
			<drug_name>Artesunate + Sulfadoxine-Pyrimethamine</drug_name> is another artemisin-based combination 
			therapy for the treatment of malaria. Sanofi acquired the patent once it bought Hoechst AG which held 
			the original patent. <br><br>
			<drug_name>Rifampicin</drug_name> is an antibiotic that is used in the treatment of tuberculosis along 
			with drugs such as pyranizamide, isoniazid, and ethambutol.  The earliest patent for rifampicin was 
			filed in 1965 by Gruppo Lepetit (now a subsidiary of Sanofi).
			</div> 
			<div id="Shire" class="drugs_info">
			<drug_name>Lamivudine</drug_name> is often used in combination with AZT as an effective treatment 
			against HIV. AF Biochem first patented lamivudine, which subsequently changed its name to Biochem 
			Pharma, and later merged, with Shire Pharmaceuticals in 2000.
			</div> 
			<div id="Boehringer" class="drugs_info">
			<drug_name>Nevirapine</drug_name> is a non-nucleoside reverse transcriptase inhibitor used to treat 
			both HIV-1 infection (the most common strain of the virus) and AIDS.  It is marketed as Viramune, and 
			is often used in combination therapies of three or more antivirals. Boehringer Ingelheim was the first 
			company to patent this drug and it was approved in 1996 for adults and in 1998 for children. In 2000, 
			it received a black box warning from the FDA because it poses a risk of liver toxicity.
			</div>
			<div id="Pfizer" class="drugs_info">
			<drug_name>Cycloserine</drug_name> is an antibiotic used against mycobacterium tuberculosis. It is 
			classified as a second line drug and is used in combination therapies for MDR- and XDR-TB. It is 
			known to cause many side effects including headache, dizziness, anxiety, confusion, irritability, 
			tingling, speech difficulties, fainting, drowsiness, tremor, psychosis and depression.<br><br> 
			<drug_name>Ethambutol</drug_name> is a bacteriostatic anti-mycobacterial drug used to treat tuberculosis. 
			It is usually given in combination with other tuberculosis drugs like isoniazid, rifampicin, and pyrazinamide. 
			The earliest patent for ethambutol held by the American Cyanamid Company was issued in 1976.  American 
			then became a subsidiary of American Home Products Corp.  In 1995, American Home Products eventually 
			changed its name to Wyeth and Pfizer subsequently acquired Wyeth.<br><br>
			<drug_name>Pyrazinamide</drug_name> is used to treat tuberculosis. The drug is largely used to slow down 
			the growth of bacteria, but it can be used to kill actively replicating tuberculosis bacteria. 
			It is only used in combination with other drugs like isoniazid and rifampicin in the treatment of 
			mycobacterium tuberculosis. The most common side effects are severe joint pains. The earliest patent 
			for pyrazinamide was granted in 1954 (filed in 1952) by the American Cyanamid Company, which merged with 
			American Home Products in 1994 and subsequently changed its name to the Wyeth Corporation. Wyeth merged 
			with Pfizer in 2009.
			</div> 		
			<div id="Bristol-Myers" class="drugs_info">
			<drug_name>Didanosine</drug_name> is an antiretroviral drug (reverse transciptase inhibitor) used as a 
			treatment for HIV.  The drug and its effectiveness as an HIV treatment were discovered by The National 
			Cancer Institute (NCI). Since NCI does not market products, they awarded the license to Bristol Myers 
			Squibb. Didanosine was the second HIV treatment drug to be awarded approval by the FDA in 1991.<br><br>
			<drug_name>Stavudine</drug_name> is an antiretroviral (nucleoside analog reverse transcriptase inhibitor) 
			used in the treatment of HIV. It was discovered in the 1960’s and was subsequently found to be effective 
			in treating HIV. The FDA approved the drug in 1994 and it is currently manufactured under the trade name 
			Zerit.<br><br>
			<drug_name>Kanamycin</drug_name> is an antibiotic (aminoglycoside bactericidal) that is used in treatment 
			of MDR-TB as well as a wide variety of infections. Additionally, the drug is often used for research, 
			particularly, in molecular biology as a selective agent most commonly to isolate bacteria.<br><br>
			<drug_name>Amikacin</drug_name> is used in combination therapy to treat MDR-TB.  It is also commonly used to 
			treat major, infections from drug-resistant bacteria.  The patent for Amikacin was issued to Brstol Myers 
			Squibb in 1973. 
			</div> 			
			<div id="Viiv" class="drugs_info">
			<drug_name>Neflinivar</drug_name> is an antiretroviral that is used in the treatment of HIV. The Agouron 
			Institute first developed Nelfinavir. Agouron was then sold to Warner Lambert in 1998, which subsequently 
			merged with Pfizer.  ViiV was created in 2009 as a joint venture between GlaxoSmithKline and Pfizer to 
			take over their HIV operations and thus holds the patent for Neflinivar.<br><br>
			<drug_name>Abacavir</drug_name> is an antiretroviral drug used to treat HIV and AIDS. The drug is never 
			taken alone for threat of serious adverse effects (hypersensitivity and anaphylaxis). The first patent 
			for Abacavir was by The Wellcome Foundation Limited.  The Wellcome Foundation Limited then merged with 
			Glaxo in 1995 to form Glaxo Wellcome.<br><br>
			<drug_name>Zidovudine</drug_name> is an antiviral drug used to treat HIV and AIDS. It was the first U.S 
			government approved treatment for HIV therapy and is also used to prevent HIV transmission. It is often 
			administered in combination therapy specifically in highly active antiretroviral therapy (HAART) where 
			AZT is combined with other drugs to prevent AZT-resistant.
			</div> 			
			<div id="Merck" class="drugs_info">
			<drug_name>Efavirenz</drug_name> is used as a part of highly active antiretroviral therapy to treat 
			HIV type 1 (as a non-nucleoside reverse transciptase inhibitor). It is also used as a regimen to reduce 
			the likelihood of HIV infection in people who are exposed to significant risk. Merck first patented the 
			drug in 1996.<br><br>
			<drug_name>Streptomycin</drug_name> is an antibiotic, antimycobacterial drug (classified as an aminoglycosides). 
			It was the first antibiotic remedy for tuberculosis. It is only administered through injections and is used 
			in combination with other anti-TB drugs.
			</div> 
			<div id="Hoffman-LaRoche" class="drugs_info">
			<drug_name>Isoniazid</drug_name> is an organic compound used as first line medication in prevention and 
			treatment of tuberculosis.  It is a relatively inexpensive medication. The earliest patent for Isoniazid 
			is by Hoffman La Roche in 1952. 
			</div> 			
			<div id="Gilead" class="drugs_info">
			<drug_name>Emtricitabine</drug_name> is a nucleotide reverse transcript inhibitor that is used as a 
			treatment for HIV. Emtricitabine was first developed by scientists at Emory University. Gilead subsequently 
			paid $525 million for the royalties due to Emory for the drug.<br><br>
			<drug_name>Tenofovir</drug_name> is an antiretroviral drug used in treatment of HIV. The drug was approved 
			by the FDA in 2006 and is often used with emtricitabine and efivarenz. Tenofovir was patented by Gilead 
			Sciences, Inc. in 1998 (filed in 1996).
			</div>
			<div id="Abbot" class="drugs_info">
			<drug_name>Lopinavir</drug_name> is an antiretroviral used to treat HIV/AIDS and hepatitis C. It is often 
			used with ritonavir in a combination treatment for HIV (approved by the FDA in 2000). Some common side effects 
			of Lopinavir and Ritonavir include nausea, irregular heartbeat, and tiredness.  Lopinivar/Ritonavir was 
			produced as an upgrade for Ritonavir. The FDA approved Lopinavir in 2000, and the patent for the drug will 
			expire in 2016.<br><br>
			<drug_name>Atazanavir/Ritonavir</drug_name> is another antiretroviral that is used in the treatment of HIV. 
			When atazanavir is used with ritonavir this drug combination is as potent as Lopinavir. The earliest patent 
			for atazanavir was by Novartis in 1995. 
			</div>			
			<div id="Tonghe" class="drugs_info">
			<drug_name>Dihydroarteminisin-Piperaquine</drug_name> is a drug used to treat malaria. A patent for dihydroartemisinin-piperaquine 
			for use in treatment of ,alaria was first applied for by Chongqing Tonghe in 2000 (US Patent issued 2010). 
			It is sold commercially in combination and has 
			been shown to be equivalent to artemether/lumefantrine in some trials but generally has fewer adverse side 
			effects and is administered once a day for three days instead of twice a day.  This all makes the drug more 
			patient-friendly than other artemisinin combination therapies (ACTs). Until recently, the public sector has 
			had no access to the drug as it had not been approved and hence could not be procured using international donor 
			funds. Approval by the European Medicines Agency (EMA) is now set to change this. 
			</div>
			<div id="Novartis" class="drugs_info">
			<drug_name>Atazanavir/Ritonavir</drug_name> is an antiretroviral drug used in HIV/AIDS treatment. It is used 
			to replace lopinavir/ritonavir treatment (it generally has less gastrointestinal toxicity). Abbott Laboratories 
			first patented Ritonavir in 1993 and Novartis issued a patent for atazanavir in 1995 (to Ciba-Geigy, 
			at the time).
			</div>		
			<div id="Lilly" class="drugs_info">
			<drug_name>Capreomycin</drug_name> is used in treating lung infections caused by certain strains of tuberculosis. 
			It is a peptide antibiotic, which is given in combination with other antibiotics for multi-drug resistant TB. Capreomycin 
			is a polypeptide antibiotic derived from Streptomyces capreolus originally isolated by Eli Lilly & Co. in 1961.
			</div> 		
			<div id="Bayer" class="drugs_info">
			<drug_name>Moxifloxacin</drug_name> is used to treat tuberculosis. Additionally, it is used for several types of 
			infections including respiratory, cellulitis, anthrax, and meningitis.   It is sold as eye drops under the brand 
			names Vigamox and Moxeza to treat pink eye.  The drug was approved in 1999 for use in the United States.
			</div> 
			<div id="Kyorin" class="drugs_info">
			<drug_name>Gatifloxacin</drug_name> is a fluoroquinolone antibiotic. Previously, Bristol-Myers Squibb produced 
			this product under the name Tequin for the treatment of respiratory tract infections. Due to its adverse side 
			effects Gatifloxacin is currently only available in the United States and Canada as an ophthalmic solution 
			(eye drops).
			</div>	
		</div><!-- #key_drug end -->
		<div id="report_src">
			<br><br>
			<div id="subtitle">
			Score Explanation Report
			</div>
			<table cellpadding="1">
				<tr><td><div><a href="src/Company Ranking Only 6-28.pdf">
				<img src="images/RankingExplanationThumb.jpg" width="120px" height="180px"/></a></div></td>
				<td>
				 This report explains the score break-down for each company.
				</td></tr>
			</table>	
		</div><!-- #report_src end -->
	</div><!-- #fhcn end -->	
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
