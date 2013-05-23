<?php
	$servername = "localhost";
	$username = "mandmod";
	$pasword = "l[kpfu";
	$dbname = "dbtrain";

	mysql_connect($servername, $username, $pasword);
	mysql_select_db($dbname) or die(mysql_error());
?>