<html>
    <head>
    <title>Update Disease Data</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
    <script type='text/javascript'>
    	function sendMessage(e) {
    		var len = parseInt($('#len').val());
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
    			fd.append('disease', $('[name="disease_'+i+'"]').val());
    			fd.append('DALY', $('[name="DALY_'+i+'"]').val());
    			fd.append('Treatment_Coverage', $('[name="Treatment_Coverage_'+i+'"]').val());
    			fd.append('First-Line_Efficacy', $('[name="First-Line_Efficacy_'+i+'"]').val());
    			fd.append('Aggregated_Impact_Score', $('[name="Aggregated_Impact_Score_'+i+'"]').val());
    			
    			$('[name="disease_'+i+'"]').val("write in");
				setTimeout(function(){
  					
				}, 1000);
    			var req = new XMLHttpRequest();
    			req.open('POST', 'updateDiseaseDB.php', true);
    			req.send(fd);
    		}
		}
		window.addEventListener('load', function(){
    		//console.log("there!");
    		var messageForm = document.getElementById('diseaseForm');
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
            var pre_html = '<form id="diseaseForm" method="post">\
            <table border="1px"><tr><td>Disease</td>\
    <td>DALYs</td><td>Treatment Coverage</td><td>First-Line Efficacy</td><td>Aggregated Impact Score</td></thead><tbody>';
            var actual_html='';
            var len = json.feed.entry.length
            var post_html = '</tbody></table>\
            Row-length:<input type="text" readonly name="len" id="len" value ='+ len+ '\>\
            Password:<input type="password" name="passwd" id="pwd"> \
            <input type="submit" form ="diseaseForm" value="Submit"></form>'
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
                    '<input type="text" readonly name="disease_',i,
                    '" value="',
                    json.feed.entry[i].title.$t, 
                    '" >',
                    '</td><td>', 
                    '<input type="text" readonly name="DALY_',i,
                    '" value="',
                    map['_cokwr'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="Treatment_Coverage_',i,
                    '" value="',
                    map['_cyevm'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="First-Line_Efficacy_',i,
                    '" value="',
                    map['_cztg3'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="Aggregated_Impact_Score_',i,
                    '" value="',
                    map['_d180g'],
                    '" >', 
                    '</td>','</tr>'
                ].join(''); 
            }
            //put all three of our HTML strings into our div we made at the top of the page
            document.getElementById('disease_table_container').innerHTML = pre_html + actual_html + post_html;//
        }   
    </script>
</head>
<body>
 	
<div id="disease_table_container"></div>
 
<!-- Grab the data from our google spreadsheet, using the callback to call the function we just created -->
<script src="http://spreadsheets.google.com/feeds/list/195Ukukd0svzhggknhehbfB4leiLgshNtXQlJSzJIVKo/od6/public/values?alt=json-in-script&gid=1&amp;callback=displayContent" type="text/javascript"></script>
<?php
	//echo "<br>".md5("")."<br>";
?>
</body>
</html>
