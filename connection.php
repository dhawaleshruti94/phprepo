<?php
$mysql_hostname = "mysql";
$mysql_user = "Shruti";
$mysql_password = "Shruti";
$mysql_database = "sampledb";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
