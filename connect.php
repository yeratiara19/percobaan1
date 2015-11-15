<?php
//sesuaikan dengan properties database di azure
$hostname = "us-cdbr-azure-central-a.cloudapp.net";
$username = "bfb7683b3a8f37";
$password = "d2e5def4";
$database_name = "dabase";

$conn = mysql_connect($hostname,$username, $password)
		or die ("Error menghubungkan ke host database");
$db = mysql_select_db($database_name)
		or die ("Error menghubungkan ke database);
?>