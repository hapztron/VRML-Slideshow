VRML-Slide
=============================

Demo
=============================

Now, Work in progress.
---------

Usage
=============================

VRML-Slide is used to show Web3D VRML scene as slideshow. It is require plug-in to show VRML/X3D scene.

You have to load VRML/X3D plug-in before open this VRML-Slide: BS Contact - http://bitmanagement.com/en/download

Plug-in OS, Browser and file type support
---------

Windows: Internet Explorer, Firefox, Chrome and Opera - VRML/X3D (.wrl/.x3d).

Mac OS X: Safari and Webkit - VRML (.wrl) Only.

Linux: Firefox

Use as slideshow
---------
First. Include 2 JavaScript files to your slide/presentation page.

Example:

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/vrml-slide.js"></script>

Second. Config PATH of your XML file in "vrml-slide.js". Comment in the head of that file will explain to you.

Example:

	var file_url = "data/yourxmlfile.xml";

Third. Prepare your XML file. This file is contain Duration time for each slide, Title of VRML Scene, Author of that file and URL link to VRML scene.

Create XML file in "data" folder or whatever (Config in vmrl-slide.js file).

Example:

	<?xml version="1.0" ?>
	<Playlist>
	
	<Page-name>VRML-Slide</Page-name>
	<Duration-default>5</Duration-default>

	<Entry>
		<Title>BS Metropolis</Title>
		<Author>Hassadee Pimsuwan</Author>
		<Link>testing_files/bs_metro.wrl</Link>
	</Entry>
	<Entry>
		<Title>Sphere Troupe</Title>
		<Author>Hassadee Pimsuwan</Author>
		<Link>testing_files/spheretroupe.wrl</Link>
	</Entry>
	</Playlist>

Forth. Run your VRML/X3D Slide! : )
