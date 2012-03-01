<?
/* I am making a new connection to MySQL on Sulley */

//do not include a .phps file

	$mysqli = new mysqli(localhost, je057831, rice, je057831);
	if($mysqli->error) {
		print "Error connecting! Message:".$mysqli->error;
	}

?>