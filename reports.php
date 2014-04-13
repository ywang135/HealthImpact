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
			Report
			</div>
			<table cellpadding="5" width="600">
				<tr><td><div><a href="">
				<img src="images/Paper_Global Health Impact.jpg" width="100px" height="150px"/></a></div></td>
				<td><drug_name>Company Report</drug_name><!-- #subtitle end --><br>
				 Learn more about the companies and drugs.
				</td></tr>
				<tr><td><div><a href="">
				<img src="images/WP_11_2012_Hassoun.jpg" width="100px" height="150px"/></a></div></td>
				<td><drug_name>Score Explanation</drug_name><!-- #subtitle end --><br>
				 This report explains the score break-down for each company.
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
		<div id="score_explanation">
		<p>&nbsp;</p>
		<div id="subtitle">
			Score Explanation
		</div>
			<div id="Daichii" class="score_exp">
			<p>Daiichi Sankyo</p>
			</div> 
			<div id="Sanofi" class="score_exp">
			<p>Sanofi-Aventis</p>
			</div> 
			<div id="Shire" class="score_exp">
			<p>Shire Pharmaceuticals</p>
			</div> 
			<div id="Boehringer" class="score_exp">
			<p>Boehringer Ingelheim Pharmaceuticals</p>
			</div>
			<div id="Pfizer" class="score_exp">
			<p>Pfizer</p> 
			</div> 		
			<div id="Bristol-Myers" class="score_exp">
			<p>Bristol-Myers Squibb</p>
			</div> 			
			<div id="Viiv" class="score_exp">
			<p>Viiv Healthcare</p>
			</div> 			
			<div id="Merck" class="score_exp">
			<p>Merck</p>
			</div> 
			<div id="Hoffman-LaRoche" class="score_exp">
			<p>Hoffman-LaRoche</p>
			</div> 			
			<div id="Gilead" class="score_exp">
			<p>Gilead Science</p>
			</div>
			<div id="Abbot" class="score_exp">
			<p>Abbott Labs</p> 
			</div>			
			<div id="Tonghe" class="score_exp">
			<p>Chongqing Tonghe Pharmaceutical Co</p>
			</div>
			<div id="Novartis" class="score_exp">
			<p>Novartis</p>
			</div>		
			<div id="Lilly" class="score_exp">
			<p>Eli Lilly</p>
			</div> 		
			<div id="Bayer" class="score_exp">
			<p>Bayer AG</p>
			</div> 
			<div id="Kyorin" class="score_exp">
			<p>Kyorin Pharmaceutical Co., Ltd</p>
			</div>	
			<br>
			Score Explanation information goes here.
			<br>		
		</div><!-- #score_explanation end -->
		
	</div><!-- #fhcn end -->	
	</div><!-- .main_body end -->

<?php
	include "footer.php";
?>
