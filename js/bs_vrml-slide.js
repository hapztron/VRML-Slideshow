/*
 *	You just edit the valiable below this line.
 *	Example:
 *	var file_url = "<your_path_and_file.xml>";
 *
 */

var file_url = "data/vrml_conformance.xml";

/* ====================================================================================================================================================== */
/* ====================================================================================================================================================== */
/* ====================================================================================================================================================== */
if (window.XMLHttpRequest) {
	/* Code for IE7+, Firefox, Chrome, Opera and Safari */
	xmlhttp=new XMLHttpRequest();
} else {
	/* Code for IE6, IE5 */
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.open("GET",file_url,false);
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
	info = "<div class='hp_info-main'>" + title + " - " + author + "</div>";
	document.getElementById("showData").innerHTML = vrmldata + info;
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
