<?php
	
require_once 'load_videoarchive.php';
echo '<table class="mp4-table" ><tr>';
//displaying nice Headers

$headermap = array();
$headermap['TITLE'] = "Titel";
$headermap['AUTHOR'] = "Autor";
$headermap['DESCRIPTION'] = "Beschreibung";
$headermap['LANGUAGE'] = "Sprache";
$headermap['YEAR'] = "Erscheinungsjahr";
//printing header row
foreach($headermap as $header)
	echo "<th>".$header."</th>";
/*foreach($videos->VIDEO[0] as $key => $value)
		echo "<th>".$key."</th>";*/

echo "<th>Abspielen</th></tr>";
foreach($videos as $vid)
{
	echo "<tr>";
	foreach($headermap as $key => $header)
	{
			echo "<td>".$vid->$key."</td>";
	}
		echo '<td><a href="./startVideo.php?video='.$vid['id'].'" target="_blank" onclick="window.open(this.href,this.target,\'width=640,height=480,resizeable=no\'); return false;" >Video abspielen!</a></td></tr>';
}
echo "</table>";
		
?>
