<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>VRML Conformance</title>
	<link rel="shortcut icon" href="img/bs.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<script type="text/javascript">
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","data/vrml_conformance.xml",false);
		xmlhttp.send();
		xmlDoc=xmlhttp.responseXML; 
		x = xmlDoc.getElementsByTagName("Entry");

		i = 0;
		function displayData()
		{
			enabled = (x[i].getElementsByTagName("Enabled")[0].childNodes[0].nodeValue);
			title = (x[i].getElementsByTagName("Title")[0].childNodes[0].nodeValue);
			author = (x[i].getElementsByTagName("Author")[0].childNodes[0].nodeValue);
			link = (x[i].getElementsByTagName("Link")[0].childNodes[0].nodeValue);
			vrmldata = "<embed width='100%' height='320px' name='vrml_conformance' src='" + link + "' type='model/vrml'></embed>";
			txt = "Info: " + enabled + " | " + title + " | " + author + " | " + link ;
			
			document.getElementById("showData").innerHTML = txt + vrmldata;
		}

		function next()
		{
			if (i < x.length-1) {
		    		i++;
		      		displayData();
		        }
		}

		function previous()
		{
			if (i > 0) {
			    	i--;
			      	displayData();
			}
		}
/*	
		var slide = 0;
		function slideData()
		{
			link = (x[slide].getElementsByTagName("Link")[0].childNodes[0].nodeValue);
			vrmlslidedata = "<embed width='100%' height='320px' name='vrml_conformance' src='" + link + "' type='model/vrml'></embed>";
			document.getElementById("slideData").innerHTML = vrmlslideData;
			var interval = setInterval("slideData()", 5000);
			slide = slide + 1;
		}

		function timedCount()
		{
			document.getElementById('txt').value=c;
			c = c + 1;
			t = setTimeout("timedCount()",5000);
		}
*/	
	</script>
</head>
<body onload="displayData()">
	<div class="hp_body">
		<h1>VRML Conformance Slide</h1>
<!--		
		<div id="slideData"></div><br />
-->
		<div id="showData"></div><br />
		
		<input type="button" onclick="previous()" value="<<" />
		<input type="button" onclick="next()" value=">>" />

		<h2>VRML Conformance List</h2>
		
		<!-- ShowData as table -->
		<script type="text/javascript">
			document.write("<table border='1'>");
				for (var n = 0; n < x.length; n++) {
					document.write("<tr onclick='displayData(" + n + ")'>");
					document.write("<td>");
					document.write(x[n].getElementsByTagName("Enabled")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					document.write(x[n].getElementsByTagName("Title")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					document.write(x[n].getElementsByTagName("Author")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					document.write(x[n].getElementsByTagName("Link")[0].childNodes[0].nodeValue);
					document.write("</td></tr>");
				}
			document.write("</table>");
		</script>

	</div>
</body>
</html>
