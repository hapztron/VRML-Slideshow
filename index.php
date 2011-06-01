<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>VRML-Slide</title>
	<link rel="shortcut icon" href="img/bs.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>

	<script type="text/javascript">
		if (window.XMLHttpRequest) {
			/* Code for IE7+, Firefox, Chrome, Opera and Safari */
			xmlhttp=new XMLHttpRequest();
		} else {
			/* Code for IE6, IE5 */
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","data/vrml_conformance.xml",false);
		xmlhttp.send();
		xmlDoc=xmlhttp.responseXML;
		/* "duration" is read default duration time to change between VRML scenes. */
		duration = xmlDoc.getElementsByTagName("Duration-default")[0].childNodes[0].nodeValue;
		/* "pagename" is read "Page-name" from XML file, It's a name of VRML scenes list. */
		pagename = xmlDoc.getElementsByTagName("Page-name")[0].childNodes[0].nodeValue;
		x = xmlDoc.getElementsByTagName("Entry");

		/*
		 *	displayData()
		 *	===== Description =====
		 *	This function is used to read data from XML file.
		 *	It's must start at 0 for read from first data from XML file. (x[0])
		 *	(For this case, Define valiable "i" for progress -> i = 0;
		 *
		 *	===== Data Appear =====
		 *	1. VRML Scene
		 *	2. Information of VRML Scene that's appearing. And next 2 VRML Scenes that will appear.
		 */
		var i = 0;
		function displayData()
		{
			title = (x[i].getElementsByTagName("Title")[0].childNodes[0].nodeValue);
			author = (x[i].getElementsByTagName("Author")[0].childNodes[0].nodeValue);
			link = (x[i].getElementsByTagName("Link")[0].childNodes[0].nodeValue);
			vrmldata = "<embed width='100%' height='320px' name='vrml_conformance' src='" + link + "' type='model/vrml'></embed>";
			txt = "<div class='hp_info-main'>" + title + " by " + author + "</div>";
			document.getElementById("showData").innerHTML = vrmldata + txt;
		}
		
		/*	
		 *	setInterval()
		 *	===== Description =====
		 *	This function is related with displayData() function.
		 *	It's used to set a time to change VRML scene to next scene and progress them.
		 *	[Caution!] This function is use jQuery.
		 *	
		 *	===== Progressing =====
		 *	-	i++; is used to go to next scene by use this value and call displayData(); function.
		 *	-	"durationSecond" value is used to multiply (*1000) value from "duration"
		 *		that contained data in "Second" that read from XML data file to "Milli Second" for using in this function.
		 *	-	"$.ajaxSetup({ cache: flase });" is used to clean cache in Internet Explorer (Fix cache problem in IE).
		 */
		var durationSecond = duration * 1000;
		$(document).ready(function() {
			var refreshId = setInterval(function() {
				if (i < x.length - 1) {
					i++;
					displayData();
				}
			}, durationSecond);
			$.ajaxSetup({ cache: false });
		});
	</script>
</head>
<body onload="displayData()">
	<div class="hp_body">
		<script type="text/javascript">
			document.write("<div class='hp_info-name'><h2>" + pagename + "</h2></div>");
		</script>
		<!-- Show VRML Scene and Information of that scene from displayData(); function. -->
		<div id="showData"></div>
	<!-- Footer -->
	<div class="hp_footer">
		<!-- Twitter's Tweet Botton -->	
		<a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="hapztron">Tweet</a>
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<!-- Facebook's Like Botton -->
		<iframe src="http://www.facebook.com/plugins/like.php?app_id=113980695355311&amp;href=http%3A%2F%2Fwww.hapztron.co.nr%2Fvrml-slide&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=lucida+grande&amp;height=60" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:60px;" allowTransparency="true"></iframe>
	</div>
	</div>
</body>
</html>
