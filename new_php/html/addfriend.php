<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$user = $_GET['username'];

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="Paracocci23#"; // Mysql password
$db_name="joyinfood"; 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

echo $user

?>
