<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$myusername=$_GET['username'];

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="Paracocci23#"; // Mysql password
$db_name="joyinfood"; 
$tbl_name="friends"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

// To protect MySQL injection (more detail about MySQL injection)
$myusername=stripslashes($myusername);
$myusername=mysql_real_escape_string($myusername);

$sql="SELECT * FROM $tbl_name WHERE username_user='$myusername'";
$result=mysql_query($sql);

while($row = mysql_fetch_array($result)) {
  echo $row['username_user'] . " " . $row['name'];
  echo " ";
}

?>
