<html>
    <head>
    <title>Update Company Data</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
    <script type='text/javascript'>
    	function sendMessage(e) {
    		var len = parseInt($('#len').val())-1;
   			 e.preventDefault();
			
    		// create a FormData object from our form
    		var hash = CryptoJS.MD5($('[name="passwd"]').val());
    		if(hash != "39cfc15be1ea0a6eb64146bbdbedfcec"){
    			$('[name="passwd"]').val("");
    			alert("invalid password");
    			return;
    		}
    		var i=0;
    		for(i=1;i<len; i++){
    			var fd = new FormData(); 			
    			fd.append('manufacturer', $('[name="manufacturer_'+i+'"]').val());
    			fd.append('disease', $('[name="disease_'+i+'"]').val());
    			fd.append('drugs', $('[name="drugs_'+i+'"]').val());
    			fd.append('impactscore', $('[name="impactscore_'+i+'"]').val());
    			fd.append('malariascore', $('[name="malariascore_'+i+'"]').val());
    			fd.append('tbscore', $('[name="tbscore_'+i+'"]').val());
    			fd.append('hivscore', $('[name="hivscore_'+i+'"]').val());
    			
    			fd.append('percentage', $('[name="percentageoftotaldalyslostalleviated_'+i+'"]').val());
    			
    			$('[name="manufacturer_'+i+'"]').val("write in");
				setTimeout(function(){
  					
				}, 1000);
    			var req = new XMLHttpRequest();
    			req.open('POST', 'updateCompanyDB.php', true);
    			req.send(fd);
    		}
		}
		window.addEventListener('load', function(){
    		//console.log("there!");
    		var messageForm = document.getElementById('companyForm');
   		 	messageForm.addEventListener('submit', sendMessage, false);
		}, false);
    	/*$(function() {
   			$('#country').submit(function() {
   			$l = $('#pwd').val();
        	if(!$l){
        		alert("please input password");
        		return false;
        	}
        	
       		return true; // return false to cancel form action
    		});
		});*/
        //Write a function that allows us to add commas to raw numbers in spreadsheet for display.  2413 becomes 2,413.
        function displayContent(json) {
            var pre_html = '<form id="companyForm" method="post">\
            <table border="1px"><tr><td>Manufacturer</td><td>Disease</td>\
    <td>Drug(s)</td><td>Impact Score</td><td>Malaria Score</td><td>TB Score</td><td>HIV Score</td><td>Percentage of Total DALYs Lost Alleviated</td>\
    </thead><tbody>';
            var actual_html='';
            var len = json.feed.entry.length
            var post_html = '</tbody></table>\
            Row-length:<input type="text" readonly name="len" id="len" value ='+ len+ '\>\
            Password:<input type="password" name="passwd" id="pwd"> \
            <input type="submit" form ="companyForm" value="Submit"></form>'

            for (var i=1; i<len; i++) {
                
                var str = json.feed.entry[i].content.$t.split(", _");
                var map= new Object();
                for(var j=0; j<str.length;j++){
                	var kv = str[j].split(": ")
                	map[kv[0]]=kv[1];
                }
                actual_html += [
                    '<tr><td>', 
                    '<input type="text" readonly name="manufacturer_',i,
                    '" value="',
                    map['_cokwr'],
                    '" >',
                    '</td><td>', 
                    '<input type="text" readonly name="disease_',i,
                    '" value="',
                    map['cpzh4'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="drugs_',i,
                    '" value="',
                    map['cre1l'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="impactscore_',i,
                    '" value="',
                    map['chk2m'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="malariascore_',i,
                    '" value="',
                    map['ciyn3'],
                    '" >', 
                    '</td><td>', 
                     '<input type="text" readonly name="tbscore_',i,
                    '" value="',
                    map['ckd7g'],
                    '" >', 
                    '</td><td>', 
                     '<input type="text" readonly name="hivscore_',i,
                    '" value="',
                    map['clrrx'],
                    '" >', 
                    '</td><td>',  
                     '<input type="text" readonly name="percentageoftotaldalyslostalleviated_',i,
                    '" value="',
                    map['cyevm'],
                    '" >', 
                    '</td>','</tr>'
                ].join(''); 
            }
            //put all three of our HTML strings into our div we made at the top of the page
            document.getElementById('company_table_container').innerHTML = pre_html + actual_html + post_html;
        }   
    </script>
</head>
<body>
 	
<div id="company_table_container"></div>
 
<!-- Grab the data from our google spreadsheet, using the callback to call the function we just created -->
<script src="http://spreadsheets.google.com/feeds/list/1CrHlvTdTYtQPPG2iLHHoDbMPJdvAjHD2lndomw8-bk4/od6/public/values?alt=json-in-script&gid=0&amp;callback=displayContent" type="text/javascript"></script>
<?php
	//echo "<br>".md5("")."<br>";
?>
</body>
</html>
