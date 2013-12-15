<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$myusername= $_COOKIE['user'];

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="joyinfood"; 
$tbl_name="sesiuni"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

// To protect MySQL injection (more detail about MySQL injection)
$myusername=stripslashes($myusername);
$myusername=mysql_real_escape_string($myusername);

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

while($row = mysql_fetch_array($result)) {
  echo $row['nume'];
  echo " ";
}

?>
