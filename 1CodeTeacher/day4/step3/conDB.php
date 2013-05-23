<?php
$servername = "localhost";
$username   = "admin";
$password   = "1234";
$dbname     = "dbtrain";
mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die(mysql_error());

//set for thai language
mysql_query("set names utf8");
?>