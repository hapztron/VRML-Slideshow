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

1. Prepare your XML file. This file is contain Duration time for each slide, Title of VRML Scene, Author of that file and URL link to VRML scene.

Create XML file in "data" folder.

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

For next feature. Work in progress.
