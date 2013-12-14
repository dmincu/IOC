<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$myusername=$_GET['username'];
$myfriend=$_GET['myfriend'];

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
$myfriend=stripslashes($myfriend);
$myfriend=mysql_real_escape_string($myfriend);

$sql="DELETE FROM $tbl_name WHERE username_user='$myusername' AND name='$myfriend'";
$result=mysql_query($sql);

echo $result;

?>
