<html>
    <head>
    <title>Update Drug Data</title>
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
    			fd.append('abbreviation', $('[name="abbreviation_'+i+'"]').val());
    			fd.append('name', $('[name="name_'+i+'"]').val());
    			fd.append('impact_score', $('[name="impact_score_'+i+'"]').val());
    			fd.append('company', $('[name="company_'+i+'"]').val());
    			fd.append('disease', $('[name="disease_'+i+'"]').val());
    			
    			$('[name="abbreviation_'+i+'"]').val("write in");
				setTimeout(function(){
  					
				}, 1000);
    			var req = new XMLHttpRequest();
    			req.open('POST', 'updateDrugDB.php', true);
    			req.send(fd);
    		}
		}
		window.addEventListener('load', function(){
    		//console.log("there!");
    		var messageForm = document.getElementById('drugForm');
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
            var pre_html = '<form id="drugForm" method="post">\
            <table border="1px"><tr><td>Drug Abbreviation</td><td>Drug Name</td>\
    <td>Impact Score</td><td>Originator Company</td><td>Disease</td></thead><tbody>';
            var actual_html='';
            var len = json.feed.entry.length
            var post_html = '</tbody></table>\
            Row-length:<input type="text" readonly name="len" id="len" value ='+ len+ '\>\
            Password:<input type="password" name="passwd" id="pwd"> \
            <input type="submit" form ="drugForm" value="Submit"></form>'
            //loop through the spreadsheet, gathering data
            for (var i=1; i<len; i++) {
                var str = json.feed.entry[i].content.$t.split(", ");
                var map= new Object();
                for(var j=0; j<str.length;j++){
                	var kv = str[j].split(": ")
                	map[kv[0]]=kv[1];
                }
                actual_html += [
                    '<tr><td>', 
                    '<input type="text" readonly name="abbreviation_',i,
                    '" value="',
                    json.feed.entry[i].title.$t, 
                    '" >',
                    '</td><td>', 
                    '<input type="text" readonly name="name_',i,
                    '" value="',
                    map['_cokwr'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="impact_score_',i,
                    '" value="',
                    map['_cpzh4'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="company_',i,
                    '" value="',
                    map['_cre1l'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="disease_',i,
                    '" value="',
                    map['_chk2m'],
                    '" >', 
                    '</td>','</tr>'
                ].join(''); 
            }
            //put all three of our HTML strings into our div we made at the top of the page
            document.getElementById('drug_table_container').innerHTML = pre_html + actual_html + post_html;//
        }   
    </script>
</head>
<body>
 	
<div id="drug_table_container"></div>
 
<!-- Grab the data from our google spreadsheet, using the callback to call the function we just created -->
<script src="http://spreadsheets.google.com/feeds/list/1WmFvQ9e-3__EyCnH6zOEdSbJvS2Qv9p1_Y2H_bl7rtY/od6/public/values?alt=json-in-script&gid=1&amp;callback=displayContent" type="text/javascript"></script>
<?php
	//echo "<br>".md5("")."<br>";
?>
</body>
</html>
