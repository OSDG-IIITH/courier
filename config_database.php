<?php

$hostname = "localhost" // Enter hostname
$username = "Username"; // Enter Username
$password = "Password"; // Enter password
$database = "Database"; // Enter Database

mysql_connect($hostname,$username,$password) or die("unable to connect");
@mysql_select_db($database) or die( "Unable to select database");

?>
