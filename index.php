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
		x=xmlDoc.getElementsByTagName("Entry");

		function displayData(i)
		{
			enabled = (x[i].getElementsByTagName("Enabled")[0].childNodes[0].nodeValue);
			title = (x[i].getElementsByTagName("Title")[0].childNodes[0].nodeValue);
			author = (x[i].getElementsByTagName("Author")[0].childNodes[0].nodeValue);
			link = (x[i].getElementsByTagName("Link")[0].childNodes[0].nodeValue);
			vrmldata = "<embed width='100%' height='320px' name='vrml_conformance' src='" + link + "' type='model/vrml'></embed>";
			txt = "Info: " + enabled + " | " + title + " | " + author + " | " + link ;
			
			document.getElementById("showData").innerHTML = txt + vrmldata;
		}
	</script>
</head>
<body>
	<div class="hp_body">
		<h1>VRML Conformance Slide</h1>
	
		<div id='showData'></div><br />
	<!--	
		<embed width="100%" height="320px" name="bs_metro" src="testing_files/bs_metro.wrl" type="model/vrml"></embed>
	-->
		<h2>VRML Conformance List</h2>
		<script type="text/javascript">
			document.write("<table border='1'>");
				for (var i = 0; i < x.length; i++) {
					document.write("<tr onclick='displayData(" + i + ")'>");
					document.write("<td>");
					document.write(x[i].getElementsByTagName("Enabled")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					document.write(x[i].getElementsByTagName("Title")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					document.write(x[i].getElementsByTagName("Author")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					document.write(x[i].getElementsByTagName("Link")[0].childNodes[0].nodeValue);
					document.write("</td></tr>");
				}
			document.write("</table>");
		</script>
	</div>
</body>
</html>
