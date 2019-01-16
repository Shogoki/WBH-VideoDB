<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MP4-Archiv</title>
<link rel="stylesheet" href="mp4style.css">
</head>
<body>
	<header>
		<h1>MP4-Video Archiv</h1>
		<h2 class="running" >All Ihre MP4 Videos gut archiviert</h2>
	</header>
	<div id="mainweb">
	<aside id="sidemenu">
		<h3>Menü</h3>
		<list>
		<li><a href="./" ><img alt="Home" src="img/button_home.png" /></a></li>
		<li><a href="./?action=db" ><img alt="Video-DB" src="img/button_video-datenbank.png" /> </a></li>
		<li><a href="./?action=imp" ><img alt="Impressum" src="img/button_impressum.png" /> </a></li>
		</list>
	
	</aside>
	<section>
	<?php
	//Checking if we have an action specified via GET
		if(isset($_GET['action']))
		{
			if(htmlspecialchars($_GET['action'] == "db"))
				include 'inc/displayVideoArchiveTable.php';
			elseif(htmlspecialchars($_GET['action'] == "imp"))
				include 'inc/impressum.html';
		}
		else 
			include "inc/home.html"
	?>
	</section>
	</div>
	<footer id="footelement">
		<span class="left">Version: 1.0</span>
		<span class="right">Autor: Sven Kraus (Matrikelnr.: 893511)</span>
	</footer>
	
</body>
</html>
