<?php
require_once 'inc/load_videoarchive.php';

if(isset($_GET['video']))
{
	$ID = htmlspecialchars($_GET['video']);
	$selectedVideo = $videos->xpath("//VIDEO[@id='".$ID."']");
	if(empty($selectedVideo))
		echo "Error: Video not found!";
	else
	{
		$Videopath = "archive/".$selectedVideo[0]->FILENAME;
		
		echo "<h3>"  .$selectedVideo[0]->TITLE . "</h3>";
		echo '<video autoplay  autobuffer controls><source src="'.$Videopath.'" type="video/mp4">
		<div>Ihr Browser unterstützt leider kein HTML5. Bitte nutzen Sie einen aktuellen Browser mit HTML5-Unterstütung um das Video abzuspielen.</div></video>';
	}
}
else
	echo "Error: No Video specified";
?>