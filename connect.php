<?php
//database connection
$DBHost = "localhost";
$DBUsername = "root";
$DBPassword = "";
$DBName = "gecc";

$MySQLConnect = mysqli_connect($DBHost, $DBUsername, $DBPassword, $DBName) 
or die('Could not connect'.  $mysqli->connect_errno);
	

$DBSelect = mysqli_select_db($MySQLConnect, $DBName);
?>