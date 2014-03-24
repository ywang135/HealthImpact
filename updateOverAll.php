<html>
    <head>
    <title>Update Country Data</title>
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
    		for(i=0;i<len; i++){
    			var fd = new FormData();
    			
    			fd.append('countryName', $('[name="country_'+i+'"]').val());
    			fd.append('malariadalys', $('[name="malariadalys_'+i+'"]').val());
    			fd.append('tbdalys', $('[name="tbdalys_'+i+'"]').val());
    			fd.append('hivadultdalys', $('[name="hivadultdalys_'+i+'"]').val());
    			fd.append('hivchildrendalys', $('[name="hivchildrendalys_'+i+'"]').val());
    			fd.append('overallhivdalys', $('[name="overallhivdalys_'+i+'"]').val());
    			fd.append('overalldalys', $('[name="overalldalys_'+i+'"]').val());
    			
    			fd.append('malariascore', $('[name="malariascore_'+i+'"]').val());
    			fd.append('tbscore', $('[name="tbscore_'+i+'"]').val());
    			fd.append('hivscore', $('[name="hivscore_'+i+'"]').val());
    			fd.append('overallimpactscore', $('[name="overallimpactscore_'+i+'"]').val());
    			
    			$('[name="country_'+i+'"]').val("write in");
				setTimeout(function(){
  					
				}, 1000);
    			var req = new XMLHttpRequest();
    			req.open('POST', 'updateOverAllSheetDB.php', true);
    			req.send(fd);
    		}
    		var fd = new FormData();
    		fd.append('passwd', $('[name="passwd"]').val());
    		fd.append('countryName', $('[name="country_'+i+'"]').val());
    		fd.append('malariadalys', $('[name="malariadalys_'+i+'"]').val());
    		fd.append('tbdalys', $('[name="tbdalys_'+i+'"]').val());
    		fd.append('hivadultdalys', $('[name="hivadultdalys_'+i+'"]').val());
    		fd.append('hivchildrendalys', $('[name="hivchildrendalys_'+i+'"]').val());
    		fd.append('overallhivdalys', $('[name="overallhivdalys_'+i+'"]').val());
    		fd.append('overalldalys', $('[name="overalldalys_'+i+'"]').val());
    			
    		fd.append('malariascore', $('[name="malariascore_'+i+'"]').val());
    		fd.append('tbscore', $('[name="tbscore_'+i+'"]').val());
    		fd.append('hivscore', $('[name="hivscore_'+i+'"]').val());
    		fd.append('overallimpactscore', $('[name="overallimpactscore_'+i+'"]').val());
    		var req = new XMLHttpRequest();
    		req.open('POST', 'updateSumDB.php', true);
    		req.send(fd);
		}
		window.addEventListener('load', function(){
    		//console.log("there!");
    		var messageForm = document.getElementById('countryForm');
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
            var pre_html = '<form id="countryForm" method="post">\
            <table border="1px"><tr><td>Country</td><td>Malaria DALYs</td>\
    <td>TB DALYs</td><td>HIV Adult DALYs</td><td>HIV Children DALYs</td><td>Overall HIV DALYs</td><td>Overall DALYs</td><td>Malaria Score</td>\
    <td>TB Score</td><td>HIV Score</td>\
    <td>Overall Impact Score</td></thead><tbody>';
            var actual_html='';
            var len = json.feed.entry.length
            var post_html = '</tbody></table>\
            Row-length:<input type="text" readonly name="len" id="len" value ='+ len+ '\>\
            Password:<input type="password" name="passwd" id="pwd"> \
            <input type="submit" form ="countryForm" value="Submit"></form>'
            //figure out how many rows our spreadsheet has
            
 
            //loop through the spreadsheet, gathering data
            for (var i=0; i<len; i++) {
                //for each row, add the following to actual HTML, grabbing it as a list, and then joining the list together as one long string.
                //Uses HTML for table cells, and then grabs attributes from the spreadsheet, using appropriate syntax. Enter your table header in the Google spreadsheet between            
                //the gsx$ and .$t.
                
                var str = json.feed.entry[i].content.$t.split(", ");
                var map= new Object();
                for(var j=0; j<str.length;j++){
                	var kv = str[j].split(": ")
                	map[kv[0]]=kv[1];
                }
                actual_html += [
                    '<tr><td>', 
                    '<input type="text" readonly name="country_',i,
                    '" value="',
                    json.feed.entry[i].title.$t, 
                    '" >',
                    '</td><td>', 
                    '<input type="text" readonly name="malariadalys_',i,
                    '" value="',
                    map['malariadalys'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="tbdalys_',i,
                    '" value="',
                    map['tbdalys'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="hivadultdalys_',i,
                    '" value="',
                    map['hivadultdalys'], 
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="hivchildrendalys_',i,
                    '" value="',
                    map['hivchildrendalys'],
                    '" >', 
                    '</td><td>', 
                     '<input type="text" readonly name="overallhivdalys_',i,
                    '" value="',
                    map['overallhivdalys'],
                    '" >', 
                    '</td><td>',  
                     '<input type="text" readonly name="overalldalys_',i,
                    '" value="',
                    map['overalldalys'],
                    '" >', 
                    '</td><td>',
                     '<input type="text" readonly name="malariascore_',i,
                    '" value="',  
                    map['malariascore'],
                    '" >',
                    '</td><td>', 
                     '<input type="text" readonly name="tbscore_',i,
                    '" value="', 
                    map['tbscore'],
                    '" >',
                    '</td><td>',
                     '<input type="text" readonly name="hivscore_',i,
                    '" value="',  
                    map['hivscore'],
                    '" >',              
                    '</td><td>', 
                     '<input type="text" readonly name="overallimpactscore_',i,
                    '" value="', 
                    map['overallimpactscore'],
                    '" >',
                    '</td>','</tr>'
                ].join(''); 
            }
            //put all three of our HTML strings into our div we made at the top of the page
            document.getElementById('country_table_container').innerHTML = pre_html + actual_html + post_html;//
        }   
    </script>
</head>
<body>
 	
<div id="country_table_container"></div>
 
<!-- Grab the data from our google spreadsheet, using the callback to call the function we just created -->
<script src="http://spreadsheets.google.com/feeds/list/0AiEaimFwYPTadDFJUFB3bmZFVHRYQmRzX1lvWU4zMlE/od6/public/values?alt=json-in-script&gid=1&amp;callback=displayContent" type="text/javascript"></script>
<?php
	//echo "<br>".md5("")."<br>";
?>
</body>
</html>
