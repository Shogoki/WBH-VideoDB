 <?php
	//$videos = "";
	$mp4DB = './videoarchive.xml';
	if(file_exists($mp4DB))
	{
		$XMLobject = file_get_contents($mp4DB, FILE_USE_INCLUDE_PATH);
		$videos = new SimpleXMLElement($XMLobject);	
	}
	else
	{
		//$videos = "ERROR";
		echo "Error: Could not load Video Archive";
	}
?>