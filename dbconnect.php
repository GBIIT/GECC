<?php  

$dbserver = "127.0.0.1";
$dbuser = "root";
$dbpassword = "";
$dbname = "gecc";

$db = new mysqli($dbserver, $dbuser, $dbpassword, $dbname) or die("Error connection to database");
?>