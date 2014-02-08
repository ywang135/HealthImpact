function myJS(vName, sc1, sc2, sc3, tsc, iso_code){
	var str = "<p>Name: "+vName+",<br>Overall Impact: "+tsc+",<br>ISO code: "+iso_code;		
	document.getElementById('bar_details').innerHTML=str;
	drawChart("bar_details", vName, parseFloat(sc1), parseFloat(sc2), parseFloat(sc3));
	/*var r=confirm("Press a button");
	if (r==true){
  		window.location.href = "../country.php?q="+encodeURIComponent(vName);
  	}*/
}